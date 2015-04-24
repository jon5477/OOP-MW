<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('test', 'AController@index');

Route::get('test1/{[receiver,data]}', ['uses' => 'UserdataController@senddata']);

Route::get('test2', 'AController@getDatas');

Route::get('home', 'HomeController@index');

Route::get('country/search', 'CountryController@searchByName');

Route::get('city/search', 'CountryController@searchByCountry');

Route::get('country/info', 'CountryController@displayCountry');

Route::get('country/video', 'CountryController@displayVideo');

Route::get('city/info', 'CountryController@displayCity');

Route::get('country/video', 'CountryController@displayVideo');

Route::get('city/video', 'CountryController@displayCityVideo');

Route::get('logout', 'UserController@destroy');

Route::get('userpage','UserPageController@index');

Route::get('country/save', 'UsersaveController@storeCountry');

Route::get('city/save', 'UsersaveCityController@storeCity');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
