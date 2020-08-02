<?php

namespace App\Http\Controllers;
use App\Miembro;
use App\Banner;
use App\Causa;
use App\Evento;
use App\Noticia;
use App\Municipio;
use App\Proyecto;
use App\Sponsor;
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
        $banners = Banner::all();
        $causas = Causa::all();
        $eventos = Evento::orderBy('fecha')->get();
        $noticias = Noticia::orderBy('fecha', 'desc')->get();
        $proyectos = Proyecto::all();
        $sponsors = Sponsor::all();

        return view('welcome', [
            "miembros" => $miembros,
            "municipios" => $municipios,
            "banners" => $banners,
            "causas" => $causas,
            "eventos" => $eventos,
            "noticias" => $noticias,
            "proyectos" => $proyectos,
            "sponsors" => $sponsors
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
}
