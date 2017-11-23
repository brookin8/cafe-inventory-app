@extends('layouts.app')

@section('content')
<div id="loader"></div>
	
<div style="display:none;" id="loaderDiv">
	<div class="container page">	
		<h3 class="ml-5 mr-5">Users</h3>	
		<hr class="ml-5 mr-5 mb-4">

	<div class="row ml-5 mr-3">
		<div class="table-responsive mr-4 ml-3">
            <table class="table tableborder table-striped table-hover mr-4" width="98%" id="table">
            <a href="../register"><button class="btn btn-primary newcount ml-5">New User</button></a>
                <thead>
                    <tr>
                        <th class="text-left">Name</th>
                        <th class="text-left">Email</th>
                        <th class="text-left">Store</th>
                        <th class="text-left">Access Level</th>
                        <th class="text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
    			@foreach($users as $user)
    			<tr>
    				<td class="text-left">{{$user->name}}</td>
    				<td class="text-left">{{$user->email}}</td>
    				<td class="text-left">{{$user->store->name}}</td>
    				<td class="text-left">{{$user->access_level->access_level}}</td>
    				<td class="text-left">
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