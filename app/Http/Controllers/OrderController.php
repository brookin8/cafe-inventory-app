<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
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
        $orders = \DB::table('orders')
                ->join('users', 'orders.created_by', '=', 'users.id')
                ->join('suppliers', 'orders.supplier_id','=','suppliers.id')
                ->where('orders.store_id','=',\Auth::user()->store_id)
                ->select('orders.*', 'users.name as username','suppliers.name as supplier')
                ->get();

       

        return view('orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function supplierselect()
    {
        $suppliers = \App\Supplier::all();

        return view('orders.supplierselect',compact('suppliers'));
    }

    public function supplierselected(Request $request)
    {
        $supplier = request('supplier');
        $request->session()->put('supplier', $supplier);

        return redirect('../orders/create');
    }


    public function create(Request $request)
    {   

        $supplierId = $request->session()->get('supplier');
        $supplier = \App\Supplier::find($supplierId);
        $store = \Auth::user()->store_id;
        $today = Carbon::today();
        $deliverydate = Carbon::today();
        $deliverydate->addDays($supplier->lead_time_days);
        $countstart = Carbon::now()->subDays(2);
        $categoryids=[];
        $itemids=[];
        $itemswithpars = [];
        $itemswithonhand = [];
        
        $pars = \DB::table('items_stores')
            ->where('store_id','=',$store)
            ->select('items_stores.*')
            ->orderBy('items_stores.updated_at','desc')
            ->get();

        foreach($pars as $par) {
            array_push($itemswithpars,$par->item_id);
        }

        $items = \DB::table('items')
                ->join('items_stores','items_stores.item_id','=','items.id')
                ->whereNull('items.deleted_at')
                ->where([
                    ['items.supplier_id','=',$supplierId],
                    ['items_stores.store_id','=',\Auth::user()->store_id]
                ])
                ->select('items.*')
                ->orderBy('items.name')
                ->get();

        
        foreach($items as $item) {
            array_push($categoryids, $item->category_id);
            array_push($itemids, $item->id);
        }

        $categoryid = array_unique($categoryids);

        $categories = \DB::table('categories')
            ->select('categories.*')
            ->whereNull('categories.deleted_at')
            ->whereIn('id',$categoryids)
            ->orderBy('categories.name')
            ->get();

        $onhand = \DB::table('items_inventorycounts')
                ->join('inventorycounts','items_inventorycounts.inventorycount_id','=','inventorycounts.id')
                ->select('items_inventorycounts.*')
                ->whereIn('items_inventorycounts.item_id',$itemids)
                ->where([
                    ['inventorycounts.store_id','=',$store],
                    ['inventorycounts.editable','=',false],
                    ['items_inventorycounts.updated_at','<=',Carbon::now()],
                    ['items_inventorycounts.updated_at','>=',$countstart]
                ])
                ->get();

        foreach($onhand as $onhands) {
            array_push($itemswithonhand,$onhands->item_id);
        }

        return view('orders.create',compact('items','supplier','today','deliverydate','categories','pars','itemswithpars','onhand','itemswithonhand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $supplier = request('supplier');
        $button = request('button');

        $order = new \App\Order;
        $order->received = false;
        $order->store_id = \Auth::user()->store_id;
        $order->created_by = \Auth::user()->id;
        $order->created_at = Carbon::now();
        $order->updated_at = Carbon::now();

        $order->supplier_id = $supplier;
        $order->total_order_cost = 0;
        $order->expected_delivery_date = request('deliverydate');
        
        if($button === "save") {
            $order->editable = true;
        } else {
            $order->editable = false;
        }
        

        $order->save();

        $orderid = $order->id;
        //error_log('count id '. $countid);

        $items = \DB::table('items')
            ->where('supplier_id','=',$supplier)
            ->get();

        $numItems = $items->count();
        $totaldollars = 0;

        for($i=1;$i<=$numItems;$i++) {
           $stringi = (string)$i;
           $itemid = request('item'.$stringi);
           $quantity = request('qty'.$stringi); 

           //error_log('qty '. $quantity);

           if($quantity != '') {
                $item = \App\Item::find($itemid);

                $orderdollars = ($quantity * $item->cost);
                $totaldollars += $orderdollars;

                //error_log($orderdollars);

                $item->orders()->attach($orderid,
                    ['order_qty' => $quantity,'orders_dollar_amount' => $orderdollars,'created_at' => Carbon::now(),'updated_at' => Carbon::now()]
                );
            }
           
        }

        $order2 = \App\Order::find($orderid);
        $order2->total_order_cost = $totaldollars;
        $order2->save();

        // Calculate Spend

            // $spendorders = \DB::table('items_orders')
            //     ->join('orders','orders.id','=','items_orders.order_id')
            //     ->where([
            //             ['items_orders.updated_at','<=',$thisweek],
            //             ['items_orders.updated_at','>=',$lastweek],
            //             ['items_orders.is_backordered','=',null],
            //             ['orders.editable','=','false']
            //         ])
            //     ->get();

            //     // print_r($spendorders);

            // $itemspend = array();


            //     //Create associative array to get spend totals for each item
            // foreach ($spendorders as $spendorder) {
            //   $item = $spendorder->item_id;
            //   $spend = $spendorder->orders_dollar_amount;
            //   if(array_key_exists($item,$itemspend)) {
            //     $itemspend[$item] += $spend;  
            //   } else {
            //     $itemspend[$item] = $spend;
            //   }
            // }

            //print_r($itemspend);

        if($order2->editable === false) {
            //error_log('false');
            $thisweek = Carbon::today()->startOfWeek();
            $lastweek = Carbon::today()->startOfWeek()->subDays(7);
            error_log('This: '.$thisweek);
            $today = Carbon::today();

            $orderitems = \DB::table('items_orders')
                 ->where([
                        ['order_id','=',$orderid],
                        ])
                ->get();
            //error_log('orderitems: '. $orderitems);

            $allitems = \DB::table('items')
                ->whereNull('deleted_at')
                ->get();
            //error_log('allitems: '. $allitems);

            $orderitemIds = [];
            // error_log('order item ids:' . $orderitemIds);
            foreach ($orderitems as $orderitem) {
                array_push($orderitemIds,$orderitem->item_id);
                //error_log('Pushing to orderitemIds: ' . $orderitem->item_id);
            }

            //For all items active in the system
            foreach($allitems as $allitem) {
                //If the item already has an existing record in items_spend
                if(\DB::table('items_spend')
                    ->where([
                        ['item_id','=',$allitem->id],
                        ['store_id','=',\Auth::user()->store_id],
                        ['week','>=',$thisweek]
                    ])
                    ->exists()) {
                        //error_log('item: '. $allitem->id);
                        //error_log('item exists in items_spend');

                        $existingspend = \DB::table('items_spend')
                                ->where([
                                    ['item_id','=',$allitem->id],
                                    ['store_id','=',\Auth::user()->store_id],
                                    ['week','>=',$thisweek]
                                ])
                                ->first();

                                error_log('existing spend: ' . $existingspend->spend);
                    //If it is on the order
                        if(in_array($allitem->id,$orderitemIds)) {
                            $addspend = \DB::table('items_orders')
                            ->where([
                                ['order_id','=',$orderid],
                                ['item_id','=',$allitem->id]
                                ])
                                ->first();
                            error_log('addspend: '. $addspend->orders_dollar_amount);
                            
                            $newspend = $existingspend->spend + $addspend->orders_dollar_amount;
                            $updaterecord = \App\Item_Spend::find($existingspend->id);
                            error_log('Update Record: ' . $updaterecord);
                            error_log('New Spend: ' . $newspend);
                            $updaterecord->spend = $newspend;
                            $updaterecord->save();
                        }
                //If there's no record for the item in items_spend
                } else {
                    //error_log('item: '. $allitem->id);
                    //error_log('item does not exist in items_spend');
                    //If it is on the order
                    if(in_array($allitem->id,$orderitemIds)) {
                        $addspend = \DB::table('items_orders')
                            ->where([
                                ['order_id','=',$orderid],
                                ['item_id','=',$allitem->id]
                                ])
                            ->first();
                        $spend = new \App\Item_Spend;
                        $spend->week = $thisweek;
                        $spend->item_id = $allitem->id;
                        $spend->store_id = \Auth::user()->store_id;
                        $spend->spend = $addspend->orders_dollar_amount;
                        $spend->save();
                    //If it is not on the order, set to 0
                    } else {
                        $spend = new \App\Item_Spend;
                        $spend->week = $thisweek;
                        $spend->item_id = $allitem->id;
                        $spend->store_id = \Auth::user()->store_id;
                        $spend->spend = 0;
                        $spend->save();
                    } 
                } 
            }
        }


        return redirect('../orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $order = \App\Order::find($id);
        $items = \DB::table('items_orders')
                ->join('orders', 'items_orders.order_id', '=', 'orders.id')
                ->join('items', 'items_orders.item_id','=','items.id')
                ->join('suppliers', 'orders.supplier_id','=','suppliers.id')
                ->join('uoms', 'items.uom_id','=','uoms.id')
                ->join('users', 'orders.created_by','=','users.id')
                ->select('items_orders.*', 'users.name as username','orders.id as ordernumber','suppliers.name as supplier','uoms.unit as uom','items.name as itemname','items.cost as cost')
                ->where('items_orders.order_id','=',$id)
                ->get();

        $invoices = \App\Invoice::all();

        return view('orders.show',compact('order','items','invoices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $order = \App\Order::find($id);
        $supplierId = $order->supplier_id;
        $supplier = \App\Supplier::find($supplierId);
        $itemswithpars = [];
        $itemswithonhand = [];
        $store = \Auth::user()->store_id;
        $itemids=[];
        $countstart = Carbon::now()->subDays(2);
        
        $pars = \DB::table('items_stores')
            ->where('store_id','=',$store)
            ->select('items_stores.*')
            ->orderBy('items_stores.updated_at','desc')
            ->get();

        foreach($pars as $par) {
            array_push($itemswithpars,$par->item_id);
        }

         $onhand = \DB::table('items_inventorycounts')
                ->join('inventorycounts','items_inventorycounts.inventorycount_id','=','inventorycounts.id')
                ->select('items_inventorycounts.*')
                ->whereIn('items_inventorycounts.item_id',$itemids)
                ->where([
                    ['inventorycounts.store_id','=',$store],
                    ['inventorycounts.editable','=',false],
                    ['items_inventorycounts.updated_at','<=',Carbon::now()],
                    ['items_inventorycounts.updated_at','>=',$countstart]
                ])
                ->get();

        foreach($onhand as $onhands) {
            array_push($itemswithonhand,$onhands->item_id);
        }

        
        $ordereditems = \DB::table('items_orders')
                ->join('orders', 'items_orders.order_id', '=', 'orders.id')
                ->join('items', 'items_orders.item_id','=','items.id')
                ->join('suppliers', 'orders.supplier_id','=','suppliers.id')
                ->join('uoms', 'items.uom_id','=','uoms.id')
                ->join('users', 'orders.created_by','=','users.id')
                ->select('items_orders.*', 'users.name as username','orders.id as ordernumber','suppliers.name as supplier','uoms.unit as uom','items.name as itemname','items.cost as cost')
                ->where('items_orders.order_id','=',$id)
                ->get();

        $ordereditemsIds = [];

        foreach($ordereditems as $ordereditem) {
            array_push($ordereditemsIds,$ordereditem->item_id);
        }

        $today = Carbon::today();
        $deliverydate = Carbon::today();
        $deliverydate->addDays($supplier->lead_time_days);
        $categoryids=[];

        $items = \DB::table('items')
                ->join('items_stores','items_stores.item_id','=','items.id')
                ->whereNull('items.deleted_at')
                ->where([
                    ['items.supplier_id','=',$supplierId],
                    ['items_stores.store_id','=',\Auth::user()->store_id]
                ])
                ->select('items.*')
                ->orderBy('items.name')
                ->get();
        
        foreach($items as $item) {
            array_push($categoryids, $item->category_id);
            array_push($itemids, $item->id);
        }

        $categoryid = array_unique($categoryids);

        $categories = \DB::table('categories')
            ->select('categories.*')
            ->whereNull('categories.deleted_at')
            ->whereIn('id',$categoryids)
            ->orderBy('categories.name')
            ->get();


        return view('orders.edit',compact('order','items','ordereditems','deliverydate','categories','ordereditemsIds','today','itemswithpars','itemswithonhand','pars','onhand'));
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
        $order = \App\Order::find($id);

        //error_log('order: '. $order);

        $supplier = $order->supplier_id;

        $order->received = false;
        $order->created_by = \Auth::user()->id;
        $order->updated_at = Carbon::now();

        $order->expected_delivery_date = request('deliverydate');
        
        if($button === "save") {
            $order->editable = true;
        } else {
            $order->editable = false;
        }
        
        $order->save();
        $orderid = $order->id;

        //error_log('count id '. $countid);

        $ordereditems = \DB::table('items_orders')
            ->where([
                ['items_orders.order_id','=',$order->id]
                ])
            ->get();

       $originalorderrecords = [];

        foreach ($ordereditems as $ordereditem) {
            array_push($originalorderrecords, $ordereditem->id);
        }

        $itemIds = [];

        $items = \DB::table('items')
            ->where('supplier_id','=',$supplier)
            ->get();

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

                $orderdollars = ($quantity * $item->cost);
                $totaldollars += $orderdollars;

                //error_log('orderdollars: '.$orderdollars);

                $item->orders()->attach($orderid,
                    ['order_qty' => $quantity,'orders_dollar_amount' => $orderdollars,'created_at' => Carbon::now(),'updated_at' => Carbon::now()]
                );
            }
           
        }

        foreach($originalorderrecords as $originalrecord) {
            //error_log('Delete record with id: '. $originalrecord);
            $deleterecord = \DB::table('items_orders')
                ->where('id','=',$originalrecord)
                ->delete();
        }
        

        $order2 = \App\Order::find($id);
        $order2->total_order_cost = $totaldollars;
        //error_log('totaldollars: '.$orderdollars);

        $order2->save();

        if($order2->editable === false) {
            error_log('false');
            $thisweek = Carbon::today()->startOfWeek();
            $lastweek = Carbon::today()->startOfWeek()->subDays(7);
            $today = Carbon::today();

            $orderitems = \DB::table('items_orders')
                 ->where([
                        ['order_id','=',$id],
                        ])
                ->get();
            error_log('orderitems: '. $orderitems);

            $allitems = \DB::table('items')
                ->whereNull('deleted_at')
                ->get();
            error_log('allitems: '. $allitems);

            $orderitemIds = [];
            // error_log('order item ids:' . $orderitemIds);
            foreach ($orderitems as $orderitem) {
                array_push($orderitemIds,$orderitem->item_id);
                error_log('Pushing to orderitemIds: ' . $orderitem->item_id);
            }

            //For all items active in the system
            foreach($allitems as $allitem) {
                //If the item already has an existing record in items_spend
                if(\DB::table('items_spend')
                    ->where([
                        ['item_id','=',$allitem->id],
                        ['store_id','=',\Auth::user()->store_id],
                        ['week','=',$thisweek]
                    ])
                    ->exists()) {
                        error_log('item: '. $allitem->id);
                        error_log('item exists in items_spend');

                        $existingspend = \DB::table('items_spend')
                                ->where([
                                    ['item_id','=',$allitem->id],
                                    ['store_id','=',\Auth::user()->store_id],
                                    ['week','=',$thisweek]
                                ])
                                ->first();
                                //error_log('existing spend: ' . $existingspend->spend);
                    //If it is on the order
                        if(in_array($allitem->id,$orderitemIds)) {
                            $addspend = \DB::table('items_orders')
                            ->where([
                                ['order_id','=',$id],
                                ['item_id','=',$allitem->id]
                                ])
                                ->first();
                            error_log('exists and in order');
                            
                            $newspend = $existingspend->spend + $addspend->orders_dollar_amount;
                            $updaterecord = \App\Item_Spend::find($existingspend->id);
                            $updaterecord->spend = $newspend;
                            $updaterecord->save();
                        }
                //If there's no record for the item in items_spend
                } else {
                    error_log('item: '. $allitem->id);
                    error_log('item does not exist in items_spend');
                    //If it is on the order
                    if(in_array($allitem->id,$orderitemIds)) {
                        error_log('in order');
                        $addspend = \DB::table('items_orders')
                            ->where([
                                ['order_id','=',$id],
                                ['item_id','=',$allitem->id]
                                ])
                            ->first();
                        $spend = new \App\Item_Spend;
                        $spend->week = $thisweek;
                        $spend->item_id = $allitem->id;
                        $spend->store_id = \Auth::user()->store_id;
                        $spend->spend = $addspend->orders_dollar_amount;
                        $spend->save();
                    //If it is not on the order, set to 0
                    } else {
                        error_log('not in order');
                        $spend = new \App\Item_Spend;
                        $spend->week = $thisweek;
                        $spend->item_id = $allitem->id;
                        error_log('spend item: '. $spend->item_id);
                        $spend->store_id = \Auth::user()->store_id;
                        $spend->spend = 0;
                        error_log('spend amount: '. $spend->spend);
                        $spend->save();
                    } 
                } 
            }
        }

        return redirect('../orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = \App\Order::find($id);
        $order->delete();
        return redirect('/orders');
    }

    // Order Status: 1 - saved, 2 - open, 3 - closed (invoiced), 4 - late (past due date with no invoice)

    public function open()
    {
        //$orders = \App\Order::all();
        $orders = \DB::table('orders')
                ->join('users', 'orders.created_by', '=', 'users.id')
                ->join('suppliers', 'orders.supplier_id','=','suppliers.id')
                ->select('orders.*', 'users.name as username','suppliers.name as supplier')
                ->where([
                    ['orders.editable','=',false],
                    ['orders.received','=',false],
                    ['orders.store_id','=',\Auth::user()->store_id]
                    ])
                ->get();

        return view('orders.open',compact('orders'));
    }

    public function closed()
    {
        $orders = \DB::table('orders')
                ->join('users', 'orders.created_by', '=', 'users.id')
                ->join('suppliers', 'orders.supplier_id','=','suppliers.id')
                ->select('orders.*', 'users.name as username','suppliers.name as supplier')
                ->where([
                    ['orders.editable','=',false],
                    ['orders.received','=',true],
                    ['orders.store_id','=',\Auth::user()->store_id]
                    ])
                ->get();

         $invoices = \App\Invoice::all();

        return view('orders.closed',compact('orders','invoices'));
    }

    public function saved()
    {
        $orders = \DB::table('orders')
                ->join('users', 'orders.created_by', '=', 'users.id')
                ->join('suppliers', 'orders.supplier_id','=','suppliers.id')
                ->select('orders.*', 'users.name as username','suppliers.name as supplier')
                ->where([
                    ['orders.editable','=',true],
                    ['orders.received','=',false],
                    ['orders.store_id','=',\Auth::user()->store_id]
                    ])
                ->get();
        return view('orders.saved',compact('orders'));
    }
}
