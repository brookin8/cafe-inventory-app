<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lastweek = Carbon::today()->startOfWeek()->subDays(7)->format('m/d/Y');
        $counttracker = Carbon::today()->subDays(7);
        $thismonth = Carbon::today()->startOfMonth();
        $user = \Auth::user();
        $top5 = \DB::table('items_demand')
            ->join('items','items_demand.item_id','=','items.id')
            ->join('uoms','items.uom_id','=','uoms.id')
            ->select('items_demand.*','items.name as name','uoms.unit as uom')
            ->where([
                ['items_demand.store_id','=',\Auth::user()->store_id],
                ['items_demand.week','=',$lastweek]
                ])
            ->orderBy('items_demand.demand','desc')
            ->take(5)
            ->get();

        $PTD = \DB::table('items_spend')
            ->where([
                ['store_id','=',\Auth::user()->store_id],
                ['week','>=',$thismonth],
                ])
            ->sum('spend');

        $allcounts = \DB::table('items_inventorycounts')
            ->join('inventorycounts','items_inventorycounts.inventorycount_id','=','inventorycounts.id')
            ->where([
                ['inventorycounts.store_id','=',\Auth::user()->store_id],
                ['inventorycounts.editable','=',false]
                ])
            ->select('items_inventorycounts.*')
            ->orderBy('items_inventorycounts.updated_at','desc')
            ->get();

        $items = \App\Item::all();

        $orders = \DB::table('orders')
            ->join('suppliers','orders.supplier_id','=','suppliers.id')
            ->where([
                ['orders.received','=',false],
                ['orders.editable','=',false]
                ])
            ->select('orders.id','orders.supplier_id','orders.expected_delivery_date','suppliers.name as supplier')
            ->get();

        $recentcounts = [];
        $notcounted = [];

        foreach($allcounts as $count) {
            if(!array_key_exists($count->item_id,$recentcounts)) {
                $recentcounts[$count->item_id] = $count->updated_at;
            } 
        }
        //error_log('Recent Counts: '. print_r($recentcounts,true));

        foreach($items as $item){
            if(!array_key_exists($item->id,$recentcounts)) {
                $notcounted[$item->name] = 'None';
            } else {
                if($recentcounts[$item->id]>=$counttracker) {

                } else {
                    $notcounted[$item->name] = $recentcounts[$item->id];
                }
            }
        }

        return view('home',compact('user','top5','PTD','notcounted','orders'));
    }

}
