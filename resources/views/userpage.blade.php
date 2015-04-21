@extends('layout')

@section('content')

<head>
	<p>welcome {!! $userid !!}</p>
	
</head>
<div id="main">
	<div id="countrydata">
		<select name="country" size="20">
		@foreach ($data as $d)
		<option value="{{ $d }}" onclick="fetchCountryData(this.value)">{{ $d	 }}</option>
		@endforeach
		</select>
	</div>
	<div id="citydata">
		<select name="city" size="20">
		@foreach ($data1 as $d1)
		<option value="{{ $d1 }}" onclick="fetchCityData(this.value)">{{ $d1	 }}</option>
		@endforeach
		</select>

	</div>
</div>

@stop
