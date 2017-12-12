<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //has cars
    public function cars()
    {
    	return $this->hasMany('App\Car');
    }
}
