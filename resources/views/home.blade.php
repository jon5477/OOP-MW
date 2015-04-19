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

    <!--<textarea name="textarea" rows="20" cols="50">
	    	<p>Data of the city</p>



	</textarea>-->
	<div class="output-box">
		<p>Data of the country</p>

	</div>
	<input class="save-button" type="submit" value="save!">
	<video widht="320" height="240"autoplay>
		<source src="#" type="video/mp4">
	YOur browser does not support the video tag	
	</video>
	



@stop
