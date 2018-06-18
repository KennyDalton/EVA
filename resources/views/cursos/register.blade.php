@extends('layouts.app')
@section('content')
{{ csrf_field() }}
	<h1 align="center">CURSO</h1>
<!-- Card -->
    <!-- Card body -->
    <div class="">
        <!-- Material form register -->
        <form>
            <p class="h4 py-4">Descripcion</p>

            <!-- Material input email -->

            <div class="md-form form-group">
                <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="2" disabled>{{$curso->nombreCurso}}</textarea>
                <label for="materialFormCardConfirmEx" class=""></label>
            </div>

            <p class="h4 py-4">Registro</p>
            <!-- Material input password -->
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input type="password" id="cod" name="cod" class="form-control">
                <label for="materialFormCardPasswordEx" class="font-weight-light">Ingresar codigo</label>
            </div>

            <div class="text-center py-4 mt-3">
                
                <a href="/home" class="btn pink accent-3 btn-rounded">Cancelar</a>
                <a class="btn cyan darken-3 btn-rounded" id="add" name="add"><font color="white">Registrarse</font></a>
            </div>
        </form>
        <!-- Material form register -->
    </div>
    <!-- Card body -->
<!-- Card -->
@endsection
@section('script')
  <script>
   $(document).on('click', '#add', function(e) {
       e.preventDefault();
       $.ajax({
           type: 'POST',
           url: '/registrarse',
           data: {
             '_token': $('input[name=_token]').val(),
             'codigo': $('#cod').val(),
             'idC':'{{$curso->idCurso}}',
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