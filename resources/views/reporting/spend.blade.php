@extends('layouts.app')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

<div id="loader"></div>

<div style="display:none;" id="loaderDiv">

@extends('reporting.spendgraph')

<div class="container reportinggraphs" style="padding-left:2px;padding-right:2px;">
 <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default reporting">
                <div class="panel-heading withtabs">
                	<div class="row">
                		<div class="col text-left">
                			Reporting
                		</div>
                		<div class="col">
            				<ul class="nav nav-tabs navbar-right">
						  		<li class="nav-item">
								    <a class="nav-link tabs reportingtabs" href="../reporting">Demand</a>
								  </li>
								 <li class="nav-item">
								    <a class="nav-link active tabs reportingtabs" href="#">Spend</a>
								 </li>
							</ul>
                		</div>
                	</div>
				</div>

			<div class="panel-body reporting">			
				<div class ="row reportingheader text-center mb-3">
					<div class="col text-left">
						<h2 class="mb-4 ml-5 reportingh2 mt-4">Spend</h2>
					</div>
					<div class="col text-right">
						<form>
						    <input type=button class="btn btn-default mt-3" name=print value="Print" onClick="window.print()">
						</form>
					</div>
				</div>

				 <script>
					  $( function() {
					    $( "#datepicker1" ).datepicker({
					    	dateFormat: "yy-mm-dd"
					    });
					  } );

					   $( function() {
					    $( "#datepicker2" ).datepicker({
					    	dateFormat: "yy-mm-dd"
					    });
					  } );

					    $( function() {
					    $( "#datepicker3" ).datepicker({
					    	dateFormat: "yy-mm-dd"
					    });
					  } );

					   $( function() {
					    $( "#datepicker4" ).datepicker({
					    	dateFormat: "yy-mm-dd"
					    });
					  } );
				</script>

				<div class="row ml-5 mr-3">	
				   <div id="dashboard_div">
				     <div class="row mt-3">
				      	<div id="selectdiv" class="ml-3">
				      		Start Date: 
							<input type="text" id="datepicker1" onchange="startselect(this.value)">
						</div>
						<div id="selectdiv" class="ml-3">
				      		End Date: 
							<input type="text" id="datepicker2" onchange="endselect2(this.value)">
						</div>
					</div>
					<div class="row mt-3">
				      	<div id="selectdiv" class="ml-3">
				      		Category: 
							<select id="spendcategory" onchange="categoryselect(this.value)">
								<option value="''">All</option>
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
						</div>
						<div id="selectdiv" class="ml-3">
				      		Supplier: 
							<select id="spendsupplier" onchange="supplierselect(this.value)">
								<option value="''">All</option>
								@foreach($suppliers as $supplier)
								<option value="{{$supplier->id}}">{{$supplier->name}}</option>
								@endforeach
							</select>
						</div>
				      </div>
				      <div id="chart_div" class="mt-3 googlechart"></div>
				    </div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
				
<div class="container reportingtable">
	<div class="panel panel-default reporting">
	 	<div class="panel-heading">
            	<div class="row">
            		<div class="col text-left">
            			Summary	: Week of {{Carbon\Carbon::parse($thisweek)->format('m/d/Y')}}
            		</div>
            	</div>
			</div>
			<div class="panel-body">

			<div class="row ml-5 mr-3">
				<div class="table-responsive">
					<table class="table tableborder table-striped table-hover ml-3" width="98%" id="table">
						<thead>
							<tr>
								<th class="text-left reporting">Store</th>
								<th class="text-left reporting">#</th>
								<th class="text-left reporting">Name</th>
								<th class="text-left reporting">Category</th>
								<th class="text-left reporting">Supplier</th>
								<th class="text-left reporting">{{Carbon\Carbon::parse($lastweek)->format('m/d/Y')}}</th>
								<th class="text-left reporting">PTD</th>
								<th class="text-left reporting">YTD</th>
							</tr>
						</thead>
						<tbody>
							@foreach($itemstores as $itemstore)
							<tr>
								<td class="text-left reporting">{{$itemstore->store}}</td>
								<td class="text-left reporting">{{$itemstore->item_id}}</td>
								<td class="text-left reporting">{{$itemstore->name}}</td>
								<td class="text-left reporting">{{$itemstore->category}}</td>
								<td class="text-left reporting">{{$itemstore->supplier}}</td>
								@if(array_key_exists($itemstore->item_id,$lastweekdata))
									@foreach($lastweekdata as $key=>$value)
										@if($key === $itemstore->item_id)
											<td class="text-left reporting">${{$value}}</td>
										@endif
									@endforeach
								@else
									<td class="text-left reporting">$0</td>
								@endif
								@if(array_key_exists($itemstore->item_id,$ptd))
									@foreach($ptd as $key=>$value)
										@if($key === $itemstore->item_id)
										<td class="text-left reporting">${{$value}}</td>
										@endif
									@endforeach
								@else
									<td class="text-left reporting">$0</td>
								@endif
								@if(array_key_exists($itemstore->item_id,$ytd))
									@foreach($ytd as $key2=>$value2)
										@if($key2 === $itemstore->item_id)
											<td class="text-left reporting">${{$value2}}</td>
										@endif
									@endforeach
								@else
									<td class="text-left reporting">$0</td>
								@endif
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<td class="text-left reporting">Store</td>
								<td class="text-left reporting">#</td>
								<td class="text-left reporting">Name</td>
								<td class="text-left reporting">Category</td>
								<td class="text-left reporting">Supplier</td>
								<td class="text-left reporting">{{Carbon\Carbon::parse($lastweek)->format('m/d/Y')}}</td>
								<td class="text-left reporting">PTD</td>
								<td class="text-left reporting">YTD</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container reportingtable">
	<div class="panel panel-default reporting">
	 	<div class="panel-heading">
            	<div class="row">
            		<div class="col-2 text-left">
            			Detail	
            		</div>
            		<div class="col-2">
            		</div>
            		<div class="col-8 text-right">
            		<form action = "/reporting/spend/spendfilter" method="post" class="">
            			{{csrf_field()}}
            			<div class="form-group row">
            			<label for="startdate" class="datefilters">Start Date: </label><input type="text" id="datepicker3" name ="startdate" size="12">
            			<label for="startdate" class="datefilters">End Date: </label><input type="text" id="datepicker4" name="enddate" size="12">
            			<button type="submit" class="btn btn-primary newitem ml-2">Submit</button>
            			</div>
            		</form>
            		</div>
            	</div>
			</div>
			<div class="panel-body">

			<div class="row ml-5 mr-3">
				<div class="table-responsive">
					<table class="table tableborder table-striped table-hover ml-3" width="98%" id="table2">
						<thead>
							<tr>
								<th class="text-left reporting">Week</th>
								<th class="text-left reporting">Store</th>
								<th class="text-left reporting">#</th>
								<th class="text-left reporting">Name</th>
								<th class="text-left reporting">Category</th>
								<th class="text-left reporting">Supplier</th>
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
								<td class="text-left reporting">Spend</td>
							</tr>
						</tfoot>
					</table>
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

	var table = $('#table').DataTable( {
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

    table.buttons().container()
	.appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
} );


</script>

@endsection