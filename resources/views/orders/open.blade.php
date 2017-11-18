@extends('layouts.app')

@section('content')
	
	<h1 class="text-center">Orders</h1>

	<div class="container">
	<div class="row mt-3 mb-4">
		<a href="/orders/supplierselect"><button class="btn btn-default ml-4">New Order</button></a>
	</div>
	</div>

	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link" href="/orders">All</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="#">Open</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="/orders/saved">Saved (Unsent)</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="/orders/closed">Closed</a>
	  </li>
	</ul>
	<div class="container ">
		{{ csrf_field() }}
		<div class="table-responsive text-center">
			<table class="table table-borderless table-striped table-hover" id="table">
				<thead>
					<tr>
						<th class="text-center">Order Number</th>
						<th class="text-center">Supplier</th>
						<th class="text-center">Submitted Date</th>
						<th class="text-center">Submitted By</th>
						<th class="text-center">Expected Delivery Date</th>
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
					<td><a href="../orders/{{$order->id}}" class="bodylink"><div>{{$order->username}}</div></a></td>
					<td><a href="../orders/{{$order->id}}" class="bodylink"><div>{{Carbon\Carbon::parse($order->expected_delivery_date)->format('m/d/Y')}}</div></a></td>
					<td><a href="../orders/{{$order->id}}" class="bodylink"><div>${{$order->total_order_cost}}</div></a></td>
					<td><a href="../orders/{{$order->id}}" class="bodylink"><div>open</div></a></td>
					<td><form action="../invoices/create" method="post">
							{{ csrf_field() }}
									<button class="invoiceButton btn btn-sm btn-info"
								data-info="" type="submit">
									<input type="hidden" name="order" value="{{$order->id}}">
									Invoice
									</button>
									</form>
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

