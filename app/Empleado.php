<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombres', 'apellidos','fecha_nac','sexo','dni','direccion','celular','emptipo_id','hotel_id'
    ];


    public function usuario()
    {
    	return $this->hasOne('App\Usuario');
    }

    public function emptipo()
    {
    	return $this->belongsTo('App\Emptipo');
    }

    public function hotel()
    {
    	return $this->belongsTo('App\Hotel');
    }
}

