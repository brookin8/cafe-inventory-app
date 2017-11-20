@extends('layouts.app')

@section('content')
	
	<h1 class="text-center">Suppliers</h1>

	<div class="container">
		<div class="row mt-3 mb-5">
			<a href="/suppliers/create"><button class="btn btn-primary newcount mr-5 mb-5">New Supplier</button></a>
		</div>
	</div>

	<div class="container ">
		{{ csrf_field() }}
		<div class="table-responsive text-center">
			<table class="table tableborder table-striped table-hover" id="table">
				<thead>
					<tr>
						<th class="text-center">ID</th>
						<th class="text-center">Name</th>
						<th class="text-center">Lead Time (Days)</th>
						<th class="text-center">Order Method</th>
						<th class="text-center">Order Email</th>
						<th class="text-center">Contact</th>
						<th class="text-center">Contact Phone</th>
						<th class="text-center">Contact Email</th>
						<th class="text-center">Billing Address</th>
						<th class="text-center">Billing City</th>
						<th class="text-center">Billing State</th>
						<th class="text-center">Billing Zip</th>
						<th class="text-center">Last Updated</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach($suppliers as $supplier)
				<tr class="supplier{{$supplier->id}}">
					<td>{{$supplier->id}}</td>
					<td>{{$supplier->name}}</td>
					<td>{{$supplier->lead_time_days}}</td>
					<td>{{$supplier->method}}</td>
					<td>{{$supplier->order_email_address}}</td>
					<td>{{$supplier->contact_name}}</td>
					<td>{{substr_replace(substr_replace($supplier->contact_phone_number,'-',3,0),'-',7,0)}}</td>
					<td>{{$supplier->contact_email}}</td>
					<td>{{$supplier->billing_street_address}}</td>
					<td>{{$supplier->billing_city}}</td>
					<td>{{$supplier->billing_state}}</td>
					<td>{{$supplier->billing_zip}}</td>
					<td>{{Carbon\Carbon::parse($supplier->updated_at)->format('m/d/Y')}}</td>
					<td>
						<div class="row">
						<a href="/suppliers/{{$supplier->id}}/edit"><button class="edit-modal btn btn-sm btn-info ml-3"
							data-info="">
							<span class="glyphicon glyphicon-edit"></span>
						</button></a>
                         <a href="/suppliers/{{$supplier->id}}"><button class="ml-2 delete-modal btn btn-sm btn-danger"
							data-info="">
							<span class="glyphicon glyphicon-trash"></span>
						</button>
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

