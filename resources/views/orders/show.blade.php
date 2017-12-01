@extends('layouts.app')

@section('content')

	<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="row">
                		<div class="col text-left mt-2">
                			Order # {{$order->id}}
                		</div>
                		<div class="col text-right mt-2">
                			<a href="/orders" class="back ml-5"><button class="btn btn-primary newcount">Back</button></a>
                		</div>
                	</div>
				</div>

				<div class="panel-body">

				<div class="row mt-3 mb-4 ml-2">
					<div class="col-2">
					  	<h3 class="orderform">Order #:</h3> 
					  	<div class="orderform">{{$order->id}}</div>
					</div>
					<div class="col-3">
					  	<h3 class="orderform">Deliver To:</h3> 
					  	<div class="orderform">{{$order->store->name}}</div>
					</div>
					<div class="col-3">
					  	<h3 class="orderform">Supplier:</h3> 
					  	<div class="orderform">{{$order->supplier->name}}</div>
					</div>
					<div class="col-3">
						<h3 class="orderform">Submitted By:</h3> 
				  		<div class="orderform">{{$order->user->name}}</div>
				  	</div>
				</div>
				<div class="row mt-3 mb-5 ml-2">
					<div class="col-3">
				  		<h3 class="orderform">Total $ Amount:</h3> 
				  		<div class="orderform">{{$order->total_order_cost}}</div>
				  	</div>
				  	<div class="col-3">
				  		<h3 class="orderform">Order Date:</h3> 
				  		<div class="orderform">{{Carbon\Carbon::parse($order->updated_at)->format('m/d/Y')}}</div>
				  	</div>
					<div class="col-3">
						<h3 class="orderform">Expected Delivery Date:</h3> 
				  		<div class="orderform">{{Carbon\Carbon::parse($order->expected_delivery_date)->format('m/d/Y')}}</div>
				  	</div>
				  	<div class="col-3">
				  		@foreach($invoices as $invoice)
							@if($invoice->order_id === $order->id)
								<h3 class="orderform">Actual Delivery Date:</h3> 
								<div class="orderform">{{Carbon\Carbon::parse($invoice->actual_delivery_date)->format('m/d/Y')}}</div>
							@break
							@endif
						@endforeach
				  	</div>
				</div>

			<div class="table-responsive text-center">
				<table class="table tableborder table-striped table-hover" id="table">
					
					<thead>
						<tr>
							<th class="text-left">Item #</th>
							<th class="text-left">Item Name</th>
							<th class="text-left">UOM</th>
							<th class="text-left">Unit Cost</th>
							<th class="text-left">Ordered Qty</th>
							<th class="text-left">Total $</th>
						</tr>
					</thead>

					<tbody>
					@foreach($items as $item)
					<tr class="">
						<td class="text-left">{{$item->item_id}}</td>
						<td class="text-left">{{$item->itemname}}</td>
						<td class="text-left">{{$item->uom}}</td>
						<td class="text-left">${{$item->cost}}</td>
						<td class="text-left">{{$item->order_qty}}</td>
						<td class="text-left">${{$item->orders_dollar_amount}}</td>
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
		</div>
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

