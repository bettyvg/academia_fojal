<?php

namespace App\Http\Controllers;


use App\Http\Requests\PlaticaRequest;
use Illuminate\Http\Request;
use App\Models\Registro;
use App\Models\Cat_entidades;
use App\Models\Cat_municipios;
use App\Models\Cat_escolaridad;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Database\QueryException;

use Illuminate\Routing\Controller as BaseController;




class RegistroController extends BaseController
{


    public function vinculacion()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_entidades = Cat_entidades::all();
        $cat_escolaridad = Cat_escolaridad::select('id_escolaridad','nivel', 'estatus')->orderBy('id_escolaridad', 'ASC')->get();
        //$detalle_registrop = Registro::get();
        $detalle_registrop = Registro::select('nombre','apellido_paterno','apellido_materno','genero','cat_entidades.nom_ent','cat_municipios.nom_mun','fecha_nacimiento',
            'rfc','correo','telefono','cat_escolaridad.nivel','cat_escolaridad.estatus','ocupacion','created_at')
            ->join('cat_escolaridad', 'cat_escolaridad.id_escolaridad', '=','registroplatica.id_escolaridad')
            ->join('cat_entidades', 'cat_entidades.cve_ent', '=','registroplatica.cve_ent')
            ->join('cat_municipios','cat_municipios.cve_compuesta_ent_mun', '=', 'registroplatica.cve_compuesta_ent_mun')
            ->get();

        //dd($detalle_registrop);

        return View::make('registroplatica', array(
        'cat_municipios' => $cat_municipios,
        'cat_entidades' => $cat_entidades,
        'cat_escolaridad' => $cat_escolaridad,
        'detalle_registrop' => $detalle_registrop
            //'registro' => $registro
        ));
    }

    public function registro(PlaticaRequest $request){
        try {
            $title = 'Registro de platica informativa';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
                $cat_entidades = Cat_entidades::all();
                $cat_escolaridad = Cat_escolaridad::select('id_escolaridad', 'nivel', 'estatus')->orderBy('id_escolaridad', 'ASC')->get();
                $detalle_registrop = Registro::select('nombre','apellido_paterno','apellido_materno','genero','cat_entidades.nom_ent','cat_municipios.nom_mun','fecha_nacimiento',
                    'rfc','correo','telefono','cat_escolaridad.nivel','cat_escolaridad.estatus','ocupacion','created_at')
                    ->join('cat_escolaridad', 'cat_escolaridad.id_escolaridad', '=','registroplatica.id_escolaridad')
                    ->join('cat_entidades', 'cat_entidades.cve_ent', '=','registroplatica.cve_ent')
                    ->join('cat_municipios','cat_municipios.cve_compuesta_ent_mun', '=', 'registroplatica.cve_compuesta_ent_mun')
                    ->get();

                //$registro = new RegistroPlatica;

                //dd(request()->all());
                //dd($detalle_registrop);

                Registro::create(request()->all());

                //$dd(request()->ALL);

                $alert = new \stdClass();
                $alert->message = 'Los datos se guardaron correctamente';
                $alert->type = 'success';
                return View::make('registroplatica', array(
                    'alert' => $alert,
                    'cat_municipios' => $cat_municipios,
                    'cat_entidades' => $cat_entidades,
                    'cat_escolaridad' => $cat_escolaridad,
                    'detalle_registrop' => $detalle_registrop
                    //'registro' => $registro
                ));

            }else{

                $alert = new \stdClass();
                $alert->message = 'Las contraseñas no coinciden.';
                $alert->type = 'danger';
                return View::make('usuarios', array(
                    'title' => $title,
                    'alert' => $alert));
            }


        }catch (Exception $e) {
            $alert2 = new \stdClass();
            $alert2->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert2->type = 'danger';
            return View::make('registroplatica',
            array(
                'alert' => $alert2)
            );
        }

    }




}
