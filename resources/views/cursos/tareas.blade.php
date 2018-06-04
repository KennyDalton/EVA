@extends('layouts.app')
@section('content')
<h1 align="center">Tareas</h1>
<div class="row">
	<h2 class="col-md-10">Tareas Entregadas</h2>
	<a class="btn btn-success" data-toggle="modal" data-target="#modal-subirTareas"><font color="white" size="3">Añadir</font></a>
</div>
<div>
    <table class="table">
        <!--Table head-->
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre del Archivo</th>
                <th>Descripcion</th>
                <th>Fecha de Entrega</th>
            </tr>
        </thead>
      <!--Table head-->

        <!--Table body-->
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Trabajo de investigacion</td>
                <td>Trabajo establecido en clase</td>
                <td>15/05/2018</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Practica 2</td>
                <td>20 ejerciicios resueltos</td>
                <td>17/05/2018</td>
            </tr>
            <tr>
            <th scope="row">3</th>
                <td>Ejercicio en clase</td>
                <td>Completar el ejercicio en casa</td>
                <td>20/05/2018</td>
            </tr>
        </tbody>
        <!--Table body-->
    </table>
</div>
<!--Table-->
<div class="modal fade" id="modal-subirTareas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
       <!--Content-->
       <div class="modal-content">
           <!--Header-->
           <div class="modal-header" style="background-color: blue">
               <h3 class="heading lead" style="color: white">Cargar Tarea</h3>
              
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true" class="white-text">&times;</span>
               </button>
            </div>
           <!--Body-->
           <div class="modal-body">
               <!-- Grid row -->
               <div class="form-row">
                   <!-- Grid column -->
                   <div class="col-md-6">
                       <!-- Material input -->
                       	<div class="file-field">
					        <div class="btn btn-rounded aqua-gradient btn-sm float-left">
					            <span>Seleccione el Archivo</span>
					            <input type="file">
					        </div>
					        <div class="file-path-wrapper">
					           <input class="file-path validate" type="text" placeholder="">
					        </div>
					    </div>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->
               <div class="md-form col-md-6">
		            <input type="text" class="form-control">
		            <label for="form1">Nombre</label>
		    	</div>	
               <!-- Grid row -->
               <div class="row">
                   <!-- Grid column -->
                   <div class="col-md-6">
                       <!-- Material input -->
                       <div class="md-form form-group">
                           <textarea type="text" class="form-control md-textarea" rows="3" id="descrip"></textarea>
                           <label for="ci">Descripcion</label>
                       </div>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->

           </div>
          
           <!--Footer-->
           <div class="modal-footer">
               <button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
               <button class="btn btn-indigo" id="modal-agregar-btn">Guardar</button>
           </div>
@endsection