<!DOCTYPE html>
<html lang="en">
  <head>
	<style>
		body {
			background-image: url("wall3.jpg");
		}
		label {
			color: #000066;
		}
	</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Welcome to CCFinder</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<script src="file.js"></script>
  </head>

  <body>
	
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CCFinder</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
					<a href="/auth/login">Sign in</a>
				</li>
            <li><a href="/auth/register">Sign up</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div id="mainbody">

		<div class="search">
		<form name="search" action="country/search" method="get" accept-charset="utf-8">
				<ul>
					<li>
						<label for="searchcountry">Country:</label>
						<input type="country" name="countryname">
					</li>
					<li>
						<input class="btn btn-primary" type="submit" value="search">
					</li>
				</ul>
		</form>
        <hr>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
  </body>
</html>




<!--<html>
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
</html>-->






