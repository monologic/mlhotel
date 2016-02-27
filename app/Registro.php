<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    public $timestamps = false;
    
    public function habitacion()
    {
    	return $this->belongsTo('App\Habitacion');
    }

    public function reserva()
    {
    	return $this->belongsTo('App\Reserva');
    }

    public function usuario()
    {
    	return $this->belongsTo('App\Usuario');
    }

    public function regclientes()
    {		
    	return $this->hasMany('App\Regcliente');
    }

    public function regservicios()
    {		
    	return $this->hasMany('App\Regservicio');
    }
}
