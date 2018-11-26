<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Jazmin',
            'email' => 'jazminv8.95@gmail.com',
            'password' => bcrypt('jazmin')
        ]);

        User::create([
            'name' => 'Fredy',
            'email' => 'fcoloma@dilipa.com.ec',
            'password' => bcrypt('papucho')
        ]);

    }
}
