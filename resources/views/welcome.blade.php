
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
			<select name="credit_card" size="20">
				<option value="Visa">America</option>
				
			</select>
	    </div>
	    <div id="citylist">
			<select name="credit_card" size="20">
				<option value="Visa">Seattle</option>
				<option value="Mastercard">Boulder</option>
				<option value="American Express">New York</option>
				<option value="Visa">Denver</option>
				<option value="Mastercard">Los Angles</option>
				<option value="American Express">San Francisco</option>
				<option value="Visa">San Diego</option>
				
			</select>
			<input type="submit" value="search data">
	    </div>

	   

    </div>

     <div class="output-box">
		<p>Data of the country</p>

	</div>

</body>
</html>

	

	


