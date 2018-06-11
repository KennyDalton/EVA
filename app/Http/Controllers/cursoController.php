<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Curso_Usuario;
use App\Curso;
use Auth;
use App\Tema;
use \Carbon\Carbon;

use App\Http\Controllers\Controller;

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
        $idUser = Auth::user()->id;
        $temas = Curso_Usuario::where('curso_usuario.id',$idUser)
        ->join('curso', 'curso_usuario.idCurso', '=', 'curso.idCurso')
        ->join('tema','curso.idCurso', '=', 'tema.idCurso')
        ->get(); 
        return view('cursos.createCurso', compact(['temas']));
    }

    public function buscador()
    {
        return view('cursos.buscador');
    }
    public function obtenerCurso()
    {
        return view('cursos.register');
    }
    public function store(Request $request)
    {

        $mytime = Carbon::now();
        dd($request->mytime);
        $this->validate($request, [
            'nombreDip' => 'required|String',
            'descripcionDip' => 'required|String',
            'objetivosDip' => 'required|String',
            'codigoCurso' => 'required|String',
        ]);
        
        Curso::create([
            'nombreCurso' => $request->nombreDip,
            'objetivos' => $request->objetivosDip,
            'descripcion' => $request->descripcionDip,
            'codigoCurso' => $request->codigoDip,
            'fechaCreacion' => $request->mytime,
            'fechaCreacion' => NULL,
        ]);
        return "Creado Exitosamente";
    }
    public function listaMisCursos()
    {
        $idUser = Auth::user()->id;
        $cursos = Curso_Usuario::where('curso_usuario.id',$idUser)
        ->join('curso', 'curso_usuario.idCurso', '=', 'curso.idCurso')
        ->get();
        return view('cursos.cursosList', compact(['cursos']));
    }
    public function tareas()
    {
        return view('cursos.tareas');
    }
    public function subirDocumento(){

        return view('cursos.subirDocumento');
    }
    public function crearTarea()
    {

        return view('cursos.crearTareas');
    }

    public function calendario()
    {
        return view('cursos.calendario');
    }
}