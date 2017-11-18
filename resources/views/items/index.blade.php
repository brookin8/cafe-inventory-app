@extends('layouts.app')

@section('content')
	
	<h1 class="text-center">Items</h1>

	<div class="container">
	<div class="row mt-3 mb-4">
		<a href="/items/create"><button class="btn btn-default ml-4">New Item</button></a>
	</div>
	</div>

	<div class="container ">
		<div class="table-responsive text-center">
			<table class="table table-borderless table-striped table-hover" id="table">
				<thead>
					<tr>
						<th class="text-center">ID</th>
						<th class="text-center">Name</th>
						<th class="text-center">Supplier</th>
						<th class="text-center">UOM</th>
						<th class="text-center">Cost</th>
						<th class="text-center">Category</th>
						<th class="text-center">Last Edited</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach($items as $item)
				<tr class="item{{$item->id}}">
					<td>{{$item->id}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->supplier}}</td>
					<td>{{$item->uom}}</td>
					<td>${{$item->cost}}</td>
					<td>{{$item->category}}</td>
					<td>{{$item->username}}</td>
					<td><a href="/items/{{$item->id}}/edit"><button class="edit-modal btn btn-sm btn-info">
							<span class="glyphicon glyphicon-edit"></span>
						</button></a>
						<a href="/items/{{$item->id}}"><button type="button" class="delete-modal btn btn-sm btn-danger">
							<span class="glyphicon glyphicon-trash"></span>
						</button></a>
					</td>
				</tr>
				@endforeach
				@foreach($items2 as $item2)
				<tr class="item{{$item2->id}}">
					<td>{{$item2->id}}</td>
					<td>{{$item2->name}}</td>
					<td>NO SUPPLIER</td>
					<td>{{$item2->uom}}</td>
					<td>${{$item2->cost}}</td>
					<td>{{$item2->category}}</td>
					<td>{{$item2->username}}</td>
					<td><a href="/items/{{$item2->id}}/edit"><button class="edit-modal btn btn-sm btn-info">
							<span class="glyphicon glyphicon-edit"></span>
						</button></a>
						<a href="/items/{{$item2->id}}"><button type="button" class="delete-modal btn btn-sm btn-danger">
							<span class="glyphicon glyphicon-trash"></span>
						</button></a>
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>


	<script>

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

