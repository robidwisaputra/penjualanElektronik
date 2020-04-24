<?php

use Illuminate\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	'name' => 'Asus Store',
         	'address' => 'Jl. Imam Bonjol No. 92 Jakarta',
        	'phone' => '456721',
        	'email' => 'asuststoreofficial@gmail.com'
        ];
        Db::table('suppliers')->insert($data);

        $data = [
        	'name' => 'Electronic Stores',
         	'address' => 'Jl. Sindangasih No. 62 Cianjur',
        	'phone' => '829192',
        	'email' => 'storeelectronic@gmail.com'
        ];
        Db::table('suppliers')->insert($data);

        $data = [
        	'name' => 'PT. Smart Techno',
         	'address' => 'Jl. Oto Iskandar  No. 311 Badung',
        	'phone' => '098753',
        	'email' => 'smarttechnooficial@gmail.com'
        ];
        Db::table('suppliers')->insert($data);

        $data = [
        	'name' => 'Phone Tech',
         	'address' => 'Jl. Moh. Sholeh No. 25 Tangerang',
        	'phone' => '657383',
        	'email' => 'technophone@gmail.com'
        ];
        Db::table('suppliers')->insert($data);
    }
}
