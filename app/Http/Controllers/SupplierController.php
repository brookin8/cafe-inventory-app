<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class SupplierController extends Controller
{
     public function details($id) {
        $supplier = \App\Supplier::find($id);
        $ordermethod = \App\Order_Method::find($supplier->order_method)->method;
        return view('suppliers.details',compact('supplier','ordermethod'));
     }

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
        // $suppliers = \App\Supplier::all();

        $suppliers = \DB::table('suppliers')
                ->join('order_methods', 'suppliers.order_method','=','order_methods.id')
                ->select('suppliers.*', 'order_methods.method as method')
                ->whereNull('suppliers.deleted_at')
                ->get();


        return view('suppliers.index')->with(compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordermethods = \App\Order_Method::all();

        return view('suppliers.create', compact('ordermethods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = new \App\Supplier;
        // $recipients = request('recipient');
        
        $supplier->name = request('name');
        $supplier->lead_time_days = request('lead_time');
        $supplier->order_email_address = request('order_email');
        $supplier->billing_street_address = request('street_address');
        $supplier->billing_city = request('city');
        $supplier->billing_state = request('state');
        $supplier->billing_zip = request('zip');
        $supplier->contact_name = request('contact_name');
        $supplier->contact_phone_number = request('contact_number');
        $supplier->contact_email = request('contact_email');
        $supplier->order_method = request('order_method');
    
        
        $supplier->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $supplier->updated_at = Carbon::now()->format('Y-m-d H:i:s');
     
        $supplier->save();

        return redirect('/suppliers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = \App\Supplier::find($id);
        $items = \DB::table('items')
            ->where('items.supplier_id','=',$id)
            ->select('items.*')
            ->whereNull('items.deleted_at')
            ->get();
        $itemcount = $items->count();

        return view('suppliers.show',compact('supplier','items','itemcount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = \App\Supplier::find($id);
        $ordermethods = \App\Order_Method::all();

        return view('suppliers.edit', compact('supplier','ordermethods'));
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
        $supplier = \App\Supplier::find($id);
        // $recipients = request('recipient');
        
        $supplier->name = request('name');
        $supplier->lead_time_days = request('lead_time');
        $supplier->order_email_address = request('order_email');
        $supplier->billing_street_address = request('street_address');
        $supplier->billing_city = request('city');
        $supplier->billing_state = request('state');
        $supplier->billing_zip = request('zip');
        $supplier->contact_name = request('contact_name');
        $supplier->contact_phone_number = request('contact_number');
        $supplier->contact_email = request('contact_email');
        $supplier->order_method = request('order_method');
    
        $supplier->updated_at = Carbon::now()->format('Y-m-d H:i:s');
     
        $supplier->save();

        return redirect('/suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = \App\Supplier::find($id);
        $supplier->delete();
        return redirect('/suppliers');
    }
}
