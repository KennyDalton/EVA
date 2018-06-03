<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cursos.createCurso');
    }

    public function buscador()
    {
        return view('cursos.buscador');
    }
    public function obtenerCurso()
    {
        return view('cursos.register');
    }

    public function listaMisCursos(){

        return view('cursos.cursosList');
    }
}