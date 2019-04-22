<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Registro;
use App\Models\Cat_entidades;
use App\Models\Cat_municipios;
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

        return View::make('vinculacion', array(
        'cat_municipios' => $cat_municipios,
        'cat_entidades' => $cat_entidades,
    ));
    }

    public function registro(){

        try {
            $title = 'Registro de platica informativa';

            $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
            $cat_entidades = Cat_entidades::all();

                $registro = new Registro();

                    $registro->nombre = Input::get('nombre');
                    $registro->apellido_paterno = Input::get('apat');
                    $registro->apellido_materno = Input::get('amat');
                    $registro->genero = Input::get('genero');
                    $registro->estado_nacimiento = Input::get('estado');
                    $registro->municipio = Input::get('municipio');
                    $registro->fecha_nacimiento = Input::get('fechanacimiento');
                    $registro->rfc = Input::get('rfc');
                    $registro->correo = Input::get('correo');
                    $registro->telefono = Input::get('telefono');
                    $registro->escolaridad = Input::get('escolaridad');
                    $registro->ocupacion = Input::get('ocupacion');

                    $registro->save();

                        $alert = new \stdClass();
                        $alert->message = 'Los datos se guardaron correctamente';
                        return View::make('vinculacion', array(
                                'alert' => $alert,
                                'cat_municipios' => $cat_municipios,
                                'cat_entidades' => $cat_entidades));



            } catch (Exception $e) {
            $alert2 = new \stdClass();
            $alert2->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert2->type = 'danger';
            return View::make('vinculacion',
            array(
                'alert' => $alert2)
            );
        }

    }
}
