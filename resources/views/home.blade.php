@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="container">
               <!--  <div class="panel-heading">Dashboard</div> -->

                <div class="container addMargin">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row justify-content-center">
                        <div class="col mb-5">
                            <a href="/inventorycounts"><div class="card userCard card-inverse card-primary mx-auto text-center align-middle">
                                <div class="cardText">Inventory Counts</div>
                            </div></a>
                        </div>
                        <div class="col mb-5">
                            <a href="/orders"><div class="card userCard card-inverse card-primary mx-auto text-center align-middle">
                                <div class="cardText">Orders</div>
                            </div></a>
                        </div>
                        <div class="col mb-5">
                            <a href="/invoices"><div class="card userCard card-inverse card-primary mx-auto text-center align-middle">
                                <div class="cardText">Invoices</div>
                            </div></a>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col mb-5">
                            <a href="/suppliers"><div class="card userCard card-inverse card-primary mx-auto text-center align-middle">
                                <div class="cardText">Suppliers</div>
                            </div></a>
                        </div>
                        <div class="col mb-5">
                            <a href="/items"><div class="card userCard card-inverse card-primary mx-auto text-center align-middle">
                                <div class="cardText">Items</div>
                            </div></a>
                        </div>
                        <div class="col mb-5">
                            <a href="/reporting"><div class="card userCard card-inverse card-primary mx-auto text-center align-middle">
                                <div class="cardText">Reporting</div>
                            </div></a>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col mb-5">    
                            <a href="{{ route('register') }}"><div class="card userCard adminCard card-inverse card-primary mx-auto text-center align-middle"> 
                                <div class="cardText">Manage Users</div>
                            </div></a>
                        </div>
                        <div class="col mb-5">
                            <a href="#"><div class="card userCard adminCard card-inverse card-primary mx-auto text-center align-middle">
                                <div class="cardText">Manage Stores</div>
                            </div></a>
                        </div>
                        
                        <div class="col filler">
                            <div class="filler mx-auto text-center align-middle">
                            </div>
                        </div>

                    </div>
                
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
