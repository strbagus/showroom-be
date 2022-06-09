<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_car')->insert([
            [   
                'name' => 'Mobil Toyota Avanza Silver',
                'year' => 2014,
                'transmition' => 'Manual',
                'mileage' => 64,
                'type_id' => 2,
                'merk_id' => 2,
                'model_id' => 4,
                'machine' => 1300,
                'color' => 'Silver',
                'sell_price' => 125000000,
                'buy_price' => 115000000,
                'plat' => 'AB',
                'fuel' => 'Bensin',
                'status' => 'Dijual',
            ],
            [
                'name' => 'Mobil Honda Civic R',
                'year' => 2018,
                'transmition' => 'Manual',
                'mileage' => 25,
                'type_id' => 4,
                'merk_id' => 1,
                'model_id' => 1,
                'machine' => 1300,
                'color' => 'Red Candy',
                'sell_price' => 255000000,
                'buy_price' => 250000000,
                'plat' => 'AB',
                'fuel' => 'Bensin',
                'status' => 'Terjual',
            ],
            [
                'name' => 'Mobil Nissan X-trail Solar',
                'year' => 2013,
                'transmition' => 'Manual',
                'mileage' => 59,
                'type_id' => 3,
                'merk_id' => 4,
                'model_id' => 1,
                'machine' => 1900,
                'color' => 'Black Doff',
                'sell_price' => 155000000,
                'buy_price' => 145000000,
                'plat' => 'AB',
                'fuel' => 'Solar',
                'status' => 'Dijual',
            ],
        ]);
    }
}
