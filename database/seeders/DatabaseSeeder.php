<?php

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
            TypeSeeder::class,
            ModelSeeder::class,
            AdminSeeder::class,
            CarSeeder::class,
        ]);
        
    }
}
