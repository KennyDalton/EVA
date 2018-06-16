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
        $cursos = curso::orderby('nombreCurso','asc')->get();
        //->where('clasificacion','area')
        
        return view('cursos.buscador', compact('cursos'));
    }
    public function obtenerCurso($id)
    {
        $curso = curso::where('curso.idCurso', $id)
        ->groupby('curso.idCurso')
        ->get();

        //dd($curso[0]->descripcion);
        return view('cursos.register',compact('curso'));
    }
    public function store(Request $request)
    {

        $mytime = Carbon::now();
        $idUser = Auth::user()->id;
        $maxCurso = Curso::max('idCurso');
        $this->validate($request, [
            'nombreDip' => 'required|String',
            'descripcionDip' => 'required|String',
            'objetivosDip' => 'required|String',
            'codigoDip' => 'required|String',
        ]);
        Curso::create([
            'nombreCurso' => $request['nombreDip'],
            'objetivos' => $request['objetivosDip'],
            'descripcion' => $request['descripcionDip'],
            'codigoCurso' => $request['codigoDip'],
            'fechaCreacion' => $mytime,
        ]);
        Curso_Usuario::create([
            'id' => $idUser,
            'idCurso' => $maxCurso,
        ]);
        
        return redirect('/crearDiplomado');
        
    }
    public function listaMisCursos()
    {
        $idUser = Auth::user()->id;
        $cursos = Curso_Usuario::where('curso_usuario.id',$idUser)
        ->join('curso', 'curso_usuario.idCurso', '=', 'curso.idCurso')
        ->get();
        // $tareas = Tarea::where()
        // ->get();
        return view('cursos.cursosList', compact(['cursos']));
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