<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Registro ;
use App\Escuela ;
use App\Mail\SendMail;

use Carbon\Carbon;

class RegistroController extends Controller
{
    public function ingresarNuevoRegistro(Request $datos){

    	$aux_id = 0 ;
    	$aspirante = new Registro();

    	//En caso de que registre una nueva escuela
    	if( isset( $_GET['nombre_escuela'] ) ){
    		$escuela = new Escuela() ;

    		$escuela->nombre = $datos->input('nombre_escuela');
    		$escuela->direccion = $datos->input('direccion');
    		$escuela->telefono = $datos->input('telefono');
    		$escuela->id_municipio = $datos->input('id_municipio');
    		$escuela->nivel_escolar = $datos->input('nivel_escolar');

    		$escuela->save();

    		//Saco el nuevo id de la escuela
    		$aux_id = $escuela->id ;
    	}else{

    		//Me traigo el que me enviaron en caso de que la escuela ya exista
    		$aux_id = $datos->input('id_escuela') ;
    	}
    	
    	$aspirante->nombre = $datos->input('nombre');
    	$aspirante->apellido = $datos->input('apellido');
    	$aspirante->edad = $datos->input('edad');
    	$aspirante->email = $datos->input('email');
    	$aspirante->id_escuela = $aux_id;
    	$aspirante->grado = $datos->input('grado');
    	$aspirante->tutor = $datos->input('tutor');
    	$aspirante->email_tutor = $datos->input('email_tutor');
    	$aspirante->id_municipio = $datos->input('id_municipio');
    	$aspirante->enterado = $datos->input('enterado');

        $data = array(
            'nombre'      =>  $datos->input("nombre"),
            'email'      =>  $datos->input("email"),
            
            'now' => Carbon::now()->isoFormat("LLL")
        );
        Mail::to($datos->input("email"))->send(new SendMail($data));

    	$aspirante->save();

    	return 1 ;
    }
}
