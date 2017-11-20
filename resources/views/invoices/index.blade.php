@extends('layouts.app')

@section('content')
	
	<h1 class="text-center">Invoices</h1>

		<div class="row mb-5 ml-5 mr-5">
			<div class="col">
					<ul class="nav nav-tabs">
						<li class="nav-item invoicetab"><a class="nav-link invoicelink">a</a></li>
						<a href="/invoices/orderexists"><button class="btn btn-primary newcount mr-4">New Invoice</button></a>
					</ul>
			</div>
		</div>
	
	<div class="row ml-5 mr-3">
		<div class="table-responsive text-center mr-4 ml-3">
			<table class="table tableborder table-striped table-hover mr-4" width="98%" id="table">
				<thead>
					<tr>
						<th class="text-center">Invoice No</th>
						<th class="text-center">Order No</th>
						<th class="text-center">Supplier</th>
						<th class="text-center">Total $ Amount</th>
						<th class="text-center">Date Submitted</th>
						<th class="text-center">Submitted By</th>
					</tr>
				</thead>
				<tbody>
				@foreach($invoices as $invoice)
				<tr class="">
					<td><a href="invoices/{{$invoice->id}}" class="bodylink"><div>{{$invoice->id}}</div></a></td>
					<td><a href="invoices/{{$invoice->id}}" class="bodylink"><div>#{{$invoice->order_id}}</div></a></td>
					<td><a href="invoices/{{$invoice->id}}" class="bodylink"><div>{{$invoice->supplier}}</div></a></td>
					<td><a href="invoices/{{$invoice->id}}" class="bodylink"><div>${{$invoice->total_invoice_amount}}</div></a></td>
					<td><a href="invoices/{{$invoice->id}}" class="bodylink"><div>{{Carbon\Carbon::parse($invoice->updated_at)->format('m/d/Y')}}</div>
					</a></td>
					<td><a href="invoices/{{$invoice->id}}" class="bodylink"><div>{{$invoice->username}}</div></a></td>
				</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<script>
    
	//   $(document).ready(function() {
	//     $('#table').DataTable();
	// } );


	var table = $('#table').DataTable({
		 dom: 'Blfrtip', 
		 buttons: [
        	{extend:'copy', className:'tableButton'},
        	{extend:'excel', className:'tableButton'},
        	{extend:'pdf', className:'tableButton'},
        	{extend:'csv', className:'lastTableButton'}
    	],
    	filterSelectClass: 'customFilter',
    	filterText: 'Search'
	});

	table.buttons().container()
    .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );

   

    </script>
@endsection

