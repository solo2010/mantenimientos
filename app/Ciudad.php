<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "ciudades";
    protected $fillable = ['ciudad'];

    public function pais(){

    	return $this->belongsTo('App\Pais', 'idPais');
    }

    public function municipios(){

    	return $this->hasMany('App\Municipio');
    }
}
