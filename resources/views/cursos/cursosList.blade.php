@extends('layouts.app')
@section('content')

		<h1 align="center">MIS CURSOS</h1>
		<div>
            <table class="table">
                <!--Table head-->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre Tema</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
              <!--Table head-->

                <!--Table body-->
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Introduccion a la Programacion</td>
                        <td>Materia troncal de las carrera de informatica sistemas</td>
                        <td>
                        	<a class="btn-floating btn-sm btn-mdb-color btn-modal-show" data-toggle="tooltip" data-placement="top" title="ver Temas"><i class="fa fa-eye mt-2 ml-2 fa-lg"></i></a>
		                	<a class="btn-floating btn-sm btn-blue btn-modal-subirTarea" data-toggle="tooltip" data-placement="top" title="Subir Tareas" href="/tareas"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
                            <a class="btn-floating btn-sm btn-green btn-modal-AsignarTarea" data-toggle="tooltip" data-placement="top" title="Asignar Tareas" href="/crearTarea"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
                            <a class="btn-floating btn-sm btn-purple btn-modal-SubirDocumento" data-toggle="tooltip" data-placement="top" title="Subir Documento" href="/subirDocumento"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
		    				<!-- <a class="btn-floating btn-sm btn-pink btn-modal-delete" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-upload mt-2 ml-2 fa-lg"></i><i class="fas fa-upload"></i></a> -->
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Base de Datos</td>
                        <td>Modelado e implementacion de estructuras organizacionales de las empresas o instituciones</td>
                        <td>
                        	<a class="btn-floating btn-sm btn-mdb-color btn-modal-show" data-toggle="tooltip" data-placement="top" title="ver"><i class="fa fa-eye mt-2 ml-2 fa-lg"></i></a>
		                	<a class="btn-floating btn-sm btn-blue btn-modal-subirTarea" data-toggle="tooltip" data-placement="top" title="Subir Tareas" href="/tareas"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
                            <a class="btn-floating btn-sm btn-green btn-modal-AsignarTarea" data-toggle="tooltip" data-placement="top" title="Asignar Tareas" href="/crearTarea"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
                            <a class="btn-floating btn-sm btn-purple btn-modal-SubirDocumento" data-toggle="tooltip" data-placement="top" title="Subir Documento" href="/subirDocumento"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
		    				<!-- <a class="btn-floating btn-sm btn-pink btn-modal-delete" data-toggle="tooltip" data-placement="top" title="eliminar"><i class="fa fa-trash mt-2 ml-2 fa-lg"></i></a> -->
                        </td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                        <td>Arquitectura de Software</td>
                        <td>Comprencion del funcionamiento interno y externo de la computadoras</td>
                        <td>
                        	<a class="btn-floating btn-sm btn-mdb-color btn-modal-show" data-toggle="tooltip" data-placement="top" title="ver"><i class="fa fa-eye mt-2 ml-2 fa-lg"></i></a>
		                	<a class="btn-floating btn-sm btn-blue btn-modal-subirTarea" data-toggle="tooltip" data-placement="top" title="Subir Tareas" href="/tareas"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
                            <a class="btn-floating btn-sm btn-green btn-modal-AsignarTarea" data-toggle="tooltip" data-placement="top" title="Asignar Tareas" href="/crearTarea"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
                            <a class="btn-floating btn-sm btn-purple btn-modal-SubirDocumento" data-toggle="tooltip" data-placement="top" title="Subir Documento" href="/subirDocumento"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
		    				<!-- <a class="btn-floating btn-sm btn-pink btn-modal-delete" data-toggle="tooltip" data-placement="top" title="eliminar"><i class="fa fa-trash mt-2 ml-1 fa-lg"></i></a> -->
                        </td>
                    </tr>
                </tbody>
                <!--Table body-->
            </table>
        </div>
         <!--Table-->
@endsection