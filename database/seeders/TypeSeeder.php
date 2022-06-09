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
                'name' => 'SUV',
            ],
            [
                'name' => 'MPV',
            ],
            [
                'name' => 'HatchBack',
            ],
            [
                'name' => 'Sedan',
            ],
            [
                'name' => 'Pickup',
            ]
        ]);
    }
}
