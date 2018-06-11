@extends('layouts.app')
@section('content')
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
                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="2" disabled>{{$curso[0]->descripcion}}</textarea>
                <label for="materialFormCardConfirmEx" class=""></label>
            </div>

            <p class="h4 py-4">Registro</p>
            <!-- Material input password -->
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input type="password" id="codigo" class="form-control">
                <label for="materialFormCardPasswordEx" class="font-weight-light">Ingresar codigo</label>
            </div>

            <div class="text-center py-4 mt-3">
                <button class="btn btn-cyan" type="submit">Register</button>
                <a href="/home" class="btn btn-info">Cancel</a>
            </div>
        </form>
        <!-- Material form register -->

    </div>
    <!-- Card body -->


<!-- Card -->
                      

@endsection