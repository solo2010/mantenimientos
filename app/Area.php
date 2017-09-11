<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = "areas";
    protected $fillable = ['area', 'piso', 'idLocalidad'];

    public function localidad(){

    	return $this->belongsTo('App\Localidad', 'idLocalidad');
    }

    public function usuarios(){

    	return $this->hasMany('App\Usuario');
    }
}
