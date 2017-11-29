@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<form method="post" action="/items/{{$item->id}}" class="col-7 pt-5 pb-5 mb-5 deleteForm">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<div class="form-group row justify-content-center">
				<h2>Delete Item</h2>
			</div>
			<div class="form-group row">
			  	<label for="name" class="col-6 text-right deleteText">Item No</label>
			  	<div class="col-6 deleteText2">
			  		{{$item->id}}
			  	</div>
			</div>	

			<div class="form-group row">
			  	<label for="name" class="col-6 text-right deleteText">Name</label>
			  	<div class="col-6 deleteText2">
			  		{{$item->name}}
			  	</div>
			</div>

			<div class="form-group row">
			  	<label for="supplier" class="col-6 text-right deleteText">Supplier</label>
			  	<div class="col-6 deleteText2">
			  			@if(!is_null($itemsupplier->deleted_at))
			  					NO SUPPLIER
			  			@else
			  				{{$item->supplier->name}}
			  			@endif
			  	</div>
			</div>
			<div class="form-group row">
			  	<label for="supplier_item" class="col-6 col-form-label text-right deleteText">Supplier Item Identifier</label>
			  	<div class="col-6 deleteText2">
			  		{{$item->supplier_item_identifier}}
			  	</div>	
			</div>
		<div class="form-group row">
			<div class="col-6 col-form-label submitButtonSpace">
			</div>
			<div class="col-6 text-right">
				<a href="\items"><button class="btn btn-default" type="button">Nevermind</button></a>
				<button class="btn btn-outline-danger" type="submit">Delete</button>
			</div>
		</div>
	</form>
</div>

@endsection