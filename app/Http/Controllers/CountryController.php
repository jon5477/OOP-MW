<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Country;
use App\City;
use Input;
use App\Services\APICall;

class CountryController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	public function searchByCountry() {
		$countryName = Input::get("country");
        $list = APICall::getCitiesByCountry($countryName);
        return View::make('citylist', array('citylist' => $list));
	}

    public function displayCountry() {
		$countryName = Input::get("country");
		$info = APICall::getCountriesInfo($countryName);
		return View::make('countryinfo', array('info' => $info));
    }

    public function displayCity() {
        $cityName = Input::get("city");
        try {
            $city = City::findByName($cityName);
            return View::make('cityinfo', array('name' => $cityName, 'info' => null)); // what info do you want to return?
        } catch (\Illuminate\Database\QueryException $e) {
            return View::make('cityinfo', array('name' => $cityName, 'info' => null));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return View::make('cityinfo', array('name' => $cityName, 'info' => null));
        }
    }


    public function displayVideo() {
        $countryName = Input::get("country");
        try {
            $country = Country::findByName($countryName);
            return View::make('ytdisplay', array('url' => $country->url));
        } catch (\Illuminate\Database\QueryException $e) {
            return View::make('noytdisplay', array('name' => $countryName));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return View::make('noytdisplay', array('name' => $countryName));
        }
    }

    public function displayCityVideo() {
        $cityName = Input::get("city");
        try {
            $city = City::findByName($cityName);
            return View::make('ytdisplay', array('url' => $city->url));
        } catch (\Illuminate\Database\QueryException $e) {
            return View::make('noytdisplay', array('name' => $cityName));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return View::make('noytdisplay', array('name' => $cityName));
        }
    }
}
