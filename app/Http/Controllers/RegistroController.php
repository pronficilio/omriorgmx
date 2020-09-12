<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Registro ;
use App\RegistroG;
use App\Escuela ;
use App\EscuelaG;
use App\User;
use App\Mail\SendMail;
use App\Mail\SendAcceso;

use Carbon\Carbon;

class RegistroController extends Controller
{
    public function ingresarNuevoRegistro(Request $datos){

    	$aux_id = 0 ;
        if($datos->input("estado") == "Morelos")
    	    $aspirante = new Registro();
        else
            $aspirante = new RegistroG();

    	//En caso de que registre una nueva escuela
    	//if( isset( $_GET['nombre_escuela'] ) ){
    	if($datos->input("estado") == "Morelos"){
            if(!is_numeric($datos->input('id_escuela'))){
        	    $escuela = new Escuela();
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
            $munici = $datos->input('id_municipio');
        }else{
            $escuela = new EscuelaG();
            $escuela->nombre = $datos->input('escuela_g');
            $escuela->save();
            $aux_id = $escuela->id ;
            $munici = $datos->input('id_municipiog');
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
    	$aspirante->id_municipio = $munici;
    	$aspirante->enterado = $datos->input('enterado');
        $aspirante->categoria = $datos->input('categoria');

        /* Evitar humanos duplicados */
        //$raw_query = "SELECT COUNT(email) FROM registro WHERE email = $aspirante->email";
        //$apariciones = DB::select( DB::raw($raw_query) );
        if($datos->input("estado") == "Morelos")
            $apariciones = Registro::where("email", $aspirante->email)->count();
        else
            $apariciones = RegistroG::where("email", $aspirante->email)->count();

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

    public function enviaAcceso(){
        $u = Registro::where('created_at', '<', '2020-09-08' )->get();
        $i = 0;
        $data = array();
        foreach($u as $uu){
            /// buscando su registro en el entrenator
            $olimpico = DB::connection('entrenator')->table('users')->where("email", $uu->email)->first();
            $data = array(
                'asunto' => "Tu progreso en la OMRI",
                'view' => 'no-progreso',
                'nombre'     =>  $uu->nombre,
                'email'      =>  $uu->email,
                'cr'      =>  '',
                'now' => Carbon::now()->isoFormat("LLL")
            );
            if(!empty($olimpico)){
                $ultimo = DB::connection('entrenator')->table('codeorg')->where("user_id", $olimpico->id)->orderByDesc('leccion')->first();
                $data['cr'] = base64_encode($uu->email."||".$olimpico->id);
                if(!empty($ultimo)){
                    if($olimpico->categoria == "Primaria")
                        $porcentaje = $ultimo->leccion / 6;
                    else
                        $porcentaje = $ultimo->leccion / 12;
                    if($porcentaje < 0.5){
                        echo $uu->nombre." 0-50<br>";
                        $data['view'] = '0-50-progreso';
                    }else{
                        if($porcentaje >= 0.5 && $porcentaje < 1){
                            echo $uu->nombre." 50-100<br>";
                            $data['view'] = '50-100-progreso';
                        }else{
                            echo $uu->nombre." 100<br>";
                            $data['view'] = '100-progreso';
                        }
                    }
                }else{
                    echo $uu->nombre." 0<br>";
                    $data['view'] = '0-50-progreso';
                }
            }else{
                echo $uu->nombre." nopro<br>";
                $data['view'] = 'no-progreso';
            }
            //Mail::to($uu->email)->send(new SendAcceso($data));
            //Mail::to($uu->email)->send(new SendAcceso($data));
        }
        //return view("email.100-progreso", ['data'=>$data]);
        return 1;
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
