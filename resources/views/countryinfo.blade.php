<html>
	<body>
		<?php
		    print "-Country name: ".$info[0]['name']."<br>";
			print "-Capital: ".$info[0]['capital']."<br>";
			echo "-Spelling: "."<br>";
			foreach ($info[0]['altSpellings'] as $spell){
			 echo $spell, '<br />';
			} 
			echo "-Region: ".$info[0]['region']."<br>";
			echo "-Population: ".$info[0]['population']."<br>";
			echo "-Area: ".$info[0]['area']."<br>";
			echo "-Borders: "."<br>";
			foreach ($info[0]['borders'] as $border){
			 echo $border."<br>";
			}
			echo "-Native name: ".$info[0]['nativeName']."<br>"; 
			echo "-Top level domain: "."<br>";
			foreach ($info[0]['topLevelDomain'] as $domain){
			 echo $domain."<br>";
			}
			echo "-Currencies: "."<br>";
			foreach ($info[0]['currencies'] as $curr){
			 echo $curr."<br>";
			} 
			echo "-Language: "."<br>";
			foreach ($info[0]['languages'] as $lan){
			 echo $lan."<br>";
			} 
		?>
	</body>	
</html>
