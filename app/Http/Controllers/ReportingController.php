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
    public function index(Request $request)
    {

        $thisweek = Carbon::today()->startOfWeek();
        $lastweek = Carbon::today()->startOfWeek()->subDays(7)->format('m/d/Y');
        $today = Carbon::today();
        $fiveweeks = Carbon::today()->startOfWeek()->subDays(35);
        $tenweeks = Carbon::today()->startOfWeek()->subDays(70);

        $items = \DB::table('items')
            ->join('categories','items.category_id','=','categories.id')
            ->whereNull('items.deleted_at')
            ->select('items.*','categories.name as category')
            ->orderBy('items.name')
            ->get();

        $itemstores = \DB::table('items_stores')
            ->join('items','items.id','=','items_stores.item_id')
            ->join('categories','items.category_id','=','categories.id')
            ->join('suppliers','items.supplier_id','=','suppliers.id')
            ->join('stores','items_stores.store_id','=','stores.id')
            ->join('uoms','items.uom_id','=','uoms.id')
            ->where('items_stores.store_id','=',\Auth::user()->store_id)
            ->select('items_stores.*','items.name as name','categories.name as category','suppliers.name as supplier','stores.name as store','uoms.unit as uom')
            ->get();

        //error_log('itemstores: ' . $itemstores);

        $demand = \DB::table('items_demand')
            ->join('items','items.id','=','items_demand.item_id')
            ->join('categories','items.category_id','=','categories.id')
            ->select('items_demand.week','items_demand.item_id','items.name as name','categories.name as category','items_demand.demand')
            ->where('items_demand.store_id','=',\Auth::user()->store_id)
            ->orderBy('items_demand.week')
            ->get();

        if($request->session()->exists('demandfilter')) {
            $demand2 = $request->session()->pull('demandfilter');
        } else {
            $demand2 = \DB::table('items_demand')
            ->join('items','items.id','=','items_demand.item_id')
            ->join('categories','items.category_id','=','categories.id')
            ->join('suppliers','items.supplier_id','=','suppliers.id')
            ->join('stores','items_demand.store_id','=','stores.id')
            ->join('uoms','items.uom_id','=','uoms.id')
            ->select('items_demand.week','items_demand.item_id','items.name as name','categories.name as category','items_demand.demand','suppliers.name as supplier','stores.name as store','uoms.unit as uom')
            ->where('items_demand.store_id','=',\Auth::user()->store_id)
            ->orderBy('items_demand.week')
            ->get();
        }

        
            // foreach($demand2 as $demands2) {
            //     error_log(gettype($demands2->week));
            //     error_log($demands2->week);
            // }

        $demandlastweek = \DB::table('items_demand')
            ->select('items_demand.*')
            ->where([
                ['items_demand.store_id','=',\Auth::user()->store_id],
                ['items_demand.week','=',$lastweek]
                ])
            ->orderBy('items_demand.week')
            ->get();

            error_log($demandlastweek);

        $categories = \App\Category::all();
        $suppliers = \App\Supplier::all();

        $fiveweek = [];
        $tenweek = [];
        $lastweekdata = [];

        foreach($items as $item) {
            $fiveweek[$item->id] = 0;
            $tenweek[$item->id] = 0;
        }


        foreach($demandlastweek as $demandlastweeks) {
            $lastweekdata[$demandlastweeks->item_id] = $demandlastweeks->demand;
        }

        $demanddates1 = [];
        $demanddates = [];
        
        foreach($demand as $demands) {

           $demands->week = Carbon::parse($demands->week)->format('Y/m/d');
            array_push($demanddates1,$demands->week);
            if($demands->week >= $fiveweeks) {
                $fiveweek[$demands->item_id] += $demands->demand;
            }

            if($demands->week >= $tenweeks) {
                $tenweek[$demands->item_id] += $demands->demand;
            }
        }

        $demanddates = array_unique($demanddates1);
        $demanddatesdesc = array_reverse($demanddates);

        foreach($fiveweek as $key=>$value) {
            $value = round($value/5);
        }

        foreach($tenweek as $key=>$value) {
            $value = round($value/10);
        }

      
        return view('reporting.index',compact('thisweek','lastweek','items','categories','suppliers','demand','demanddates','demanddatesdesc','demand2','itemstores','tenweek','fiveweek','lastweekdata'));
    }

    public function spend(Request $request) {
        $thisweek = Carbon::today()->startOfWeek();
        $lastweek = Carbon::today()->startOfWeek()->subDays(7);
        $today = Carbon::today();
        $thismonth = Carbon::today()->startOfMonth();
        $thisyear = Carbon::today()->startOfYear();

        $items = \DB::table('items')
            ->join('categories','items.category_id','=','categories.id')
            ->whereNull('items.deleted_at')
            ->select('items.*','categories.name as category')
            ->orderBy('items.name')
            ->get();

        $spend = \DB::table('items_spend')
            ->join('items','items.id','=','items_spend.item_id')
            ->join('categories','items.category_id','=','categories.id')
            ->join('suppliers','items.supplier_id','=','suppliers.id')
            ->select('items_spend.week','items_spend.item_id','items.name as name','categories.name as category','items_spend.spend','suppliers.name as supplier')
            ->where('items_spend.store_id','=',\Auth::user()->store_id)
            ->orderBy('items_spend.week')
            ->get();

        if($request->session()->exists('spendfilter')) {
            $spend2 = $request->session()->pull('spendfilter');
        } else {
            $spend2 = \DB::table('items_spend')
                ->join('items','items.id','=','items_spend.item_id')
                ->join('categories','items.category_id','=','categories.id')
                ->join('suppliers','items.supplier_id','=','suppliers.id')
                ->join('stores','items_spend.store_id','=','stores.id')
                ->select('items_spend.week','items_spend.item_id','items.name as name','categories.name as category','items_spend.spend','suppliers.name as supplier','stores.name as store')
                ->where('items_spend.store_id','=',\Auth::user()->store_id)
                ->orderBy('items_spend.week')
                ->get();
        }

        $itemstores = \DB::table('items_stores')
            ->join('items','items.id','=','items_stores.item_id')
            ->join('categories','items.category_id','=','categories.id')
            ->join('suppliers','items.supplier_id','=','suppliers.id')
            ->join('stores','items_stores.store_id','=','stores.id')
            ->where('items_stores.store_id','=',\Auth::user()->store_id)
            ->select('items_stores.*','items.name as name','categories.name as category','suppliers.name as supplier','stores.name as store')
            ->get();

        $lastweekspend = \DB::table('items_spend')
            ->select('items_spend.*')
            ->where([
                ['items_spend.store_id','=',\Auth::user()->store_id],
                ['items_spend.week','>=',$lastweek],
                ['items_spend.week','<',$thisweek]
                ])
            ->orderBy('items_spend.week')
            ->get();

        //error_log($lastweekspend);

        //error_log($spend2);

        $categories = \App\Category::all();
        $suppliers = \App\Supplier::all();

        $spenddates1 = [];
        $spenddates = [];

        $ptd = [];
        $ytd = [];
        $lastweekdata = [];

        foreach($items as $item) {
            $ptd[$item->id] = 0;
            $ytd[$item->id] = 0;
        }

        foreach($lastweekspend as $lastweekspends) {
            $lastweekdata[$lastweekspends->item_id] = $lastweekspends->spend;
        }

        //error_log('last week data: '. print_r($lastweekdata,true));

        foreach($spend as $spends) {

           $spends->week = Carbon::parse($spends->week)->format('Y/m/d');
            array_push($spenddates1,$spends->week);
                if($spends->week >= $thismonth) {
                    $ptd[$spends->item_id] += $spends->spend;
                }
                if($spends->week >= $thisyear) {
                    $ytd[$spends->item_id] += $spends->spend;
                }
        }

        //error_log('ptd: ' . print_r($ptd,true));
        //error_log('ytd: ' . print_r($ytd,true));

        $spenddates = array_unique($spenddates1);
        $spenddatesdesc = array_reverse($spenddates);


        return view('reporting.spend',compact('thisweek','lastweek','today','thismonth','thisyear','spend','items','categories','suppliers','spenddates','spenddatesdesc','spend2','itemstores','ytd','ptd','lastweekdata'));
    }


    public function demandfilter(Request $request) {
        $startdate = request('startdate');
        $enddate = request('enddate');


        $demand2 = \DB::table('items_demand')
            ->join('items','items.id','=','items_demand.item_id')
            ->join('categories','items.category_id','=','categories.id')
            ->join('suppliers','items.supplier_id','=','suppliers.id')
            ->join('stores','items_demand.store_id','=','stores.id')
            ->join('uoms','items.uom_id','=','uoms.id')
            ->select('items_demand.week','items_demand.item_id','items.name as name','categories.name as category','items_demand.demand','suppliers.name as supplier','stores.name as store','uoms.unit as uom')
            ->where([
                ['items_demand.store_id','=',\Auth::user()->store_id],
                ['items_demand.week','>=',$startdate],
                ['items_demand.week','<=',$enddate]
                ])
            ->orderBy('items_demand.week')
            ->get();

        //error_log($demand2);

        $request->session()->put('demandfilter', $demand2);
      
        return redirect('../reporting');
    }

    public function spendfilter(Request $request) {
    $startdate = Carbon::parse(request('startdate'));
        error_log('startdate: ' . $startdate);
        error_log('type: ' . gettype($startdate));
    $enddate = Carbon::parse(request('enddate'));
        error_log('enddate: ' . $enddate);
        error_log('type: ' . gettype($enddate));

        $spend2 = \DB::table('items_spend')
            ->join('items','items.id','=','items_spend.item_id')
            ->join('categories','items.category_id','=','categories.id')
            ->join('suppliers','items.supplier_id','=','suppliers.id')
            ->join('stores','items_spend.store_id','=','stores.id')
            ->select('items_spend.week','items_spend.item_id','items.name as name','categories.name as category','items_spend.spend','suppliers.name as supplier','stores.name as store')
            ->where([
                ['items_spend.store_id','=',\Auth::user()->store_id],
                ['items_spend.week','>=',$startdate],
                ['items_spend.week','<=',$enddate]
            ])
            ->orderBy('items_spend.week')
            ->get();

        error_log('Spend2: '.$spend2);

        $request->session()->put('spendfilter', $spend2);
      
        return redirect('../reporting/spend');
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
