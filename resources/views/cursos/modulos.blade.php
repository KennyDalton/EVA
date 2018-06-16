@extends('layouts.app')
@section('content')
{{ csrf_field() }}
<h1 align="center">Modulos</h1>
<div class="row">
	<h2 class="col-md-8">Modulos Registrados</h2>
	<a class="btn btn-info" data-toggle="modal" data-target="#modal-temas"><font color="white" size="3">Agregar Modulo</font></a>
</div>
<div>

    <table class="table table-striped">
        <!--Table head-->
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre modulo</th>
                <th>Descripcion</th>
                <th>Contenido</th>
                <th>Asignar Tarea</th>
            </tr>
        </thead>
      <!--Table head-->

        <!--Table body-->
        <tbody>
            @foreach($modulos as $modulo)
              <tr data-id='{{ $modulo->idTema }}'>
                  <th scope="row"> {{ $modulo->idTema }} </th>
                  <td> {{ $modulo->nombreTema }} </td>
                  <td> {{ $modulo->descripcionTema }} </td>
                  <td> {{ $modulo->contenido }} </td>
                  <td>
                    <a class="btn-floating btn-sm btn-blue btn-modal-verTareas" data-toggle="tooltip" data-placement="top" title="Tareas" href="/tareas/{{ $modulo->idTema }}"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
                    <a class="btn-floating btn-sm btn-purple btn-modal-SubirDocumento" data-toggle="tooltip" data-placement="top" title="Subir Documento" href="/subirDocumento"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
                  </td>
              </tr>
            @endforeach

        </tbody>
        <!--Table body-->
    </table>
</div>
<!--Table-->
<div class="modal fade" id="modal-temas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
       <!--Content-->
       <div class="modal-content">
           <!--Header-->
           <div class="modal-header" style="background-color: blue">
               <h3 class="heading lead" style="color: white">Temas del Diplomado</h3>
              
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
                           <input type="text" class="form-control validate" id="idnombreTema" placeholder="Nombre">
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
                           <textarea type="text" class="form-control md-textarea" rows="3" id="iddescrip"></textarea>
                           <label >Descripcion</label>
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
                           <input type="text" class="form-control" id="idcontenido" placeholder="contenido">
                           <label>Contenido</label>
                       </div>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->               
           </div>
          
           <!--Footer-->
           <div class="modal-footer">
               <button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
               <button class="btn btn-light-green btn-rounded" id="add">
               <font color="white" size="2">GUARDAR</font>
                </button>
           </div>
       </div>
       <!--/.Content-->
   </div>
</div>
<!-- Modal agregar y modificar estudiante -->
@endsection
@section('script')
  <script type="text/javascript">
   $(document).on('click', '#add', function(e) {
       e.preventDefault();
       $.ajax({
           type: 'POST',
           url: '/crearTema',
           data: {
             '_token': $('input[name=_token]').val(),
             'nombreTema': $('#idnombreTema').val(),
             'descripcion': $('#iddescrip').val(),
             'contenido': $('#idcontenido').val(),
             'idCursoActual':'{{$aux}}',
         },
           success : function(data) {
               toastr.success(data.message);
               location.reload();
               console.log(data);

           },
           error : function(xhr, status) {
               toastr.error('Disculpe, existio un problema!');
           },
       });
   });
  </script>
@endsection