<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Jaime',
        	'email' => 'admin@mail.com',
        	'password' => bcrypt( '1286')
        ]);
        User::create([
            'name' => 'Victor',
            'email' => 'admi1n@mail.com',
            'password' => bcrypt( '1286')
        ]);
    }
}
