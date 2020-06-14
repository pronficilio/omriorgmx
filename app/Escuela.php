<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $table = 'escuela' ;

    public function municipio(){
    	return $this->belongsTo('App\Municipio');
    }

    public function registro(){
    	return $this->hasMany('App\Registro');
    }
}
