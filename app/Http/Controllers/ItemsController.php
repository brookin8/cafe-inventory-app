<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$items = \App\Item::all();
        $items = \DB::table('items')
                ->join('users', 'items.edited_by', '=', 'users.id')
                ->join('categories', 'category_id','=','categories.id')
                ->join('suppliers', 'supplier_id','=','suppliers.id')
                ->join('uoms', 'uom_id','=','uoms.id')
                ->select('items.*', 'users.name as username','categories.name as category','suppliers.name as supplier','uoms.unit as uom')
                ->whereNull('suppliers.deleted_at')
                ->get();

        $items2 = \DB::table('items')
                ->join('users', 'items.edited_by', '=', 'users.id')
                ->join('categories', 'category_id','=','categories.id')
                ->join('suppliers', 'supplier_id','=','suppliers.id')
                ->join('uoms', 'uom_id','=','uoms.id')
                ->select('items.*', 'users.name as username','categories.name as category','uoms.unit as uom')
                ->whereNotNull('suppliers.deleted_at')
                ->get();

        return view('items.index')->with(compact('items','items2'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Category::all();
        $uoms = \App\Uom::all();
        $suppliers = \App\Supplier::all();

        return view('items.create', compact('categories','uoms','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new \App\Item;
        // $recipients = request('recipient');
        
        $item->name = request('name');
        $item->category_id = request('category');
        $item->supplier_id = request('supplier');
        $item->supplier_item_identifier = request('supplier_item');
        $item->cost = request('cost');
        $item->uom_id = request('uom');
        
        $item->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $item->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        $item->edited_by = \Auth::user()->id;
     
        $item->save();

        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = \App\Item::find($id);
        $categories = \App\Category::all();
        $suppliers = \App\Supplier::all();
        $uoms = \App\UOM::all();

        return view('items.edit', compact('item','categories','suppliers','uoms'));
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
        $item = \App\Item::find($id);
        // $recipients = request('recipient');
        
        $item->name = request('name');
        $item->category_id = request('category');
        $item->supplier_id = request('supplier');
        $item->supplier_item_identifier = request('supplier_item');
        $item->cost = request('cost');
        $item->uom_id = request('uom');
        
        $item->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        $item->edited_by = \Auth::user()->id;
     
        $item->save();

        return redirect('/items');
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
