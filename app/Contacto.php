<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public $timestamps = true; 
    protected $fillable = ['nombre', 'asunto','correo', 'mensaje','updated_at','created_at'];
}

