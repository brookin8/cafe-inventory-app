<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class InventoryCountController extends Controller
{
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
                ->where('inventorycounts.editable','=',false)
                ->get();

        return view('inventorycounts.index',compact('counts'));
    }

    public function saved() {
        $counts = \DB::table('inventorycounts')
                ->join('users', 'inventorycounts.created_by', '=', 'users.id')
                ->select('inventorycounts.*', 'users.name as username')
                ->where('inventorycounts.editable','=',true)
                ->get();

        return view('inventorycounts.saved',compact('counts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = \App\Item::all();
        return view('inventorycounts.create',compact('items'));
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

                $invdollars = (int)($quantity * $item->cost);
                $totaldollars += $invdollars;

                error_log($invdollars);

                $item->inventorycounts()->attach($countid,
                    ['inventorycount_qty' => $quantity,'inventory_dollar_amount' => $invdollars,'created_at' => Carbon::now(),'updated_at' => Carbon::now()]
                );
            }
           
        }

        $count2 = \App\Inventorycount::find($countid);
        $count2->total_value_onhand = $totaldollars;
        $count2->save();

        

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
        $items = \App\Item::all();
        $counteditems = \DB::table('items_inventorycounts')
            ->where('items_inventorycounts.inventorycount_id','=',$id)
            ->select('items_inventorycounts.*')
            ->get();

        $counteditemIds = [];

        foreach($counteditems as $counteditem) {
            array_push($counteditemIds,$counteditem->item_id);
        }

        return view('inventorycounts.edit',compact('count','items','counteditems','counteditemIds'));
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

                $countdollars = (int)($quantity * $item->cost);
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
        //
    }
}
