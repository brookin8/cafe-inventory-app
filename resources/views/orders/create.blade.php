@extends('layouts.app')

@section('content')

<form method="post" action="../orders">
	{{ csrf_field() }}
	<div class="container">
		<div class="row">
			<div class="col">Supplier: {{$supplier->name}}</div>
			<input type="hidden" name="supplier" value="{{$supplier->id}}">
			<div class="col">Order Date: {{$today->format('m/d/Y')}}</div>
			<div class="col">Expected Delivery Date: {{$deliverydate->format('m/d/Y')}}</div>
			<input type="hidden" name="deliverydate" value="{{$deliverydate}}">
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

	@foreach ($categories as $category)
		<div class="row">
			<button class="btn btn-lg mb-2 mt-3 ordercategory" data-toggle="collapse" href="#collapse{{$category->id}}" aria-expanded="false" aria-controls="collapse{{$category->id}}">
			{{ ucfirst(trans($category->name))}}
			</button>
		</div>
			<div class="collapse" id="collapse{{$category->id}}">
				<div class="row mt-4 mb-3 ordertop">
					<div class="col-7">Item</div>
					<div class="col-2">Unit Cost</div>
					<div class="col-3">Order Qty</div>
				</div>
			@foreach ($items as $item)
				@if($item->category_id === $category->id)
 						 <div class="card card-block">
 						 	<div class="row">
								<div class="col-7">{{$item->name}}
									<input class="hidden" name="item{{$loop->iteration}}" value="{{$item->id}}">
								</div>
								<div class="col-2">
									${{$item->cost}}
								</div>
								<div class="col-3">
									<input class="orderquantity" name="qty{{$loop->iteration}}">
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