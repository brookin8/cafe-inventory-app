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
