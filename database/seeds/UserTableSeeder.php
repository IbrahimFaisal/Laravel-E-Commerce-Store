<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\User::create([

            'name' => 'faisal khan',
            'email' => 'faisal@yahoo.com',
            'password' => bcrypt(123456),

        ]);

    }
}
