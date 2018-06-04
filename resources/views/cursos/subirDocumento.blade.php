@extends('layouts.app')
@section('content')

	<h1 align="center">Subir Documento</h1>
	<form>
		<div class="md-form col-md-6">
            <input type="text" class="form-control">
            <label for="form1">Nombre</label>
    	</div>		
    	<div class="md-form col-md-6">
            <textarea type="text" class="form-control md-textarea" rows="3"></textarea>
            <label for="form1">Descripcion</label>
    	</div>
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
       	<!-- <div class="col-md-6">
           <input placeholder="Fecha Fin del Proyecto" type="text" name="fechaFin" class="form-control datepicker">
       	</div> -->
	</form>
	<div class="modal-footer">
       	<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
       	<button class="btn btn-indigo" id="modal-agregar-btn">Guardar</button>
   	</div>

@endsection