@extends('layouts.app')
@section('content')

	{{ csrf_field() }}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<h1 align="center">Buscador del Proyecto</h1>
	<div class="md-form input-group mb-3">
        <input style="width: 30%" type="text" class="form-control pl-0 rounded-0" id="Search1" type="text" placeholder="Escriba el nombre de algun curso para ser busucado...">	
	</div>
	<div >
	    <table class="table table-striped tablaScroll2 ">
	        <thead style="">
	            <tr>

	                <th style="width: 70%" >Nombre del Curso</th>
	                <th style="width: 30%" class="text-center">Acciones</th>
	            </tr>
	        </thead>
	        
	        <tbody id="datosTabla">
	            <tr>
	                <td style="width: 70%">
	                    Ingeniería Software
	                </td>
	                <td style="width: 20%" class="text-center">
	                	
	                </td>
	            </tr>
	            <tr>
	                <td style="width: 70%">
						Organización y Métodos
	                </td>
	                <td style="width: 20%" class="text-center">
	                	
	                </td>
	            </tr>
	            <tr>
	                <td style="width: 70%">
	                    METODOLOGIA DE INVESTIGACION Y TECNICAS DE COMUNICACION
	                </td>
	                <td style="width: 20%" class="text-center">
	                	
	                </td>
	            </tr>
	            <tr>
	                <td style="width: 70%">
	                    ELEM. DE PROGRAMACION Y ESTRUC. DE DATOS
	                </td>
	                <td style="width: 20%" class="text-center">
	                	
	                </td>
	            </tr>
	            <tr>
	                <td style="width: 70%">
	                    Diseño de Patrones
	                </td>
	                <td style="width: 20%" class="text-center">
	                	
	                </td>
	            </tr>
	        </tbody>
	    </table>
	</div>

	<script>
    
    $(document).ready(function(){
          $("#Search1").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#datosTabla tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
</script>
@endsection