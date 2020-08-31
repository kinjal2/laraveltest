<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		  DB::table('users')->insert([
            'name' => "TestUser",
            'email' => 'admin@admin.com',
            'password' => md5('password'),
            'email_verified_at' =>now(),
        ]);
    }
}
