<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {
    private static $allCountriesURL="https://restcountries.eu/rest/v1/all";
    private static $allCitiesURL="countriesToCities.json";

    public static function getAllCountries() {
        $json=file_get_contents(self::$allCountriesURL);
        $jsonData=json_decode($json, true);
        return $jsonData;
    }

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
        for (self::getAllCountries() as $country) {
            $country
        }
	}

}
