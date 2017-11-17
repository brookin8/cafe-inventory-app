@extends('layouts.app')

@section('content')

<div class="card orderselect">
	<form class="mb-5" method="post" action="../invoices/orderexists">
	{{ csrf_field() }}
		
		<div class="row justify-content-center mt-5">
			<h2 class="mr-5">Order Exists?: </h2>
		</div>

		<div class="row justify-content-center mt-3">
			<button name="orderexist" class="btn btn-primary" type="submit" value="1">Yes</button>
			<button name="orderexist" class="btn btn-danger" type="submit" value="2">No</button>
		</div>

	</form>
</div>

@endsection