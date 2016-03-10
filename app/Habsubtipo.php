<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habsubtipo extends Model
{
    public $timestamps = false;
     protected $fillable = ['nombre', 'descripcion', 'precio', 'foto','habtipo_id','hotel_id'];

    public function habitacions()
    {
        return $this->hasMany('App\Habitacion');
    }
    public function hotel()
    {
    	return $this->belongsTo('App\Hotel');
    }
    public function habtipo()
    {
    	return $this->belongsTo('App\Habtipo');
    }

}
