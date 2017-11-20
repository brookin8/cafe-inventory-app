@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<form method="post" action="/users/{{$user->id}}" class="col-7 pt-5 pb-5 mb-5 deleteForm">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<div class="form-group row justify-content-center">
				<h2>Delete User</h2>
			</div>
			<div class="form-group row">
			  	<label for="name" class="col-4 col-form-label text-right createText">Name</label>
			  	<div class="col-7">
			  		{{$user->name}}
			  	</div>
			</div>	

			<div class="form-group row">
			  	<label for="name" class="col-4 col-form-label text-right createText">Store</label>
			  	<div class="col-7">
			  		{{$user->store->name}}
			  	</div>
			</div>

			<div class="form-group row">
			  	<label for="supplier_item" class="col-4 col-form-label text-right createText">Access Level</label>
			  	<div class="col-7">
			  		{{$user->access_level->access_level}}
			  	</div>	
			</div>
		<div class="form-group row">
			<div class="col-4 col-form-label submitButtonSpace">
			</div>
			<div class="col-7 text-right">
				<a href="\users"><button class="btn btn-default" type="button">Nevermind</button></a>
				<button class="btn btn-secondary" type="submit">Delete</button>
			</div>
		</div>
	</form>
</div>

@endsection