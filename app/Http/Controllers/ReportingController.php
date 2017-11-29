<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Khill\Lavacharts\Lavacharts;

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

        $items = \DB::table('items')
            ->join('categories','items.category_id','=','categories.id')
            ->whereNull('items.deleted_at')
            ->select('items.*','categories.name as category')
            ->get();


        $demand = \DB::table('items_demand')
            ->join('items','items.id','=','items_demand.item_id')
            ->join('categories','items.category_id','=','categories.id')
            ->select('items_demand.week','items_demand.item_id','items.name as name','categories.name as category','items_demand.demand')
            ->orderBy('items_demand.week')
            ->get();

        $categories = \App\Category::all();

        $suppliers = \App\Supplier::all();


        $demanddates1 = [];
        $demanddates = [];

        foreach($demand as $demands) {

           $demands->week = Carbon::parse($demands->week)->format('Y/m/d');
            array_push($demanddates1,$demands->week);
        }

        $demanddates = array_unique($demanddates1);
        $demanddatesdesc = array_reverse($demanddates);

        return view('reporting.index',compact('thisweek','lastweek','items','categories','suppliers','demand','demanddates','demanddatesdesc'));
    }

    public function spend() {
        $thisweek = Carbon::today()->startOfWeek();
        $lastweek = Carbon::today()->startOfWeek()->subDays(7);
        $today = Carbon::today();

        $items = \DB::table('items')
            ->join('categories','items.category_id','=','categories.id')
            ->whereNull('items.deleted_at')
            ->select('items.*','categories.name as category')
            ->get();

        $spend = \DB::table('items_spend')
            ->join('items','items.id','=','items_spend.item_id')
            ->join('categories','items.category_id','=','categories.id')
            ->select('items_spend.week','items_spend.item_id','items.name as name','categories.name as category','items_spend.spend')
            ->orderBy('items_spend.week')
            ->get();

        $categories = \App\Category::all();
        $suppliers = \App\Supplier::all();

        $spenddates1 = [];
        $spenddates = [];

        foreach($spend as $spends) {

           $spends->week = Carbon::parse($spends->week)->format('Y/m/d');
            array_push($spenddates1,$spends->week);
        }

        $spenddates = array_unique($spenddates1);
        $spenddatesdesc = array_reverse($spenddates);


        return view('reporting.spend',compact('thisweek','lastweek','spend','items','categories','suppliers','spenddates','spenddatesdesc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //     $thisweek = Carbon::today()->startOfWeek();
    //     $lastweek = Carbon::today()->startOfWeek()->subDays(7);
    //     $today = Carbon::today();

    // // Calculate Spend

    //     $spendorders = \DB::table('items_orders')
    //         ->join('orders','orders.id','=','items_orders.order_id')
    //         ->where([
    //                 ['items_orders.updated_at','<=',$thisweek],
    //                 ['items_orders.updated_at','>=',$lastweek],
    //                 ['items_orders.is_backordered','=',null],
    //                 ['orders.editable','=','false']
    //             ])
    //         ->get();

    //         // print_r($spendorders);

    //     $itemspend = array();


    //         //Create associative array to get spend totals for each item
    //     foreach ($spendorders as $spendorder) {
    //       $item = $spendorder->item_id;
    //       $spend = $spendorder->orders_dollar_amount;
    //       if(array_key_exists($item,$itemspend)) {
    //         $itemspend[$item] += $spend;  
    //       } else {
    //         $itemspend[$item] = $spend;
    //       }
    //   }

    //     print_r($itemspend);

    //     $items = \DB::table('items')
    //     ->whereNull('deleted_at')
    //     ->get();

    //     foreach($items as $item) {
    //         if(\DB::table('items_spend')
    //             ->where([
    //                 ['item_id','=',$item->id],
    //                 ['store_id','=',\Auth::user()->store_id],
    //                 ['week','=',$lastweek]
    //             ])
    //             ->exists()) {

    //         } else {
    //             if(array_key_exists($item->id,$itemspend)){
    //             $spend = new \App\Item_Spend;
    //             $spend->week = $lastweek;
    //             $spend->item_id = $item->id;
    //             $spend->store_id = \Auth::user()->store_id;
    //             $spend->spend = $itemspend[$item->id];
    //             $spend->save();
    //             } else {
    //                 $spend = new \App\Item_Spend;
    //                 $spend->week = $lastweek;
    //                 $spend->item_id = $item->id;
    //                 $spend->store_id = \Auth::user()->store_id;
    //                 $spend->spend = 0;
    //                 $spend->save();
    //             }

    //         }
            
    //     }

    

        return redirect('../reporting');
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
