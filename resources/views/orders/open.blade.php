@extends('layouts.app')

@section('content')


<div id="loader"></div>
<div style="display:none;" id="loaderDiv">
	<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading withtabs">
                	<div class="row">
                		<div class="col text-left mt-2">
                			Orders	
                		</div>
                		<div class="col">
	                			<ul class="nav nav-tabs navbar-right">
						  		<li class="nav-item">
								    <a class="nav-link tabs" href="/orders">All</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link active tabs" href="#">Open</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link tabs" href="/orders/saved">Saved</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link tabs" href="/orders/closed">Closed</a>
								  </li>
								</ul>
							</div>
                		<div class="col-2 mt-1">
                			<a href="/orders/supplierselect"><button class="ml-5 btn btn-primary newcount">New Order</button></a>
                		</div>
                	</div>
				</div>

				<div class="panel-body">

					<div class="row ml-4 mr-4">
						<div class="table-responsive text-center">
							<table class="table tableborder table-striped table-hover mr-4" width="98%" id="table">
								
								<thead>
									<tr>
										<th class="text-left">Order #</th>
										<th class="text-left">Supplier</th>
										<th class="text-left">Submitted</th>
										<th class="text-left">Placed By</th>
										<th class="text-left">ETA</th>
										<th class="text-left">Total($)</th>
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

