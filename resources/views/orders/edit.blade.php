@extends('layouts.app')

@section('content')

<form method="post" action="/orders/{{$order->id}}">
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
	  	<div class="ml-4 mr-4"><strong class="mr-1">Expected Delivery Date:</strong> 
	  		{{$deliverydate->format('m/d/Y')}}
	  		<input type="hidden" value="{{$deliverydate}}" name="deliverydate">
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
			<button class="btn btn-lg mb-2 mt-3 ordercategory" data-toggle="collapse" href="#collapse{{$category->id}}" aria-expanded="false" aria-controls="collapse{{$category->id}}">
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
									<input class="hidden" name="item{{$item->id}}" value="{{$item->id}}">
								</div>
								<div class="col-2">
									${{$item->cost}}
								</div>
								<div class="col-3">
								@if (in_array($item->id,$ordereditemsIds))
									@foreach ($ordereditems as $ordereditem)
										@if ($ordereditem->item_id === $item->id)
											<input class="orderquantity" name="qty{{$item->id}}" value="{{$ordereditem->order_qty}}" type="numeric">
										@endif
									@endforeach
								@else
									<input class="orderquantity" type="numeric" name="qty{{$item->id}}">
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

</script>

@endsection