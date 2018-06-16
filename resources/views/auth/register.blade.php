<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.htmlheader')
</head>

<body style="background:#ededed">
    <!-- Purple Header -->
<div class="edge-header blue-grey darken-1"></div>
<!-- Main Container -->
<div class="container free-bird">
    <div class="row">
        <div class="col-md-8 col-lg-7 mx-auto float-none white z-depth-1 py-2 px-2">
            <!--Naked Form-->
            <div class="card-body">
                <!--Card content-->
                <div class="card-body">
                    <!-- Form -->
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <!-- Heading -->
                        <h3 class="dark-grey-text text-center">
                        <i class="fas fa-user-plus fa-lg"></i><strong>Registrarse</strong>
                        </h3>
                        <hr>
                        <div class="row">
                        <div class="col-md-6">
                            <select class="mdb-select colorful-select dropdown-primary md-form mt-0" name="tipo" id="tipo">
                            <option value="estudiante">Estudiante</option>
                            <option value="docente">Docente</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="mdb-select colorful-select dropdown-primary md-form mt-0" name="carrera" id="carrera">
                                @foreach($carreras as $carrera)
                                    <option value="{{ $carrera->idCarrera }}">{{ $carrera->nombreCarrera }}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="md-form {{ $errors->has('name') ? 'has-error' : '' }}">
                            <input type="text" id="name" class="form-control" name="name">
                            <label for="name">Nombres</label>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="md-form {{ $errors->has('name') ? 'has-error' : '' }}">
                            <input type="text" id="lastname" class="form-control" name="lastname">
                            <label for="name">Apellidos</label>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="md-form {{ $errors->has('email') ? 'has-error' : '' }}">
                            <input type="text" id="email" class="form-control" name="email">
                            <label for="email">Correo electronico</label>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="md-form {{ $errors->has('password') ? 'has-error' : '' }}">
                            <input type="password" id="password" class="form-control" name="password">
                            <label for="password">Contraseña</label>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="md-form {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                            <input type="password" id="password-confirm" class="form-control" name="password_confirmation">
                            <label for="password-confirm">Repetir contraseña</label>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="text-center">
                            <button class="btn cyan darken-3">Registrarse</button>
                            <hr>
                        </div>
                    </form>
                    <!-- Form -->
                </div>
            </div>

            </div>
            <!--Naked Form-->

        </div>
    </div>
</div>
<!-- /.Main Container -->
    
    <!-- SCRIPTS -->
    @include('layouts.scripts')

</body>

</html>
