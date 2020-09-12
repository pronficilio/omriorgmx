<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Famoso;
use App\Escuela;

class GraficaController extends Controller
{
    public function muestraMedallas($categoria = "abierta"){

        //Retorna todas las medallas ganadas de las escuelas de una categoria (Abierta, Secundaria, Primaria)
        $oro = Famoso::select('escuela', 'id_escuela', DB::raw('count(medalla) as oro'))
            ->where('categoria', $categoria)
            ->where('medalla', 'Oro')
            ->groupBy('escuela', 'id_escuela')
            ->orderByDesc('oro', 'anio')
            ->get();
        foreach($oro as $xx=>$yy){
            if(!empty($yy->id_escuela))
                $oro[$xx]->escuela = Escuela::find($yy->id_escuela)->corto;
        }

        $plata = DB::table('fama')
            ->select(DB::raw('escuela, id_escuela, count(medalla) as plata'))
            ->where('categoria', $categoria)
            ->where('medalla', 'Plata')
            ->groupBy('escuela', 'id_escuela')
            ->orderByDesc('plata', 'anio')
            ->get();
        foreach($plata as $xx=>$yy){
            if(!empty($yy->id_escuela))
                $plata[$xx]->escuela = Escuela::find($yy->id_escuela)->corto;
        }

        $bronce = DB::table('fama')
            ->select(DB::raw('escuela, id_escuela, count(medalla) as bronce'))
            ->where('categoria', $categoria)
            ->where('medalla', 'Bronce')
            ->groupBy('escuela', 'id_escuela')
            ->orderByDesc('bronce', 'anio')
            ->get();
        foreach($bronce as $xx=>$yy){
            if(!empty($yy->id_escuela))
                $bronce[$xx]->escuela = Escuela::find($yy->id_escuela)->corto;
        }

        $colores = array('oro', 'plata', 'bronce');
        
        return view("graficas.medallas")
            ->with('categoria', $categoria)
            ->with('colores', $colores)
            ->with('oro', $oro)
            ->with('plata', $plata)
            ->with('bronce', $bronce);
    }

    public function muestraRegistrados($categoria = "abierta"){

        //Retorna la cantidad de registros de cada escuela
        $registros = DB::table('registro')
            ->select(DB::raw('id_escuela, count(id) as cantidad'))
            ->where('categoria', $categoria)
            ->groupBy('id_escuela')
            ->orderByDesc('cantidad')
            ->get();

        return view("graficas.registros")
            ->with('categoria', $categoria)
            ->with('registros', $registros);
    }
}
