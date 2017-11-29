@extends('layouts.app')

@section('content')

	<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="row">
                		<div class="col text-left mt-3">
                			Order # {{$order->id}}
                		</div>
                		<div class="col text-right">
                			<a href="/orders" class="back ml-5 mt-5"><button class="btn btn-primary newcount">Back</button></a>
                		</div>
                	</div>
				</div>

				<div class="panel-body">

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

				  	<div class="ml-4 mr-5">
				  		@foreach($invoices as $invoice)
							@if($invoice->order_id === $order->id)
								<strong class="mr-1">Actual Delivery Date:</strong> 
								{{Carbon\Carbon::parse($invoice->actual_delivery_date)->format('m/d/Y')}}
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

