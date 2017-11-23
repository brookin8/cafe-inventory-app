@extends('layouts.app')

@section('content')

<div id="loader"></div>

<div style="display:none;" id="loaderDiv">
	<div class="container page">	
		<h3 class="ml-5 mr-5">Orders</h3>	
		<hr class="ml-5 mr-5 mb-4">

		<div class="row mb-5 ml-5 mr-5">
			<div class="col">
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
			</div>
		</div>


		<div class="row ml-5 mr-3">
			<div class="table-responsive text-center mr-4 ml-3">
				<table class="table tableborder table-striped table-hover mr-4" width="98%" id="table">
					<a href="/orders/supplierselect"><button class="btn btn-primary ml-5 newcount">New Order</button></a>
					<thead>
						<tr>
							<th class="text-left">Order Number</th>
							<th class="text-left">Supplier</th>
							<th class="text-left">Submitted Date</th>
							<th class="text-left">Submitted By</th>
							<th class="text-left">Expected Delivery Date</th>
							<th class="text-left">Total $ Amount</th>
							<th class="text-left">Status</th>
							<th class="text-left">Actions</th>
						</tr>
					</thead>
					<tbody>
					@foreach($orders as $order)
					<tr class="">
						<td class="text-left"><a href="../orders/{{$order->id}}" class="bodylink"><div>{{$order->id}}</div></a></td>
						<td class="text-left"><a href="../orders/{{$order->id}}" class="bodylink"><div>{{$order->supplier}}</div></a></td>
						<td class="text-left"><a href="../orders/{{$order->id}}" class="bodylink"><div>{{Carbon\Carbon::parse($order->updated_at)->format('m/d/Y')}}</div></a></td>
						<td class="text-left"><a href="../orders/{{$order->id}}" class="bodylink"><div>{{$order->username}}</div></a></td>
						<td class="text-left"><a href="../orders/{{$order->id}}" class="bodylink"><div>{{Carbon\Carbon::parse($order->expected_delivery_date)->format('m/d/Y')}}</div></a></td>
						<td class="text-left"><a href="../orders/{{$order->id}}" class="bodylink"><div>${{$order->total_order_cost}}</div></a></td>
						<td class="text-left"><a href="../orders/{{$order->id}}" class="bodylink"><div>open</div></a></td>
						<td class="text-left"><form action="../invoices/create" method="post">
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

