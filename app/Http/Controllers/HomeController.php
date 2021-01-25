<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Miembro;
use App\Banner;
use App\Causa;
use App\Evento;
use App\Noticia;
use App\Municipio;
use App\Escuela;
use App\MunicipioG;
use App\Proyecto;
use App\Registro;
use App\Sponsor;
use App\Famoso;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $miembros = Miembro::orderBy('orden')->get();
        $municipios = Municipio::all();
        $municipiosG = MunicipioG::all();
        $banners = Banner::all();
        $causas = Causa::all();
        $eventos = Evento::orderBy('fecha')->get();
        $noticias = Noticia::orderBy('fecha', 'desc')->get();
        $proyectos = Proyecto::all();
        $sponsors = Sponsor::all();

        return view('welcome', [
            "miembros" => $miembros,
            "municipios" => $municipios,
            "municipiosG" => $municipiosG,
            "banners" => $banners,
            "causas" => $causas,
            "eventos" => $eventos,
            "noticias" => $noticias,
            "proyectos" => $proyectos,
            "sponsors" => $sponsors
        ]);
    }

    public function terminos()
    {
        return view('terminos');
    }
    public function reglamento()
    {
        return view('reglamento');
    }
    public function aviso()
    {
        return view('aviso');
    }
    public function calendario(){
        return view('calendario');
    }
    public function convocatoria(){
        return response()->file(storage_path("app/public/Convocatoria14.pdf"), ['Content-Type' => 'application/pdf', 'Content-Disposition' => 'inline; filename="Convocatoria - 14a OMRI.pdf"']);
    }
    public function registro(){
        $miembros = Miembro::orderBy('orden')->get();
        $causas = Causa::all();
        $municipios = Municipio::all();
        return view('registro', [
            "miembros" => $miembros,
            "municipios" => $municipios,
            "causas" => $causas
        ]);
    }
    public function nosotros(){
        $miembros = Miembro::orderBy('orden')->get();
        $causas = Causa::all();
        $noticias = Noticia::orderBy('fecha', 'desc')->get();
        return view('nosotros', [
            "miembros" => $miembros,
            "causas" => $causas,
            "noticias" => $noticias
        ]);
    }
    public function contacto(){
        return view('contacto');
    }
    public function fama($categoria = "abierta"){
        $datos = Famoso::Where('categoria', $categoria)->get();
        foreach($datos as $olimpico){
            if( !isset($mapa[$olimpico->nombre]) )
                $mapa[$olimpico->nombre] = array("medallas" => array(), "puntaje" => 0);
            $mapa[$olimpico->nombre]["medallas"][] = array("medalla" =>$olimpico->medalla, "anio" => $olimpico->anio, "escuela"=>$olimpico->escuela);
            if($olimpico->medalla == "Oro"){
                $mapa[$olimpico->nombre]["puntaje"] += 100;
            }
            if($olimpico->medalla == "Plata"){
                $mapa[$olimpico->nombre]["puntaje"] += 10;
            }
            if($olimpico->medalla == "Bronce"){
                $mapa[$olimpico->nombre]["puntaje"] ++;
            }
        }
        uasort($mapa, function($personaA, $personaB){
            if($personaA["puntaje"] == $personaB["puntaje"]){
               return 0;
            }
            if($personaA["puntaje"] < $personaB["puntaje"]){
               return 1;
            }
            if($personaA["puntaje"] > $personaB["puntaje"]){
                return -1;
            }
        });
        return view('fama', ["mapa" => $mapa, "categoria" => $categoria]);
    }

    public function competidor($id=2){

        $datosRegistrados = Registro::where("id", $id)->with(['escuela', 'municipio'])->first();
        $datosFama = Famoso::where("id_registro", $id)->orderBy('anio', 'DESC')->orderBy('id', 'DESC')->get();

        $AllDirectories = Storage::allDirectories('public/constancias/'.$id);

        $directories = array(); //Los nombres de los archivos para humano
        $files = array(); //Los nombres de los archios para computadoras
        foreach ($AllDirectories as $dir){
            $olimpiada = explode("/",$dir);

            $losArchivos = Storage::files($dir);
            $archivos = array();
            $paths = array();
            $ind = 0;
            foreach ($losArchivos as $elArchivo){
                $archivo = explode("_", explode("/", $elArchivo)[4]);
                $paths[$ind] = explode("/", $elArchivo)[4];
                $archivos[$ind] = ucfirst($archivo[0] . ' de ' . explode(".", $archivo[1])[0]);
                $ind = $ind+1;
            }

            $directories[$olimpiada[3]] = $archivos;
            $files[$olimpiada[3]] = $paths;

        }
        //print_r($directories);

        return view('competidor', ["competidor" => $datosRegistrados, "desempenos" => $datosFama, "archivos" => $directories, "losArchivos" => $files]);
    }


    public function competidores($categoria = "abierta"){
        $mapaCat = array("abierta" => 3, "secundaria" => 2, "primaria" => 1);
        $tresDiasAtras = date("Y-m-d", strtotime("2020-12-02"." -1 day"));
        $oli = DB::connection('entrenator')
            ->table('lugar')
            ->select("posicion", "puntos", "fecha", "email", "avatar", "user_id", 'name', 'lastname', "examenOmega", "estatal")
            ->join('users', 'user_id', '=', 'users.id')
            ->where("paquete_id", $mapaCat[$categoria])
            ->where("fecha", $tresDiasAtras)
            ->orderBy('posicion')->get();
        $mapa = array();
        $maximo = 0;
        foreach($oli as $olimpico){
            $datosRegistrados = Registro::where("email", $olimpico->email)->with(['escuela', 'municipio'])->first();
            if($olimpico->avatar == "andre.jpg")
                continue;
            //dd($datosRegistrados->escuela());
            if(empty($datosRegistrados)){
                //dd($olimpico);
                $cuatroDiasAtras = date("Y-m-d", strtotime($tresDiasAtras." -1 day"));
                $oliDelta = DB::connection('entrenator')
                    ->table('lugar')
                    ->select("posicion", "puntos", "fecha")
                    ->where("paquete_id", $mapaCat[$categoria])
                    ->where("fecha", $cuatroDiasAtras)
                    ->where("user_id", $olimpico->user_id)
                    ->orderBy('posicion')->first();
                if($olimpico->puntos > $maximo)
                    $maximo = $olimpico->puntos;
                if(empty($oliDelta))
                    $mapa[] = array(
                        'olimpico_folio' => $olimpico->user_id+1050,
                        'olimpico_nombre' => $olimpico->name,
                        'olimpico_apellido' => $olimpico->lastname,
                        'lugarDelta' => (0),
                        'puntosDelta' => (0),
                        'examen' => $olimpico->estatal,
                        'ejercicio' => $olimpico->puntos,
                        'escuela' => "ITESM",
                        'escuelaC' => "ITESM",
                        'muni'=> '.',
                        'rank' => $olimpico,
                        'final'=>0);
                else
                    $mapa[] = array(
                        'olimpico_folio' => $olimpico->user_id+1050,
                        'olimpico_nombre' => $olimpico->name,
                        'olimpico_apellido' => $olimpico->lastname,
                        'lugarDelta' => ($olimpico->posicion - $oliDelta->posicion),
                        'puntosDelta' => ($olimpico->puntos - $oliDelta->puntos),
                        'examen' => $olimpico->estatal,
                        'ejercicio' => $olimpico->puntos,
                        'escuela' => "ITESM",
                        'escuelaC' => "ITESM",
                        'muni'=> '.',
                        'rank' => $olimpico,
                        'final'=>0);
            }else{
                if($datosRegistrados->nombre === "deNiSsE")
                    continue;

                $cuatroDiasAtras = date("Y-m-d", strtotime($tresDiasAtras." -1 day"));
                $oliDelta = DB::connection('entrenator')
                    ->table('lugar')
                    ->select("posicion", "puntos", "fecha")
                    ->where("paquete_id", $mapaCat[$categoria])
                    ->where("fecha", $cuatroDiasAtras)
                    ->where("user_id", $olimpico->user_id)
                    ->orderBy('posicion')->first();
                if($olimpico->puntos > $maximo)
                    $maximo = $olimpico->puntos;
                if(empty($oliDelta))
                    $mapa[] = array(
                        'olimpico_folio' => $datosRegistrados->id,
                        'olimpico_nombre' => $datosRegistrados->nombre,
                        'olimpico_apellido' => $datosRegistrados->apellido,
                        'grado' => $datosRegistrados->grado,
                        'categoria' => $datosRegistrados->categoria,
                        'lugarDelta' => (0),
                        'puntosDelta' => (0),
                        'examen' => $olimpico->estatal,
                        'ejercicio' => $olimpico->puntos,
                        'id_escuela' => $datosRegistrados->id_escuela,
                        'escuela' => Escuela::find($datosRegistrados->id_escuela)->nombre,
                        'escuelaC' => Escuela::find($datosRegistrados->id_escuela)->corto ?? null,
                        'muni'=> Municipio::find($datosRegistrados->id_municipio)->nombre,
                        'rank' => $olimpico,
                        'final'=>0);
                else
                    $mapa[] = array(
                        'olimpico_folio' => $datosRegistrados->id,
                        'olimpico_nombre' => $datosRegistrados->nombre,
                        'olimpico_apellido' => $datosRegistrados->apellido,
                        'grado' => $datosRegistrados->grado,
                        'categoria' => $datosRegistrados->categoria,
                        'lugarDelta' => ($olimpico->posicion - $oliDelta->posicion),
                        'puntosDelta' => ($olimpico->puntos - $oliDelta->puntos),
                        'examen' => $olimpico->estatal,
                        'ejercicio' => $olimpico->puntos,
                        'id_escuela' => $datosRegistrados->id_escuela,
                        'escuela' => Escuela::find($datosRegistrados->id_escuela)->nombre,
                        'escuelaC' => Escuela::find($datosRegistrados->id_escuela)->corto ?? null,
                        'muni'=> Municipio::find($datosRegistrados->id_municipio)->nombre,
                        'rank' => $olimpico,
                        'final'=>0);
            }
        }
        foreach($mapa as $i=>$v){
            $mapa[$i]['ejercicio'] .= " (".number_format($v['rank']->puntos / $maximo * 30, 2)."%)";
            $mapa[$i]['final'] = ($v['rank']->puntos / $maximo * 30) + ($v['examen'] / 400 * 70);
        }
        usort($mapa, function($a, $b){
            if($a["final"]==$b["final"])
                return 0;
            return $a['final'] > $b['final'] ? -1 : 1;
        });
        return view('competencia', ["mapa" => $mapa, "categoria" => $categoria, "fecha"=>$tresDiasAtras]);
    }
    public function escuelas(){
        $causas = Causa::all();
        return view('escuelas', [
            "causas" => $causas
        ]);
    }


    public function olimpico()
    {
        return view('olimpico');
    }
    public function olimpicoIniciado(){
        $v = session('olimpico');
        if($v > 0)
            return 1;
        return 0;
    }

    public function contact(Request $request){
        if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['msg']))  {
            $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            //Email information
            $admin_email = env('MAIL_USERNAME');
            $subject = "Contacto";
            $email = $_POST['email'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $msg = $_POST['msg'];
            $message = "<p>Nombre: ".$name."</p> <p>Email: ".$email."</p> <p>Telefono: ".$phone."</p> <p>Mensaje: ".$msg."</p>";

            //send email
            $send = mail($admin_email, "$subject", $message, $headers);

            if(!$send) {
                return 0;
            } else {
                return 1;
            }
        }
        return 0;
    }

    public function volunteer(Request $request){
        if (isset($_POST['email']) && isset($_POST['surname']) && isset($_POST['firstname']))  {
            $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            $subject = 'Volunteer Application';

            //Email information
            $admin_email = "t_gichuhi@yahoo.com";
            $surname = $_POST['surname'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $why = $_POST['why'];
            $message = "<p>Surname: ".$surname."</p> <p>First Name: ".$firstname."</p> <p>Email: ".$email."</p> <p>Phone: ".$phone."</p> <p>Address: ".$address."</p> <p>Gender: ".$gender."</p> <p>Age: ".$age."</p> <p>Why: ".$why."</p>";

            //send email
            $send = mail($admin_email, "$subject", $message, $headers);

            if(!$send) {
                echo "<p style='color:red font-weight:bold'>Error sending email!</p>";
            } else {
                echo "<p style='color:green; font-weight:bold'>Message sent successfully. Thank you for contacting us!</p>";
            }
        } else {
            echo 'nothisng';
        }
    }

    public function getAlumnitos(Request $request){
        $resultados = $request->email;
        $email = $request->email;


        $resultados = Registro::where(function($q) {
            $q->where('email', 'like', '%' . $_GET['email'] . '%')
                ->orWhere('nombre', 'like', '%' . $_GET['nombre'] . '1%')
                ->orWhere('apellido', 'like', '%' . $_GET['apellido'] . '%')
                ->orWhere('telefono', 'like', '%' . $_GET['phone'] . '%');
            })
            ->get();
        return $resultados;
    }
}
