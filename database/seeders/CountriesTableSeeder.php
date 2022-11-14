<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Country::create([ 
            'title' => 'Graikija', 
            'season_weather' => 'Pavasaris +20 Vasara +40 Ruduo +26 ', 
        ]);
        \App\Models\Country::create([ 
            'title' => 'Turkija', 
            'season_weather' => 'Pavasaris +20 Vasara +40 Ruduo +26', 
        ]);
        \App\Models\Country::create([ 
            'title' => 'Belgija', 
            'season_weather' => 'Pavasaris +20 Vasara +40 Ruduo +26', 
        ]);
        \App\Models\Country::create([ 
            'title' => 'Prancūzija', 
            'season_weather' => 'Pavasaris +20 Vasara +40 Ruduo +26', 
        ]);
    }
}