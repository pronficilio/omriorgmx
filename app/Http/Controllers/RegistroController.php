<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
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
    	//if( isset( $_GET['nombre_escuela'] ) ){
    	if(!is_numeric($datos->input('id_escuela'))){
        	$escuela = new Escuela() ;

    		$escuela->nombre = $datos->input('id_escuela');
    		/*$escuela->direccion = $datos->input('direccion');
    		$escuela->telefono = $datos->input('telefono');
    		$escuela->id_municipio = $datos->input('id_municipio');
    		$escuela->nivel_escolar = $datos->input('nivel_escolar');
            */
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
        $aspirante->telefono = $datos->input('phone');
    	$aspirante->id_escuela = $aux_id;
    	$aspirante->grado = $datos->input('grado');
    	$aspirante->tutor = $datos->input('tutor');
    	$aspirante->email_tutor = $datos->input('email_tutor');
    	$aspirante->id_municipio = $datos->input('id_municipio');
    	$aspirante->enterado = $datos->input('enterado');
        $aspirante->categoria = $datos->input('categoria');

        /* Evitar humanos duplicados */
        //$raw_query = "SELECT COUNT(email) FROM registro WHERE email = $aspirante->email";
        //$apariciones = DB::select( DB::raw($raw_query) );
        $apariciones = Registro::where("email", $aspirante->email)->count();

        if($apariciones){
            return 2;
        }
        /*---*/

        $link = "https://studio.code.org/join/LGDNBF";

        if($aspirante->grado == "1ro Preparatoria" || $aspirante->grado == "2do Preparatoria" || $aspirante->grado == "1ro Secundaria" || $aspirante->grado == "2do Secundaria" || $aspirante->grado == "3ro Secundaria")
            $link = "https://studio.code.org/join/FRFHBV";
        
        $aspirante->save();
        $data = array(
            'folio'      => $aspirante->id,
            'nombre'     =>  $aspirante->nombre,
            'email'      =>  $datos->input("email"),
            'linkcodeorg' => $link,
            'now' => Carbon::now()->isoFormat("LLL")
        );
        Mail::to($datos->input("email"))->send(new SendMail($data));
    	return 1 ;
    }

    public function olimpicoLogin(Request $datos){
         $id = DB::table('registro')->where('email', $datos->input('email'))->value('id') ;

        if($id > 0){
            session(['olimpico' => $id]);
            return  $id;
        }

        return 0 ;
    }

    public function olimpicoLogout(Request $request){
        $request->session()->forget('olimpico');
    }

    public function getCategoria(){
        $id = session('olimpico');

        $categoria = DB::table('registro')->where('id', $id)->value('categoria') ;

        if($categoria != NULL){
            return $categoria ;
        }

        return 0 ;
    }

    public function ultimoNivel(){
        $id = session('olimpico');

        //Retorna la ultima leccion terminada por fecha ->latest() 
        $nivel = DB::table('codeorg')->where('id_registro', $id)->latest()->value('leccion');

        if($nivel > 0){
            return $nivel ;
        }

        return 0 ;
    }

    public function siguienteNivel(){
        $id = session('olimpico');

        if($id > 0){
            $ultimo = $this->ultimoNivel() ;

            //Actualizo la fecha del que ya acabo
            DB::table('codeorg')
                ->where('leccion', $ultimo)
                ->where('id_registro', $id)
                ->update(['updated_at' => Carbon::now()]);

            //Ingreso una nueva leccion que va a empezar
            DB::table('codeorg')->insert([
                'id_registro' => $id,
                'leccion' => $ultimo+1,
                'created_at' => Carbon::now()
            ]);

            return $this->ultimoNivel();
        }

        return 0 ;
    }
}
