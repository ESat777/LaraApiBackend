<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();

        $this->call(CountriesTableSeeder::class);  
        $this->call(HotelsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);     
    }
}
