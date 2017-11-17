@extends('layouts.app')

@section('content')

<form>
	
	@if($orderexists === '2')
	<div class="row mb-5 mt-3 justify-content-center">
		<div class="col-4 mr-5">
				{{$supplierselect->name}}
		</div>
	</div>

	@foreach ($allitems as $allitem)
	<div class="row mb-5 mt-3 justify-content-center">
		<div class="col-4 mr-5">
			<form class="typeahead" role="search">
		      	<div id="iteminput">
				  <input class="typeahead iteminput" type="text" placeholder="Add Item" name="item{{$loop->iteration}}">
				</div>
			</form>
		</div>
		<div class="col-4">
			<input name="quantity{{$loop->iteration}}" class="orderquantity">
		</div>
	</div>
	@endforeach


	@else
	<h1 class="text-center mb-5">Invoice For: Order {{ $order }}</h1>
	
	<table class="table table-bordered invoicetable">
		
		<thead>
			<tr>
				<th>Item No</th>
				<th>Item Name</th>
				<th>Ordered Qty</th>
				<th>Received Qty</th>
			</tr>
		</thead>	
		
		<tbody>
		@foreach ($items as $item)
		<tr>
			<td>{{$item->id}}</td>
			<td>{{$item->itemname}}</td>
			<td>{{$item->order_qty}}</td>
			<td><input value="{{$item->order_qty}}" type="number" class="orderquantity" name="invoiced_qty"></td>
		</tr>
		@endforeach
		</tbody>

	</table>
	@endif

	<div class="container">
		<a href="../orders"><button type="button">Discard</button></a><button type="submit">Submit</button>
	</div>
</form>

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