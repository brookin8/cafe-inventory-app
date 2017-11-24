@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    	<div class="col-xs-1">
    	</div>
        <div class="col-xs-10">
        	<form method="post" action="/suppliers/{{$supplier->id}}" class="col-12">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="row">
                		<div class="col text-left">
                			Edit Supplier	
                		</div>
                		<div class="col text-right">
                			<a href="\suppliers"><button class="btn btn-success" type="button">Back To Suppliers</button></a>
							<button class="btn btn-success" type="submit">Save</button>
                		</div>
                	</div>
				</div>
				
			<div class="panel-body">

			<div class="form-group row">
			  	<label for="name" class="col-4 col-form-label text-right createText">Name</label>
			  	<div class="col-7">
			  		<input type="text" value="{{$supplier->name}}" id="name" name="name" class="form-control">	
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="order_method" class="col-4 col-form-label text-right createText">Order Method</label>
			  	<div class="col-7">
			  		<select name="order_method" id="order_method" class="form-control createOption">
			  			@foreach ($ordermethods as $method)
			  				@if($supplier->order_method === $method->id)
			  					<option value="{{ $method->id }}" selected>{{ $method->method }}</option>
			  				@else
				  				<option value="{{ $method->id }}">{{ $method->method }}</option>
				  			@endif
			  			@endforeach
			  		</select>
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="lead_time" class="col-4 col-form-label text-right createText">Lead Time (Days)</label>
			  	<div class="col-7">
			  		<input type="number" value="{{$supplier->lead_time_days}}" id="lead_time" name="lead_time" class="form-control">	
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="order_email" class="col-4 col-form-label text-right createText">Order Email</label>
			  	<div class="col-7">
			  		<input type="email" id="order_email" value="{{$supplier->order_email_address}}" name="order_email" class="form-control">	
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="contact_name" class="col-4 col-form-label text-right createText">Contact Name</label>
			  	<div class="col-7">
			  		<input type="text" value="{{$supplier->contact_name}}" id="contact_name" name="contact_name" class="form-control">	
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="contact_number" class="col-4 col-form-label text-right createText">Contact Number</label>
			  	<div class="col-7">
			  		<input placeholder="5555555555" value="{{$supplier->contact_phone_number}}" type="tel" maxlength="10" id="contact_number" name="contact_number" class="form-control">
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="contact_email" class="col-4 col-form-label text-right createText">Contact Email</label>
			  	<div class="col-7">
			  		<input type="email" value="{{$supplier->contact_email}}" id="contact_email" name="contact_email" class="form-control">
			  	</div>
			</div>
			<h3 class="mb-5 billing">Billing Address</h3>
			<div class="form-group row">
			  	<label for="street_address" class="col-4 col-form-label text-right createText">Street Address</label>
			  	<div class="col-7">
			  		<input type="text" value="{{$supplier->billing_street_address}}" id="street_address" name="street_address" class="form-control">
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="city" class="col-4 col-form-label text-right createText">City</label>
			  	<div class="col-7">
			  		<input type="text" id="city" value="{{$supplier->billing_city}}" name="city" class="form-control">
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="state" class="col-4 col-form-label text-right createText">State</label>
			  	<div class="col-7">
			  		<input type="text" value="{{$supplier->billing_state}}"" maxlength="2" id="state" name="state" class="form-control">
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="zip" class="col-4 col-form-label text-right createText">Zip</label>
			  	<div class="col-7">
			  		<input type="text" value="{{$supplier->billing_zip}}" maxlength="5" id="zip" name="zip" class="form-control">
			  	</div>
			</div>
			</div>
		</div>
	</form>
	</div>
	</div>
</div>

@endsection