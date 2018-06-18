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
                        <a class="btn-floating btn-sm btn-mdb-color btn-modal-show" data-toggle="tooltip" data-placement="top" title="Detalles Diplomado" data-target="#modal-show"><i class="fa fa-eye mt-2 ml-2 fa-lg"></i></a>
                            <a class="btn-floating btn-sm btn-blue btn-modal-verTareas" data-toggle="tooltip" data-placement="top" title="Modulos" href="/modulos/{{ $curso->idCurso }}"><i class="fa fa-upload mt-2 ml-2 fa-lg"></i></a>
                    </td>
               </tr>
           @endforeach
        </tbody>
        <!--Table body-->
    </table>
</div>
 <!--Table-->
<div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-notify modal-info modal-lg" role="document">
       <!--Content-->
       <div class="modal-content">
           <!--Header-->
           <div class="modal-header">
               <p class="heading lead">Detalles Del Diplomado</p>
              
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
                       <table class="table table-bordered">
                           <tbody id="table2">
                               <tr>
                                   <th scope="row">NombreCurso</th>
                                   <td id="td-nombreCurso"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Descripcion</th>
                                   <td id="td-descripcion"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Objetivos</th>
                                   <td id="td-objetivos"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Codigo Del Diplomado</th>
                                   <td id="td-codigo"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Fecha Creacion</th>
                                   <td id="td-fecha"></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->             
           </div>
           <!--Footer-->
           <div class="modal-footer">
               <button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
           </div>
       </div>
       <!--/.Content-->
   </div>
</div>
<div class="group form-row" style=margin-top:250px;></div>

@endsection
@section('script')
<script type="text/javascript">
  $(document).on('click', '.btn-modal-show', function() {
       $.get('/crearDiplomado/'+$($(this).parents("tr")).data('id'), function(data){
           $('#td-nombreCurso').text(data.detalles.nombreCurso);
           $('#td-descripcion').text(data.detalles.descripcion);
           $('#td-objetivos').text(data.detalles.objetivos);
           $('#td-codigo').text(data.detalles.codigoCurso);
           $('#td-fecha').text(data.detalles.fechaCreacion);
       });
       $('#modal-show').modal('show');
   });
</script>
@endsection