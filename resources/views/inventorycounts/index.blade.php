@extends('layouts.app')

@section('content')
	
	<h1 class="text-center">Inventory Counts</h1>

	<div class="container">
	<div class="row mt-3 mb-4">
		<a href="/inventorycounts/create"><button class="btn btn-default ml-4">New Count</button></a>
	</div>
	</div>

	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link active" href="#">Submitted</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="/inventorycounts/saved">Saved</a>
	  </li>
	</ul>
	<div class="container ">
		{{ csrf_field() }}
		<div class="table-responsive text-center">
			<table class="table table-borderless table-striped table-hover" id="table">
				<thead>
					<tr>
						<th class="text-center">Count Record ID</th>
						<th class="text-center">Total $ Amount</th>
						<th class="text-center">Date Submitted</th>
						<th class="text-center">Submitted By</th>
					</tr>
				</thead>
				<tbody>
				@foreach($counts as $count)
				<tr class="">
					<td>{{$count->id}}</td>
					<td>{{$count->total_value_onhand}}</td>
					<td>{{Carbon\Carbon::parse($count->updated_at)->format('m/d/Y')}}</td>
					<td>{{$count->username}}</td>
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

