<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat_municipios;
use App\Models\Cat_entidades;
use App\Models\Cat_ejecutivos;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Collection;
use \Illuminate\Database\QueryException;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Controller as Controller;


class HomeController extends Controller
{
    public function inicio()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('inicio');
    }

    public function usuarios()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        return View::make('usuarios');
    }

    public function capacitadores()
    {
        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_entidades = Cat_entidades::all();

        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('capacitadores', array(
            'cat_municipios' => $cat_municipios,
            'cat_entidades' => $cat_entidades));
    }

    public function alumnos()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

                return View::make('alumnos');
    }

    public function testubica()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('testubica');
    }

    public function calendario()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('calendario');
    }

    public function cursos()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        return View::make('cursos');
    }




}
