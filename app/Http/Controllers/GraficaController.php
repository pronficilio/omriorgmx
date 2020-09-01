<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficaController extends Controller
{
    function muestraGrafica($categoria){

        //Retorna todas las medallas de una categoria (Oro, Plata y Bronce)
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
        
        return view("graficas.".$categoria)
            ->with('colores', $colores)
            ->with('oro', $oro)
            ->with('plata', $plata)
            ->with('bronce', $bronce);
    }
}
