@extends('layout')



@section('content')
<!--
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>

			</div>
		</div>
	</div>
</div> -->
<head>
	<style>
		body {
			background-image: url("wall2.jpg");
		}
		label {
			color: #000066;
		}
	</style>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<script src="file.js"></script>
</head>
<div id="mainbody">
		<div class="search">
		<form name="search" action="country/search" method="get" accept-charset="utf-8">
				<ul>
					<li>
						<label for="searchcountry">Country:</label>
						<input type="country" name="countryname">
					</li>
					<li>
						<input class="btn btn-primary" type="submit" value="Search">
					</li>
				</ul> 
		</form>
        <hr>
		<div id="countrylist">

            <table>
                <tr>
                    <td colspan="2">
                        <select id="countryselect" name="country" size="20">
                            @foreach (\App\Services\APICall::getAllCountries() as $country)
                                <option value="{{ $country["name"] }}" onclick="selectCountry(this.value)">{{ $country["name"] }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="40%"><input class="btn btn-secondary" type="submit" value="Save Country" onclick="getSelectedCountry()"></td>
                    <td><input class="btn btn-secondary" type="submit" value="Save City" onclick="getSelectedCity()"></td>
                </tr>
            </table>
			{{-- <input class="save-country" type="submit" value="save country" onclick="getSelectedValue()">
			<input class="save-city" type="submit" value="save city" onclick="getSelectedCity()"> --}}
	    </div>
	    <div id="citylist">

			<!--<select name="credit_card" size="20">
				<option value="Visa">Seattle</option>
				<option value="Mastercard">Boulder</option>
				<option value="American Express">New York</option>
				<option value="Visa">Denver</option>
				<option value="Mastercard">Los Angles</option>
				<option value="American Express">San Francisco</option>
				<option value="Visa">San Diego</option>
				
			</select>
			<input type="submit" value="search data">-->

	    </div>
        </div>

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
	    
    </div>
    <!--<video widht="320" height="240"autoplay>
		<source src="#" type="video/mp4">
	YOur browser does not support the video tag	
	</video>-->

	

</body>
</html>



	
	
	

	



