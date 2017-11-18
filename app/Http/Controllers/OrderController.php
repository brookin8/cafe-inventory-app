<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
{
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
        $today = Carbon::today();
        $deliverydate = Carbon::today();
        $deliverydate->addDays($supplier->lead_time_days);
        $categoryids=[];

        $items = \DB::table('items')
                ->select('items.*')
                ->whereNull('items.deleted_at')
                ->where([
                    ['items.supplier_id','=',$supplierId]
                ])
                ->orderBy('items.name')
                ->get();
        
        foreach($items as $item) {
            array_push($categoryids, $item->category_id);
        }

        $categoryid = array_unique($categoryids);

        $categories = \DB::table('categories')
            ->select('categories.*')
            ->whereNull('categories.deleted_at')
            ->whereIn('id',$categoryids)
            ->orderBy('categories.name')
            ->get();

        return view('orders.create',compact('items','supplier','today','deliverydate','categories'));
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

                $orderdollars = (int)($quantity * $item->cost);
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
        return view('orders.show',compact('order','items'));
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
        $supplier = \App\Order::find($supplierId);
        
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
                ->select('items.*')
                ->whereNull('items.deleted_at')
                ->where([
                    ['items.supplier_id','=',$supplierId]
                ])
                ->orderBy('items.name')
                ->get();
        
        foreach($items as $item) {
            array_push($categoryids, $item->category_id);
        }

        $categoryid = array_unique($categoryids);

        $categories = \DB::table('categories')
            ->select('categories.*')
            ->whereNull('categories.deleted_at')
            ->whereIn('id',$categoryids)
            ->orderBy('categories.name')
            ->get();


        return view('orders.edit',compact('order','items','ordereditems','deliverydate','categories','ordereditemsIds'));
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
        //
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
                    ])
                ->get();
        return view('orders.closed',compact('orders'));
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
                    ])
                ->get();
        return view('orders.saved',compact('orders'));
    }
}
