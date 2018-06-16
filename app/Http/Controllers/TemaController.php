<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tema;
use App\Curso;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$id = Curso::max('idCurso');
        $this->validate($request, [
            'nombreTema' => 'required|string',
            'descripcion' => 'required|string',
            'contenido' => 'required|string',
        ]);
        Tema::create([
            'nombreTema' => $request['nombreTema'],
            'descripcionTema' => $request['descripcion'],
            'contenido' => $request['contenido'],
            'idCurso' => $request['idcursoactual'],
        ]);
        return response()->json([
            'message' => 'Se agrego correctamente!',
        ]);
    }
    public function showModules($id)
    {
        $modulos = Tema::where('idCurso',$id)
        ->get();
        return view('cursos.modulos',compact(['modulos']));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
