@extends('layouts.app')

@section('content')

 
<div id="loader"></div>

<div style="display:none;" id="loaderDiv">

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



</script>

@extends('reporting.demandgraph')

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
								    <a class="nav-link tabs active" href="">Summary</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link tabs" href="../reporting/details">Details</a>
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
					Demand
				</div>
				<div class="panel-body reporting">			
				
				 <script>
					 
				</script>
					<div class="row">
						<div id="dashboard_div2">
						     	<div class="row mt-3 ml-5">
						     		<label for="datepicker1">
						      			Start Date: 
						      		</label>
									<input type="text" id="datepicker1" onchange="startselect2(this.value)">
										<label for="datepicker2">
								      		End Date: 
								      	</label>
										<input type="text" id="datepicker2" onchange="endselect2(this.value)">
								</div>
								<div class="row mt-3 mb-3 ml-5">
										<label for="demandsupplier2">
							      			Supplier: 
							      		</label>
										<select id="demandsupplier2" onchange="supplierselect2(this.value)">
											<option value="''">All</option>
											@foreach($suppliers as $supplier)
											<option value="{{$supplier->id}}">{{$supplier->name}}</option>
											@endforeach
										</select>
										<label for="demandcategory2">
								      		Category: 
								      	</label>
										<select id="demandcategory2" onchange="categoryselect2(this.value)">
											<option value="''">All</option>
											@foreach($categories as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>
											@endforeach
										</select>
										<label for="demanditem2">
								      		Item: 
								      	</label>
										<select id="demanditem2" onchange="itemselect2(this.value)" style="width:185px">
											<option value="''">All</option>
											@foreach($items as $item)
											<option value="{{$item->id}}">{{$item->name}}</option>
											@endforeach
										</select>
						      	</div>
						      	<div class="row mt-5" style="text-align:center;">
							    	<div id="chart_div2" style="width:800px;margin-left:auto;margin-right:auto" class="mb-4"></div>
							    </div>
						    </div>
					    </div>
					</div>
				</div>

			<div class="panel panel-default">
				<div class="panel-heading text-left" style="background-color:#5cce84;color:#fff;">
					Spend
				</div>
				<div class="panel-body reporting">	

				 <script>
					  $( function() {
					    $( "#datepicker5" ).datepicker({
					    	dateFormat: "yy-mm-dd"
					    });
					  } );

					   $( function() {
					    $( "#datepicker6" ).datepicker({
					    	dateFormat: "yy-mm-dd"
					    });
					  } );

					  //   $( function() {
					  //   $( "#datepicker7" ).datepicker({
					  //   	dateFormat: "yy-mm-dd"
					  //   });
					  // } );

					  //  $( function() {
					  //   $( "#datepicker8" ).datepicker({
					  //   	dateFormat: "yy-mm-dd"
					  //   });
					  // } );
				</script>

				<div class="row ml-5 mr-3 mt-3">	
				   <div id="dashboard_div">
				    	<div class="row mt-3 ml-5">
						    <label for="datepicker5">
				      			Start Date: 
				      		</label>
							<input type="text" id="datepicker5" onchange="startselect(this.value)">
							<label for="datepicker6">
				      			End Date: 
				      		</label>
							<input type="text" id="datepicker6" onchange="endselect2(this.value)">
						</div>
						<div class="row mt-3 mb-3 ml-5">
							<label for="spendsupplier">
				      			Supplier: 
				      		</label>
							<select id="spendsupplier" onchange="supplierselect(this.value)">
								<option value="''">All</option>
								@foreach($suppliers as $supplier)
								<option value="{{$supplier->id}}">{{$supplier->name}}</option>
								@endforeach
							</select>
							<label for="spendcategory">
				      			Category: 
				      		</label>
							<select id="spendcategory" onchange="categoryselect(this.value)">
								<option value="''">All</option>
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
							<label for="spenditem">
				      			Item: 
				      		</label>
							<select id="spenditem" onchange="itemselect(this.value)" style="width:185px">
								<option value="''">All</option>
								@foreach($items as $item)
								<option value="{{$item->id}}">{{$item->name}}</option>
								@endforeach
							</select>
						</div>
				      </div>
				      <div id="chart_div" class="mt-3 googlechart" style="width:800px;margin-left:auto;margin-right:auto" class="mb-4"></div>
				    </div>
				</div>
			</div>




	<div class="panel panel-default">
		<div class="panel-heading text-left" style="background-color:#5cce84;color:#fff;">
			Summary	: Week of {{Carbon\Carbon::parse($thisweek)->format('m/d/Y')}}
		</div>
		<div class="panel-body reporting">	

			<div class="row ml-5 mr-3 mt-4">
				<div class="table-responsive">
					<table class="table tableborder table-striped table-hover ml-3" width="98%" id="table">
						<thead>
							<tr>
								<th class="text-left reporting">Store</th>
								<th class="text-left reporting">#</th>
								<th class="text-left reporting">Name</th>
								<th class="text-left reporting">Category</th>
								<th class="text-left reporting">Supplier</th>
								<th class="text-left reporting">UOM</th>
							{{-- <th class="text-left reporting">PARs</th> --}}
								<th class="text-left reporting">Demand: {{Carbon\Carbon::parse($lastweek)->format('m/d')}}</th>
								<th class="text-left reporting">Demand: 5 Wk</th>
							{{-- <th class="text-left reporting">Demand: 10 Wk</th> --}}
								<th class="text-left reporting">Spend: {{Carbon\Carbon::parse($lastweek)->format('m/d')}}</th>
								<th class="text-left reporting">Spend: PTD</th>
							{{-- <th class="text-left reporting">Spend: YTD</th> --}}
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
								<td class="text-left reporting">{{$itemstore->uom}}</td>
								{{-- <td class="text-left reporting">{{$itemstore->PARs}}</td> --}}
								@if(array_key_exists($itemstore->item_id,$lastweekdata))
									@foreach($lastweekdata as $key=>$value)
										@if($key === $itemstore->item_id)
											<td class="text-left reporting">{{$value}}</td>
										@endif
									@endforeach
								@else
									<td class="text-left reporting">0</td>
								@endif
								@if(array_key_exists($itemstore->item_id,$fiveweek))
									@foreach($fiveweek as $key=>$value)
										@if($key === $itemstore->item_id)
										<td class="text-left reporting">{{$value}}</td>
										@endif
									@endforeach
								@else
									<td class="text-left reporting">'0'</td>
								@endif
								{{-- @if(array_key_exists($itemstore->item_id,$tenweek))
									@foreach($tenweek as $key2=>$value2)
										@if($key2 === $itemstore->item_id)
											<td class="text-left reporting">{{$value2}}</td>
										@endif
									@endforeach
								@else
									<td class="text-left reporting">'0'</td>
								@endif --}}
								@if(array_key_exists($itemstore->item_id,$lastweekdata2))
									@foreach($lastweekdata2 as $key=>$value)
										@if($key === $itemstore->item_id)
											<td class="text-left reporting">${{$value}}</td>
										@endif
									@endforeach
								@else
									<td class="text-left reporting">0</td>
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
								{{-- @if(array_key_exists($itemstore->item_id,$ytd))
									@foreach($ytd as $key2=>$value2)
										@if($key2 === $itemstore->item_id)
											<td class="text-left reporting">${{$value2}}</td>
										@endif
									@endforeach
								@else
									<td class="text-left reporting">$0</td>
								@endif --}}
							@endforeach
							</tr>
						</tbody>
						<tfoot>
							<tr>
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

	var startdemand = {!! $startdemand !!};
	var enddemand = {!! $enddemand !!};

	//console.log(startdemand);
	//console.log(enddemand);

	if(startdemand != 0) {
		$('#datepicker3').val(startdemand);
	}

	if(enddemand != 0) {
		$('#datepicker4').val(enddemand);
	}

} );


</script>
@endsection