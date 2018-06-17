@extends('layouts.app')

@section('content')
<body style="background-image: url('/img/eva4.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
<h1 style="text-transform: capitalize;color: black;" class="text-center">Bienvenido {{ Auth::user()->tipo }}</h1>

<!-- Grid column -->
<div class="col-md-6 mb-4" style="color: white; margin-left: auto; margin-right: auto">

    <!--Card-->
    <div class="card elegant-color">

        <!--Card image-->
        <div class="view text-center" >
            <i class="fas fa-user fa-10x"></i>
            <a href="#">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>

        <!--Card content-->
        <div class="card-body text-center">
            <!--Title-->
            <h4 class="card-title white-text">Datos del Usuario</h4>
            <!--Text-->
            <span class="card-text white-text">Nombre:</span><span class="card-text white-text" style="text-transform: capitalize;"> {{ Auth::user()->name }}</span><br>
            <span class="card-text white-text">Apellidos:</span><span class="card-text white-text" style="text-transform: capitalize;"> {{ Auth::user()->lastname }}</span><br>
            <span class="card-text white-text">Email:</span><span class="card-text white-text" style="text-transform: capitalize;"> {{ Auth::user()->email }}</span><br>
            <span class="card-text white-text">Tipo:</span><span class="card-text white-text" style="text-transform: capitalize;"> {{ Auth::user()->tipo }}</span>
            <!-- <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a> -->
        </div>

    </div>
    <!--/.Card-->

</div>
<!-- Grid column -->	
<div class="group form-row" style="margin-top:45%">
</div>
</body>

@endsection
