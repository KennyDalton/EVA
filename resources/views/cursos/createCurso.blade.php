@extends('layouts.app')
@section('content')

<h1 align="center">Nuevo Diplomado</h1>
<form action="{{url('/crearDiplomado')}}" method="POST" id="miForm">
  {{csrf_field()}}
  <div class="md-form col-md-6">
          <input type="text" class="form-control" name="nombreDip">
          <label for="form1">Nombre Del Diplomado</label>
  </div>
  <div class="row">
    <div class="md-form col-md-6">
            <textarea type="text" class="form-control md-textarea" rows="3" name="objetivosDip"></textarea>
            <label for="form1">Objetivos</label>
    </div>
    <div class="md-form col-md-6">
            <textarea type="text" class="form-control md-textarea" rows="3" name="descripcionDip"></textarea>
            <label for="form1">Descripcion</label>
    </div>
  </div>
  <div class="md-form col-md-6">
          <input type="text" class="form-control" name="codigoDip">
          <label for="form1">Codigo</label>
  </div>
    
  <div class="row">
    <label class="col-md-4"></label>
    <button class="btn btn-indigo col-md-4" type="submit"> Crear Curso y Asignar temas</button>
  </div>
    <div class="card">
    <div class="card-header unique-color lighten-1 white-text">Temas</div>
    <div class="card-body">
        <h4 class="card-title">Temas de Diplomado</h4>
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
                  @foreach($temas as $tema)
                    <tr data-id='{{ $tema->idTema }}'>
                        <th scope="row"> {{ $tema->idTema }} </th>
                        <td> {{ $tema->nombreTema }} </td>
                        <td> {{ $tema->descripcionTema }} </td>
                        <td> {{ $tema->contenido }} </td>
                    </tr>
                  @endforeach
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
                           <input type="text" class="form-control" id="contenido" placeholder="contenido">
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
<script>
  $(document).on('click', '#add', function(e) {
       e.preventDefault();
       $.ajax({
           type: 'POST',
           url: '/crearTema',
           data: {
             '_token': $('input[name=_token]').val(),
             'nombreTema': $('#nombreTema').val(),
             'descripcion': $('#descrip').val(),
             'contenido': $('#contenido').val(),
         },
           success : function(data) {
               toastr.success(data.message);
               console.log(data);

           },
           error : function(xhr, status) {
               toastr.error('Disculpe, existio un problema!');
           },
       });
   });
</script>
@endsection