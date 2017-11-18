@extends('layouts.app')

@section('content')

<form method="post" action="../orders/{{$order->id}}">
	{{ csrf_field() }}
	{{ method_field('PUT') }}

<div class="container orderShowHead mt-3">
	<div class="row mt-3 mb-4">
	  	<div class="ml-5 mr-4"><strong class="mr-1">Order No:</strong> 
	  		{{$order->id}}
	  	</div>
	  	<div class="ml-4 mr-4"><strong class="mr-1">Deliver To:</strong> 
	  		{{$order->store->name}}
	  	</div>
	  	<div class="ml-4 mr-4"><strong class="mr-1">Supplier:</strong> 
	  		{{$order->supplier->name}}
	  	</div>
	</div>
</div>

	<div class="container">
		<a href="../orders">
			<button type="button" class="btn btn-default mr-3">Discard</button>
		</a>
			<button class="btn btn-primary mr-3" type="submit" name="button" value="save">Save</button>
			<button class="btn btn-success" type="submit" name="button" value="submit">Submit</button>
	</div>

	<div class="container">
	<h3>Items Currently On Order</h3>
		<div class="row">
			<div class="col-4">Item</div>
			<div class="col-2">Unit Cost</div>
			<div class="col-3">Order Qty</div>
		</div>
		@foreach ($ordereditems as $ordereditem)
		<div class="row">
			<div class="col-4">{{$ordereditem->itemname}}</div>
			<input class="hidden" name="ordereditem{{$loop->iteration}}" value="{{$ordereditem->item_id}}">
			<div class="col-2">{{$ordereditem->cost}}</div>
			<div class="col-3">
				{{$ordereditem->order_qty}}
			</div>
		</div>
		@endforeach
	</div>

	<div class="container">

	@foreach ($categories as $category)
		<div class="row">
			<button class="btn btn-lg btn-primary mb-3 mt-5 ml-5" data-toggle="collapse" href="#collapse{{$category->id}}" aria-expanded="false" aria-controls="collapse{{$category->id}}">
			{{$category->name}}
			</button>
		</div>
			<div class="collapse" id="collapse{{$category->id}}">
				<div class="row">
					<div class="col-3">Item</div>
					<div class="col-2">Unit Cost</div>
					<div class="col-3">Order Qty</div>
				</div>
			@foreach ($items as $item)
				@if($item->category_id === $category->id)
 						 <div class="card card-block">
 						 	<div class="row">
								<div class="col-3">{{$item->name}}
									<input class="hidden" name="item{{$loop->iteration}}" value="{{$item->id}}">
								</div>
								<div class="col-2">
									${{$item->cost}}
								</div>
								<div class="col-3">
								@if (in_array($item->id,$ordereditemsIds))
									@foreach ($ordereditems as $ordereditem)
										@if ($ordereditem->item_id === $item->id)
											<input class="orderquantity" name="qty{{$loop->iteration}}" value="{{$ordereditem->order_qty}}">
										@endif
									@endforeach
								@else
									<input class="orderquantity" name="qty{{$loop->iteration}}">
								@endif
								</div>
							</div>
						</div>
				@endif
			@endforeach
		</div>
	@endforeach
	</div>


</form>

<script>

// //Type-ahead
// 	var substringMatcher = function(strs) {
//   return function findMatches(q, cb) {
//     var matches, substringRegex;

//     // an array that will be populated with substring matches
//     matches = [];

//     // regex used to determine if a string contains the substring `q`
//     substrRegex = new RegExp(q, 'i');

//     // iterate through the pool of strings and for any string that
//     // contains the substring `q`, add it to the `matches` array
//     $.each(strs, function(i, str) {
//       if (substrRegex.test(str)) {
//         matches.push(str);
//       }
//     });

//     	cb(matches);
//   	};
// 	};

// 	var getItems = {!! json_encode($items->toArray()) !!};
// 	//console.log(getItems);

// 	var items = []

// 	for (var i=0;i<getItems.length;i++) {
// 		items.push(getItems[i].name);
// 	}

// 	// console.log(items);

// 	$('#iteminput .typeahead').typeahead({
// 	  hint: true,
// 	  highlight: true,
// 	  minLength: 1
// 	},
// 	{
// 	  name: 'items',
// 	  source: substringMatcher(items)
// 	});

//Dynamically add fields
	// $(document).ready(function() {
	//     var max_fields      = 1000; //maximum input boxes allowed
	//     var wrapper         = $(".input_fields_wrap"); //Fields wrapper
	//     var add_button      = $(".add_field_button"); //Add button ID
	    
	//     var x = 1; //initlal text box count
	//     $(add_button).click(function(e){ //on add input button click
	//         e.preventDefault();
	//         if(x < max_fields){ //max input box allowed
	//             x++; //text box increment
	//             $(wrapper).append('<div><input class="typeahead" type="text" name="item' + x'"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	//         }
	//     });
	    
	//     $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	//         e.preventDefault(); $(this).parent('div').remove(); x--;
	//     })
	// });

</script>

@endsection