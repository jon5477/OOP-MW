<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Place {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cities';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	array_push(parrent::$fillable, 'cityId');


	public function returnData(){
		return this->data;
	}

}