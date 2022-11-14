<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    public $fillable = ['hotel_title', 'days', 'price', 'country_id'];


    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}
