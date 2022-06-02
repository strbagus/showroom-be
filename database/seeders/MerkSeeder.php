<?php
namespace Database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use App\Models\Merk;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Merk::create([
        //     [
        //         'merk_code' => '01',
        //         'name' => 'Honda',
        //         // 'logoname' => 'honda.jpg',
        //     ],
        //     [
        //         'merk_code' => '02',
        //         'name' => 'Toyota',
        //         // 'logoname' => 'honda.jpg',
        //     ],
        //     [
        //         'merk_code' => '03',
        //         'name' => 'Daihatsu',
        //         // 'logoname' => 'honda.jpg',
        //     ],
        //     [
        //         'merk_code' => '04',
        //         'name' => 'Nissan',
        //         // 'logoname' => 'honda.jpg',
        //     ],
        // ]);
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