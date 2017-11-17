<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
