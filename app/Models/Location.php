<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
     protected $fillable = [
           'country_id',
           'city_id',
           'area_id',
     ];
}
