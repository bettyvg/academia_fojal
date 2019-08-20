<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@inicio')->name('inicio');

Route::get('alumnos', 'HomeController@alumnos')->name('alumnos');
//Route::post('usuarios', 'HomeController@usuarios')->name('usuarios');
//Route::get('usuarios', 'HomeController@usuarios')->name('usuarios');
Route::get('registroplatica', 'RegistroController@vinculacion')->name('registroplatica');
Route::post('registroplatica', 'RegistroController@registro')->name('registroplatica');
Route::get('testubica', 'HomeController@testubica')->name('testubica');
Route::get('calendario', 'HomeController@calendario')->name('calendario');
Route::get('cursos', 'HomeController@cursos')->name('cursos');

//Catalagos del sistema
Route::post('temas', 'temasController@registrotemas')->name('temas');
Route::get('temas', 'temasController@temas')->name('temas');

Route::get('capacitadores', 'Homecontroller@capacitadores')->name('capacitadores');

Route::get('ejecutivos', 'EjecutivosController@ejecutivos')->name('ejecutivos');
Route::post('ejecutivos', 'EjecutivosController@ejecutivoscreate')->name('crear_ejecutivos');
Route::get('editar_ejecutivo/{id}', 'EjecutivosController@edit')->name('editar_ejecutivos');
Route::patch('delete_ejecutivos/{id}', 'EjecutivosController@delete_ejecutivos')->name('delete_ejecutivos');

Route::get('perfiles', 'PerfilesController@perfiles')->name('perfiles');
Route::get('puestos', 'PuestosController@puestos')->name('puestos');


Route::get('evaluacionplaticainfo', 'EvaluacionController@evaluacionplatica')->name('evaluacionplaticainfo');
Route::post('evaluacionplaticainfo', 'EvaluacionController@evaluacionplatica')->name('evaluacionplaticainfo');
//Route::post('evaluacionplaticainfo', 'EvaluacionController@evaluacion')->name('evaluacionplaticainfo');

Route::post('EvaluacionCapacitadores', 'EvalCapacitadorController@EvaluacionCapacitadores')->name('EvaluacionCapacitadores');
Route::get('EvaluacionCapacitadores', 'EvalCapacitadorController@inicioevaluacion')->name('EvaluacionCapacitadores');
Route::get('BuscarEvaCapacitadores', 'BuscarEvalCapacitadorController@Capacitadorbusqueda')->name('BuscarEvaCapacitadores');
Route::post('BuscarEvaCapacitadores', 'BuscarEvalCapacitadorController@Capacitadorbusqueda')->name('BuscarEvaCapacitadores');


/** Rutas para modulo de usuarios **/
Route::get('login', 'UsuariosController@login' )->name('login');
Route::post('login', 'UsuariosController@login');
Route::post('usuarios', 'UsuariosController@registro')->name('usuarios');
Route::get('usuarios', 'UsuariosController@detalle_registrousuarios')->name('usuarios');

Route::get('modificaUsuarios', 'UsuariosController@modifusuarios')->name('modificaUsuarios');
Route::get('edit_user/{id}', 'UsuariosController@edit')->name('edit_user');
Route::delete('delete_user/{id}', 'UsuariosController@delete_user')->name('delete_user');


Route::post('get_puesto/{id}', 'UsuariosController@get_puesto');
Route::get('signout', 'UsuariosController@signout' )->name('signout');
Route::get('registro', 'UsuariosController@registro' )->name('registro');



Route::post('registro', 'UsuariosController@registro' )->name('registro_post');
Route::get('mostrar-usuarios', 'UsuariosController@mostrar_usuarios' )->name('mostrar-usuarios');
Route::get('test', 'HomeController@test' )->name('test');

Route::get('prueba', function(){
    return $columns = Schema::getColumnListing('usuarios');
});
