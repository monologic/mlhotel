<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    public $timestamps = false;

    protected $fillable = ['empleado_id', 'usuario', 'password', 'usuariotipo_id'];
    
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
