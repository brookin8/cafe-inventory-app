<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class ReportingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $thisweek = Carbon::today()->startOfWeek();
        $lastweek = Carbon::today()->startOfWeek()->subDays(7);
        $today = Carbon::today();

        $spendorders = \DB::table('items_orders')
            ->join('orders','orders.id','=','items_orders.order_id')
            ->where([
                    ['items_orders.updated_at','<=',$thisweek],
                    ['items_orders.updated_at','>=',$lastweek],
                    ['items_orders.is_backordered','=',null],
                    ['orders.editable','=','false']
                ])
            ->sum('items_orders.orders_dollar_amount');

        return view('reporting.index',compact('thisweek','lastweek','spendorders'));
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
