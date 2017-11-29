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
                                <div class="card-block" id="demandblock">
                                  <div class="table-responsive" style="overflow:auto;">
                                     <table class="table" id="demandblocktable">
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">1</td>
                                                    <td class="text-left">Milk</td>
                                                    <td class="text-left">50</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">2</td>
                                                    <td class="text-left">Flour</td>
                                                    <td class="text-left">12</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">3</td>
                                                    <td class="text-left">Vanilla Syrup</td>
                                                    <td class="text-left">9</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">4</td>
                                                    <td class="text-left">Powdered Sugar</td>
                                                    <td class="text-left">7</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">5</td>
                                                    <td class="text-left">Vanilla Extract</td>
                                                    <td class="text-left">6</td>
                                                </tr>
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
                            <div class="card-block" id="spendblock">
                                <div class="cardblocktext align-middle">$450.00</div>
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
                                <div class="card-block" id="notcountedblock" style="overflow:auto;">
                                    <div class="table-responsive">
                                        <table class="table" id="notcountedtable">
                                            <thead>
                                                <tr>
                                                    <th class="text-left">Item</th>
                                                    <th class="text-left">Last Count Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">Urnex</td>
                                                    <td class="text-left">10/30/2017</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Grindz</td>
                                                    <td class="text-left">10/30/2017</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">M&M Topping</td>
                                                    <td class="text-left">10/26/2017</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Band Aids</td>
                                                    <td class="text-left">10/20/2017</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Hand Soap</td>
                                                    <td class="text-left">10/20/2017</td>
                                                </tr>
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
                                <div class="card-block" id="dueorderblock">
                                    <div class="table-responsive" style="overflow:auto;">
                                        <table class="table" id="dueordertable">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Order</th>
                                                <th class="text-left">Supplier</th>
                                                <th class="text-left">Due</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-left">Barista Pro</td>
                                                <td class="text-left">11/23/2017</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td class="text-left">Baumann</td>
                                                <td class="text-left">11/23/2017</td>
                                            </tr>
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
