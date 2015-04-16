<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
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
}