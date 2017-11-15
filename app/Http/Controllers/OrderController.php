<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
                ->select('items_orders.*', 'users.name as username','orders.id as ordernumber','suppliers.name as supplier','uoms.unit as uom','items.name as itemname')
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
        //
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
