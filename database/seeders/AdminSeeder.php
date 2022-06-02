<?php
namespace Database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_admin')->insert([
            [
                'username' => 'admin',
                'name' => 'Administrator',
                'password' => Hash::make('admin'),
                'level' => 'Admin',
            ],
            [
                'username' => 'super',
                'name' => 'Super Administrator',
                'password' => Hash::make('super'),
                'level' => 'Super',
            ],
        ]);
    }
}