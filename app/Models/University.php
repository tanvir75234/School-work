<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    public function country(){
        return $this->belongsTo('App\Models\Country','country_id','country_id');
      }
}
