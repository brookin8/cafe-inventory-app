@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<form method="post" action="/suppliers/{{$supplier->id}}" class="col-7 pt-4 pb-5 mb-5 deleteForm">
		<div class="form-group row justify-content-center">
			<h2>Delete Supplier</h2>
		</div>
		<div class="form-group row">
		  	<label for="name" class="col-4 col-form-label text-right createText">Name</label>
		  	<div class="col-7">
		  		{{$supplier->name}}	
		  	</div>
		</div>
		<div class="form-group row justify-content-center">
			<strong>This action will affect {{$itemcount}} items.</strong>
		</div>
		<div class="form-group row">
		  	<label for="order_method" class="col-4 col-form-label text-right createText">Items Affected:</label>
		  	<div class="col-7">
		  		
		  			@foreach ($items as $item)
		  				{{$item->id}} : {{$item->name}} <br>
		  			@endforeach

		  	</div>
		</div>
	
		<div class="form-group row">
			<div class="col-4 col-form-label submitButtonSpace">
			</div>
			<div class="col-7 text-right">
				<a href="\suppliers"><button class="btn btn-default" type="button">Nevermind</button></a>
				<button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal">
				Delete</button>
			</div>
		</div>
	</form>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       	Affected items will now have 'NO SUPPLIER' listed in the supplier field on the main items page. <br>
       	You can search 'NO SUPPLIER' to easily update these items, so that they are orderable again. 
      </div>
      <div class="modal-footer">
        <form method="post" action="/suppliers/{{$supplier->id}}">
        	{{ method_field('DELETE') }}
            {{ csrf_field() }}
        	<button type="submit" class="btn btn-primary">Ok</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection