@extends('layouts.app')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

<div id="loader"></div>

<div style="display:none;" id="loaderDiv">

<div class="container reportinggraphs" style="padding-left:2px;padding-right:2px;">
 <div class="row">
        <div class="col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading withtabs reporting">
                	<div class="row">
                		<div class="col text-left">
                			Reporting
                		</div>
                		<div class="col">
							<ul class="nav nav-tabs navbar-right">
						  		<li class="nav-item">
								    <a class="nav-link tabs" href="../reporting">Summary</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link tabs active" href="">Details</a>
								  </li>
							</ul>
						</div>
						<div class="col-1">
							<form>
						    	<input type=button class="btn btn-primary newitem mt-1" name=print value="Print" onClick="window.print()">
							</form>
						</div>
                	</div>
				</div>
			</div>



		<div class="panel panel-default">
			<div class="panel-heading text-left" style="background-color:#5cce84;color:#fff;">
				<div class="row">
					<div class="col-2">
	            		Detail	
	            	</div>
	            	<div class="col-10 text-right">
	            		<form action = "/reporting/details/filter" method="post" class="mb-0">
	            			{{csrf_field()}}
	            			<label for="startdate" class="datefilters">Start Date: </label><input type="text" id="datepicker3" name ="startdate" size="12" style="font-size:80%;color:#636B6F;">
	            			<label for="startdate" class="datefilters">End Date: </label><input type="text" id="datepicker4" name="enddate" size="12" style="font-size:80%;color:#636B6F;">
	            			<button type="submit" class="btn btn-secondary ml-2">Submit</button>
	            		</form>
	            	</div>
	            </div>
            </div>
			<div class="panel-body">

			<div class="row ml-2 mr-2">
				<div class="table-responsive">
					<table class="table tableborder table-striped table-hover ml-3" width="100%" id="table2">
						<thead>
							<tr>
								<th class="text-left reporting">Week</th>
								<th class="text-left reporting">Store</th>
								<th class="text-left reporting">#</th>
								<th class="text-left reporting">Name</th>
								<th class="text-left reporting">Category</th>
								<th class="text-left reporting">Supplier</th>
								<th class="text-left reporting">Demand</th>
								<th class="text-left reporting">Spend</th>
							</tr>
						</thead>
						<tbody>
							@foreach($spend2 as $spends2)
							<tr>
								<td class="text-left reporting">{{Carbon\Carbon::parse($spends2->week)->format('m/d/Y')}}</td>
								<td class="text-left reporting">{{$spends2->store}}</td>
								<td class="text-left reporting">{{$spends2->item_id}}</td>
								<td class="text-left reporting">{{$spends2->name}}</td>
								<td class="text-left reporting">{{$spends2->category}}</td>
								<td class="text-left reporting">{{$spends2->supplier}}</td>
								<td class="text-left reporting">
									@foreach($demand2 as $demands2)
										@if(Carbon\Carbon::parse($spends2->week)->format('m/d/Y') === Carbon\Carbon::parse($demands2->week)->format('m/d/Y') && $demands2->item_id === $spends2->item_id)
											{{$demands2->demand}}
										@endif
									@endforeach
								</td>
								<td class="text-left reporting">${{$spends2->spend}}</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<td class="text-left reporting">Week</td>
								<td class="text-left reporting">Store</td>
								<td class="text-left reporting">#</td>
								<td class="text-left reporting">Name</td>
								<td class="text-left reporting">Category</td>
								<td class="text-left reporting">Supplier</td>
							</tr>
						</tfoot>
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
  $(document).ready(function() {
    var table2 = $('#table2').DataTable( {
    	dom: 'Blfrtip',
    	buttons: [
    	{extend:'copy', className:'tableButton'},
    	{extend:'excel', className:'tableButton'},
    	{extend:'csv', className:'lastTableButton'}],
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        },
    } );

    table2.buttons().container()
	.appendTo( $('.col-sm-6:eq(0)', table2.table().container() ) );

	var fourweeksuse = '{!! $fourweeksuse !!}';
	var filterstart = '{!! $filterstart !!}';
	var filterend = '{!! $filterend !!}';

	if(filterstart === '0') {
		$( "#datepicker3" ).datepicker({
	    	dateFormat: "mm-dd-yy"
	    }).datepicker("setDate", new Date("'" + fourweeksuse + "'"));
	} else {
		$( "#datepicker3" ).datepicker({
	    	dateFormat: "mm-dd-yy"
	    }).datepicker("setDate", new Date(filterstart));
	}
	

	if(filterend === '0') {
		$( "#datepicker4" ).datepicker({
	    	dateFormat: "mm-dd-yy"
	    }).datepicker("setDate", new Date('today'));
	} else {
	$( "#datepicker4" ).datepicker({
	    	dateFormat: "mm-dd-yy"
	    }).datepicker("setDate", new Date(filterend));
	}
	
	//console.log(new Date("'" + fourweeksuse + "'"));
	//console.log(typeof fourweeksuse);


});

</script>

@endsection