@extends('layout')

@section('content')
<head>
    <script src="file.js"></script>
</head>
<p class="welcome">Welcome {{ $userid }}!</p>
<table border="0">
    <tr>
        <th>Countries</th>
        <th>Cities</th>
    </tr>
	<tr>
		<td>
			<div id="countrylist">
				<select id="countryselect" name="country" size="20">
				@foreach ($data as $d)
			    	<option value="{{ $d }}" onclick="fetchCountryData(this.value)">{{ $d }}</option>
				@endforeach
				</select>
			</div>
		</td>
		<td>
			<div id="citydata">
				<select id="cityselect" name="city" size="20">
				@foreach ($data1 as $d1)
		    		<option value="{{ $d1 }}" onclick="fetchCityData(this.value)">{{ $d1 }}</option>
				@endforeach
				</select>
			</div>
		</td>
        <td>
            <table border="0">
                <tr>
                    <td width="10%"><button type="submit" class="btn btn-secondary" onclick="displayInfo()">Info</button></td>
                    <td><button type="submit" class="btn btn-secondary" onclick="displayVideo()">YouTube Video</button></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div id="output" class="output-box">
                        </div>
                    </td>
                </tr>
            </table>
        </td>
	</tr>
</table>
@endsection