@extends('layouts.app')

@section('content')
	
	<h1 class="text-center">Inventory Counts</h1>

		<div class="row mb-5 ml-5 mr-5">
			<div class="col">
				<ul class="nav nav-tabs">
			  		<li class="nav-item">
			    		<a class="nav-link active" href="#">Submitted</a>
			  		</li>
					<li class="nav-item">
					    <a class="nav-link" href="/inventorycounts/saved">Saved</a>
					</li>
					<a href="/inventorycounts/create"><button class="btn newcount btn-primary mr-3">New Count</button></a>
				</ul>
			</div>
		</div>

	
	<div class="row ml-5 mr-3">
		<div class="table-responsive text-center mr-4 ml-3">
			<table class="table tableborder table-striped table-hover mr-4" width="98%" id="table">
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
					<td><a href="inventorycounts/{{$count->id}}" class="bodylink"><div>{{$count->id}}</div></a></td>
					<td><a href="inventorycounts/{{$count->id}}" class="bodylink"><div>${{$count->total_value_onhand}}</div></a></td>
					<td><a href="inventorycounts/{{$count->id}}" class="bodylink"><div>{{Carbon\Carbon::parse($count->updated_at)->format('m/d/Y')}}</div></a></td>
					<td><a href="inventorycounts/{{$count->id}}" class="bodylink"><div>{{$count->username}}</div></a></td>
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

