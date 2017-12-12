<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //belongs to country
    public function country()
    {
    	return $this->belongsTo('App\Country');
    }
}
