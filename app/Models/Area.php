<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    use HasFactory;
    
     const STATUS_ACTIVE = 'active';
     const STATUS_DRAFT = 'draft';
     const STATUS_HIDDEN = 'hidden';

      protected $fillable = [
         'name',
         'english_name', 
         'status',
         
        ];

        public function country()
        {
            return $this->belongsTo(Country::class);
        }

        public function city()
        {
            return $this->belongsTo(City::class);
        }
      
}
