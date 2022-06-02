<?php

use Illuminate\Database\Seeder;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_merk')->insert([
            [
                'merk_code' => '01',
                'name' => 'Honda',
                // 'logoname' => 'honda.jpg',
            ],
            [
                'merk_code' => '02',
                'name' => 'Toyota',
                // 'logoname' => 'honda.jpg',
            ],
            [
                'merk_code' => '03',
                'name' => 'Daihatsu',
                // 'logoname' => 'honda.jpg',
            ],
            [
                'merk_code' => '04',
                'name' => 'Nissan',
                // 'logoname' => 'honda.jpg',
            ],
        ]);
    }
}