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
                                <div class="card-block">
                                    <h3 class="card-title">Top 10 Items - Demand</h3>
                                  <div class="table-responsive dashboarddiv">
                                     <table class="table table-striped dashboardtable">
                                            <thead>
                                                <tr>
                                                    <th class="text-left">Item</th>
                                                    <th class="text-left">Last Week</th>
                                                    <th class="text-left">5 Week</th>
                                                    <th class="text-left">10 Week</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">Milk</td>
                                                    <td class="text-left">50</td>
                                                    <td class="text-left">52</td>
                                                    <td class="text-left">51</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Flour</td>
                                                    <td class="text-left">12</td>
                                                    <td class="text-left">10</td>
                                                    <td class="text-left">11</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Vanilla Syrup</td>
                                                    <td class="text-left">9</td>
                                                    <td class="text-left">7</td>
                                                    <td class="text-left">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Powdered Sugar</td>
                                                    <td class="text-left">7</td>
                                                    <td class="text-left">6</td>
                                                    <td class="text-left">7</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Vanilla Extract</td>
                                                    <td class="text-left">6</td>
                                                    <td class="text-left">5</td>
                                                    <td class="text-left">7</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="col ml-3">
                        <div class="card">
                            <div class="card-block">
                                    <h3 class="card-title">Top 10 Items - Spend PTD</h3>
                            <div class="table-responsive dashboarddiv">
                                <table class="table table-striped dashboardtable">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Item</th>
                                            <th class="text-left">Last Week</th>
                                            <th class="text-left">Period To Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">Milk</td>
                                            <td class="text-left">$728.12</td>
                                            <td class="text-left">$2,184.08</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Espresso</td>
                                            <td class="text-left">$320.00</td>
                                            <td class="text-left">$800.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Flour</td>
                                            <td class="text-left">$232.08</td>
                                            <td class="text-left">$696.24</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Butter</td>
                                            <td class="text-left">$202.00</td>
                                            <td class="text-left">$606.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">White Hot Cup -12 oz</td>
                                            <td class="text-left">$132.06</td>
                                            <td class="text-left">$396.18</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                         </div>
                        </div>
                    </div>
                    </div>

                     <div class="row mt-5">

                        <div class="col">
                            <div class="card">
                                <div class="card-block">
                                    <h3 class="card-title">Not Counted in Over a Week</h3>
                            <div class="table-responsive dashboarddiv">
                                <table class="table table-striped dashboardtable">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Item</th>
                                            <th class="text-left">Last Count Date</th>
                                            <th class="text-left">Onhand</th>
                                            <th class="text-left">PARs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">Urnex</td>
                                            <td class="text-left">10/30/2017</td>
                                            <td class="text-left">2</td>
                                            <td class="text-left">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Grindz</td>
                                            <td class="text-left">10/30/2017</td>
                                            <td class="text-left">1</td>
                                            <td class="text-left">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">M&M Topping</td>
                                            <td class="text-left">10/26/2017</td>
                                            <td class="text-left">1</td>
                                            <td class="text-left">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Band Aids</td>
                                            <td class="text-left">10/20/2017</td>
                                            <td class="text-left">2</td>
                                            <td class="text-left">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Hand Soap</td>
                                            <td class="text-left">10/20/2017</td>
                                            <td class="text-left">3</td>
                                            <td class="text-left">2</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                                </div>
                            </div>
                        </div>

                    <div class="col ml-3">
                        <div class="card">
                                <div class="card-block">
                                    <h3 class="card-title">Orders Due (or Past Due)</h3>
                          <div class="table-responsive dashboarddiv">
                                <table class="table table-striped dashboardtable">
                                <thead>
                                    <tr>
                                        <th class="text-left">Order No</th>
                                        <th class="text-left">Supplier</th>
                                        <th class="text-left">Due Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">2</td>
                                        <td class="text-left">Barista Pro</td>
                                        <td class="text-left">11/23/2017</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">3</td>
                                        <td class="text-left">Baumann</td>
                                        <td class="text-left">11/23/2017</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    </div>

                </div>

            </div>
</div>
@endsection
