<?php

use Illuminate\Database\Seeder;

class CarimageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_carimage')->insert([
            [
                'filename' => 'car1 pic1',
                'car_id' => 1,
            ],
            [
                'filename' => 'car1 pic2',
                'car_id' => 1,
            ],
            [
                'filename' => 'car1 pic3',
                'car_id' => 1,
            ],
            [
                'filename' => 'car2 pic1',
                'car_id' => 2,
            ],
            [
                'filename' => 'car2 pic2',
                'car_id' => 2,
            ],
            [
                'filename' => 'car2 pic3',
                'car_id' => 2,
            ],
            [
                'filename' => 'car3 pic1',
                'car_id' => 3,
            ],
            [
                'filename' => 'car3 pic2',
                'car_id' => 3,
            ],
            [
                'filename' => 'car3 pic3',
                'car_id' => 3,
            ],
        ]);
    }
}
