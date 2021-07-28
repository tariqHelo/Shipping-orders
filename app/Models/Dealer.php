<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;
     protected $fillable = [
           'phone2',
           'logo',
           'country_id',
           'city_id',
           'area_id',
           'method' ,
           'commission',
           'status' , 
           'password',
           'user_id',
           'role_id',   
     ];
}
