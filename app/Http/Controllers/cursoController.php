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
    public function show($id)
    {
        return response()->json([
            'detalles' => Curso::where('idCurso', $id)->firstOrFail(),
        ]);
    }

    public function index()
    {
        return view('cursos.createCurso');
    }

    public function buscador()
    {
        $idUser = Auth::user()->id;
        $cursos = curso_usuario::where('id',$idUser)
        ->get();
        $Inscritos = collect([]);
        foreach ($cursos as $cursosId) {
            $Inscritos->push($cursosId->idCurso);
        }
        $cursos = Curso::whereNotIn('idCurso',$Inscritos)
        ->get();
        return view('cursos.buscador', compact('cursos'));
    }
    public function obtenerCurso($id)
    {
        $curso = curso::where('curso.idCurso', $id)
        ->firstOrFail();

        //dd($curso[0]->descripcion);
        return view('cursos.register',compact('curso'));
    }
    public function store(Request $request)
    {

        $mytime = Carbon::now();
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
        $idUser = Auth::user()->id;
        $maxCurso = Curso::max('idCurso');
        Curso_Usuario::create([
            'id' => $idUser,
            'idCurso' => $maxCurso,
        ]);
        
        return redirect('/misCursos');
        
    }
    public function listaMisCursos()
    {
        $idUser = Auth::user()->id;
        $cursos = Curso_Usuario::where('curso_usuario.id',$idUser)
        ->join('curso', 'curso_usuario.idCurso', '=', 'curso.idCurso')
        ->get();
        return view('cursos.cursosList', compact(['cursos']));
    }

    

    public function calendario()
    {
        return view('cursos.calendario');
    }
}