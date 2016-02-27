<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regcliente extends Model
{
    public $timestamps = false;
    
    public function cliente()
    {
    	return $this->belongsTo('App\Cliente');
    }

    public function registro()
    {
    	return $this->belongsTo('App\Registro');
    }
}
