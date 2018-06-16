@extends('layouts.app')
@section('content')
<h1 align="center">Tareas</h1>
<div class="row">
  <h2 class="col-md-8">Tareas Entregadas</h2>
  <a class="btn btn-success" data-toggle="modal" data-target="#modal-subirTareas"><font color="white" size="3">Asignar Nueva Tarea</font></a>
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
            @foreach($tareas as $tarea)
              <tr data-id='{{ $tarea->idTarea }}'>
                  <th scope="row"> {{ $tarea->idTarea }} </th>
                  <td> {{ $tarea->documento }} </td>
                  <td> {{ $tarea->descripcion }} </td>
                  <td> {{ $tarea->fechaEntrega }} </td>
              </tr>
            @endforeach
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
               <h3 class="heading lead" style="color: white">Asignar Nueva Tarea</h3>
              
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
               <button class="btn btn-indigo" id="add">Guardar</button>
           </div>
@endsection
@section('script')
  <script type="text/javascript">
   //  $(document).on('click', '#add', function(e) {
   //     e.preventDefault();
   //     $.ajax({
   //         type: 'POST',
   //         url: '/crearTarea',
   //         data: {
   //           '_token': $('input[name=_token]').val(),
   //           'fechaIni': $('#nombreTema').val(),
   //           'fechafin': $('#descrip').val(),
   //           'descripcion': $('#contenido').val(),
   //           'idTema': $('#contenido').val(),
   //       },
   //         success : function(data) {
   //             toastr.success(data.message);
   //             console.log(data);

   //         },
   //         error : function(xhr, status) {
   //             toastr.error('Disculpe, existio un problema!');
   //         },
   //     });
   // });
  </script>
@endsection