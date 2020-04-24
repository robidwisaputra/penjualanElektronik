<?php

use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	'brand' => 'Xiaomi'
        ];
        DB::table('brands')->insert($data);
				
				$data = [
        	'brand' => 'Samsung'
        ];
        DB::table('brands')->insert($data);

        $data = [
        	'brand' => 'Realme'
        ];
        DB::table('brands')->insert($data);

				$data = [
        	'brand' => 'Apple'
        ];
        DB::table('brands')->insert($data);
        
        $data = [
        	'brand' => 'Oppo'
        ];
        DB::table('brands')->insert($data);

   			$data = [
        	'brand' => 'Vivo'
        ];
        DB::table('brands')->insert($data);

        $data = [
        	'brand' => 'Nokia'
        ];
        DB::table('brands')->insert($data);

        $data = [
        	'brand' => 'Huawei'
        ];
        DB::table('brands')->insert($data);

        $data = [
        	'brand' => 'Sony'
        ];
        DB::table('brands')->insert($data);

    }
}
