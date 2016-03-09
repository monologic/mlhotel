<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
	public $timestamps = false;

    protected $fillable = ['nombre', 'pais', 'region_estado','ciudad','direccion', 'telefono'];
	
    public function habsubtipos()
    {
        return $this->hasMany('App\Habitacion');
    }

    public function categorias()
    {
        return $this->hasMany('App\Habitacion');
    }

    public function empleados()
    {
        return $this->hasMany('App\Habitacion');
    }
}
