<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficaController extends Controller
{
    function muestraMedallas($categoria){

        //Retorna todas las medallas ganadas de las escuelas de una categoria (Abierta, Secundaria, Primaria)
        $oro = DB::table('fama')
            ->select(DB::raw('escuela, count(medalla) as oro'))
            ->where('categoria', $categoria)
            ->where('medalla', 'Oro')
            ->groupBy('escuela')
            ->orderByDesc('oro')
            ->get();

        $plata = DB::table('fama')
            ->select(DB::raw('escuela, count(medalla) as plata'))
            ->where('categoria', $categoria)
            ->where('medalla', 'Plata')
            ->groupBy('escuela')
            ->orderByDesc('plata')
            ->get();

        $bronce = DB::table('fama')
            ->select(DB::raw('escuela, count(medalla) as bronce'))
            ->where('categoria', $categoria)
            ->where('medalla', 'Bronce')
            ->groupBy('escuela')
            ->orderByDesc('bronce')
            ->get();

        $colores = array('oro', 'plata', 'bronce');
        
        return view("graficas.medallas.".$categoria)
            ->with('colores', $colores)
            ->with('oro', $oro)
            ->with('plata', $plata)
            ->with('bronce', $bronce);
    }

    function muestraRegistrados($categoria){

        //Retorna la cantidad de registros de cada escuela
        $registros = DB::table('registro')
            ->select(DB::raw('id_escuela, count(id) as cantidad'))
            ->where('categoria', $categoria)
            ->groupBy('id_escuela')
            ->orderByDesc('cantidad')
            ->get();

        return view("graficas.registros.".$categoria)
            ->with('registros', $registros);
    }
}
