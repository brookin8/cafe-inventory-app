@extends('layouts.app')

@section('content')

<div class="card orderselect">
	<form class="mb-5" method="post" action="../invoices/orderselect">
	{{ csrf_field() }}
		
		<div class="row justify-content-center mt-5">
			<h2 class="mr-5">Order: </h2>
			<select name="order" class="orderdropdown">
				<option value="" disabled selected>Select Order</option>
				@foreach ($openorders as $order)
						<option value="{{$order->id}}">{{$order->supplier}} : {{$order->id}}</option>
				@endforeach
			</select>
		</div>


		<div class="row justify-content-center mt-3">
			<button class="btn btn-primary newitem" type="submit">Submit</button>
		</div>
	</form>
</div>

@endsection