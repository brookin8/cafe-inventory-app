@extends('layouts.app')

@section('content')

<div id="loader"></div>
	
<div style="display:none;" id="loaderDiv">
	<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="row">
                		<div class="col text-left">
                			Invoices
                		</div>
                		<div class="col">
                			<a href="/invoices/orderexists"><button class="btn btn-primary newcount ml-5 mb-4">New Invoice</button></a>
                		</div>
                	</div>
				</div>
				<div class="panel-body">
	
					<div class="row ml-5 mr-3">
						<div class="table-responsive text-center mr-4 ml-3">
							<table class="table tableborder table-striped table-hover mr-4" width="98%" id="table">
						
								<thead>
									<tr>
										<th class="text-left">Invoice #</th>
										<th class="text-left">Order #</th>
										<th class="text-left">Supplier</th>
										<th class="text-left">Total($)</th>
										<th class="text-left">Submitted</th>
										<th class="text-left">Submitted By</th>
									</tr>
								</thead>
								<tbody>
								@foreach($invoices as $invoice)
								<tr class="">
									<td class="text-left"><a href="invoices/{{$invoice->id}}" class="bodylink"><div>{{$invoice->id}}</div></a></td>
									<td class="text-left"><a href="invoices/{{$invoice->id}}" class="bodylink"><div>{{$invoice->order_id}}</div></a></td>
									<td class="text-left"><a href="invoices/{{$invoice->id}}" class="bodylink"><div>{{$invoice->supplier}}</div></a></td>
									<td class="text-left"><a href="invoices/{{$invoice->id}}" class="bodylink"><div>${{$invoice->total_invoice_amount}}</div></a></td>
									<td class="text-left"><a href="invoices/{{$invoice->id}}" class="bodylink"><div>{{Carbon\Carbon::parse($invoice->updated_at)->format('m/d/Y')}}</div>
									</a></td>
									<td class="text-left"><a href="invoices/{{$invoice->id}}" class="bodylink"><div>{{$invoice->username}}</div></a></td>
								</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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

