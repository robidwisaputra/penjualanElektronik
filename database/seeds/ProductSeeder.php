<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	'id_category' => '1',
        	'id_brand' => '3',
        	'name' => 'Acer X15Fa',
        	'model' => 'predator',
        	'guarantee' => '2 tahun',
        	'price' => '12000000',
        	'stock' => '20',
        	'image' => 'acerx15fa.png',
        	'description' => '-',
        ];
        DB::table('products')->insert($data);

        $data = [
        	'id_category' => '1',
        	'id_brand' => '1',
        	'name' => 'Xiaomi',
        	'model' => 'Redmi 5A',
        	'guarantee' => '1 tahun',
        	'price' => '1000000',
        	'stock' => '200',
        	'image' => 'redmi51.png',
        	'description' => '-',
        ];
        DB::table('products')->insert($data);
    }
}
