<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codeorg extends Model
{
    protected $table = 'codeorg' ;

    public function registro(){
    	return $this->belongsTo('App\Registro');
    }
}
