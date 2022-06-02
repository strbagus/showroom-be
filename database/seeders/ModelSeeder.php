<?php
namespace Database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $namearr = ['Civic, Jazz, BR-V'];
        DB::table('ref_model')->insert([
            for($i; $i>$namearr.lenght; $i++){
                echo "['model_code' => '00'".i."],['name'=>'".$nameearr[i]."'],['merk_code'=>'"$merkarr[i]"']";
            }
            // [
            //     'model_code' => '001',
            //     'name' => 'Civic',
            //     'merk_code' => '01',
            // ],
            // [
            //     'model_code' => '002',
            //     'name' => 'Jazz',
            //     'merk_code' => '01',
            // ],
            // [
            //     'model_code' => '003',
            //     'name' => 'BR-V',
            //     'merk_code' => '01',
            // ],
            // [
            //     'model_code' => '004',
            //     'name' => 'Avanza',
            //     'merk_code' => '02',
            // ],
            // [
            //     'model_code' => '005',
            //     'name' => 'Yaris',
            //     'merk_code' => '02',
            // ],
            // [
            //     'model_code' => '006',
            //     'name' => 'Xenia',
            //     'merk_code' => '03',
            // ],
            // [
            //     'model_code' => '007',
            //     'name' => 'Alya',
            //     'merk_code' => '03',
            // ],
            // [
            //     'model_code' => '008',
            //     'name' => 'Terios',
            //     'merk_code' => '03',
            // ],
            // [
            //     'model_code' => '009',
            //     'name' => 'Livina',
            //     'merk_code' => '04',
            // ],
            // [
            //     'model_code' => '010',
            //     'name' => 'Serena',
            //     'merk_code' => '04',
            // ],
            // [
            //     'model_code' => '011',
            //     'name' => 'X-trail',
            //     'merk_code' => '04',
            // ],
        ]);
    }
}
