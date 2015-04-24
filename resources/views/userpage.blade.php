@extends('layout')

@section('content')
<head>
    <script src="file.js"></script>
</head>
<p class="welcome">Welcome {{ $userid }}!</p>
<ul>
	<li>
		<label for="senddata">Receiver:</label>
		<input type="user" name="username" id="username">
	</li>
	<li>
		<input class="send-user" type="submit" value="Send" onclick="sendUserName()">
	</li>
</ul> 

<hr></hr>

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

        <td style="border:2px solid black">
			<ul id="placerecomend">
				@foreach ($receiving_data as $d)
			    	<li><font color="red">{{ $d['sender']}}</font> suggested <font color="blue">{{$d['data'] }}</font></li><br>
				@endforeach
			</ul>
		</td>
	</tr>
</table>

@endsection
