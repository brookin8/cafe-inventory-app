@extends('layouts.app')

@section('content')

<div class="row justify-content-center">	
	<div class="col-5 pt-5 pl-5">
		<a href="/orders" class="back ml-5 mt-5">&#8678; Back</a>
	</div>
	<div class="col-7">	
		<h1>Order # {{$order->id}}</h1>
	</div>
</div>

<div class="container orderShow">
<div class="container orderShowHead mt-3">
	<div class="row mt-3 mb-4">
	  	<div class="ml-5 mr-4"><strong class="mr-1">Order No:</strong> 
	  		{{$order->id}}
	  	</div>
	  	<div class="ml-4 mr-4"><strong class="mr-1">Deliver To:</strong> 
	  		{{$order->store->name}}
	  	</div>
	  	<div class="ml-4 mr-4"><strong class="mr-1">Supplier:</strong> 
	  		{{$order->supplier->name}}
	  	</div>
	  	<div class="ml-4 mr-4"><strong class="mr-1">Total $ Amount:</strong> 
	  		{{$order->total_order_cost}}
	  	</div>
	  	<div class="ml-4 mr-4"><strong class="mr-1">Submitted By:</strong> 
	  		{{$order->user->name}}
	  	</div>
	</div>
	<div class="row mt-3 mb-5">
	  	<div class="ml-5 mr-5"><strong class="mr-1">Order Date:</strong> 
	  		{{Carbon\Carbon::parse($order->updated_at)->format('m/d/Y')}}
	  	</div>
		<div class="ml-4 mr-5"><strong class="mr-1">Expected Delivery Date:</strong> 
	  		{{Carbon\Carbon::parse($order->expected_delivery_date)->format('m/d/Y')}}
	  	</div>
	  	<div class="ml-4 mr-5"><strong class="mr-1">Actual Delivery Date:</strong> 
	  		GET FROM INVOICE
	  	</div>
	</div>
</div>

<div class="container orderShowBody mb-3">
	{{ csrf_field() }}
	<div class="table-responsive text-center">
		<table class="table tableborder table-striped table-hover" id="table">
			
			<thead>
				<tr>
					<th class="text-center">Item Number</th>
					<th class="text-center">Item Name</th>
					<th class="text-center">UOM</th>
					<th class="text-center">Unit Cost</th>
					<th class="text-center">Ordered Qty</th>
					<th class="text-center">Total $</th>
				</tr>
			</thead>

			<tbody>
			@foreach($items as $item)
			<tr class="">
				<td>{{$item->item_id}}</td>
				<td>{{$item->itemname}}</td>
				<td>{{$item->uom}}</td>
				<td>${{$item->cost}}</td>
				<td>{{$item->order_qty}}</td>
				<td>${{$item->orders_dollar_amount}}</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>
	</div>
</div>


	<script>
    
	//   $(document).ready(function() {
	//     $('#table').DataTable();
	// } );


	var table = $('#table').DataTable({
		 dom: 'Bfrt', 
		 buttons: [
        	{extend:'copy', className:'tableButton'},
        	{extend:'excel', className:'tableButton'},
        	{extend:'pdf', className:'tableButton'},
        	{extend:'csv', className:'lastTableButton'}
    	],
    	filterSelectClass: 'customFilter',
    	filterText: 'Search'
	});

	table.buttons().container()
    .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );

   

    </script>
@endsection

