<html>
<title></title>
<body>

	<h1>Order {{$order2->id}}</h1>
	<div class="row">
		<div class="col">
			Submitted: {{$order2->updated_at}}
		</div>
		<div class="col">
			Expected Delivery: {{$order2->expected_delivery_date}}
		</div>
	</div>

	<div class="row">
		<div class="col-4">
			Item
		</div>
		<div class="col-2">
			Qty
		</div>
	</div>
	@foreach($pdfitems as $pdfitem)
	<div class="row">
		<div class="col-4">
			{{$pdfitem->supplieritem}}
		</div>
		<div class="col-2">
			{{$pdfitem->order_qty}}
		</div>
	</div>
	@endforeach
</body>
</html>