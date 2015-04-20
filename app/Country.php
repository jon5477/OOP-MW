<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	protected $fillable = ['countryName','url'];

    public static function findByName($name) {
        return Country::where('countryName', '=', $name)->firstOrFail();
    }
}
