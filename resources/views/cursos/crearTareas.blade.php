@extends('layouts.app')
@section('content')
{{ csrf_field() }}
<h1 align="center">Tareas</h1>
<div class="row">
  <h2 class="col-md-8">Tareas del Modulo</h2>
  @if(Auth()->user()->tipo=='docente')
  <div class="col-md-1"></div>
    <a class="btn btn-success btn-rounded" data-toggle="modal" data-target="#modal-subirTareas"><font color="white" size="3">Asignar Nueva Tarea</font></a>
  @endif  
</div>
<div class="col-md-6">
       <label class="sr-only" ></label>
               <div class="md-form input-group mb-3">
 	           <input class="form-control pl-0 rounded-0" id="Search2" type="text" placeholder="Buscar Tareas...">  
 	   </div>   
       </div>  
       <div 
<div>
    <table class="table">
        <!--Table head-->
        <thead>
            <tr>
                <th>Descripcion</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                @if(Auth()->user()->tipo=='estudiante')
                <th>Estado Entrega</th>
                <th>Fecha Entrega</th>
                <th>Subir</th>
                @endif
            </tr>
        </thead>
      <!--Table head-->

        <!--Table body-->
        <tbody id=table2>
            @foreach($tareas as $tarea)
              <tr data-id='{{ $tarea->idTarea }}'>
                  <td> {{ $tarea->descripcion }} </td>
                  <td> {{ $tarea->fechaInicio }} </td>
                  <td> {{ $tarea->fechaFin }} </td>
                  @if(Auth()->user()->tipo=='estudiante')
                  <td> {{ $tarea->estadoEntrega }} </td>
                  <td> {{ $tarea->estadoEntrega }} </td>
                  <td><a class="btn-floating btn-sm btn-blue btn-modal-subirTarea" data-toggle="tooltip" data-placement="top" title="Subir tarea" href="#"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a></td>
                  @endif
              </tr>
            @endforeach
        </tbody>
        <!--Table body-->
    </table>
</div>
<div class="group form-row" style=margin-top:250px;></div>

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
               <div class="row">
                   <!-- Grid column -->
                   <div class="col-md-6">
                       <!-- Material input -->
                       <div class="md-form form-group">
                           <textarea type="text" class="form-control md-textarea" rows="3" name="descrip" id="descrip"></textarea>
                           <label for="ci">Descripcion</label>
                       </div>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->
               <div class='col-md-4'>
                   <input placeholder="Fecha Fin del Trabajo" type="text" name="fechaFin" class="form-control datepicker" id="fechaFin">
               </div>
               <!-- Grid row -->

           </div>
          
           <!--Footer-->
           <div class="modal-footer">
               <button class="btn btn-danger btn-rounded" data-dismiss="modal">Cerrar</button>
               <button class="btn btn-indigo btn-rounded" id="add">Guardar</button>
           </div>
           <div class="group form-row" style=margin-top:250px;></div>

@endsection
@section('script')
  <script type="text/javascript">

       $(document).ready(function(){
     	 $("#Search2").on("keyup", function() {
     	   var value = $(this).val().toLowerCase();
     	   $("#table2 tr").filter(function() {
     	     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
     	   });
     	 });
        });

    $(document).on('click', '#add', function(e) {
       e.preventDefault();
       $.ajax({
           type: 'POST',
           url: '/crearTarea',
           data: {
             '_token': $('input[name=_token]').val(),
             'fechafin': $('#fechaFin').val(),
             'descripcion': $('#descrip').val(),
             'idTema': '{{$id}}',
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