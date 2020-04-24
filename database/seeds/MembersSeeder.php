<?php

use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	'name' => 'Ferdy Sambo',
        	'gender' => 'Male',
        	'address' => 'Jl. Moh Yamin No. 98 Cianjur',
        	'phone' => '087764836582',
        	'email' => 'ahmadAdeng@yahoo.com'
        ];
        DB::table('members')->insert($data);

        $data = [
        	'name' => 'Khansa Fairuz',
        	'gender' => 'Female',
        	'address' => 'Jl. Siliwangi No. 14 Bandung',
        	'phone' => '085783925720',
        	'email' => 'harnisa802@gmail.com'
        ];
        DB::table('members')->insert($data);

        $data = [
        	'name' => 'Wali Hanfi',
        	'gender' => 'Male',
        	'address' => 'Jl. Maliobor No. 102 Yogyakarta',
        	'phone' => '082384928592',
        	'email' => 'firdausryan84@gmail.com'
        ];
        DB::table('members')->insert($data);

        $data = [
        	'name' => 'Sarah Nuraliah',
        	'gender' => 'Female',
        	'address' => 'Jl. Pangeran Hidayatullah No. 54 Cianjur',
        	'phone' => '089584018493',
        	'email' => 'audrytania74@yahoo.com'
        ];
        DB::table('members')->insert($data);

        $data = [
        	'name' => 'Rizki Rafly',
        	'gender' => 'Male',
        	'address' => 'Jl. Kh Opo Mustofa No. 74 Cianjur',
        	'phone' => '085784927381',
        	'email' => 'hendrinoerjaya@gmail.com'
        ];
        DB::table('members')->insert($data);
    }
}
