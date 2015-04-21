@extends('layout')

@section('content')

<head>
	<p class="welcome">welcome {!! $userid !!}</p>
	
</head>
<table>
	<tr>
		<th>
			<div id="countrydata">
				<select name="country" size="20">
				@foreach ($data as $d)
				<option value="{{ $d }}" onclick="fetchCountryData(this.value)">{{ $d	 }}</option>
				@endforeach
				</select>
			</div>
		</th>
		<th>
			<div id="citydata">
				<select name="city" size="20">
				@foreach ($data1 as $d1)
				<option value="{{ $d1 }}" onclick="fetchCityData(this.value)">{{ $d1	 }}</option>
				@endforeach
				</select>

			</div>
		</th>
	</tr>
</table>

@stop
