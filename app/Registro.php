<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registro' ;

    public function municipio(){
    	return $this->belongsTo('App\Municipio');
    }

    public function escuela(){
    	return $this->belongsTo('App\Escuela');
    }

    public function codeorg(){
    	return $this->hasMany('App\Codeorg');
    }

}
