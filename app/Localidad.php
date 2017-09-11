<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = "localidades";
    protected $fillable = ['nombre', 'direccion', 'idMunicipio'];

    public function municipio(){

    	return $this->belongsTo('App\Municipio', 'idMunicipio');
    }

    public function areas(){

    	return $this->hasMany('App\Area');
    }
}
