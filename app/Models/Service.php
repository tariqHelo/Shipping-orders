<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
     const STATUS_ACTIVE = 'active';
     const STATUS_DRAFT = 'draft';
     const STATUS_HIDDEN = 'hidden';
     
    const STATUS_LOCAL = 'local';
    const STATUS_INTERNATIONAL = 'international';

     protected $fillable = [
     'name', 'english_name','type', 'status'
     ];
}
