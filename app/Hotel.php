<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
	public $timestamps = false;
	
    public function habsubtipos()
    {
        return $this->hasMany('App\Habitacion');
    }

    public function categorias()
    {
        return $this->hasMany('App\Habitacion');
    }

    public function empleados()
    {
        return $this->hasMany('App\Habitacion');
    }
}
