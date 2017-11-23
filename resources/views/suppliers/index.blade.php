@extends('layouts.app')

@section('content')


<div id="loader"></div>
	
<div style="display:none;" id="loaderDiv">
	<div class="container page">	
		<h3 class="ml-5 mr-5">Suppliers</h3>	
		<hr class="ml-5 mr-5 mb-4">

	<div class="row ml-5 mr-3">
		<div class="table-responsive mr-4 ml-3">
			<table class="table tableborder table-striped table-hover" id="table">
			<a href="/suppliers/create"><button class="btn btn-primary newcount mr-5">New Supplier</button></a>
				<thead>
					<tr>
						<th class="text-left">ID</th>
						<th class="text-left">Name</th>
						<th class="text-left">LT (Days)</th>
						<th class="text-left">Order Method</th>
						<th class="text-left">Order Email</th>
						<th class="text-left">Last Updated</th>
						<th class="text-left">Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach($suppliers as $supplier)
				<tr class="supplier{{$supplier->id}}">
					<td class="text-left"><a href="../suppliers/details/{{$supplier->id}}" class="bodylink"><div>{{$supplier->id}}</div></a></td>
					<td class="text-left">><a href="../suppliers/details/{{$supplier->id}}" class="bodylink"><div>{{$supplier->name}}</div></a></td>
					<td class="text-left">><a href="../suppliers/details/{{$supplier->id}}" class="bodylink"><div>{{$supplier->lead_time_days}}</div></a></td>
					<td class="text-left">><a href="../suppliers/details/{{$supplier->id}}" class="bodylink"><div>{{$supplier->method}}</div></a></td>
					<td class="text-left">><a href="../suppliers/details/{{$supplier->id}}" class="bodylink"><div>{{$supplier->order_email_address}}</div></a></td>
					<td class="text-left">><a href="../suppliers/details/{{$supplier->id}}" class="bodylink"><div>{{Carbon\Carbon::parse($supplier->updated_at)->format('m/d/Y')}}</div></a></td>
					<td class="text-left">
						<div class="row">
						<a href="/suppliers/{{$supplier->id}}/edit"><button class="edit-modal btn btn-sm btn-info ml-3"
							data-info="">
							<span class="glyphicon glyphicon-edit"></span>
						</button></a>
                         <a href="/suppliers/{{$supplier->id}}"><button class="ml-2 delete-modal btn btn-sm btn-danger"
							data-info="">
							<span class="glyphicon glyphicon-trash"></span>
						</button></a>
						</div>
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

