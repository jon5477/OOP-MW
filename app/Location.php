<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = ['Id','longitude', 'latitude', 'population', 'name'];

	abstract public function getId();

	abstract public function getLongitude();

	abstract public function getLatitude();

	abstract public function getPopulation();

	abstract public function getName();

	abstract public function returnData();


}
