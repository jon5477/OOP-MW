<?php namespace App\Services;

class APICall{
	private static $allCountriesURL="https://restcountries.eu/rest/v1/all";
	private static $allCitiesURL="https://raw.githubusercontent.com/David-Haim/CountriesToCitiesJSON/master/countriesToCities.json";

	public static function getAllCountries(){
		$json=file_get_contents(self::$allCountriesURL);
		$jsonData=json_decode($json, true);
		return $jsonData;
	}

	public static function getCitiesByCountry(){
		$json=file_get_contents(self::$allCitiesURL);
		$jsonData=json_decode($json, true);
		print_r($jsonData);
		//$cities=$jsonData[$countryName];
		//return $cities;
	}
}