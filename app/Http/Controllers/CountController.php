<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CountController extends Controller
{
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $counts = \DB::table('inventorycounts')
                ->join('users', 'inventorycounts.created_by', '=', 'users.id')
                ->select('inventorycounts.*', 'users.name as username')
                ->where([
                    ['inventorycounts.editable','=',false],
                    ['inventorycounts.store_id','=',\Auth::user()->store_id]
                    ])
                ->get();

        return view('inventorycounts.index',compact('counts'));
    }

     public function supplierselect()
    {
        $suppliers = \App\Supplier::all();

        return view('inventorycounts.supplierselect',compact('suppliers'));
    }

    public function supplierselected(Request $request)
    {
        $countsupplier = request('countsupplier');
        $request->session()->put('countsupplier', $countsupplier);

        return redirect('../inventorycounts/create');
    }

    public function saved() {
        $counts = \DB::table('inventorycounts')
                ->join('users', 'inventorycounts.created_by', '=', 'users.id')
                ->select('inventorycounts.*', 'users.name as username')
                ->where([
                    ['inventorycounts.editable','=',true],
                    ['inventorycounts.store_id','=',\Auth::user()->store_id]
                    ])
                ->get();

        return view('inventorycounts.saved',compact('counts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $countsuppliers = $request->session()->get('countsupplier');
        error_log(print_r($countsuppliers,true));
        if(in_array('0',$countsuppliers)) {
            $items = \DB::table('items_stores')
            ->join('items','items.id','=','items_stores.item_id')
            ->join('suppliers','suppliers.id','=','items.supplier_id')
            ->where('items_stores.store_id','=',\Auth::user()->store_id)
            ->orderBy('items.name')
            ->select('items.name as name','items.*','items_stores.*','suppliers.name as supplier','items.category_id as category')
            ->get();
        } else {
            $items = \DB::table('items_stores')
            ->join('items','items.id','=','items_stores.item_id')
            ->join('suppliers','suppliers.id','=','items.supplier_id')
            ->where([
                ['items_stores.store_id','=',\Auth::user()->store_id]
                ])
            ->whereIn('items.supplier_id', $countsuppliers)
            ->orderBy('items.name')
            ->select('items.name as name','items.*','items_stores.*','suppliers.name as supplier','items.category_id as category')
            ->get();
        }
        
        
        $categoryids = [];

        foreach($items as $item) {
            array_push($categoryids, $item->category);
        }

        $categoryid = array_unique($categoryids);

        $categories = \DB::table('categories')
            ->select('categories.*')
            ->whereNull('categories.deleted_at')
            ->whereIn('id',$categoryids)
            ->orderBy('categories.name')
            ->get();

        //$categories = \App\Category::all();
        return view('inventorycounts.create',compact('items','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $button = request('button');

        $count = new \App\Inventorycount;
        $count->store_id = \Auth::user()->store_id;
        $count->created_by = \Auth::user()->id;
        $count->created_at = Carbon::now();
        $count->updated_at = Carbon::now();
        $count->total_value_onhand = 0;

        if($button === 'save') {
             $count->editable = true;
        } else {
            $count->editable = false;
        }

        $count->save();

        $countid = $count->id;
        //error_log('count id '. $countid);

        $items = \App\Item::all();
        $numItems = $items->count();
        $totaldollars = 0;

        for($i=1;$i<=$numItems;$i++) {
           $stringi = (string)$i;
           $itemid = request('item'.$stringi);
           $quantity = request('qty'.$stringi); 

           //error_log('qty '. $quantity);

           if($quantity != '') {
                $item = \App\Item::find($itemid);

                $invdollars = ($quantity * $item->cost);
                $totaldollars += $invdollars;

                //error_log($invdollars);

                $item->inventorycounts()->attach($countid,
                    ['inventorycount_qty' => $quantity,'inventory_dollar_amount' => $invdollars,'created_at' => Carbon::now(),'updated_at' => Carbon::now()]
                );
            }
           
        }

        $count2 = \App\Inventorycount::find($countid);
        $count2->total_value_onhand = $totaldollars;
        $count2->save();

    if($count2->editable === false) {
        //Calculate Demand
            $allitems = \App\Item::all();
            $thisweek = Carbon::today()->startOfWeek();
            $lastweek = Carbon::today()->startOfWeek()->subDays(7);
            $countitems = \DB::table('items_inventorycounts')
                ->where([
                    ['inventorycount_id','=',$countid],
                ])
                ->get();
            $countitemids = [];
            foreach($countitems as $countitem) {
                array_push($countitemids,$countitem->item_id);
            }

        foreach($allitems as $allitem) {
            //$count2 == current count
            error_log('Item: '. $allitem->id);
            //If item is part of count
            if(in_array($allitem->id,$countitemids)) {

                //Get most recent previous count (for this item) before the one that was just created
                $prevcount1 = \DB::table('items_inventorycounts')
                     ->join('inventorycounts','inventorycounts.id','=','items_inventorycounts.inventorycount_id')
                    ->where([
                        ['items_inventorycounts.item_id','=',$allitem->id],
                        ['inventorycounts.store_id','=',\Auth::user()->store_id]
                        ])
                    ->select('items_inventorycounts.*')
                    ->orderBy('items_inventorycounts.updated_at','desc')
                    ->skip(1)
                    ->take(1)
                    ->get();

                //Grab the count (for this item) that was just created
                $newcount1 = \DB::table('items_inventorycounts')
                     ->join('inventorycounts','inventorycounts.id','=','items_inventorycounts.inventorycount_id')
                    ->where([
                        ['items_inventorycounts.item_id','=',$allitem->id],
                        ['inventorycounts.store_id','=',\Auth::user()->store_id]
                        ])
                    ->select('items_inventorycounts.*')
                    ->orderBy('items_inventorycounts.updated_at','desc')
                    ->first();

                    error_log('newcount1:'.print_r($newcount1,true));
                    error_log('prevcount1:' . print_r($prevcount1,true));

                    //If previous count exists
                    if(\DB::table('items_inventorycounts')
                     ->join('inventorycounts','inventorycounts.id','=','items_inventorycounts.inventorycount_id')
                    ->where([
                        ['items_inventorycounts.item_id','=',$allitem->id],
                        ['inventorycounts.store_id','=',\Auth::user()->store_id]
                        ])
                    ->orderBy('items_inventorycounts.updated_at','desc')
                    ->skip(1)
                    ->exists()) {

                        //Grab counts in a way that allows us to use the date
                        $prevcountid = $prevcount1[0]->id;
                        $prevcount = \App\Iteminventorycount::find($prevcountid);
                        $newcountid = $newcount1->id;
                        $newcount = \App\Iteminventorycount::find($newcountid);
                        error_log('newcount id and result:' . $newcountid . $newcount);
                        error_log('prevcount: ' . $prevcount);
                        
                        //Grab the dates of the counts
                        $newcountdate = $newcount->updated_at;
                        $prevcountdate = $prevcount->updated_at->startOfDay();
                        $firstweekdateget = $prevcount->updated_at->startOfDay();
                        error_log('newcountdate: '. $newcountdate);
                        error_log('prevcountdate: '. $prevcountdate);
                        
                        // Find the total difference between the days
                        $totaldays = date_diff($newcountdate,$prevcountdate)->d;
                        if($totaldays === 0) {
                            $totaldays = 1;
                        }
                        error_log('totaldays: ' . $totaldays);
                        
                        //And any quantity that was received in between those dates    
                        $invoicedqty = \DB::table('items_invoices')
                            ->join('invoices','invoices.id','=','items_invoices.invoice_id')
                            ->where([
                                    ['items_invoices.updated_at','<=',$newcountdate],
                                    ['items_invoices.updated_at','>=',$prevcount->updated_at],
                                    ['invoices.store_id','=',\Auth::user()->store_id],
                                    ['items_invoices.item_id','=',$allitem->id]
                                ])
                            ->get();
                        
                        error_log('invoicedqty: '. $invoicedqty);
                        
                        if($prevcountdate->dayOfWeek === 1) {
                            $weekcounter = 0;
                        } else {
                            $weekcounter = 1;
                        }
                        
                        $totalinvoiceamount = 0;
                        $totalweight = 0;
                        
                        $weekweights = array();
                        $weekstarts = array();
                        $weekdemands = array();

                        if(\DB::table('items_invoices')
                            ->join('invoices','invoices.id','=','items_invoices.invoice_id')
                            ->where([
                                    ['items_invoices.updated_at','<=',$newcountdate],
                                    ['items_invoices.updated_at','>=',$prevcountdate],
                                    ['invoices.store_id','=',\Auth::user()->store_id],
                                    ['items_invoices.item_id','=',$allitem->id]
                                ])
                            ->exists()){
                                foreach($invoicedqty as $qty) {
                                    $totalinvoiceamount += $qty->invoice_qty;
                                }
                            }



                        $totaldemand = $prevcount->inventorycount_qty + $totalinvoiceamount - $newcount->inventorycount_qty;
                        error_log('total demand: '.$totaldemand);
                       
                       

                       $firstweekstart = date_timestamp_get($firstweekdateget->startOfWeek());
                       error_log('firstweekstart: '. $firstweekstart);
                       array_push($weekstarts,$firstweekstart);
                       
                       error_log('after start of week:' . $prevcountdate);

                        if($totaldays > 0) {
                            for($date = $prevcountdate;$date <= $newcountdate; $date->addDay()) {
                                $day = $date->dayOfWeek;
                                error_log('date: '.$date);
                                error_log('day: '.$day);
                                if($day === 1) {
                                    $weekcounter += 1;
                                    $weight = .1093;
                                    $totalweight += $weight;
                                    $weekweights[$weekcounter] = $weight;
                                    $timestamp = date_timestamp_get($date);
                                    array_push($weekstarts,$timestamp);
                                } elseif ($day === 2) {
                                    $weight = .1128;
                                    $totalweight += $weight;
                                    if(array_key_exists($weekcounter,$weekweights)){
                                        $weekweights[$weekcounter] += $weight;
                                    } else {
                                        $weekweights[$weekcounter] = $weight;
                                    }
                                } elseif ($day === 3) {
                                    $weight = .1228;
                                    $totalweight += $weight;
                                    if(array_key_exists($weekcounter,$weekweights)){
                                        $weekweights[$weekcounter] += $weight;
                                    } else {
                                        $weekweights[$weekcounter] = $weight;
                                    }
                                } elseif ($day === 4) {
                                    $weight = .1215;
                                    $totalweight += $weight;
                                    if(array_key_exists($weekcounter,$weekweights)){
                                        $weekweights[$weekcounter] += $weight;
                                    } else {
                                        $weekweights[$weekcounter] = $weight;
                                    }
                                } elseif ($day === 5) {
                                    $weight = .1815;
                                    $totalweight += $weight;
                                    if(array_key_exists($weekcounter,$weekweights)){
                                        $weekweights[$weekcounter] += $weight;
                                    } else {
                                        $weekweights[$weekcounter] = $weight;
                                    }
                                } elseif ($day === 6) {
                                    $weight = .2054;
                                    $totalweight += $weight;
                                    if(array_key_exists($weekcounter,$weekweights)){
                                        $weekweights[$weekcounter] += $weight;
                                    } else {
                                        $weekweights[$weekcounter] = $weight;
                                    }
                                } elseif ($day === 0) {
                                    $weight = .1467;
                                    $totalweight += $weight;
                                    if(array_key_exists($weekcounter,$weekweights)){
                                        $weekweights[$weekcounter] += $weight;
                                    } else {
                                        $weekweights[$weekcounter] = $weight;
                                    }
                                }
                            }

                        $weekstarts = array_unique($weekstarts);
                        $weekstartsfinal = array_values($weekstarts);

                        error_log('number weeks: ' . $weekcounter);
                        error_log('weekstartsfinal: ' . print_r($weekstartsfinal,true));
                        error_log('weekweights: ' . print_r($weekweights,true));
                        error_log('total weight: '. $totalweight);

                        for($i=0;$i<count($weekstarts);$i++) {
                            $weekdemands[$weekstartsfinal[$i]] = round($totaldemand * ($weekweights[($i+1)]/$totalweight));
                        }
                        error_log('week demands:' . print_r($weekdemands,true));

                        foreach ($weekdemands as $week => $demand) {
                        //Previous Record Exists
                            $weekconverted = date("Y-m-d H:i:s",$week);
                            error_log('weekconverted: '.$weekconverted);

                            if(\DB::table('items_demand')
                            ->where([
                                ['item_id','=',$allitem->id],
                                ['store_id','=',\Auth::user()->store_id],
                                ['week','=',$weekconverted]
                            ])
                            ->exists()) {

                                error_log('Updating existing record');
                                $update = \DB::table('items_demand')
                                ->where([
                                    ['item_id','=',$allitem->id],
                                    ['store_id','=',\Auth::user()->store_id],
                                    ['week','=',$weekconverted]
                                ])
                                ->first();

                                $updateid = $update->id;
                                $saveupdate = \App\Item_Demand::find($updateid);
                                $saveupdate->demand += $demand;
                                $saveupdate->save();
                        
                            } else {
                                error_log('New record');
                                $newrecord = new \App\Item_Demand;
                                $newrecord->week = $weekconverted;
                                $newrecord->item_id = $allitem->id;
                                $newrecord->store_id = \Auth::user()->store_id;
                                $newrecord->demand = $demand;
                                $newrecord->save();
                            }   
                         } //Foreach week
                    } //If there are more than 0 days beween counts
                } // Previous count exists (close) 
            } //If item part of count   
        } //Foreach item     
    }
        return redirect('/inventorycounts');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $count = \App\Inventorycount::find($id);

        $categories = [];

        $suppliers = [];
        
        $items = \DB::table('items_inventorycounts')
                ->join('inventorycounts', 'items_inventorycounts.inventorycount_id', '=', 'inventorycounts.id')
                ->join('items', 'items_inventorycounts.item_id','=','items.id')
                ->join('suppliers', 'items.supplier_id','=','suppliers.id')
                ->join('uoms', 'items.uom_id','=','uoms.id')
                ->join('users', 'inventorycounts.created_by','=','users.id')
                ->join('categories','items.category_id','=','categories.id')
                ->select('items_inventorycounts.*', 'users.name as username','suppliers.name as supplier','uoms.unit as uom','items.name as itemname','categories.name as category','items.cost as cost')
                ->where([
                    ['items_inventorycounts.inventorycount_id','=',$id],
                ])
                ->get();
        
        foreach ($items as $item) {
            array_push($categories,$item->category);
            array_push($suppliers,$item->supplier);
        }

        $categories = array_unique($categories);
        $suppliers = array_unique($suppliers);

        return view('inventorycounts.show',compact('count','items','categories','suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $count = \App\Inventorycount::find($id);
        $items = \DB::table('items_stores')
            ->join('items','items.id','=','items_stores.item_id')
            ->join('suppliers','suppliers.id','=','items.supplier_id')
            ->where('items_stores.store_id','=',\Auth::user()->store_id)
            ->orderBy('items.name')
            ->select('items.name as name','items.*','items_stores.*','suppliers.name as supplier')
            ->get();

        $counteditems = \DB::table('items_inventorycounts')
            ->join('items','items_inventorycounts.item_id','=','items.id')
            ->join('categories','items.category_id','=','categories.id')
            ->join('suppliers','items.supplier_id','=','suppliers.id')
            ->where('items_inventorycounts.inventorycount_id','=',$id)
            ->select('items_inventorycounts.*','categories.name as categoryname','suppliers.name as suppliername','items.name as itemname')
            ->get();

        error_log($id);
        error_log($counteditems);

        $categories = \App\Category::all();
        $categoriesused = [];
        $suppliersused = [];
        $counteditemIds = [];

        foreach($counteditems as $counteditem) {
            array_push($counteditemIds,$counteditem->item_id);
            array_push($categoriesused,$counteditem->categoryname);
            array_push($suppliersused,$counteditem->suppliername);
        }

        $categoriesused = array_unique($categoriesused);
        $suppliersused = array_unique($suppliersused);

        return view('inventorycounts.edit',compact('count','items','counteditems','counteditemIds','categories','suppliersused','categoriesused'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $button = request('button');
        $count = \App\Inventorycount::find($id);
       
        $count->created_by = \Auth::user()->id;
        $count->updated_at = Carbon::now();

        if($button === 'save') {
            $count->editable = true;
        } else {
            $count->editable = false;
        }

        $count->save();

        //error_log('count id '. $countid);

        $counteditems = \DB::table('items_inventorycounts')
            ->where([
                ['items_inventorycounts.inventorycount_id','=',$id]
                ])
            ->get();

       $originalrecords = [];

        foreach ($counteditems as $counteditem) {
            array_push($originalrecords, $counteditem->id);
        }

        $itemIds = [];

        $items = \App\Item::all();

        foreach($items as $item) {
            array_push($itemIds, $item->id);
        }

        $totaldollars = 0;

        foreach($itemIds as $itemId) {
          // error_log($itemId);
           $stringi = (string)$itemId;
           $itemfind = request('item'.$stringi);
          // error_log('item'.$itemId);
          // error_log('itemfind: ' .$itemfind);

           $quantity = request('qty'.$stringi);
          // error_log('qty'.$stringi);
          // error_log('quantity: ' .$quantity); 


           if($quantity != '') {
                //error_log('quantity not blank');

                $item = \App\Item::find($itemfind);
                //error_log('item is: ' .$item);

                $countdollars = ($quantity * $item->cost);
                $totaldollars += $countdollars;

                //error_log('orderdollars: '.$orderdollars);

                $item->inventorycounts()->attach($id,
                    ['inventorycount_qty' => $quantity,'inventory_dollar_amount' => $countdollars,'created_at' => Carbon::now(),'updated_at' => Carbon::now()]
                );
            }
           
        }

        foreach($originalrecords as $originalrecord) {
            //error_log('Delete record with id: '. $originalrecord);
            $deleterecord = \DB::table('items_inventorycounts')
                ->where('id','=',$originalrecord)
                ->delete();
        }
        
        $count2 = \App\Inventorycount::find($id);
        $count2->total_value_onhand = $totaldollars;
        //error_log('totaldollars: '.$orderdollars);

        $count2->save();

        if($count2->editable === false) {
        //Calculate Demand
            $allitems = \App\Item::all();
            $thisweek = Carbon::today()->startOfWeek();
            $lastweek = Carbon::today()->startOfWeek()->subDays(7);
            $countitems = \DB::table('items_inventorycounts')
                ->where([
                    ['inventorycount_id','=',$id],
                ])
                ->get();
            $countitemids = [];
            foreach($countitems as $countitem) {
                array_push($countitemids,$countitem->item_id);
            }

        foreach($allitems as $allitem) {
            //$count2 == current count
            error_log('Item: '. $allitem->id);
            //If item is part of count
            if(in_array($allitem->id,$countitemids)) {

                //Get most recent previous count (for this item) before the one that was just created
                $prevcount1 = \DB::table('items_inventorycounts')
                     ->join('inventorycounts','inventorycounts.id','=','items_inventorycounts.inventorycount_id')
                    ->where([
                        ['items_inventorycounts.item_id','=',$allitem->id],
                        ['inventorycounts.store_id','=',\Auth::user()->store_id]
                        ])
                    ->select('items_inventorycounts.*')
                    ->orderBy('items_inventorycounts.updated_at','desc')
                    ->skip(1)
                    ->take(1)
                    ->get();

                //Grab the count (for this item) that was just created
                $newcount1 = \DB::table('items_inventorycounts')
                     ->join('inventorycounts','inventorycounts.id','=','items_inventorycounts.inventorycount_id')
                    ->where([
                        ['items_inventorycounts.item_id','=',$allitem->id],
                        ['inventorycounts.store_id','=',\Auth::user()->store_id]
                        ])
                    ->select('items_inventorycounts.*')
                    ->orderBy('items_inventorycounts.updated_at','desc')
                    ->first();

                    error_log('newcount1:'.print_r($newcount1,true));
                    error_log('prevcount1:' . print_r($prevcount1,true));

                    //If previous count exists
                    if(\DB::table('items_inventorycounts')
                     ->join('inventorycounts','inventorycounts.id','=','items_inventorycounts.inventorycount_id')
                    ->where([
                        ['items_inventorycounts.item_id','=',$allitem->id],
                        ['inventorycounts.store_id','=',\Auth::user()->store_id]
                        ])
                    ->orderBy('items_inventorycounts.updated_at','desc')
                    ->skip(1)
                    ->exists()) {

                        //Grab counts in a way that allows us to use the date
                        $prevcountid = $prevcount1[0]->id;
                        $prevcount = \App\Iteminventorycount::find($prevcountid);
                        $newcountid = $newcount1->id;
                        $newcount = \App\Iteminventorycount::find($newcountid);
                        error_log('newcount id and result:' . $newcountid . $newcount);
                        error_log('prevcount: ' . $prevcount);
                        
                        //Grab the dates of the counts
                        $newcountdate = $newcount->updated_at;
                        $prevcountdate = $prevcount->updated_at->startOfDay();
                        $firstweekdateget = $prevcount->updated_at->startOfDay();
                        error_log('newcountdate: '. $newcountdate);
                        error_log('prevcountdate: '. $prevcountdate);
                        
                        // Find the total difference between the days
                        $totaldays = date_diff($newcountdate,$prevcountdate)->d;
                        if($totaldays === 0) {
                            $totaldays = 1;
                        }
                        error_log('totaldays: ' . $totaldays);
                        
                        //And any quantity that was received in between those dates    
                        $invoicedqty = \DB::table('items_invoices')
                            ->join('invoices','invoices.id','=','items_invoices.invoice_id')
                            ->where([
                                    ['items_invoices.updated_at','<=',$newcountdate],
                                    ['items_invoices.updated_at','>=',$prevcount->updated_at],
                                    ['invoices.store_id','=',\Auth::user()->store_id],
                                    ['items_invoices.item_id','=',$allitem->id]
                                ])
                            ->get();
                        
                        error_log('invoicedqty: '. $invoicedqty);
                        
                        if($prevcountdate->dayOfWeek === 1) {
                            $weekcounter = 0;
                        } else {
                            $weekcounter = 1;
                        }
                        
                        $totalinvoiceamount = 0;
                        $totalweight = 0;
                        
                        $weekweights = array();
                        $weekstarts = array();
                        $weekdemands = array();

                        if(\DB::table('items_invoices')
                            ->join('invoices','invoices.id','=','items_invoices.invoice_id')
                            ->where([
                                    ['items_invoices.updated_at','<=',$newcountdate],
                                    ['items_invoices.updated_at','>=',$prevcountdate],
                                    ['invoices.store_id','=',\Auth::user()->store_id],
                                    ['items_invoices.item_id','=',$allitem->id]
                                ])
                            ->exists()){
                                foreach($invoicedqty as $qty) {
                                    $totalinvoiceamount += $qty->invoice_qty;
                                }
                            }



                        $totaldemand = $prevcount->inventorycount_qty + $totalinvoiceamount - $newcount->inventorycount_qty;
                        error_log('total demand: '.$totaldemand);
                       
                       
                       $firstweekstart = date_timestamp_get($firstweekdateget->startOfWeek());
                       error_log('firstweekstart: '. $firstweekstart);
                       array_push($weekstarts,$firstweekstart);


                        if($totaldays > 0) {
                            for($date = $prevcountdate;$date <= $newcountdate; $date->addDay()) {
                                $day = $date->dayOfWeek;
                                error_log('date: '.$date);
                                error_log('day: '.$day);
                                if($day === 1) {
                                    $weekcounter += 1;
                                    $weight = .1093;
                                    $totalweight += $weight;
                                    $weekweights[$weekcounter] = $weight;
                                    $timestamp = date_timestamp_get($date);
                                    array_push($weekstarts,$timestamp);
                                } elseif ($day === 2) {
                                    $weight = .1128;
                                    $totalweight += $weight;
                                    if(array_key_exists($weekcounter,$weekweights)){
                                        $weekweights[$weekcounter] += $weight;
                                    } else {
                                        $weekweights[$weekcounter] = $weight;
                                    }
                                } elseif ($day === 3) {
                                    $weight = .1228;
                                    $totalweight += $weight;
                                    if(array_key_exists($weekcounter,$weekweights)){
                                        $weekweights[$weekcounter] += $weight;
                                    } else {
                                        $weekweights[$weekcounter] = $weight;
                                    }
                                } elseif ($day === 4) {
                                    $weight = .1215;
                                    $totalweight += $weight;
                                    if(array_key_exists($weekcounter,$weekweights)){
                                        $weekweights[$weekcounter] += $weight;
                                    } else {
                                        $weekweights[$weekcounter] = $weight;
                                    }
                                } elseif ($day === 5) {
                                    $weight = .1815;
                                    $totalweight += $weight;
                                    if(array_key_exists($weekcounter,$weekweights)){
                                        $weekweights[$weekcounter] += $weight;
                                    } else {
                                        $weekweights[$weekcounter] = $weight;
                                    }
                                } elseif ($day === 6) {
                                    $weight = .2054;
                                    $totalweight += $weight;
                                    if(array_key_exists($weekcounter,$weekweights)){
                                        $weekweights[$weekcounter] += $weight;
                                    } else {
                                        $weekweights[$weekcounter] = $weight;
                                    }
                                } elseif ($day === 0) {
                                    $weight = .1467;
                                    $totalweight += $weight;
                                    if(array_key_exists($weekcounter,$weekweights)){
                                        $weekweights[$weekcounter] += $weight;
                                    } else {
                                        $weekweights[$weekcounter] = $weight;
                                    }
                                }
                            }

                        $weekstarts = array_unique($weekstarts);
                        $weekstartsfinal = array_values($weekstarts);

                        error_log('number weeks: ' . $weekcounter);
                        error_log('weekstartsfinal: ' . print_r($weekstartsfinal,true));
                        error_log('weekweights: ' . print_r($weekweights,true));
                        error_log('total weight: '. $totalweight);

                        for($i=0;$i<count($weekstarts);$i++) {
                            $weekdemands[$weekstartsfinal[$i]] = round($totaldemand * ($weekweights[($i+1)]/$totalweight));
                        }
                        error_log('week demands:' . print_r($weekdemands,true));

                        foreach ($weekdemands as $week => $demand) {
                        //Previous Record Exists
                            $weekconverted = date("Y-m-d H:i:s",$week);
                            error_log('weekconverted: '.$weekconverted);

                            if(\DB::table('items_demand')
                            ->where([
                                ['item_id','=',$allitem->id],
                                ['store_id','=',\Auth::user()->store_id],
                                ['week','=',$weekconverted]
                            ])
                            ->exists()) {

                                error_log('Updating existing record');
                                $update = \DB::table('items_demand')
                                ->where([
                                    ['item_id','=',$allitem->id],
                                    ['store_id','=',\Auth::user()->store_id],
                                    ['week','=',$weekconverted]
                                ])
                                ->first();

                                $updateid = $update->id;
                                $saveupdate = \App\Item_Demand::find($updateid);
                                $saveupdate->demand += $demand;
                                $saveupdate->save();
                        
                            } else {
                                error_log('New record');
                                $newrecord = new \App\Item_Demand;
                                $newrecord->week = $weekconverted;
                                $newrecord->item_id = $allitem->id;
                                $newrecord->store_id = \Auth::user()->store_id;
                                $newrecord->demand = $demand;
                                $newrecord->save();
                            }   
                         } //Foreach week
                    } //If there are more than 0 days beween counts
                } // Previous count exists (close) 
            } //If item part of count   
        } //Foreach item     
    }

        return redirect('/inventorycounts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = \App\Inventorycount::find($id);
        $count->delete();
        return redirect('/inventorycounts');
    }
}
