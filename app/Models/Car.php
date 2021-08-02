<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
     protected $fillable = [
     'vehicle_type',
     'model',
     'chassis_number',
     'vehicle_class',
     'vehicle_no',
     'licensing_authority',
     'property_type',
     'traffic_code ',
     'registration_date',
     'registration_end_date',
     'insurance_date',
     'insurance_expiry_date',
     'insurance_company',
     'ownership_photo',
     'salik_tag_number',
     'Traffic_toll_card_number',
     'passing_card_number',
     'note',
     'status' ,
     ];

}
