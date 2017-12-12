<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //belongs to car
    public function car()
    {
    	return $this->belongsTo('App\Car');
    }
}
