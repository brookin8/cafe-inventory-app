@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<form method="post" action="/items" class="col-7 pt-5 pb-5 mb-5 createForm">
			{{ csrf_field() }}
			<div class="form-group row justify-content-center">
				<h2>New Item</h2>
			</div>
			<div class="form-group row">
			  	<label for="name" class="col-4 col-form-label text-right createText">Name</label>
			  	<div class="col-7">
			  		<input type="text" id="name" name="name" class="form-control">	
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="category" class="col-4 col-form-label text-right createText">Category</label>
			  	<div class="col-7">
			  		<select name="category" id="category" class="form-control createOption">
			  				<option value="" disabled selected>Select Category</option>
			  			@foreach ($categories as $category)
			  				<option value="{{ $category->id }}">{{ $category->name }}</option>
			  			@endforeach
			  		</select>
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="supplier" class="col-4 col-form-label text-right createText">Supplier</label>
			  	<div class="col-7">
			  		<select name="supplier" id="supplier" class="form-control createOption">
			  				<option value="" disabled selected>Select Supplier</option>
			  			@foreach ($suppliers as $supplier)
			  				<option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
			  			@endforeach
			  		</select>	
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="supplier_item" class="col-4 col-form-label text-right createText">Supplier Item Identifier</label>
			  	<div class="col-7">
			  		<input type="text" id="supplier_item" name="supplier_item" class="form-control">
			  	</div>	
			</div>
			<div class="form-group row">
			  	<label for="uom" class="col-4 col-form-label text-right createText">Unit of Measure (order)</label>
			  	<div class="col-7">
			  		<select name="uom" id="uom" class="form-control createOption">
			  			<option value="" disabled selected>Select UOM</option>
			  			@foreach ($uoms as $uom)
			  				<option value="{{ $uom->id }}">{{ $uom->unit }}</option>
			  			@endforeach
			  		</select>	
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="cost" class="col-4 col-form-label text-right createText">Cost</label>
			  	<div class="col-7">
			  		<input type="number" step="any" id="cost" name="cost" class="form-control">
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