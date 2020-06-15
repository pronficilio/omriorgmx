<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscuelasController extends Controller
{
    //
    public function select2(Request $request)
    {
        $search = $request->input('p')
        $page = $request->input('page')
        if($search == ''){
            $escuelas = Escuela::orderby('nombre', 'asc')
                ->select('nombre')
                ->offset(5*($page-1))
                ->limit(5)
                ->get()
        } 
        else{
            $escuelas = Escuela::orderby('nombre', 'asc')
                ->select('nombre')
                ->where('nombre', 'like', '%', .$search. '%')
                ->offset(5*($page-1))
                ->limit(5)
                ->get()
        }
        $res['results'] = array();
        if(!empty($escuelas)){
            $res['pagination'] = array("more" => count($escuelas) >= 5);
            foreach ($escuelas as $m){
                $res['results'][] = array("id"-> $m->id, "text" => ($m->nombre));

            }
        }
        return response(json_decode($res), 200)->header('Content-Type', 'application/json');
    }
}
