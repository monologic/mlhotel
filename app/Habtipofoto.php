<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habtipofoto extends Model
{	
	public $timestamps = false;
    protected $fillable = ['titulo', 'foto','habtipo_id'];
    public function habtipo()
    {
    	 return $this->belongsTo('App\Habtipo');
    }
}
