<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habtipo extends Model
{
	public $timestamps = false;
	 
    public function habsubtipos()
    {
        return $this->hasMany('App\Habsubtipo');
    }
}
