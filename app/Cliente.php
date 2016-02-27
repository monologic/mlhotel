<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;

    public function reservas()
    {
    	return $this->hasMany('App\Reserva');
    }

    public function regclientes()
    {
    	return $this->hasMany('App\Regcliente');
    }
}
