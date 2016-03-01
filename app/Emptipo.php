<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emptipo extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'tipo', 'descripcion',
    ];

    public function empleados()
    {
    	return $this->hasMany('App\Empleado');
    }
}
