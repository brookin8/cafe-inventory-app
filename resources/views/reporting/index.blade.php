@extends('layouts.app')

@section('content')

<div class="container">

<h1>REPORTING</h1>

<h2>This week: {{$thisweek->format('m-d-Y')}}</h2>
<h2>Last week: {{$lastweek->format('m-d-Y')}}</h2>

<h3>Spend</h3>

@foreach($spendorders as $spendorder)

{{$spendorder->item_id}}<br>

@endforeach


</div>

@endsection