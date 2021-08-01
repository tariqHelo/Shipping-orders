<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    use HasFactory;

    protected $fillable = [
        'violation_number',
        'date',
        'type',
        'city',
        'street',
        'image',
        'able',
        'value',
        'car_id',
        'car_id',
        'status',
    ];
    
}
