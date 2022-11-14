<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Hotel::create([
            'hotel_title' => 'Liuks viešbutis',
            'days' => '5',
            'price' => '399.00',
            'country_id' => '1',
        ]);
        \App\Models\Hotel::create([
            'hotel_title' => 'Tiesiog viešbutis',
            'days' => '4',
            'price' => '319.00',
            'country_id' => '2',
        ]);
        \App\Models\Hotel::create([
            'hotel_title' => 'Fainas viešbutis',
            'days' => '5',
            'price' => '520.00',
            'country_id' => '3',
        ]);
        \App\Models\Hotel::create([
            'hotel_title' => 'Fantastiškas viešbutis',
            'days' => '4',
            'price' => '1000.00',
            'country_id' => '2',
        ]);
    }
}
