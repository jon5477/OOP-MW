<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Country;
use App\City;

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
		$this->call('CountrySeeder');
	}
}

class CountrySeeder extends Seeder {
	public function run() {
		Country::create(['countryName' => 'China', 'url' => 'https://www.youtube.com/watch?v=XrH-yg8MBJc']);
        Country::create(['countryName' => 'Indonesia', 'url' => 'https://www.youtube.com/watch?v=ln-aKT2TGlg']);
		$this->command->info('Seeded country table.');
	}
}

class CitySeeder extends Seeder {
    public function run() {
        City::create(['name' => 'Beijing', 'population' => 20000000, 'url' => "https://www.youtube.com/watch?v=AB4nXADdPPY"]);
        $this->command->info('Seeded city table.');
    }
}