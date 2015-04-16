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
        //$json = str_replace("'", "", $json);
        //$json = utf8_decode($json);
        //$json = substr($json, 2);
        //Log::info(print_r($json, true));
		$jsonData = json_decode($json, true);
        //$error = json_last_error_msg();
        //Log::info($error);
        //Log::info(print_r($jsonData, true));
        //Log::info(gettype($countryName));
		$cities = $jsonData[$countryName];
        //Log::info(print_r($cities));
		return $cities;
	}
}