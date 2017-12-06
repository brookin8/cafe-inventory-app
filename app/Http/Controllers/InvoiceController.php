<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class InvoiceController extends Controller
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

        //error_log($order);
        //error_log($supplierselect0);

        $suppliers = \App\Supplier::all();
        $items = \DB::table('items_orders')
            ->join('items','items_orders.item_id','=','items.id')
            ->select('items_orders.*','items.name as itemname')
            ->where([
                ['items_orders.order_id','=',$order]
            ])
            ->get();

        //error_log('Items :'.$items);

        $allitems = \DB::table('items')
                ->select('items.*')
                ->where([
                    ['items.supplier_id','=',$supplierselect0]
                    ])
                ->get();

         $allsuppliers = \DB::table('suppliers')
                ->select('suppliers.*')
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

    public function fromorderpage (Request $request) {
        $request->session()->put('orderexist', '1');
        $order = request('orderselect');
        $request->session()->put('order', $order);
        $supplierselected = request('supplierselect');
        $request->session()->put('supplierselect', $supplierselected);

        return redirect('../invoices/create');
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
        $orderexists =  $request->session()->get('orderexist');
        $order = (int)request('order');
        error_log('$order: ' . $order);

        //error_log($orderexists);

        if( $orderexists === '2') {

            $supplier = $request->session()->get('supplierselect');

        }
        else {

        
        // error_log($order);

        $findsupplier =  \App\Order::find($order);
        $supplier = $findsupplier->supplier_id;

        }

        $invoice = new \App\Invoice;
        $invoice->editable = false;
        $invoice->store_id = \Auth::user()->store_id;
        $invoice->created_by = \Auth::user()->id;
        $invoice->order_id = $order;
        $invoice->supplier_id = $supplier;
        $invoice->actual_delivery_date = Carbon::now();
        $invoice->created_at = Carbon::now();
        $invoice->updated_at = Carbon::now();
        $invoice->total_invoice_amount = 0;
        $invoice->save();

        $invoiceid = $invoice->id;
        
        //error_log('count id '. $countid);

        if( $orderexists !== '2') {
            
            $items = \App\Item_Order::where('order_id','=',$order);
            
            $numItems = $items->count();
            $totaldollars = 0;

        
            for($i=1;$i<=$numItems;$i++) {
                $stringi = (string)$i;
                $itemid = request('item'.$stringi);
                $quantity = request('qty'.$stringi); 
                $backorder = request('backorder'.$stringi); 

           //error_log('qty '. $quantity);

               if($quantity != '') {
                    $item = \App\Item::find($itemid);

                    $invoicedollars = ($quantity * $item->cost);
                    $totaldollars += $invoicedollars;

                    //error_log($invdollars);

                    $item->invoices()->attach($invoiceid,
                        ['invoice_qty' => $quantity,'invoice_dollar_amount' => $invoicedollars,'created_at' => Carbon::now(),'updated_at' => Carbon::now()]
                    );
                }

                if($backorder === 'yes') {
                    $item_order_record_id = \DB::table('items_orders')
                        ->where([
                            ['items_orders.order_id','=',$order],
                            ['items_orders.item_id','=',$itemid]
                        ])
                        ->select('items_orders.id')
                        ->first();

                    $item_order_record = \App\Item_Order::find($item_order_record_id->id);
                    //error_log($item_order_record);

                    $item_order_record->is_backordered = true;
                    $item_order_record->save();
                    
                }
               
            }

            $findsupplier->editable = false;
            $findsupplier->received = true;
            $findsupplier->save(); 

            

        } else {

            $items = \DB::table('items')
                ->where('items.supplier_id','=',$supplier)
                ->select('items.*');
            
            $numItems = $items->count();
            $totaldollars = 0;

            for($i=1;$i<=$numItems;$i++) {
                $stringi = (string)$i;
                $itemname = request('item'.$stringi);
                $quantity = request('qty'.$stringi); 

           //error_log('qty '. $quantity);

               if($quantity !== '') {

                    $itemIdfind = \DB::table('items')
                        ->where('items.name','=',$itemname)
                        ->select('items.id')
                        ->get();

                    error_log('itemIDfind: '. $itemIdfind);

                    $itemId = 0;

                    foreach($itemIdfind as $itemIdfinds) {
                            $itemId = $itemIdfinds->id;
                    }

                    error_log('itemId: '.$itemId);

                    if($itemId > 0) {
                        $item = \App\Item::find($itemId);

                        //error_log($item->cost);

                        $invoicedollars = ($quantity * $item->cost);
                        $totaldollars += $invoicedollars;

                    //error_log($invdollars);

                        $item->invoices()->attach($invoiceid,
                            ['invoice_qty' => $quantity,'invoice_dollar_amount' => $invoicedollars,'created_at' => Carbon::now(),'updated_at' => Carbon::now()]
                         );
                    }
                }
               
            }

        }


        $invoice2 = \App\Invoice::find($invoiceid);
        $invoice2->total_invoice_amount = $totaldollars;
        $invoice2->save();

        return redirect('/invoices');

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
                    ->select('items_invoices.*', 'users.name as username','invoices.order_id as ordernumber','suppliers.name as supplier','uoms.unit as uom','items.name as itemname','items.cost as cost')
                    ->where([
                        ['items_invoices.invoice_id','=',$id]
                    ])
                    ->get();

            $backorder = false;

        } else {
            
           // error_log('in else!');

           // error_log('invoice ID is '. $id);
           // error_log('invoice is '. $invoice);
           // error_log('orderId is '. $orderId);

            $items = \DB::table('items_invoices')
                    ->join('invoices', 'items_invoices.invoice_id', '=', 'invoices.id')
                    ->join('suppliers', 'invoices.supplier_id','=','suppliers.id')
                    ->join('users', 'invoices.created_by','=','users.id')
                    ->join('items', 'items_invoices.item_id','=','items.id')
                    ->join('uoms', 'items.uom_id','=','uoms.id')
                    ->select('items_invoices.*', 
                        'users.name as username',
                        'invoices.order_id as ordernumber',
                        'suppliers.name as supplier', 
                        'items.name as itemname',
                        'items.cost as cost',
                        'uoms.unit as uom'
                        )
                    ->where([
                        ['items_invoices.invoice_id','=',$id],
                    ])
                    ->get();

                $orderitems = \DB::table('items_orders')
                    ->join('items', 'items_orders.item_id','=','items.id')
                    ->join('uoms', 'items.uom_id','=','uoms.id')
                    ->select('items_orders.*',
                        'items.name as itemname',
                        'items.cost as cost',
                        'uoms.unit as uom')
                    ->where([
                        ['items_orders.order_id','=',$orderId]
                        ])
                    ->get();

                $backorder = false;
                $backordered_items = [];

                foreach($orderitems as $orderitem) {
                    if($orderitem->is_backordered === true) {
                        $backorder = true;
                        array_push($backordered_items,$orderitem->itemname);
                    }
                }


            //error_log('orderitems: '.$orderitems);
            //error_log('(invoice)items: '. $items);

        }

        return view('invoices.show',compact('invoice','items','orderitems','backorder','backordered_items'));
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
