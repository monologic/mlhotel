<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public $timestamps = false;

    public function habitacions()
    {
        return $this->hasMany('App\Habitacion');
    }

}
