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

</form>

@endsection
@section('script')
<script>
  
</script>
@endsection