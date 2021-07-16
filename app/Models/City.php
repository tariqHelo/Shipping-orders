<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

      protected $fillable = [
      'name', 'english_name', 'status' , 'area_id',
      ];

    public function areas()
    {
       return $this->belongsToMany(City::class , 'area_id' , 'id');
    }
}
