@extends('layout')

@section('content')
<p>Welcome {!! $userid !!}</p>
<div id="countrydata">
	<select name="city" size="20">
	@foreach ($data as $d)
    <option value="{{ $d }}" onclick="fetchCityData(this.value)">{{ $d	 }}</option>
	@endforeach
	</select>
</div>
<div id="data_store">
	

</div>

@stop
