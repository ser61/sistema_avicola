@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{url('/admin')}}">Index</a></li>
      <li><a href="#">Crear</a></li>
    </ol>
  </section>
  <br>
  <section class="content">
    <div class="row">
      <div class="col-md-10 col-sm-offset-1">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center">Panel de Registro de <span class="text-bold">Usuarios</span></h3>
          </div>

          <div class="box-body">

            {!! Form::open(['route' => 'admin.store','method' => 'POST']) !!}
            <div class="col-sm-8 col-sm-offset-2">
              @include('alertas.request')
              @include('alertas.error')
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">Ingrese el nombre de usuario:</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Escriba el email del usuario:</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Escriba el password del usuario:</label>
                <input id="password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                <label for="password-confirm">Confirme el password del usuario:</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>

              <div class="form-group">
                <label for="idEmpleado">Seleccione un Empleado para la cuenta:</label>
                {!! Form::select('idEmpleado',$empleados, null, ['class'=>'form-control select2', 'id' => 'idEmpleado', 'placeholder'=>'Seleccion un empleado...']) !!}
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-8 col-sm-offset-2">
                <br>
                <button class="btn btn-primary btn-block">
                  Registrar Usuario <i class="fa fa-arrow-circle-right"></i>
                </button>
                <br>
              </div>
            </div>
            {!! Form::close() !!}

          </div>

          <div class="box-footer">
            <p><b>NOTA:</b> Se recomienda anotar la sigla de su compania como prefijo de los nombres de usuarios.</p>
          </div>
        </div>
        <br>
      </div>
    </div>
  </section>

@endsection
@push('scripts')
<script>
  function comenzar(){
    $(".select2").select2();
  }
  window.addEventListener("load",comenzar, false);
</script>
@endpush