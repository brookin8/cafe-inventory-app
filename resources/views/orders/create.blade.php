@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <form method="post" action="../orders">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="row">
                		<div class="col">
                			New Order
                		</div>
                		<div class="col text-right buttoncol">
							<a href="../orders">
								<button type="button" class="btn btn-default mr-3">Discard</button>
							</a>
							<button class="btn btn-primary mr-3" type="submit" name="button" value="save">Save</button>
							<button class="btn btn-success" type="submit" name="button" value="submit">Submit</button>
						</div>
                	</div>
                </div>

    <div class="panel-body">

	
	{{ csrf_field() }}

		<div class="row ml-3">
			<div class="col-xs-4"><h3 class="orderform">Supplier: <div class="orderform">{{$supplier->name}}</div></h3></div>
			<input type="hidden" name="supplier" value="{{$supplier->id}}">
		</div>
		<div class="row ml-3">
			<div class="col-xs-4"><h3 class="orderform">Order Date: <div class="orderform">{{$today->format('m/d/Y')}}</div></h3></div>
			<div class="col-xs-4"><h3 class="orderform">Expected Delivery Date: <div class="orderform">{{$deliverydate->format('m/d/Y')}}</div></h3></div>
			<input type="hidden" name="deliverydate" value="{{$deliverydate}}">
		</div>

		<div class="container ml-4">

		@foreach ($categories as $category)
			<div class="row">
				<button class="btn btn-lg mb-2 mt-3 ordercategory" data-toggle="collapse" href="#collapse{{$category->id}}" aria-expanded="false" aria-controls="collapse{{$category->id}}">
				{{ ucfirst(trans($category->name))}}
				</button>
			</div>
				<div class="collapse" id="collapse{{$category->id}}">
					<div class="row mt-4 ordertop">
						<div class="col-4">Item</div>
						<div class="col-2">PARs</div>
						<div class="col-2">Onhand</div>
						<div class="col-2">Unit Cost</div>
						<div class="col-2">Order Qty</div>
					</div>
				@foreach ($items as $item)
					@if($item->category_id === $category->id)
	 						 <div class="card card-block">
	 						 	<div class="row">
									<div class="col-4">{{$item->name}}
										<input class="hidden" name="item{{$loop->iteration}}" value="{{$item->id}}">
									</div>
									<div class="col-2">
										@if(in_array($item->id,$itemswithpars))
											@foreach($pars as $par)
												@if($item->id === $par->item_id)
													{{$par->PARs}}
												@break
												@endif
											@endforeach
										@else
											NO PARs
										@endif
									</div>
									<div class="col-2">
										@if(in_array($item->id,$itemswithonhand))
											@foreach($onhand as $onhands)
												@if($item->id === $onhands->item_id)
													{{$onhands->inventorycount_qty}}
												@endif
											@endforeach
										@else
											No Count within 48 hrs
										@endif
									</div>
									<div class="col-2">
										${{$item->cost}}
									</div>
									<div class="col-2">
										<input class="orderquantity" name="qty{{$loop->iteration}}">
									</div>
								</div>
							</div>
					@endif
				@endforeach
			</div>
		@endforeach
		</div>
	
		</div>
	</div>
	</form>
</div>
</div>
</div>

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