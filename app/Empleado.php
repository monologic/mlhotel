<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public $timestamps = false;

    public function usuario()
    {
    	return $this->hasOne('App\Usuario');
    }

    public function emptipo()
    {
    	return $this->belongsTo('App\Emptipo');
    }
}
