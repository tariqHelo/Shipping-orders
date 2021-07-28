<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable =[
        'nationality',
        'image',
        'work_start',
        'license',
        'license_expiry',
        'license_image',
        'phone',
        'id_number',
        'id_expiry',
        'id_image',
        'passport',
        'passport_expiry',
        'passport_image',
        'residence_expiry',
        'residence_image',
        'status',
        'user_id',
        'role_id',
    ];
}
