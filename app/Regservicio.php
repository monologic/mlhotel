<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regservicio extends Model
{
   	public function registro()
   	{
   		return $this->belongsTo('App\Registro');
   	}

   	public function servicio()
   	{
   		return $this->belongsTo('App\Servicio');
   	}
}
