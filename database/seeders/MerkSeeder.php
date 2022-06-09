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
                'name' => 'Honda',
                'logoname' => 'honda.jpg',
            ],
            [
                'name' => 'Toyota',
                'logoname' => 'honda.jpg',
            ],
            [
                'name' => 'Daihatsu',
                'logoname' => 'honda.jpg',
            ],
            [
                'name' => 'Nissan',
                'logoname' => 'honda.jpg',
            ],
        ]);
    }
}