<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = "municipios";
    protected $fillable = ['municipio'];

    public function ciudad(){

    	return $this->belongsTo('App\Ciudad', 'idCiudad');
    }

    public function localidades(){

    	return $this->hasMany('App\Localidad');
    }
}
