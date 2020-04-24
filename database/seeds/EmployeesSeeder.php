<?php

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	'name' => 'Giga Tanzillal',
        	'gender' => 'Male',
        	'address' => 'Jl. Didi Perwira Kusuma No. 132 Cianjur',
        	'phone' => '081894828471'
        ];
        DB::table('employees')->insert($data);

        $data = [
        	'name' => 'Anisa Salsabila',
        	'gender' => 'Female',
        	'address' => 'Jl. Moh Ali No. 263 Sukabumi',
        	'phone' => '082374838294'
        ];
        DB::table('employees')->insert($data);

        $data = [
        	'name' => 'Shelma Byanda',
        	'gender' => 'Female',
        	'address' => 'Jl. Iskandar Muda No. 147 Bogor',
        	'phone' => '089573829401'
        ];
        DB::table('employees')->insert($data);

        $data = [
        	'name' => 'Putri Ragen Ayu',
        	'gender' => 'Female',
        	'address' => 'Jl. Patimura No. 30 Jakarta',
        	'phone' => '081198478476'
        ];
        DB::table('employees')->insert($data);

        $data = [
        	'name' => 'Rizqi Al-azazil',
        	'gender' => 'Male',
        	'address' => 'Jl. I Gusti Ngurahrai No. 11 Depok',
        	'phone' => '083894038592'
        ];
        DB::table('employees')->insert($data);
    }
}
