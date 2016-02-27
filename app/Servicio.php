<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public $timestamps = false;
    
    public function categoria()
    {
    	return $this->belongsTo('App\Categoria');
    }

    public function regservicio()
    {
    	return $this->hasMany('App\Regservicio')
    }
}
