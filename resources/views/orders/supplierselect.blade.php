@extends('layouts.app')

@section('content')

<div class="card orderselect">
	<form class="mb-5" method="post" action="../orders/supplierselect">
	{{ csrf_field() }}
		
		<div class="row justify-content-center mt-5">
			<h2 class="mr-5">Supplier: </h2>
			<select name="supplier" class="orderdropdown">
				<option value="" disabled selected>Select Supplier</option>
				@foreach ($suppliers as $supplier)
						<option value="{{$supplier->id}}">{{$supplier->name}}</option>
				@endforeach
			</select>
		</div>


		<div class="row justify-content-center mt-3">
			<button class="btn btn-primary" type="submit">Submit</button>
		</div>
	</form>
</div>

@endsection