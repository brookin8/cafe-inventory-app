@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<form method="post" action="/suppliers" class="col-7 pt-4 pb-5 mb-5 createForm">
		{{ csrf_field() }}
		<div class="form-group row justify-content-center">
			<h2>New Supplier</h2>
		</div>
		<div class="form-group row">
		  	<label for="name" class="col-4 col-form-label text-right createText">Name</label>
		  	<div class="col-7">
		  		<input type="text" id="name" name="name" class="form-control">	
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="order_method" class="col-4 col-form-label text-right createText">Order Method</label>
		  	<div class="col-7">
		  		<select name="order_method" id="order_method" class="form-control createOption">
		  				<option value="" disabled selected>Select Method</option>
		  			@foreach ($ordermethods as $method)
		  				<option value="{{ $method->id }}">{{ $method->method }}</option>
		  			@endforeach
		  		</select>
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="lead_time" class="col-4 col-form-label text-right createText">Lead Time (Days)</label>
		  	<div class="col-7">
		  		<input type="number" id="lead_time" name="lead_time" class="form-control">	
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="order_email" class="col-4 col-form-label text-right createText">Order Email</label>
		  	<div class="col-7">
		  		<input type="email" id="order_email" name="order_email" class="form-control">	
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="contact_name" class="col-4 col-form-label text-right createText">Contact Name</label>
		  	<div class="col-7">
		  		<input type="text" id="contact_name" name="contact_name" class="form-control">	
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="contact_number" class="col-4 col-form-label text-right createText">Contact Number</label>
		  	<div class="col-7">
		  		<input placeholder="5555555555" type="tel" maxlength="10" id="contact_number" name="contact_number" class="form-control">
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="contact_email" class="col-4 col-form-label text-right createText">Contact Email</label>
		  	<div class="col-7">
		  		<input type="email" id="contact_email" name="contact_email" class="form-control">
		  	</div>
		</div>
		<h3 class="mb-5 billing">Billing Address</h3>
		<div class="form-group row">
		  	<label for="street_address" class="col-4 col-form-label text-right createText">Street Address</label>
		  	<div class="col-7">
		  		<input type="text" id="street_address" name="street_address" class="form-control">
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="city" class="col-4 col-form-label text-right createText">City</label>
		  	<div class="col-7">
		  		<input type="text" id="city" name="city" class="form-control">
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="state" class="col-4 col-form-label text-right createText">State</label>
		  	<div class="col-7">
		  		<input type="text" maxlength="2" id="state" name="state" class="form-control">
		  	</div>
		</div>
		<div class="form-group row">
		  	<label for="zip" class="col-4 col-form-label text-right createText">Zip</label>
		  	<div class="col-7">
		  		<input type="text" maxlength="5" id="zip" name="zip" class="form-control">
		  	</div>
		</div>
		<div class="form-group row">
			<div class="col-4 col-form-label submitButtonSpace">
			</div>
			<div class="col-7 text-right">
				<button class="btn btn-success" type="submit">Save</button>
			</div>
		</div>
	</form>
</div>

@endsection