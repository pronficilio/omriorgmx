<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
//use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Registro ;
use App\RegistroG;
use App\Escuela ;
use App\EscuelaG;
use App\User;


class PapelitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reconocimiento(/*Registro $user*/)
    {

        /***** TEST TRASH *****/
        $user = new Registro;
        $user->id = 3;
        $user->nombre = "Derek Matías";
        $user->apellido = "Franco Figueroa";
        $user->categoria = "Abierta";
        $user->medalla = "Plata";

        //if($olimpico->id == \Auth::user()->id){
            
            //-> Generamos un lienzo base
            $img = \Image::canvas(1650, 1275);

            //Plantamos la imagen de perfil en el lienzo
            if(Storage::disk('public')->exists("olimpicos/".$user->id.'.jpg')){
                $id_foto = "app/public/olimpicos/" . $user->id . ".jpg";
                
                $img3 = \Image::make(storage_path($id_foto));
                $img->insert($img3, 'top-left', 60, 80);
            }
            else{
                $id_foto = "app/public/olimpicos/entreneitor.png";
                $img3 = \Image::make(storage_path($id_foto));
                $img->insert($img3, 'top-left', 70, 100);
            }
            
            //-> Cargamos plantilla
            $img4 = \Image::make(storage_path("app/public/").'sample_reconocimiento.png');
            
            $img->insert($img4, 'top-left', 0, 0);            

            //-> Nombre 
            $nombre_olimpico = $user->nombre." ".$user->apellido;
            $inicio_nombre = 906-(strlen($nombre_olimpico)*30/2); //El centro menos (la mitad del aproximado del equivalente del largo de la cadena en pixeles)
            
            $img->text($nombre_olimpico, $inicio_nombre, 680, function($font){
                $font->file(storage_path("app/public/Comfortaa-Regular.ttf"));
                $font->color("#E4186F");
                $font->size(55);
            });

            //-> Medalla
            $medalla = strtoupper($user->medalla);

            $img->text($medalla, 1122, 770, function($font){
                $font->file(storage_path("app/public/Comfortaa-Bold.ttf"));
                $font->color("#000");
                $font->size(30);
            });
            
            //-> Lenguaje
            $lenguaje = "Karel (Java)";
            if($user->categoria == "Abierta") $lenguaje = "C++";
            $img->text($lenguaje, 1092, 975, function($font){
                $font->file(storage_path("app/public/Comfortaa-Bold.ttf"));
                $font->color("#000");
                $font->size(25);
            });

            //-> Código QR
            
            $ch = curl_init('https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.urlencode('https://www.omri.org.mx/olimpico-medallista/'.$user->id));
            $fp = fopen(storage_path('app/public/qr/qr.png'), 'wb');
            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
            fclose($fp);
            
            $img2 = \Image::make(storage_path('app/public/qr/qr.png'));
            $img2->resize(220, 220);
            $img->insert($img2, 'bottom-right', 80, 50);


            //-> Guardamos la imagen
            $dir = "test";
            $img->save(storage_path("app/public/reconocimientos/").$dir.'.jpg', 95);
            
            //-> Regresamos la imagen
            return "<img src='".asset("storage/app/public/reconocimientos/".$dir.'.jpg')."?_=".mt_rand(1,10)."'>";//la del 
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function constancia(/*Registro $user*/)
    {

        /***** TEST TRASH *****/
        $user = new Registro;
        $user->id = 3;
        $user->nombre = "Derek Matías";
        $user->apellido = "Franco Figueroa";
        $user->categoria = "Primaria";
        $user->medalla = "Plata";

        //if($olimpico->id == \Auth::user()->id){
            
            //-> Generamos un lienzo base
            $img = \Image::canvas(1650, 1275);

            //Plantamos la imagen de perfil en el lienzo
            if(Storage::disk('public')->exists("olimpicos/".$user->id.'.jpg')){
                $id_foto = "app/public/olimpicos/" . $user->id . ".jpg";
                
                $img3 = \Image::make(storage_path($id_foto));
                $img->insert($img3, 'top-left', 60, 80);
            }
            else{
                $id_foto = "app/public/olimpicos/entreneitor.png";
                $img3 = \Image::make(storage_path($id_foto));
                $img->insert($img3, 'top-left', 70, 100);
            }
            
            //-> Cargamos plantilla
            $img4 = \Image::make(storage_path("app/public/").'sample_reconocimiento.png');
            
            $img->insert($img4, 'top-left', 0, 0);            

            //-> Nombre 
            $nombre_olimpico = $user->nombre." ".$user->apellido;
            $inicio_nombre = 906-(strlen($nombre_olimpico)*30/2); //El centro menos (la mitad del aproximado del equivalente del largo de la cadena en pixeles)
            
            $img->text($nombre_olimpico, $inicio_nombre, 725, function($font){
                $font->file(storage_path("app/public/Comfortaa-Regular.ttf"));
                $font->color("#E4186F");
                $font->size(55);
            });

            //-> Lenguaje
            $lenguaje = "Karel (Java)";
            if($user->categoria == "Abierta") $lenguaje = "C++";
            $img->text($lenguaje, 1092, 1014, function($font){
                $font->file(storage_path("app/public/Comfortaa-Bold.ttf"));
                $font->color("#000");
                $font->size(27);
            });

            //-> Código QR
            $ch = curl_init('https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.urlencode('https://www.omri.org.mx/olimpico/'.$user->id));
            $fp = fopen(storage_path('app/public/qr/qr.png'), 'wb');
            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
            fclose($fp);
            
            $img2 = \Image::make(storage_path('app/public/qr/qr.png'));
            $img2->resize(220, 220);
            $img->insert($img2, 'bottom-right', 80, 50);


            //-> Guardamos la imagen
            $dir = "test";
            $img->save(storage_path("app/public/constancias/").$dir.'.jpg', 95);
            
            //-> Regresamos la imagen
            return "<img src='".asset("storage/app/public/constancias/".$dir.'.jpg')."?_=".mt_rand(1,10)."'>";//la del 
    }
}
