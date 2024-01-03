<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}

