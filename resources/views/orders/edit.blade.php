@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12">
       <form method="post" action="/orders/{{$order->id}}">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="row">
                		<div class="col">
                			Order #: {{$order->id}}
                		</div>
                		<div class="col text-right buttoncol">
							<a href="../../orders">
								<button type="button" class="btn btn-default mr-3">Discard</button>
							</a>
							<button class="btn btn-outline-primary newitem mr-3" type="submit" name="button" value="save">Save</button>
							<button class="btn btn-primary newitem" type="submit" name="button" value="submit">Submit</button>
						</div>
                	</div>
                </div>

    <div class="panel-body">

    	<div class="row ml-3">
			<div class="col-xs-4"><h3 class="orderform">Supplier: <div class="orderform">{{$order->supplier->name}}</div></h3></div>
			<div class="col-xs-4"><h3 class="orderform">Deliver To: <div class="orderform">{{$order->store->name}}</div></h3></div>
		</div>
		<div class="row ml-3">
			<div class="col-xs-4"><h3 class="orderform">Order Date: <div class="orderform">{{$today->format('m/d/Y')}}</div></h3></div>
			<div class="col-xs-4"><h3 class="orderform">Expected Delivery Date: <div class="orderform">{{$deliverydate->format('m/d/Y')}}</div></h3></div>
			<input type="hidden" name="deliverydate" value="{{$deliverydate}}">
		</div>


			
			<h3 class="orderform ml-5 mt-3">Items Currently On Order</h3>
			<div class="container ordereditems">
				<div class="row ordereditemshead">
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

			<div class="container ml-4">

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