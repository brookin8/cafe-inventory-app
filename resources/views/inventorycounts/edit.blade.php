@extends('layouts.app')

@section('content')

<div id="loader"></div>

<div style="display:none;" id="loaderDiv">
	<div class="container">
    <div class="row">
        <div class="col-xs-12">
       <form action="/inventorycounts/{{$count->id}}" method="post" class="mb-5">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="row">
                		<div class="col text-left">
                			Edit Count
                		</div>
                		<div class="col text-right buttoncol">
                			<a href="../../inventorycounts">
								<button type="button" class="btn btn-default mr-3">Discard</button>
							</a>
							<button type="submit" value="save" name="button" class="btn btn-outline-primary newitem mr-3">Save</button>
							<button type="submit" value="submit" name="button" class="btn btn-primary newitem">Submit</button>
						</div>
                	</div>
                </div>

                

   		 		<div class="panel-body">
   		 			<div class="row mt-3 mb-4 ml-2">
					<div class="col-2">
					  	<h3 class="orderform">Count #:</h3> 
				  		<div class="orderform">{{$count->id}}</div>
				  	</div>
				  	<div class="col-2">
					  	<h3 class="orderform">Total $:</h3> 
				  		<div class="orderform">${{$count->total_value_onhand}}</div>
				  	</div>
				  	<div class="col-3">
					  	<h3 class="orderform">Submitted By:</h3> 
				  		<div class="orderform">{{$count->user->name}}</div>
				  	</div>
				  	<div class="col-4">
				  		<h3 class="orderform">Date Submitted:</h3> 
				  		<div class="orderform">{{Carbon\Carbon::parse($count->updated_at)->format('m/d/Y')}}</div>
				  	</div>
					</div>
					<div class="row mt-3 mb-5 ml-2">
					  	<div class="col-4">
					  		<h3 class="orderform">Categories Counted</h3>
					  		<div class="orderform">
						  		<ul>
								  	@foreach($categoriesused as $categoryused)
								  	<li class="text-left">{{ $categoryused }}</li>
								  	@endforeach	
								</ul>
							</div>
					  	</div>
					  	<div class="col-4">
					  		<h3 class="orderform">Suppliers Counted</h3>
					  		<div class="orderform">
						  		<ul>
								  	@foreach($suppliersused as $supplierused)
								  	<li class="text-left">{{ $supplierused }}</li>
								  	@endforeach	
								</ul>
							</div>
					  	</div>
					</div>
					<div class="row mt-3 mb-5 ml-2">
					  	<div class="col-6">
					  		<h3 class="orderform">Items Counted</h3>
					  		<div class="orderform">
						  		<ul>
								  	@foreach($counteditems as $counteditem)
								  	<li class="text-left">{{ $counteditem->itemname }}</li>
								  	@endforeach	
								</ul>
							</div>
					  	</div>
					</div>

						<div class="container ml-4 mr-4">

						@foreach ($categories as $category)
						<div class="row">
							<button class="btn btn-lg mb-2 mt-3 ordercategory" data-toggle="collapse" href="#collapse{{$category->id}}" aria-expanded="false" aria-controls="collapse{{$category->id}}">
							{{ ucfirst(trans($category->name))}}
							</button>
						</div>
						<div class="collapse" id="collapse{{$category->id}}">
							<div class="row mt-4 mb-3 ordertop">
								<div class="col-2">Item #</div>
								<div class="col-5 text-left">Name</div>
								<div class="col-3">Supplier</div>
								<div class="col-2">Qty Onhand</div>
							</div>
						@foreach ($items as $item)
						@if($item->category_id === $category->id)
	 						 <div class="card card-block" style="width:95%">
	 						 	<div class="row">
	 						 		<div class="col-2">
	 						 		{{$item->id}}
	 						 		<input class="hidden" name="item{{$item->id}}" value="{{$item->id}}">
	 						 		</div>
									<div class="col-5 text-left">{{$item->name}}
									</div>
									<div class="col-3">
										{{$item->supplier->name}}
									</div>
									<div class="col-2">
										@if (in_array($item->id,$counteditemIds))
											@foreach ($counteditems as $counteditem)
												@if ($counteditem->item_id === $item->id)
													<td class="text-center cellwidth"><input type="number" class="invcountqty" value="{{$counteditem->inventorycount_qty}}" name="qty{{$item->id}}"></td>
												@endif
											@endforeach
										@else
											<td class="text-center cellwidth"><input type="number" class="invcountqty" name="qty{{$item->id}}"></td>
										@endif
									</div>
								</div>
							</div>
						@endif
						@endforeach
					</div>
					@endforeach
					</div>
				</div>
			</form>
			</div>
			</div>
		</div>
	</div>

<script>
    
	//   $(document).ready(function() {
	//     $('#table').DataTable();
	// } );

$(document).ready(function() {
    $('#table').DataTable( {
    	dom: '<"top">rt<"bottom">lif<"clear">', 
        initComplete: function () {
            this.api().columns(2).every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.header()).empty() )
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

            this.api().columns(3).every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.header()).empty() )
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
        }
    } );
} );


	
</script>


@endsection


	