@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<form method="post" action="/items/{{$item->id}}" class="col-7 pt-5 pb-5 mb-5 createForm">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="form-group row justify-content-center">
				<h2>Edit Item</h2>
			</div>
			<div class="form-group row">
			  	<label for="name" class="col-4 col-form-label text-right createText">Name</label>
			  	<div class="col-7">
			  		<input type="text" id="name" value="{{$item->name}}" name="name" class="form-control">
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="category" class="col-4 col-form-label text-right createText">Category</label>
			  	<div class="col-7">
			  		<select name="category" id="category" class="form-control createOption">
			  			@foreach ($categories as $category)
			  				@if($item->category_id === $category->id)
			  					<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
			  				@else
			  					<option value="{{ $category->id }}">{{ $category->name }}</option>
			  				@endif
			  			@endforeach
			  		</select>
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="supplier" class="col-4 col-form-label text-right createText">Supplier</label>
			  	<div class="col-7">
			  		<select name="supplier" id="supplier" class="form-control createOption">
			  			@if(is_null($item->suppliers()->first()))
			  					<option value="" disabled selected>Select Supplier</option>
			  			@endif
			  			@foreach ($suppliers as $supplier)
			  				@if($item->supplier_id === $supplier->id)
			  					<option value="{{ $supplier->id }}" selected>{{ $supplier->name }}</option>
			  				@else
			  					<option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
			  				@endif
			  			@endforeach
			  		</select>	
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="supplier_item" class="col-4 col-form-label text-right createText">Supplier Item Identifier</label>
			  	<div class="col-7">
			  		<input type="text" id="supplier_item" value="{{$item->supplier_item_identifier}}" name="supplier_item" class="form-control">
			  	</div>	
			</div>
			<div class="form-group row">
			  	<label for="uom" class="col-4 col-form-label text-right createText">Unit of Measure (order)</label>
			  	<div class="col-7">
			  		<select name="uom" id="uom" class="form-control createOption">
			  			@foreach ($uoms as $uom)
			  				@if($item->uom_id === $uom->id)
			  					<option value="{{ $uom->id }}" selected>{{ $uom->unit }}</option>
			  				@else
			  					<option value="{{ $uom->id }}">{{ $uom->unit }}</option>
			  				@endif
			  			@endforeach
			  		</select>	
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="cost" class="col-4 col-form-label text-right createText">Cost</label>
			  	<div class="col-7">
			  		<input type="number" value="{{$item->cost}}" step="any" id="cost" name="cost" class="form-control">
			  	</div>	
			</div>
		<div class="form-group row">
			<div class="col-4 col-form-label submitButtonSpace">
			</div>
			<div class="col-7 text-right">
				<a href="\items"><button class="btn btn-success" type="button">Back To Items</button></a>
				<button class="btn btn-success" type="submit">Submit Changes</button>
			</div>
		</div>
	</form>
</div>

@endsection