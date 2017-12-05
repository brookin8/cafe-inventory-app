@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="row">
                		<div class="col text-left mt-3">
							Invoice # {{$invoice->id}}
                		</div>
                		<div class="col text-right">
                			<a href="../invoices" class="back ml-5 mt-3"><button class="btn btn-primary newcount">Back</button></a>
                		</div>
                	</div>
				</div>

				<div class="panel-body">
				
				<div class="row mt-3 mb-4 ml-2">
				  	<div class="col-2">
					  	<h3 class="orderform">Order #:</h3> 
				  		<div class="orderform">{{$invoice->order_id}}</div>
				  	</div>
				  	<div class="col-3">
				  		<h3 class="orderform">Supplier:</h3> 
				  		<div class="orderform">{{$invoice->supplier->name}}</div>
				  	</div>
				  	<div class="col-4">
				  		<h3 class="orderform">Submitted By:</h3> 
				  		<div class="orderform">{{$invoice->user->name}}</div>
				  	</div>
				</div>
				<div class="row mt-3 mb-4 ml-2">
				  	<div class="col-3">
				  		<h3 class="orderform">Total $:</h3> 
				  		<div class="orderform">${{$invoice->total_invoice_amount}}</div>
				  	</div>
				  	<div class="col-4">
				  		<h3 class="orderform">Date Submitted:</h3> 
				  		<div class="orderform">{{Carbon\Carbon::parse($invoice->updated_at)->format('m/d/Y')}}</div>
				  	</div>
				  	
				  	@if (is_null($invoice->order))
				  		<div class="col-3">
				  			<h3 class="ordershow">No Order Data</h3>
				  		</div>
				  	@else
				  		@if($invoice->total_invoice_amount < $invoice->order->total_order_cost)
				  		<div class="col-3">
				  			<h3 class="ordershow">
				  			Delivery Short : ${{ $invoice->order->total_order_cost - $invoice->total_invoice_amount}}</h3>
				  		</div> 
				  		@elseif($invoice->total_invoice_amount < $invoice->order->total_order_cost)
				  		<div class="col-3">
				  			<h3 class="ordershow">Delivery Over</h3>
				  		</div>
				  		@endif
				  	@endif
				</div>
				<div class="row mt-3 mb-5 ml-2">
				  	@if ($backorder === true)
				  		<div class="col-4">
				  			<h3 class="orderform">Items on Backorder:</h3>
				  			<div class="orderform">
					  			<ul>
					  				@foreach ($backordered_items as $backordered_item)
					  				<li>
					  					{{$backordered_item}}
					  				</li>
					  				@endforeach
					  			</ul>
				  			</div>
				  		</div>
				  	@endif
				</div>

				{{ csrf_field() }}
				<div class="table-responsive text-center">
					<table class="table tableborder table-striped table-hover" id="table">
						
						<thead>
							<tr>
								<th class="text-left">Item Number</th>
								<th class="text-left">Item Name</th>
								<th class="text-left">UOM</th>
								<th class="text-left">Item Cost</th>
								@if (is_null($invoice->order))
								@else
									<th class="text-left">Ordered Qty</th>
								@endif
								<th class="text-left">Invoiced Qty</th>
							</tr>
						</thead>

						<tbody>
						@if (is_null($invoice->order))
							@foreach($items as $item)
							<tr class="">
								<td class="text-left">{{$item->item_id}}</td>
								<td class="text-left">{{$item->itemname}}</td>
								<td class="text-left">{{$item->uom}}</td>
								<td class="text-left">${{$item->cost}}</td>
								<td class="text-left">{{$item->invoice_qty}}</td>
							</tr>
							@endforeach
						@else
							@foreach($orderitems as $orderitem)
							<tr class="">
								<td class="text-left">{{$orderitem->item_id}}</td>
								<td class="text-left">{{$orderitem->itemname}}</td>
								<td class="text-left">{{$orderitem->uom}}</td>
								<td class="text-left">${{$orderitem->cost}}</td>
								<td class="text-left">{{$orderitem->order_qty}}</td>
								@foreach($items as $item)
									@if ($item->item_id === $orderitem->item_id)
										<td class="text-left">{{$item->invoice_qty}}</td>
									@else
									@endif
								@endforeach
							</tr>
							@endforeach
						@endif
						
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

