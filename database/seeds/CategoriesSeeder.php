<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	'category' => 'Laptop'
        ];
        DB::table('categories')->insert($data);

				$data = [
        	'category' => 'Smartwatch'
        ];
        DB::table('categories')->insert($data);

        $data = [
        	'category' => 'Headset/Earphone'
        ];
        DB::table('categories')->insert($data);

    }
}
