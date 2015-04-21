@extends('layout')

@section('content')

<head>
	<p>welcome {!! $userid !!}</p>
	
</head>
<table>
	<tr>
		<th>
			<div id="countrydata">
				<select name="country" id="countryselect" size="20">
				@foreach ($data as $d)
				<option value="{{ $d }}" onclick="fetchCountryData(this.value)">{{ $d	 }}</option>
				@endforeach
				</select>
			</div>
		</th>
		<th>
			<div id="citydata">
				<select name="city" size="20" id="cityselect">
				@foreach ($data1 as $d1)
				<option value="{{ $d1 }}" onclick="fetchCityData(this.value)">{{ $d1	 }}</option>
				@endforeach
				</select>

			</div>
		</th>
	</tr>
</table>

<table border="0">
            <tr>
                <td><p onclick="displayInfo()">Info</p></td>
                <td><p onclick="displayVideo()">YouTube Video</p></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div id="output" class="output-box">
                    </div>
                </td>
            </tr>
        </table>

@stop
