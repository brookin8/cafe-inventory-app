@extends('layouts.app')

@section('content')
	
	<div id="loader"></div>
	
<div style="display:none;" id="loaderDiv">

	<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="row">
                		<div class="col text-left">
                			Items	
                		</div>
                		<div class="col">
                			<a href="/items/create"><button class="ml-5 btn btn-primary newcount">New Item</button></a>
                		</div>
                	</div>
				</div>
				<div class="panel-body">

				<div class="row ml-5 mr-3">
					<div class="table-responsive mr-4 ml-3">
						<table class="table table-striped table-hover tableborder" id="table">
						
							<thead>
								<tr>
									<th class="text-left">ID</th>
									<th class="text-left">Name</th>
									<th class="text-left">Category</th>
									<th class="text-left">Supplier</th>
									<th class="text-left">UOM</th>
									<th class="text-left">Cost</th>
									<th class="text-left">PARs</th>
									<th class="text-left">Edited</th>
									<th class="text-left">Actions</th>
								</tr>
							</thead>
							<tbody>
							@foreach($items as $item)
							<tr class="item{{$item->id}}">
								<td class="text-left">{{$item->id}}</td>
								<td class="text-left">{{$item->name}}</td>
								<td class="text-left">{{$item->category}}</td>
								<td class="text-left">{{$item->supplier}}</td>
								<td class="text-left">{{$item->uom}}</td>
								<td class="text-left">${{$item->cost}}</td>
								@if(in_array($item->id,$itemswithpars))
									@foreach($pars as $par)
										@if($item->id === $par->item_id)
											<td class="text-left">{{$par->PARs}}</td>
										@break
										@endif
									@endforeach
								@else
								<td class="text-left">NO PARs</td>
								@endif
								<td class="text-left">{{$item->username}}</td>
								<td class="text-left"><a href="/items/{{$item->id}}/edit"><button class="edit-modal btn btn-sm btn-info">
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
								<td class="text-left">{{$item2->id}}</td>
								<td class="text-left">{{$item2->name}}</td>
								<td class="text-left">NO SUPPLIER</td>
								<td class="text-left">{{$item2->uom}}</td>
								<td class="text-left">${{$item2->cost}}</td>
								<td class="text-left">{{$item2->category}}</td>
								<td class="text-left">{{$item2->username}}</td>
								<td class="text-left"><a href="/items/{{$item2->id}}/edit"><button class="edit-modal btn btn-sm btn-info">
										<span class="glyphicon glyphicon-edit"></span>
									</button></a>
									<a href="/items/{{$item2->id}}"><button type="button" class="delete-modal btn btn-sm btn-danger">
										<span class="glyphicon glyphicon-trash mr-4"></span>
									</button></a>
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

