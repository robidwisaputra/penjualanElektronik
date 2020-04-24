<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	'username' => 'admin',
        	'password' => 'admin',
        	'access' => 'admin'
        ];
        DB::table('users')->insert($data);

        $data = [
        	'username' => 'operator',
        	'password' => 'operator',
        	'access' => 'operator'
        ];
        DB::table('users')->insert($data);
    }
}
