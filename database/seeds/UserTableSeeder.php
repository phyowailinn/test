<?php 

use App\User;

class UserTableSeeder extends DatabaseSeeder{

    public function run()
    {
        DB::table('users')->delete();

        User::create([
        	'name' => 'kophyo',
        	'email' => 'foo@bar.com',
        	'password' => Hash::make('kophyo')
        	]);

    }

}