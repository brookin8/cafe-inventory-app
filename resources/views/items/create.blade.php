@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-11 col-md-11 col-lg-10 col-xl-10 createitem">
        	<form method="post" action="/items" class="col-12 createitem">
        	{{ csrf_field() }}
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="row">
                		<div class="col">
                			New Item
                		</div>
                		<div class="col text-right">
							<a href="../items"><button class="btn btn-default" type="button">Discard</button></a>
							<button class="btn btn-primary newitem" type="submit">Save</button>
						</div>
                	</div>
                </div>
            <div class="panel-body items">
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
						<div class="form-group row">
						  	<label for="name" class="col-4 col-form-label text-right createText">Name</label>
						  	<div class="col-8">
						  		<input type="text" id="name" name="name" class="form-control" required>	
						  	</div>
						</div>
						<div class="form-group row">
						  	<label for="category" class="col-4 col-form-label text-right createText">Category</label>
						  	<div class="col-8">
						  		<select name="category" id="category" class="form-control createOption" required>
						  				<option value="" disabled selected>Select Category</option>
						  			@foreach ($categories as $category)
						  				<option value="{{ $category->id }}">{{ $category->name }}</option>
						  			@endforeach
						  		</select>
						  	</div>
						</div>
						<div class="form-group row">
						  	<label for="supplier" class="col-4 col-form-label text-right createText">Supplier</label>
						  	<div class="col-8">
						  		<select name="supplier" id="supplier" class="form-control createOption" required>
						  				<option value="" disabled selected>Select Supplier</option>
						  			@foreach ($suppliers as $supplier)
						  				<option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
						  			@endforeach
						  		</select>	
						  	</div>
						</div>
						<div class="form-group row">
						  	<label for="supplier_item" class="col-4 col-form-label text-right createText">Supplier Item ID</label>
						  	<div class="col-8">
						  		<input type="text" id="supplier_item_identifier" name="supplier_item_identifier" class="form-control" required>
						  	</div>	
						</div>
						<div class="form-group row">
						  	<label for="uom" class="col-4 col-form-label text-right createText">Unit of Measure</label>
						  	<div class="col-8">
						  		<select name="uom" id="uom" class="form-control createOption" required>
						  			<option value="" disabled selected>Select UOM</option>
						  			@foreach ($uoms as $uom)
						  				<option value="{{ $uom->id }}">{{ $uom->unit }}</option>
						  			@endforeach
						  		</select>	
						  	</div>
						</div>
						<div class="form-group row">
						  	<label for="cost" class="col-4 col-form-label text-right createText">PARs</label>
						  	<div class="col-8">
						  		<input type="number" step="any" id="pars" name="pars" class="form-control">
						  	</div>	
						</div>
						<div class="form-group row">
						  	<label for="cost" class="col-4 col-form-label text-right createText">Cost ($)</label>
						  	<div class="col-8" required>
						  		<input type="number" step="any" id="cost" name="cost" class="form-control">
						  	</div>
						
						</div>
				</div>
			</div>
			</form>
		
	</div>
	</div>
</div>

@endsection