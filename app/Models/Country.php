<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public $table = 'countries';
     const STATUS_ACTIVE = 'active';
     const STATUS_DRAFT = 'draft';
     const STATUS_HIDDEN = 'hidden';
    protected $fillable = [
    'name', 'english_name', 'city_id', 'status'
    ];

    public function cities()
    {
       return $this->belongsToMany(City::class);
    }
}
