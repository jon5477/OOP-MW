<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Place {
	protected $guarded = ['history'];

	public function getHistory() {
		return $this->history;
	}

	public function returnData() {
		// TODO
	}

	public function listCities() {
		// TODO return a list of cities
	}
}