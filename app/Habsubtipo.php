<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habsubtipo extends Model
{
    public $timestamps = false;

    public function habitacions()
    {
        return $this->hasMany('App\Habitacion');
    }

    public function hotel()
    {
    	return $this->belongsTo('App\Hotel');
    }
}
