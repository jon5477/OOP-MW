<?php namespace App\Services;

use Log;

class APICall{
	private static $allCountriesURL="https://restcountries.eu/rest/v1/all";
	private static $allCitiesURL="countriesToCities.json";

	public static function getAllCountries() {
		$json=file_get_contents(self::$allCountriesURL);
		$jsonData=json_decode($json, true);
		return $jsonData;
	}

	public static function getCitiesByCountry($countryName) {
		$json = file_get_contents(self::$allCitiesURL);
		$jsonData = json_decode($json, true);
		$cities = $jsonData[$countryName];
		return $cities;
	}
	
	public static function getCountriesInfo($countryName){
		$countryName=preg_replace('/\s*/','',$countryName);
		$countryName1=strtolower($countryName);
		$countryInfoURL1='https://restcountries.eu/rest/v1/name/';
		$request = $countryInfoURL1.$countryName1;
		$json = file_get_contents($request);
		$jsonData = json_decode($json,true);
		return $jsonData;
	}
}
