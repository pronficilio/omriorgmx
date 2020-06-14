<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio' ;

    public function escuela(){
    	return $this->hasMany('App\Escuela');
    }

    public function registro(){
    	return $this->hasMany('App\Registro');
    }
}
