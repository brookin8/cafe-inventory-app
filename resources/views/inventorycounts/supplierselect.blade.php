@extends('layouts.app')

@section('content')

<div class="card orderselect">
	<form class="mb-5" method="post" action="../inventorycounts/supplierselect">
	{{ csrf_field() }}
		
		<div class="row justify-content-center mt-5">
			<h2 class="mr-5">Supplier: </h2>
			 <select name="countsupplier[]" class="orderdropdown" multiple style="height:70px;">
				<option value="0" selected>All</option>
				@foreach ($suppliers as $supplier)
						<option value="{{$supplier->id}}">{{$supplier->name}}</option>
				@endforeach
			</select>
		</div>


		<div class="row justify-content-center mt-3">
			<button class="btn btn-primary newitem" type="submit">Submit</button>
		</div>
	</form>
</div>

@endsection