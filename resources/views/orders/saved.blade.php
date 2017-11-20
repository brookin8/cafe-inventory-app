@extends('layouts.app')

@section('content')
	
	<h1 class="text-center">Orders</h1>

		<div class="row mb-5 ml-5 mr-5">
			<div class="col">
				<ul class="nav nav-tabs">
			  		 <li class="nav-item">
					    <a class="nav-link" href="/orders">All</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="/orders/open">Open</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link active" href="#">Saved (Unsent)</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="/orders/closed">Closed</a>
					  </li>
						<a href="/orders/supplierselect"><button class="btn btn-primary mr-4 newcount">New Order</button></a>
				</ul>
			</div>
		</div>

	<div class="row ml-5 mr-3">
		<div class="table-responsive text-center mr-4 ml-3">
			<table class="table tableborder table-striped table-hover mr-4" width="98%" id="table">
				<thead>
					<tr>
						<th class="text-center">Order Number</th>
						<th class="text-center">Supplier</th>
						<th class="text-center">Last Updated</th>
						<th class="text-center">Total $ Amount</th>
						<th class="text-center">Status</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach($orders as $order)
				<tr class="">
					<td><a href="../orders/{{$order->id}}" class="bodylink"><div>{{$order->id}}</div></a></td>
					<td><a href="../orders/{{$order->id}}" class="bodylink"><div>{{$order->supplier}}</div></a></td>
					<td><a href="../orders/{{$order->id}}" class="bodylink"><div>{{Carbon\Carbon::parse($order->updated_at)->format('m/d/Y')}}</div></a></td>
					<td><a href="../orders/{{$order->id}}" class="bodylink"><div>${{$order->total_order_cost}}</div></a></td>
					<td><a href="../orders/{{$order->id}}" class="bodylink"><div>saved (not sent)</div></a></td>
					<td>
						<div class="row">
							<a href="../orders/{{$order->id}}/edit"><button class="ml-5 mr-2 edit-modal btn btn-sm btn-info"
								data-info="">
								<span class="glyphicon glyphicon-edit"></span>
							</button></a>
							<form method="post" action="/orders/{{$order->id}}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
	                            <button class="delete-modal btn btn-sm btn-danger"
								data-info="">
								<span class="glyphicon glyphicon-trash"></span>
								</button>
							</form>
						</div>
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<script>
    
	//   $(document).ready(function() {
	//     $('#table').DataTable();
	// } );


	var table = $('#table').DataTable({
		 dom: 'Blfrtip', 
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

