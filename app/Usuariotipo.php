<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuariotipo extends Model
{
    public $timestamps = false;

    public function usuarios()
    {
    	return $this->hasMany('App\Usuario');
    }
}
