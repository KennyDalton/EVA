@extends('layouts.app')
@section('content')
<h1 align="center">Perfil de Usuario</h1>
<form class="form-horizontal">
	<div class="form-group">
	    <label class="control-label col-sm-2" for="email">Nombres:</label>
	    <input class="form-control col-sm-8" type="text" placeholder="{{ Auth::user()->name }}" readonly>
  	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2" for="email">Apellidos:</label>
	    <input class="form-control col-sm-8" type="text" placeholder="{{ Auth::user()->lastname }}" readonly>
  	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2" for="email">Email:</label>
	    <input class="form-control col-sm-8" type="text" placeholder="{{ Auth::user()->email }}" readonly>
  	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2" for="email">Tipo:</label>
	    <input class="form-control col-sm-8" type="text" placeholder="{{ Auth::user()->tipo }}" readonly>
  	</div>
</form>
@endsection