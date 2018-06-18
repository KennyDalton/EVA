@extends('layouts.app')
@section('content')
{{ csrf_field() }}
	<h1 align="center">Documentos</h1>
<div class="row">
	<table class="table table-striped table-bordered">
        <!--Table head-->
        <thead>
            <tr>
                <th>Nombre Documento</th>
                <th>Descripcion del Documento</th>
            </tr>
        </thead>
      <!--Table head-->

        <!--Table body-->
        <tbody>
            @foreach($documentos as $documento)
              <tr data-id='{{ $documento->idDoc }}'>
                  <td> {{ $documento->nombreDoc }} </td>
                  <td> {{ $documento->descripcionDoc }} </td>
              </tr>
            @endforeach

        </tbody>
        <!--Table body-->
    </table>
</div>
<hr>
@if(Auth()->user()->tipo=='docente')
  <form>
		<div class="md-form col-md-6">
            <input type="text" class="form-control" name="nombre" id="nombre">
            <label for="form1">Nombre</label>
    	</div>		
    	<div class="md-form col-md-6">
            <textarea type="text" class="form-control md-textarea" rows="3" name="descripcion" id="descripcion"></textarea>
            <label for="form1">Descripcion</label>
    	</div>
       	<div class="col-md-6">
           <!-- Material input -->
           	<div class="file-field">
  		        <div class="btn btn-rounded indigo ">
  		            <span>Seleccione el Archivo</span>
  		            <input type="file" name="archivo" id="archivo">
  		        </div>
  		        <div class="file-path-wrapper">
  		           <input class="file-path validate" type="text" placeholder="">
  		        </div>
		        </div>
       	</div>
	</form>
	<div class="modal-footer">
       	<button class="btn btn-danger btn-rounded" data-dismiss="modal">Cerrar</button>
       	<button class="btn btn-indigo btn-rounded" id="add">Guardar</button>
   	</div>
@endif
@endsection
@section('script')
<script type="text/javascript">
  $(document).on('click', '#add', function(e) {
       e.preventDefault();
       $.ajax({
           type: 'POST',
           url: '/nuevoArchivo',
           data: {
             '_token': $('input[name=_token]').val(),
             'nombreDoc': $('#nombre').val(),
             'descripcionDoc': $('#descripcion').val(),
             'archivo': $('#archivo').val(),
             'idTema':'{{$id}}',
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