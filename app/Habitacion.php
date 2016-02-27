<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    public $timestamps = false;

    public function estado()
    {
    	return $this->belongsTo('App\Estado');
    }

    public function haptipo()
    {
    	return $this->belongTo('App\Habtipo');
    }

    public function habreservas()
    {
    	return $this->hasMany('App\Habreserva');
    }

    public function registros()
    {
    	return $this->hasMany('App\Registro');
    }
}
