@extends('layouts.app')
@section('content')

<h1 align="center">Nuevo Curso</h1>
<form>
    <div class="md-form col-md-6">
            <input type="text" class="form-control">
            <label for="form1">Nombre Del Curso</label>
    </div>
    <div class="md-form col-md-6">
            <textarea type="text" class="form-control md-textarea" rows="3"></textarea>
            <label for="form1">Descripcion</label>
    </div><div class="md-form col-md-6">
            <input type="text" class="form-control">
            <label for="form1">Codigo</label>
    </div>
    <div class="card">
    <div class="card-header unique-color lighten-1 white-text">Temas</div>
    <div class="card-body">
        <h4 class="card-title">Temas de los Cursos</h4>
        <!-- <p class="card-text"></p> -->
        <!--Table-->
        <div>
            <table class="table">
                <!--Table head-->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre Tema</th>
                        <th>Descripcion</th>
                        <th>Contenido</th>
                    </tr>
                </thead>
              <!--Table head-->

                <!--Table body-->
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
                <!--Table body-->
            </table>
        </div>
         <!--Table-->
        <a class="btn btn-info" data-toggle="modal" data-target="#modal-temas"><font color="white" size="3">Agregar Tema</font></a>
    </div>
    </div>
</form>
<!-- Modal agregar y modificar estudiante -->
<div class="modal fade" id="modal-temas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
       <!--Content-->
       <div class="modal-content">
           <!--Header-->
           <div class="modal-header" style="background-color: blue">
               <h3 class="heading lead" style="color: white">Temas del Curso</h3>
              
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true" class="white-text">&times;</span>
               </button>
            </div>
           <!--Body-->
           <div class="modal-body">
               <!-- Grid row -->
               <div class="form-row">
                   <!-- Grid column -->
                   <div class="col-md-12">
                       <!-- Material input -->
                       <div class="md-form form-group">
                           <input type="text" class="form-control validate" id="nombreTema" placeholder="Nombre">
                           <label for="nombre">Nombre Tema:</label>
                       </div>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->

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

               <!-- Grid row -->
               <div class="form-row">
                   <!-- Grid column -->
                   <div class="col-md-6">
                       <!-- Material input -->
                       <div class="md-form form-group">
                           <input type="email" class="form-control validate" id="contenido" placeholder="Email">
                           <label for="email">Contenido</label>
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
       </div>
       <!--/.Content-->
   </div>
</div>
<!-- Modal agregar y modificar estudiante -->
@endsection