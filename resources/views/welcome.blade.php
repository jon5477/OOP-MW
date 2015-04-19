<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<script src="file.js"></script>
</head>
<body>
	<header>
		<h1>CCFinder</h1>
		<div id="header">
			<ul class="main-nav">
				<li class="dropdown">
					<a href="/auth/login">Sign in</a>
				</li>
				<li><a href="/auth/register">Sign up</a></li>
			</ul>	
			
		</div>
	</header>


	<div id="mainbody">

		<div class="search">
		<form name="search" action="country/search" method="get" accept-charset="utf-8">
				<ul>
					<li>
						<label for="searchcountry">Country:</label>
						<input type="country" name="countryname">
					</li>
					<li>
						<input type="submit" value="search">
					</li>
				</ul> 
		</form>

		<div id="countrylist">
			<select id="countryselect" name="country" size="20">
				@foreach (\App\Services\APICall::getAllCountries() as $country)
                    <option value="{{ $country["name"] }}" onclick="selectCountry(this.value)">{{ $country["name"] }}</option>
				@endforeach
			</select>
	    </div>
	    <div id="citylist">
	    </div>
        </div>
        <table border="1">
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
    </div>
</body>
</html>






