<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;
    protected $fillable = [
            'name',
            'date',
            'car_id',      
    ];

    public function car()
    {
        return $this->belongsTo(car::class);
    }
}
