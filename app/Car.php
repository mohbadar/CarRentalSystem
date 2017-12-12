<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //belongs to category
    public function  category()
    {
    	return $this->belongsTo('App\Category');
    }

    //belongsTo 
    public function city()
    {
    	return $this->belongsTo('App\City');
    }
}
