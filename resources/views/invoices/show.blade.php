@extends('layouts.app')

@section('content')

<div class="row justify-content-center">	
	<div class="col-5 pt-5 pl-5">
		<a href="/invoices" class="back ml-5 mt-5">&#8678; Back</a>
	</div>
	<div class="col-7">
		<h1>Invoice {{$invoice->id}}</h1>
	</div>
</div>

<div class="container orderShow">
	<div class="container orderShowHead mt-3">
		<div class="row mt-3 mb-4">
		  	<div class="ml-5 mr-4"><strong class="mr-1">Invoice No:</strong> 
		  		{{$invoice->id}}
		  	</div>
		  	<div class="ml-4 mr-4"><strong class="mr-1">Order No:</strong> 
		  		{{$invoice->order_id}}
		  	</div>
		  	<div class="ml-4 mr-4"><strong class="mr-1">Supplier:</strong> 
		  		{{$invoice->supplier->name}}
		  	</div>
		  	<div class="ml-4 mr-4"><strong class="mr-1">Submitted By:</strong> 
		  		{{$invoice->user->name}}
		  	</div>
		</div>
		<div class="row mt-3 mb-5">
		  	<div class="ml-4 mr-4"><strong class="mr-1">Total $ Amount:</strong> 
		  		${{$invoice->total_invoice_amount}}
		  	</div>
		  	<div class="ml-4 mr-4"><strong class="mr-1">Date Submitted:</strong> 
		  		{{Carbon\Carbon::parse($invoice->updated_at)->format('m/d/Y')}}
		  	</div>
		  	
		  	@if (is_null($invoice->order))
		  		<div class="ml-4 mr-4"><strong class="mr-1">No Order</strong></div>
		  	@else
		  		@if($invoice->total_invoice_amount < $invoice->order->total_order_cost)
		  		<div class="ml-4 mr-4"><strong class="mr-1">Delivery Short</strong></div> 
		  		@elseif($invoice->total_invoice_amount < $invoice->order->total_order_cost)
		  		<div class="ml-4 mr-4"><strong class="mr-1">Delivery Over</strong> </div>
		  		@endif
		  	@endif
		</div>
	</div>

	<div class="container orderShowBody mb-3">
		{{ csrf_field() }}
		<div class="table-responsive text-center">
			<table class="table table-borderless table-striped table-hover" id="table">
				
				<thead>
					<tr>
						<th class="text-center">Item Number</th>
						<th class="text-center">Item Name</th>
						<th class="text-center">UOM</th>
						@if (is_null($invoice->order))
						@else
							<th class="text-center">Ordered Qty</th>
						@endif
						<th class="text-center">Invoiced Qty</th>
					</tr>
				</thead>

				<tbody>
				@foreach($items as $item)
				<tr class="">
					<td>{{$item->item_id}}</td>
					<td>{{$item->itemname}}</td>
					<td>{{$item->uom}}</td>
					@if (is_null($invoice->order))
					@else
						<td>{{$item->orderqty}}</td>
					@endif
					<td>{{$item->invoice_qty}}</td>
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

