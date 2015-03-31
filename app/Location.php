<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {




	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['longitued', 'latitude', 'population', 'name'];

	public function getId(){

	}

	public function getLongitude(){

	}

	public function getLatitude(){

	}

	public function getPopulation(){

	}

	public function getName(){

	}

	public function returnData(){
		
	}


}