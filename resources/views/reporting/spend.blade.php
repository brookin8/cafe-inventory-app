@extends('layouts.app')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

<div id="loader"></div>

<div style="display:none;" id="loaderDiv">

@extends('reporting.spendgraph')

<div class="container">
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
				<div class="row ml-5 mr-3">	
				   <div id="dashboard_div">
				     <div class="row mt-3">
				      	<div id="selectdiv" class="ml-3">
				      		Start Date: 
							<select id="spendstart" onchange="startselect(this.value)">
								@foreach($spenddates as $spenddate)
								<option value="{{$spenddate}}">{{$spenddate}}</option>
								@endforeach
							</select>
						</div>
						<div id="selectdiv" class="ml-3">
				      		End Date: 
							<select id="spendend" onchange="endselect(this.value)">
								@foreach($spenddatesdesc as $spenddatedesc)
								<option value="{{$spenddatedesc}}">{{$spenddatedesc}}</option>
								@endforeach
							</select>
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
				      <div id="chart_div" class="mt-3"></div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>


@endsection