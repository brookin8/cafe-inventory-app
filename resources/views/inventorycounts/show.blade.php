@extends('layouts.app')

@section('content')

<div class="row justify-content-center">	
	<div class="col-4 pt-5 pl-5">
		<a href="/inventorycounts" class="back ml-5 mt-5">&#8678; Back</a>
	</div>
	<div class="col-8">	
		<h1>Inventory Count # {{$count->id}}</h1>
	</div>
</div>


<div class="container orderShow">
	<div class="container orderShowHead mt-3">
		<div class="row mt-4 mb-4 justify-content-center">
		  	<div class="ml-5 mr-4"><strong class="mr-1">Count No:</strong> 
		  		{{$count->id}}
		  	</div>
		  	<div class="ml-4 mr-4"><strong class="mr-1">Total $ Amount:</strong> 
		  		${{$count->total_value_onhand}}
		  	</div>
		  	<div class="ml-4 mr-4"><strong class="mr-1">Submitted By:</strong> 
		  		{{$count->user->name}}
		  	</div>
		  	<div class="ml-4 mr-4"><strong class="mr-1">Date Submitted:</strong> 
		  		{{Carbon\Carbon::parse($count->updated_at)->format('m/d/Y')}}
		  	</div>
		</div>
		<div class="row mt-3 mb-5 justify-content-center">
		  	<div class="invcountcat mr-5"><strong>Categories</strong>
		  		<ul>
				  	@foreach($categories as $category)
				  	<li>{{ $category }}</li>
				  	@endforeach	
				</ul>
		  	</div>
		  	<div class="ml-5 mr-5"><strong>Suppliers</strong>
		  		<ul>
				  	@foreach($suppliers as $supplier)
				  	<li>{{ $supplier }}</li>
				  	@endforeach	
				</ul>
		  	</div>
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
						<th class="text-center">Unit Cost</th>
						<th class="text-center">Qty Onhand</th>
						<th class="text-center">Total $ Onhand</th>
					</tr>
				</thead>

				<tbody>
				@foreach($items as $item)
				<tr class="">
					<td>{{$item->item_id}}</td>
					<td>{{$item->itemname}}</td>
					<td>{{$item->uom}}</td>
					<td>${{$item->cost}}</td>
					<td>{{$item->inventorycount_qty}}</td>
					<td>${{$item->inventory_dollar_amount}}</td>
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

