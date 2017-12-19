<!DOCTYPE html>
<html>
<head>
    
    <!-- CSRF Token -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <!--  <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <style>

    </style>
</head>

<body>

	<img src="https://d368g9lw5ileu7.cloudfront.net/races/race28386-social382x200.byA_gb.jpg" style="display:inline; width:90px; height:50px;"><h2 style="display:inline;">North Lime Coffee & Donuts</h2>

	<h2>Order: {{$order2->id}}</h2>
	<h3>Submitted: {{$order2->updated_at->format('m/d/Y')}}</h3>
	<h3>Expected Delivery: {{Carbon\Carbon::parse($order2->expected_delivery_date)->format('m/d/Y')}}</h3>

	<table>
		<thead>
			<tr>
				<th>Item</th>
				<th>Qty</th>
			</tr>
		</thead>
		<tbody>
		@foreach($pdfitems as $pdfitem)
		<tr>
			<td>
				{{$pdfitem->supplieritem}}
			</td>
			<td style="text-align:center;">
				{{$pdfitem->order_qty}}
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
</body>
</html>