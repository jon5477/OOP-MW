<?php namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class Place extends Model {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = ['id', 'longitude', 'latitude', 'population', 'name'];

	public function getId(){
		return $this->id;
	}

	public function getLongitude(){
		return $this->longitude;
	}

	public function getLatitude(){
		return $this->latitude;
	}

	public function getPopulation(){
		return $this->population;
	}

	public function getName(){
		return $this->name;
	}

	public abstract function returnData();
}