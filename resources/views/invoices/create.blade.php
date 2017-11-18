@extends('layouts.app')

@section('content')

@if($orderexists === '2')

		<form class="typeahead" method="post" action="../invoices" role="search">
			{{ csrf_field() }}
			<div class="row mb-5 mt-3 justify-content-center">
				<div class="col-2 mr-5">
						{{$supplierselect->name}}
						<input name="supplier" value="$supplierselect" type="hidden">
				</div>
				<div class="col-4">
				Order No: <input name="order">
				</div>
			</div>
		@foreach ($allitems as $allitem)
			<div class="row mb-5 mt-3 justify-content-center">
					<div class="col-4 mr-5">
				      	<div id="iteminput">
						  <input class="typeahead iteminput" type="text" placeholder="Add Item" name="item{{$loop->iteration}}">
						</div>
					</div>
					<div class="col-4">
						<input name="qty{{$loop->iteration}}" class="orderquantity">
					</div>
				</div>
			@endforeach
				<div class="container">
					<a href="../orders"><button type="button">Discard</button></a><button type="submit">Submit</button>
				</div>
			</form>

@else
	<form method="post" action="../invoices">
		{{ csrf_field() }}
		<h1 class="text-center mb-5">Invoice For: Order {{ $order }}</h1>
		<input type="hidden" value="{{$order}}" name="order">
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
				<td>{{$item->item_id}}<input type="hidden" name="item{{$loop->iteration}}" value="{{$item->item_id}}"></td>
				<td>{{$item->itemname}}</td>
				<td>{{$item->order_qty}}</td>
				<td><input value="{{$item->order_qty}}" type="number" class="orderquantity" name="qty{{$loop->iteration}}""></td>
			</tr>
			@endforeach
			</tbody>

		</table>

		<div class="container">
			<a href="../orders"><button type="button">Discard</button></a><button type="submit">Submit</button>
		</div>
	</form>
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