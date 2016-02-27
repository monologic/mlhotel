<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habreserva extends Model
{
    public $timestamps = false;
    
    public function habitacion()
    {
    	return $this->belongTo('App\Habitacion');
    }

    public function reserva()
    {
    	return $this->belongTo('App\Reserva');
    }
}
