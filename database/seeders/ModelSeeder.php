<?php

use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('ref_model')->insert([
            [
                'name' => 'Civic',
                'merk_id' => 1,
            ],
            [
                'name' => 'Jazz',
                'merk_id' => 1,
            ],
            [
                'name' => 'BR-V',
                'merk_id' => 1,
            ],
            [
                'name' => 'Avanza',
                'merk_id' => 2,
            ],
            [
                'name' => 'Yaris',
                'merk_id' => 2,
            ],
            [
                'name' => 'Xenia',
                'merk_id' => 3,
            ],
            [
                'name' => 'Alya',
                'merk_id' => 3,
            ],
            [
                'name' => 'Terios',
                'merk_id' => 3,
            ],
            [
                'name' => 'Livina',
                'merk_id' => 4,
            ],
            [
                'name' => 'Serena',
                'merk_id' => 4,
            ],
            [
                'name' => 'X-trail',
                'merk_id' => 4,
            ],
        ]);
    }
}
