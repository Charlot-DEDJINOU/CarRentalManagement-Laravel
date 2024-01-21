<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year',
        'images',
        'availability',
        'registration_number',
        'description'
    ] ;
    
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}

