@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<form method="" action="/suppliers" class="col-7 pt-4 pb-5 mb-5 createForm">
		<div class="form-group row justify-content-center">
			<h2>{{$supplier->name}}</h2>
		</div>
		<div class="form-group row">
		  	<label for="order_method" class="col-4 col-form-label text-right createText">Order Method</label>
		  	<div class="col-7" id="order_method">
		  		{{$ordermethod}}
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="lead_time" class="col-4 col-form-label text-right createText">Lead Time (Days)</label>
		  	<div class="col-7" id="lead-time">
		  		{{supplier->lead_time_days}}	
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="order_email" class="col-4 col-form-label text-right createText">Order Email</label>
		  	<div class="col-7" id="order_email">
		  		{{$supplier->order_email_address}}
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="contact_name" class="col-4 col-form-label text-right createText">Contact Name</label>
		  	<div class="col-7" id="contact_name">
		  		{{$supplier->contact_name}}
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="contact_number" class="col-4 col-form-label text-right createText">Contact Number</label>
		  	<div class="col-7" id="contact_number">
		  		{{substr_replace(substr_replace($supplier->contact_phone_number,'-',3,0),'-',7,0)}}
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="contact_email" class="col-4 col-form-label text-right createText">Contact Email</label>
		  	<div class="col-7" id="contact_email">
		  		{{$supplier->contact_email}}
		  	</div>
		</div>
		<h3 class="mb-5 billing">Billing Address</h3>
		<div class="form-group row">
		  	<label for="street_address" class="col-4 col-form-label text-right createText">Street Address</label>
		  	<div class="col-7" id="street_address">
		  		{{$supplier->billing_street_address}}
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="city" class="col-4 col-form-label text-right createText">City</label>
		  	<div class="col-7" id="city">
		  		{{$supplier->billing_city}}
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="state" class="col-4 col-form-label text-right createText">State</label>
		  	<div class="col-7" id="state">
		  		{{$supplier->billing_state}}
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="zip" class="col-4 col-form-label text-right createText">Zip</label>
		  	<div class="col-7" id="zip">
		  		{{$supplier->billing_zip}}
		  	</div>
		</div>
		<div class="form-group row">
			<div class="col-4 col-form-label submitButtonSpace">
			</div>
			<div class="col-7 text-right">
				<button class="btn btn-success" type="button">Back</button>
			</div>
		</div>
	</form>
</div>

@endsection