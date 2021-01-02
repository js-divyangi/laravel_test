<?php

use Illuminate\Database\Seeder;
use app\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'      => 'div',
            'email'     => 'div@gmail.com',
            'password'  => ('password_hash()'),
            'remember_token' => str_random(10)
        ])
    }
}
