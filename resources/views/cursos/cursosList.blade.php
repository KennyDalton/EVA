@extends('layouts.app')
@section('content')

<h1 align="center">Mis Diplomados</h1>
<div>
    <table class="table">
        <!--Table head-->
        <thead>
            <tr>
                <th>Codigo Del Diplomado</th>
                <th>Nombre del Diplomado</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
      <!--Table head-->

        <!--Table body-->
        <tbody>
            @foreach($cursos as $curso)
               <tr data-id="{{ $curso->idCurso }}">
                   <th scope="row"> {{ $curso->codigoCurso }} </th>
                   <td> {{ $curso->nombreCurso }} </td>
                   <td> {{ $curso->descripcion }} </td>
                   <td>
                        <a class="btn-floating btn-sm btn-mdb-color btn-modal-show" data-toggle="tooltip" data-placement="top" title="Detalles Diplomado"><i class="fa fa-eye mt-2 ml-2 fa-lg"></i></a>
                        @if(Auth()->user()->tipo=='docente')
                            <a class="btn-floating btn-sm btn-blue btn-modal-verTareas" data-toggle="tooltip" data-placement="top" title="Modulos" href="/modulos/{{ $curso->idCurso }}"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
                            
                        @endif
                    </td>
               </tr>
           @endforeach
        </tbody>
        <!--Table body-->
    </table>
</div>
 <!--Table-->
@endsection