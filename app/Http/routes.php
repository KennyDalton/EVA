<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registerk','Auth\AuthController@carreras');
Route::auth();
Route::group(['middleware' => 'auth'], function () {
	route::get('/index','viewController@index');
	Route::get('/home','HomeController@index');
	Route::get('/crearCurso','CursoController@index');
	Route::get('/buscador','CursoController@buscador');
	Route::get('/inscribir/{id}', 'CursoController@obtenerCurso');
	Route::get('/misCursos', 'CursoController@listaMisCursos');
	Route::get('/modulos/{id}','TemaController@showModules');
	Route::get('/tareas/{id}','TareaController@tareas');
	Route::get('/subirDocumento/{id}','DocumentoController@subirDocumento');
	Route::resource('/crearTarea','TareaController');
	Route::resource('/crearDiplomado','CursoController');
	Route::resource('/nuevoArchivo','DocumentoController');

	Route::resource('/crearTema','TemaController');
	Route::get('/calendario', 'CursoController@calendario');
});
