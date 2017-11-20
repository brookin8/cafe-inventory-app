@extends('layouts.app')

@section('content')

<h1 class="text-center mb-5">Inventory Count</h1>
<form action="/inventorycounts" method="post" class="mb-5">
	{{ csrf_field() }}
	<div class="row justify-content-center mb-5">
		<button type="submit" value="save" name="button" class="btn btn-primary mr-3">Save for Later</button>
		<button type="submit" value="submit" name="button" class="btn btn-primary">Submit</button>
	</div>
<div class="container">
	<table class="table tableborder table-striped table-hover invcountwidth table-top">
		<thead>	
			<tr>
				<th class="text-center cellwidth">Item No</th>
				<th class="text-center cellwidth">Item Name</th>
				<th class="text-center cellwidth">Category</th>
				<th class="text-center cellwidth">Supplier</th>
				<th class="text-center cellwidth">Qty Onhand</th>
			</tr>
		</thead>
	</table>
</div>

<div class="container">
<table class="table table-borderless table-striped table-hover invcountwidth" id="table">

	<thead>
		<tr>
			<th class="text-center cellwidth"></th>
			<th class="text-center cellwidth"></th>
			<th class="text-center cellwidth"></th>
			<th class="text-center cellwidth"></th>
			<th class="text-center cellwidth"></th>
		</tr>
	</thead>

	<tbody>
	@foreach($items as $item)
	<tr class="">
		<td class="text-center cellwidth"><input type="hidden" name="item{{$loop->iteration}}" value="{{$item->id}}">{{$item->id}}</td>
		<td class="text-center cellwidth">{{$item->name}}</td>
		<td class="text-center cellwidth">{{$item->category->name}}</td>
		<td class="text-center cellwidth">{{$item->supplier->name}}</td>
		<td class="text-center cellwidth"><input type="number" class="invcountqty" name="qty{{$loop->iteration}}"></td>
	</tr>
	@endforeach
	</tbody>
</table>
</div>
</form>
		
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


	