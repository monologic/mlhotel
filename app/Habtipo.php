<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habtipo extends Model
{
	public $timestamps = false;
	 
    public function habitacions()
    {
        return $this->hasMany('App\Habitacion');
    }
}
