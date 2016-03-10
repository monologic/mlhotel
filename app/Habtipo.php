<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habtipo extends Model
{
	public $timestamps = false;
	protected $fillable = ['tipo', 'descripcion'];
	 
    public function habsubtipos()
    {
        return $this->hasMany('App\Habsubtipo');
    }
}
