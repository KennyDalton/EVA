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

Route::auth();
Route::group(['middleware' => 'auth'], function () {
	route::get('/index','viewController@index');
	Route::get('/home','HomeController@index');
	Route::get('/crearCurso','CursoController@index');
	Route::get('/buscador','CursoController@buscador');
	Route::resource('/inscribir/{id}', 'CursoController@obtenerCurso');
	Route::resource('/misCursos', 'CursoController@listaMisCursos');
	Route::get('/tareas','CursoController@tareas');
	Route::get('/subirDocumento','CursoController@subirDocumento');
	Route::get('/crearTarea','CursoController@crearTarea');
	Route::resource('/crearDiplomado','CursoController');
});
