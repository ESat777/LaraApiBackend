<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Customer::create([ 
            'name' => 'Mindaugas', 
            'surname' => 'Min', 
            'email' => 'min@min.com', 
            'phone' => '82955642', 
            'hotel_id' => '1', 
        ]);
        \App\Models\Customer::create([ 
            'name' => 'Tomas', 
            'surname' => 'Tomukas', 
            'email' => 'tom@as.com', 
            'phone' => '86555555', 
            'hotel_id' => '2', 
        ]);
        \App\Models\Customer::create([ 
            'name' => 'Andrius', 
            'surname' => 'Andrinas', 
            'email' => 'andi@rau.com', 
            'phone' => '86552789', 
            'hotel_id' => '3', 
        ]);
      
    }
}