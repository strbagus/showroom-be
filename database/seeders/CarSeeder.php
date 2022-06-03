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
                'car_code' => '00001',
                'name' => 'Mobil Toyota Avanza Silver',
                'year' => 2014,
                'transmition' => 'Manual',
                'mileage' => 64,
                'merk_code' => '02',
                'type_code' => '004',
                'machine' => 1300,
                'color' => 'Silver',
                'sell_price' => 125000000,
                'buy_price' => 115000000,
                'plat' => 'AB',
                'fuel' => 'Bensin',
                'status' => 'Dijual',
            ],
            [
                'car_code' => '00002',
                'name' => 'Mobil Honda Civic R',
                'year' => 2018,
                'transmition' => 'Manual',
                'mileage' => 25,
                'merk_code' => '01',
                'type_code' => '001',
                'machine' => 1300,
                'color' => 'Red Candy',
                'sell_price' => 255000000,
                'buy_price' => 250000000,
                'plat' => 'AB',
                'fuel' => 'Bensin',
                'status' => 'Terjual',
            ],
            [
                'car_code' => '00003',
                'name' => 'Mobil Nissan X-trail Solar',
                'year' => 2013,
                'transmition' => 'Manual',
                'mileage' => 59,
                'merk_code' => '04',
                'type_code' => '011',
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
