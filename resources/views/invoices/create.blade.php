@extends('layouts.app')

@section('content')

@if($orderexists === '2')
	
	<div class="container">
    <div class="row">
    	<div class="col-xs-1">
    	</div>
        <div class="col-xs-10">
        	<form class="typeahead" method="post" action="../invoices" role="search">
				{{ csrf_field() }}
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                	<div class="row">
	                		<div class="col-8">
	                			Invoice for Order No: <input name="order">
	                			<input type="hidden" value="{{$order}}" name="order">
	                		</div>
	                		<div class="col-4">
	                			<a href="../invoices"><button class="btn btn-default" type="button">Discard</button></a><button type="submit" class="btn btn-default">Submit</button>
	                		</div>
	                	</div>
	                </div>
	            <div class="panel-body items">

	            	<div class="row">
		               	<div class="col-3 text-right">
	            			<h3 class="orderform">Supplier: <div class="orderform">{{$supplierselect->name}}</div></h3>
	            			<input name="supplier" value="$supplierselect" type="hidden">
	            		</div>
	                </div>

					<div class="row mb-5 mt-3 justify-content-center ordertop ml-5 mr-5">
						<div class="col-9">
						Item
						</div>
						<div class="col-3">
						Qty
						</div>
					</div>
				<div class="invoiceitems">
				@foreach ($allitems as $allitem)
					<div class="row mb-5 mt-3 ml-5 mr-5">
							<div class="col-9">
						      	<div id="iteminput">
								  <input class="typeahead iteminput" type="text" placeholder="Add Item" name="item{{$loop->iteration}}">
								</div>
							</div>
							<div class="col-3">
								<input name="qty{{$loop->iteration}}" class="orderquantity">
							</div>
					</div>
					@endforeach
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</div>

@else
	

	<div class="container">
    <div class="row">
    	<div class="col-xs-1">
    	</div>
        <div class="col-xs-10">
        	<form method="post" action="../invoices">
				{{ csrf_field() }}
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                	<div class="row">
	                		<div class="col">
	                			Invoice For: Order #{{ $order }}
	                			<input type="hidden" value="{{$order}}" name="order">
	                		</div>
	                		<div class="col text-right">
								<a href="../invoices"><button class="btn btn-default" type="button">Discard</button></a><button type="submit" class="btn btn-default">Submit</button>
							</div>
	                	</div>
	                </div>
            	<div class="panel-body items">
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th class="counthead">Item No</th>
							<th class="counthead">Item Name</th>
							<th class="counthead">Ordered Qty</th>
							<th class="counthead">Received Qty</th>
							<th class="counthead">Backordered?</th>
						</tr>
					</thead>	
					
					<tbody>
					@foreach ($items as $item)
					<tr>
						<td>{{$item->item_id}}<input type="hidden" name="item{{$loop->iteration}}" value="{{$item->item_id}}"></td>
						<td>{{$item->itemname}}</td>
						<td>{{$item->order_qty}}</td>
						<td><input value="{{$item->order_qty}}" type="number" class="orderquantity" name="qty{{$loop->iteration}}""></td>
						<td><input type="checkbox" name="backorder{{$loop->iteration}}" class="backorder" value="yes"></td>
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
@endif
<script>

//Type-ahead
	var substringMatcher = function(strs) {
  	return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    	cb(matches);
  	};
	};

	var getItems = {!! json_encode($allitems->toArray()) !!};
	//console.log(getItems);


	var allitems = []

	for (var i=0;i<getItems.length;i++) {
		allitems.push(getItems[i].name);
	}

	// console.log(items);

	$('#iteminput .typeahead').typeahead({
	  hint: true,
	  highlight: true,
	  minLength: 1
	},
	{
	  name: 'allitems',
	  source: substringMatcher(allitems)
	});



</script>


@endsection