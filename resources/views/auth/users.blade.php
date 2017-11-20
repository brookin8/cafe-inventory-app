@extends('layouts.app')

@section('content')

<h1 class="text-center">Users</h1>

		<div class="row mb-5 ml-5 mr-5">
			<div class="col">
					<ul class="nav nav-tabs">
						<li class="nav-item invoicetab"><a class="nav-link invoicelink">a</a></li>
						<a href="../register"><button class="btn btn-primary newcount mr-4">New User</button></a>
					</ul>
			</div>
		</div>


<div class="row ml-5 mr-3">
        <div class="table-responsive text-center mr-4 ml-3">
            <table class="table tableborder table-striped table-hover mr-4" width="98%" id="table">
                <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Store</th>
                        <th class="text-center">Access Level</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
    			@foreach($users as $user)
    			<tr>
    				<td>{{$user->name}}</td>
    				<td>{{$user->email}}</td>
    				<td>{{$user->store->name}}</td>
    				<td>{{$user->access_level->access_level}}</td>
    				<td>
					<a href="/users/{{$user->id}}/edit"><button class="edit-modal btn btn-sm btn-info">
							<span class="glyphicon glyphicon-edit"></span>
						</button></a>
						<a href="/users/{{$user->id}}"><button type="button" class="delete-modal btn btn-sm btn-danger">
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