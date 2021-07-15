<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

      protected $fillable = [
         'name',
         'english_name', 
         'status',
         
         'normal_shipping',
         'excellent_mail',
         'food_shipping',
         'special_shipping',
         'express_mail',
         'Shipping_out',
         'fast_shipping_out',
         'normal_shipping_outside',
         'Special_Premium_Mail_Shipping',
        ];

      
}
