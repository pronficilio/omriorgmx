<?php

namespace App\Http\Controllers;
use App\Escuela;
use Illuminate\Http\Request;

class EscuelasController extends Controller
{
    //
    public function select2(Request $request)
    {
        $search = $request->input('term');
        $page = $request->input('page');
        if($search == ''){
            $escuelas = Escuela::orderby('nombre', 'asc')
                ->select('nombre', 'id')
                ->offset(5*($page-1))
                ->limit(5)
                ->get();
        } 
        else{
            $escuelas = Escuela::orderby('nombre', 'asc')
                ->select('nombre', 'id')
                ->where('nombre', 'like', '%'.$search.'%')
                ->orWhere('corto', 'like', '%'.$search.'%')
                ->offset(5*($page-1))
                ->limit(5)
                ->get();
        }
        $res['results'] = array();
        if(!empty($escuelas)){
            $res['pagination'] = array("more" => count($escuelas) >= 5);
            foreach ($escuelas as $m){
                $res['results'][] = array("id"=> $m->id, "text" => ($m->nombre));

            }
        }
        return response(json_encode($res), 200)->header('Content-Type', 'application/json');
    }
}
