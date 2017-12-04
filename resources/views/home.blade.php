@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>Welcome, {{$user->name}}</h1>
        </div>
    </div>

        <div class="container mt-3 mt-5">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                
                 <div class="row mb-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    Top 5 Items - Demand
                                </div>
                                <div class="card-block dashboard" id="demandblock" style="overflow:auto;">
                                  <div class="table-responsive">
                                     <table class="table" id="demandblocktable">
                                            <thead>
                                                <th class="text-left borderless">Item</th>
                                                <th class="text-left borderless">UOM</th>
                                                <th class="text-left borderless">Demand</th>    
                                            </thead>
                                            <tbody>
                                            @foreach($top5 as $top5s)
                                                <tr style="border:none">
                                                    <td class="text-left borderless">{{$top5s->name}}</td>
                                                    <td class="text-left borderless">{{$top5s->uom}}</td>
                                                    <td class="text-left borderless">{{$top5s->demand}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>

                    <div class="col ml-3">
                        <div class="card">
                            <div class="card-header">
                                Total Spend This Month
                            </div>
                            <div class="card-block dashboard" id="spendblock">
                                <div class="cardblocktext align-middle">${{number_format($PTD)}}</div>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                    </div>

                     <div class="row mt-5">

                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    Not Counted In Over 7 Days
                                </div>
                                <div class="card-block dashboard" id="notcountedblock" style="overflow:auto;">
                                    <div class="table-responsive">
                                        <table class="table" id="notcountedtable">
                                            <thead>
                                                <tr>
                                                    <th class="text-left borderless">Item</th>
                                                    <th class="text-left borderless">Last Count</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($notcounted as $key=>$value)
                                                <tr>
                                                    <td class="text-left">{{$key}}</td>
                                                    <td class="text-left">{{$value}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>

                    <div class="col ml-3">
                        <div class="card">
                            <div class="card-header">
                            Orders Due
                            </div>
                                <div class="card-block dashboard" id="dueorderblock">
                                    <div class="table-responsive" style="overflow:auto;">
                                        <table class="table" id="dueordertable">
                                        <thead>
                                            <tr>
                                                <th class="text-left borderless">Order</th>
                                                <th class="text-left borderless">Supplier</th>
                                                <th class="text-left borderless">Due</th>
                                                <th class="text-left borderless">Invoice</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td class="text-left">{{$order->id}}</td>
                                                    <td class="text-left">{{$order->supplier}}</td>
                                                    <td class="text-left">{{$order->expected_delivery_date}}</td>
                                                    <td>
                                                        <form action="../invoices/create" method="post">
                                                            {{ csrf_field() }}
                                                            <button class="invoiceButton2 btn btn-sm btn-secondary" data-info="" type="submit">
                                                            <input type="hidden" name="order" value="{{$order->id}}">
                                                                Invoice
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                             <div class="card-footer">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
</div>
@endsection
