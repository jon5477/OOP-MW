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

Route::get('home', 'HomeController@index');

Route::get('country/search', 'CountryController@searchByName');

Route::get('city/search', 'CountryController@searchByCountry');

Route::get('country/info', 'CountryController@displayCountry');

Route::get('city/info', 'CountryController@displayCity');

Route::get('logout', 'UserController@destroy');

Route::get('userpage','UserPageController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
