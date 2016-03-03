<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuariotipo extends Model
{
    public $timestamps = false;

     protected $fillable = [
        'nombre' ];

    public function usuarios()
    {
    	return $this->hasMany('App\Usuario');
    }
}
