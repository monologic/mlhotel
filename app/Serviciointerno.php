<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serviciointerno extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['titulo', 'imagen', 'contenido','orden','estado'];
}