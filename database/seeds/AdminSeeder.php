<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $credentials = [
		    'email'    => 'admin@ssidha.co.in',
		    'password' => 'password',
        ];
        $user = Sentinel::registerAndActivate($credentials);
        $user->save();
    }
}
