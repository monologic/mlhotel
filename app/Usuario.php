<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    
    public function empleado()
   	{
   		return $this->belongsTo('App\Empleado');
   	}

   	public function usuariotipo()
   	{
   		return $this->belongsTo('App\Usuariotipo');
   	}

   	public function registros()
    {
    	return $this->hasMany('App\Registro');
    }

    public function reservas()
    {
    	return $this->hasMany('App\Reserva');
    }
}
