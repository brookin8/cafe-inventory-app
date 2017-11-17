<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        $invoices = \DB::table('invoices')
                ->join('users', 'invoices.created_by', '=', 'users.id')
                ->join('suppliers', 'invoices.supplier_id','=','suppliers.id')
                ->select('invoices.*', 'users.name as username','suppliers.name as supplier')
                ->where('invoices.editable','=',false)
                ->get();

        return view('invoices.index',compact('invoices'));
    }

    public function backorder() {
        $invoices = \DB::table('invoices')
                ->join('users', 'invoices.created_by', '=', 'users.id')
                ->join('suppliers', 'invoices.supplier_id','=','suppliers.id')
                ->select('invoices.*', 'users.name as username','suppliers.name as supplier')
                ->where('invoices.editable','=',true)
                ->get();

        return view('invoices.backorder',compact('invoices'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $order = $request->session()->get('order');
        $orderexists = $request->session()->get('orderexist');
        $supplierselect0 = $request->session()->get('supplierselect');
        $supplierselect = \App\Supplier::find($supplierselect0);

        error_log($supplierselect0);

        $suppliers = \App\Supplier::all();
        $items = \DB::table('items_orders')
            ->join('items','items_orders.item_id','=','items.id')
            ->select('items_orders.*','items.name as itemname')
            ->where([
                ['items_orders.order_id','=',$order]
            ])
            ->get();

        $allitems = \DB::table('items')
                ->select('items.*')
                ->where([
                    ['items.supplier_id','=',$supplierselect0]
                    ])
                ->get();

         $allsuppliers = \DB::table('suppliers')
                ->select('suppliers.*')
                ->whereNull('suppliers.deleted_at')
                ->get();

        return view('invoices.create',compact('order','suppliers','items','allitems','allsuppliers','orderexists','supplierselect'));
    }

    public function directinvoice(Request $request)
    {

        $order = request('order');
        $request->session()->put('order', $order);

        //$request->session()->put('supplierselect', $supplier);
        return redirect('../invoices/create');
    }

     public function orderselect()
    {
        $openorders = \DB::table('orders')
            ->join('suppliers','orders.supplier_id','=','suppliers.id')
            ->select('orders.id','suppliers.name as supplier')
            ->where([
                ['orders.editable','=',false],
                ['orders.received','=',false]
            ])
            ->get();

        return view('invoices.orderselect',compact('openorders'));
    }

     public function orderselected(Request $request)
        {
            $order = request('order');
            $request->session()->put('order', $order);

            return redirect('../invoices/create');
        }

     public function orderexist(Request $request)
        {
            return view('invoices.orderexists');
        }

     public function orderexisted(Request $request)
        {
            $orderexist = request('orderexist');
            $request->session()->put('orderexist', $orderexist);
            //error_log($orderexist);

            if($orderexist === '1') {
                return redirect('../invoices/orderselect');
            }
            else {
                return redirect('../invoices/supplierselect');
            }
        }

    public function supplierselect(Request $request)
        {   
            $suppliers = \App\Supplier::all();
            return view('invoices.supplierselect',compact('suppliers'));
        }

    public function supplierselected(Request $request)
    
        {

            $supplierselected = request('supplierselect');
            $request->session()->put('supplierselect', $supplierselected);

            return redirect('../invoices/create');
          
        }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->session()->put('order','');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = \App\Invoice::find($id);
        $orderId = $invoice->order_id;

        if(is_null($invoice->order)) {

            $items = \DB::table('items_invoices')
                    ->join('invoices', 'items_invoices.invoice_id', '=', 'invoices.id')
                    ->join('items', 'items_invoices.item_id','=','items.id')
                    ->join('suppliers', 'invoices.supplier_id','=','suppliers.id')
                    ->join('uoms', 'items.uom_id','=','uoms.id')
                    ->join('users', 'invoices.created_by','=','users.id')
                    ->select('items_invoices.*', 'users.name as username','invoices.order_id as ordernumber','suppliers.name as supplier','uoms.unit as uom','items.name as itemname')
                    ->where([
                        ['items_invoices.invoice_id','=',$id]
                    ])
                    ->get();

        } else {
            
            $items = \DB::table('items_invoices')
                    ->join('invoices', 'items_invoices.invoice_id', '=', 'invoices.id')
                    ->join('items', 'items_invoices.item_id','=','items.id')
                    ->join('suppliers', 'invoices.supplier_id','=','suppliers.id')
                    ->join('uoms', 'items.uom_id','=','uoms.id')
                    ->join('users', 'invoices.created_by','=','users.id')
                    ->join('items_orders','items_orders.item_id','=','items_invoices.item_id')
                    ->select('items_invoices.*', 'users.name as username','invoices.order_id as ordernumber','suppliers.name as supplier','uoms.unit as uom','items.name as itemname','items_orders.order_qty as orderqty')
                    ->where([
                        ['items_invoices.invoice_id','=',$id],
                        ['items_orders.order_id','=',$orderId]
                    ])
                    ->get();

        }

        return view('invoices.show',compact('invoice','items'));
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
}
