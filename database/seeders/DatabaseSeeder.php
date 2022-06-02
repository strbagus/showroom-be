<?php

namespace Database\seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MerkSeeder::class,
            ModelSeeder::class,
            AdminSeeder::class,
        ]);
        
    }
}
