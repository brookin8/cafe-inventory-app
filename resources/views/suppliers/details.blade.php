@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    	<div class="col-xs-1">
    	</div>
        <div class="col-xs-10">
        <form method="post" action="/suppliers" class="col-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="row">
                		<div class="col text-left">
                			{{$supplier->name}}	
                		</div>
                		<div class="col text-right">
							<a href="../../suppliers"><button class="btn btn-primary newcount" type="button">Back</button></a>
                		</div>
                	</div>
				</div>
				
			<div class="panel-body">
			<div class="form-group row">
			  	<label for="order_method" class="col-4 col-form-label text-right createText">Order Method</label>
			  	<div class="col-7" id="order_method">
			  		<div class="orderform">{{$ordermethod}}</div>
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="lead_time" class="col-4 col-form-label text-right createText">Lead Time (Days)</label>
			  	<div class="col-7" id="lead-time">
			  		<div class="orderform">{{$supplier->lead_time_days}}</div>
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="order_email" class="col-4 col-form-label text-right createText">Order Email</label>
			  	<div class="col-7" id="order_email">
			  		<div class="orderform">{{$supplier->order_email_address}}</div>
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="contact_name" class="col-4 col-form-label text-right createText">Contact Name</label>
			  	<div class="col-7" id="contact_name">
			  		<div class="orderform">{{$supplier->contact_name}}</div>
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="contact_number" class="col-4 col-form-label text-right createText">Contact Number</label>
			  	<div class="col-7" id="contact_number">
			  		<div class="orderform">{{substr_replace(substr_replace($supplier->contact_phone_number,'-',3,0),'-',7,0)}}</div>
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="contact_email" class="col-4 col-form-label text-right createText">Contact Email</label>
			  	<div class="col-7" id="contact_email">
			  		<div class="orderform">{{$supplier->contact_email}}</div>
			  	</div>
			</div>
			<h3 class="mb-5 billing">Billing Address</h3>
			<div class="form-group row">
			  	<label for="street_address" class="col-4 col-form-label text-right createText">Street Address</label>
			  	<div class="col-7" id="street_address">
			  		<div class="orderform">{{$supplier->billing_street_address}}</div>
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="city" class="col-4 col-form-label text-right createText">City</label>
			  	<div class="col-7" id="city">
			  		<div class="orderform">{{$supplier->billing_city}}</div>
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="state" class="col-4 col-form-label text-right createText">State</label>
			  	<div class="col-7" id="state">
			  		<div class="orderform">{{$supplier->billing_state}}</div>
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="zip" class="col-4 col-form-label text-right createText">Zip</label>
			  	<div class="col-7" id="zip">
			  		<div class="orderform">{{$supplier->billing_zip}}</div>
			  	</div>
			</div>
			<div class="form-group row">
				<div class="col-4 col-form-label submitButtonSpace">
				</div>
				
			</div>
		</div>
	</div>
	</form>
	</div>
	</div>
</div>

@endsection