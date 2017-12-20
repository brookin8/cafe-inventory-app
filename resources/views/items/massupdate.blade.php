@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
    	<div class="col-xs-1">
    	</div>
        <div class="col-xs-10">
        	<form method="post" action="../items/massupdate">
				{{ csrf_field() }}
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                	<div class="row">
	                		<div class="col">
	                			Mass Update : {{$store}}
	                		</div>
	                		<div class="col text-right">
								<a href="../items"><button class="btn btn-default mr-3" type="button">Discard</button></a><button type="submit" class="btn btn-primary newitem">Submit</button>
							</div>
	                	</div>
	                </div>
            	<div class="panel-body items">
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th class="counthead">Item#</th>
							<th class="counthead text-left">Item Name</th>
							<th class="counthead">Active?</th>
							<th class="counthead">PARs</th>
						</tr>
					</thead>	
					
					<tbody>
					@foreach ($items as $item)
					<tr>
						<td>{{$item->id}}<input type="hidden" name="item{{$item->id}}" value="{{$item->id}}"></td>
						<td class="text-left">{{$item->name}}</td>
						@if(in_array($item->id,$itemstoreids))
						<td><input type="checkbox" name="active{{$item->id}}" class="backorder" checked value="yes"></td>
						@else
						<td><input type="checkbox" name="active{{$item->id}}" class="backorder" value="yes"></td>
						@endif
						@if(in_array($item->id,$itemstoreids))
							@foreach($itemstore as $itemstores)
								@if($itemstores->item_id === $item->id)
									<td><input value="{{$itemstores->PARs}}" type="number" class="orderquantity" name="pars{{$item->id}}"></td>
								@break
								@endif
							@endforeach
						@else
						<td><input type="number" class="orderquantity" name="pars{{$item->id}}"></td>
						@endif
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			</div>
		</form>
	</div>
	</div>
	</div>
@endsection