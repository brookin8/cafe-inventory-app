@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="row">
                		<div class="col text-left mt-3">
							Inventory Count # {{$count->id}}
                		</div>
                		<div class="col text-right">
                			<a href="../inventorycounts" class="back ml-5 mt-5"><button class="btn btn-primary newcount">Back</button></a>
                		</div>
                	</div>
				</div>

				<div class="panel-body">

				<div class="row mt-3 mb-4 ml-2">
				  	<div class="col-2">
					  	<h3 class="orderform">Total $:</h3> 
				  		<div class="orderform">${{$count->total_value_onhand}}</div>
				  	</div>
				  	<div class="col-3">
					  	<h3 class="orderform">Submitted By:</h3> 
				  		<div class="orderform">{{$count->user->name}}</div>
				  	</div>
				  	<div class="col-4">
				  		<h3 class="orderform">Date Submitted:</h3> 
				  		<div class="orderform">{{Carbon\Carbon::parse($count->updated_at)->format('m/d/Y')}}</div>
				  	</div>
				</div>
				<div class="row mt-3 mb-5 ml-2">
				  	<div class="col-4">
				  		<h3 class="orderform">Categories</h3>
				  		<div class="orderform">
					  		<ul>
							  	@foreach($categories as $category)
							  	<li>{{ $category }}</li>
							  	@endforeach	
							</ul>
						</div>
				  	</div>
				  	<div class="col-4">
				  		<h3 class="orderform">Suppliers</h3>
				  		<div class="orderform">
					  		<ul>
							  	@foreach($suppliers as $supplier)
							  	<li>{{ $supplier }}</li>
							  	@endforeach	
							</ul>
						</div>
				  	</div>
				</div>

				<div class="table-responsive text-center">
					<table class="table table-borderless table-striped table-hover" id="table">
						
						<thead>
							<tr>
								<th class="text-left">Item Number</th>
								<th class="text-left">Item Name</th>
								<th class="text-left">UOM</th>
								<th class="text-left">Unit Cost</th>
								<th class="text-left">Qty Onhand</th>
								<th class="text-left">Total $ Onhand</th>
							</tr>
						</thead>

						<tbody>
						@foreach($items as $item)
						<tr class="">
							<td class="text-left">{{$item->item_id}}</td>
							<td class="text-left">{{$item->itemname}}</td>
							<td class="text-left">{{$item->uom}}</td>
							<td class="text-left">${{$item->cost}}</td>
							<td class="text-left">{{$item->inventorycount_qty}}</td>
							<td class="text-left">${{$item->inventory_dollar_amount}}</td>
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

