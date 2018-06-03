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
	Route::get('/crearCurso','cursoController@index');
	Route::get('/buscador','cursoController@buscador');
	Route::resource('/inscribir', 'cursoController@obtenerCurso');
	Route::resource('/misCursos', 'cursoController@listaMisCursos');

});
