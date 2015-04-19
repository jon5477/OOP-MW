<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create([
        'name'     => 'Chris Sevilleja',
        'email'    => 'chris@scotch.io',
        'password' => Hash::make('awesome'),
    ]);
}

}
