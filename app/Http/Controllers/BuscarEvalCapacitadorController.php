<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvaluacionCapaRequest;
use Illuminate\Http\Request;
use App\Models\Cat_municipios;
use App\Models\EvaluacionCapacitador;
use App\Models\Cat_capacitador;
use App\Models\Cat_instituciones;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Scope;
use App\Models\Cat_entidades;
use App\Models\Cat_ejecutivos;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Collection;
use \Illuminate\Database\QueryException;
use Illuminate\Routing\Controller as BaseController;
use App\EvaluacionCap;
use Illuminate\Routing\Controller as Controller;

class BuscarEvalCapacitadorController extends Controller
{

    //


     public function Capacitadorbusqueda(Request $request)

     {
         $cat_capacitador = Cat_capacitador::select('id_capacitador', 'nom_cap', 'apellido_paterno', 'apellido_materno')->orderBy('nom_cap', 'ASC')
             ->get();
         //$busqueda = EvaluacionCapacitador::all()->paginate(25);

         $fecha1= Input::get('fecha1');
         $fecha2= Input::get('fecha2');
         $id_capacitador = Input::get('id_capacitador');

         if($_SERVER['REQUEST_METHOD'] === 'POST')
         {
             $busqueda = EvaluacionCapacitador:: where('id_capacitador', '=', $id_capacitador)
                         ->whereBetween ('fecha', array($fecha1, $fecha2))->paginate(25);

             return view('BuscarEvaCapacitadores', compact('busqueda', 'cat_capacitador'));
         }


         return view('BuscarEvaCapacitadores', compact( 'cat_capacitador'));
     }
}
