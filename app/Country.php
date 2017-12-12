<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //has many
    public function cities()
    {
    	return $this->hasMany('App\Country');
    }
}
