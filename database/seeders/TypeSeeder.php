<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('ref_type')->insert([
            [
                'type_code' => '001',
                'name' => 'Civic',
                'merk_code' => '01',
            ],
            [
                'type_code' => '002',
                'name' => 'Jazz',
                'merk_code' => '01',
            ],
            [
                'type_code' => '003',
                'name' => 'BR-V',
                'merk_code' => '01',
            ],
            [
                'type_code' => '004',
                'name' => 'Avanza',
                'merk_code' => '02',
            ],
            [
                'type_code' => '005',
                'name' => 'Yaris',
                'merk_code' => '02',
            ],
            [
                'type_code' => '006',
                'name' => 'Xenia',
                'merk_code' => '03',
            ],
            [
                'type_code' => '007',
                'name' => 'Alya',
                'merk_code' => '03',
            ],
            [
                'type_code' => '008',
                'name' => 'Terios',
                'merk_code' => '03',
            ],
            [
                'type_code' => '009',
                'name' => 'Livina',
                'merk_code' => '04',
            ],
            [
                'type_code' => '010',
                'name' => 'Serena',
                'merk_code' => '04',
            ],
            [
                'type_code' => '011',
                'name' => 'X-trail',
                'merk_code' => '04',
            ],
        ]);
    }
}