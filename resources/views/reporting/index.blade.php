@extends('layouts.app')

@section('content')

<div id="loader"></div>

<div style="display:none;" id="loaderDiv">


@extends('reporting.demandgraph')

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
								    <a class="nav-link tabs active reportingtabs" href="#">Demand</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link tabs reportingtabs" href="../reporting/spend">Spend</a>
								  </li>
							</ul>
						</div>
                	</div>
				</div>

			<div class="panel-body reporting">			
				<div class ="row reportingheader text-center mb-3">
					<div class="col text-left">
						<h2 class="mb-4 ml-5 reportingh2 mt-4">Demand</h2>
					</div>
					<div class="col text-right">
						<form>
						    <input type=button class="btn btn-default mt-3" name=print value="Print" onClick="window.print()">
						</form>
					</div>
				</div>
					<div class="row ml-5 mr-3">	
						 <div id="dashboard_div2">
					     <div class="row mt-3">
					      	<div id="selectdiv" class="ml-3 mb-2">
					      		Start Date: 
								<select id="spendstart2" onchange="startselect2(this.value)">
									@foreach($demanddates as $demanddate)
									<option value="{{$demanddate}}">{{$demanddate}}</option>
									@endforeach
								</select>
							</div>
							<div id="selectdiv" class="ml-3">
					      		End Date: 
								<select id="spendend2" onchange="endselect2(this.value)">
									@foreach($demanddatesdesc as $demanddatedesc)
									<option value="{{$demanddatedesc}}">{{$demanddatedesc}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="row mt-3">
					      	<div id="selectdiv" class="ml-3">
					      		Category: 
								<select id="spendcategory2" onchange="categoryselect2(this.value)">
									<option value="''">All</option>
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
									@endforeach
								</select>
							</div>
							<div id="selectdiv" class="ml-3">
					      		Supplier: 
								<select id="spendsupplier2" onchange="supplierselect2(this.value)">
									<option value="''">All</option>
									@foreach($suppliers as $supplier)
									<option value="{{$supplier->id}}">{{$supplier->name}}</option>
									@endforeach
								</select>
							</div>
					      </div>
					      <div id="chart_div2" class="mt-3"></div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


@endsection