@extends('layouts.app')
@section('content')

	{{ csrf_field() }}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<h1 align="center">Buscar Diplomado</h1>
	<div class="md-form input-group mb-3">
        <input style="width: 30%" type="text" class="form-control pl-0 rounded-0" id="Search1" type="text" placeholder="Escriba el nombre de algun Diplomado para ser buscado...">	
	</div>
	<div >
	    <table class="table table-striped tablaScroll2 ">
	        <thead style="">
	            <tr>
	                <th style="width: 70%" >Nombre del Diplomado</th>
	                <th style="width: 30%" class="text-center">Acciones</th>
	            </tr>
	        </thead>
	        
	        <tbody id="datosTabla">

	        	@foreach($cursos as $curso)

	        	<tr data-id="{{$curso->idCurso}}">
	        		<td style="width: 70%">
	        			{{$curso->nombreCurso}},
	        		</td>
	        		<td style="width: 30%" class="text-center">
	        			<a class="btn-floating btn-sm btn-blue btn-modal-enrollin" data-toggle="tooltip" data-placement="top" title="Inscribirse" href="/inscribir/{{$curso->idCurso}}"><i class="fas fa-sign-in-alt mt-2 ml-1 fa-lg"></i></a>
	        		</td>
	        	</tr>

	        	@endforeach
	            <!--<tr>
	                <td style="width: 70%">
	                    Ingeniería Software
	                </td>
	                <td style="width: 30%" class="text-center">
	                	<a class="btn-floating btn-sm btn-blue btn-modal-enrollin" data-toggle="tooltip" data-placement="top" title="Subir Tareas" href="/inscribir"><i class="fas fa-sign-in-alt mt-2 ml-1 fa-lg"></i></a>
	                </td>
	            </tr>
	            <tr>
	                <td style="width: 70%">
						Organización y Métodos
	                </td>
	                <td style="width: 30%" class="text-center">
	                	<a class="btn-floating btn-sm btn-blue btn-modal-enrollin" data-toggle="tooltip" data-placement="top" title="Subir Tareas" href="/inscribir"><i class="fas fa-sign-in-alt mt-2 ml-1 fa-lg"></i></a>
	                </td>
	            </tr>
	            <tr>
	                <td style="width: 70%">
	                    METODOLOGIA DE INVESTIGACION Y TECNICAS DE COMUNICACION
	                </td>
	                <td style="width: 30%" class="text-center">
	                	<a class="btn-floating btn-sm btn-blue btn-modal-enrollin" data-toggle="tooltip" data-placement="top" title="Subir Tareas" href="/inscribir"><i class="fas fa-sign-in-alt mt-2 ml-1 fa-lg"></i></a>
	                </td>
	            </tr>
	            <tr>
	                <td style="width: 70%">
	                    ELEM. DE PROGRAMACION Y ESTRUC. DE DATOS
	                </td>
	                <td style="width: 30%" class="text-center">
	                	<a class="btn-floating btn-sm btn-blue btn-modal-enrollin" data-toggle="tooltip" data-placement="top" title="Subir Tareas" href="/inscribir"><i class="fas fa-sign-in-alt mt-2 ml-1 fa-lg"></i></a>
	                </td>
	            </tr>
	            <tr>
	                <td style="width: 70%">
	                    Diseño de Patrones
	                </td>
	                <td style="width: 30%" class="text-center">
	                	<a class="btn-floating btn-sm btn-blue btn-modal-enrollin" data-toggle="tooltip" data-placement="top" title="Subir Tareas href="/inscribir"><i class="fas fa-sign-in-alt mt-2 ml-1 fa-lg"></i></a>
	                </td>
	            </tr>-->
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