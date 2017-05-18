@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{url('/home')}}">Index</a></li>
      <li><a href="#">Editar</a></li>
    </ol>
  </section>
  <br>
  <section class="content">
    <div class="row">
      <div class="col-md-10 col-sm-offset-1">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center">Panel de Edición de <span class="text-bold">{{ $usuario->name }}</span></h3>
          </div>

          <div class="box-body">
            <div class="col-sm-8 col-sm-offset-2" align="center" style="margin-bottom: 20px">
              <img src={{ asset('usuarios/'.$usuario->foto) }} class="img-circle" alt=""  style="width: 100px; height: 100px; border: 3px solid#3C8DBC;">
            </div>

            {!!Form::model($usuario, ['route'=> ['admin.update', $usuario->id], 'method'=>'PUT','files' => true])!!}
            <div class="col-sm-8 col-sm-offset-2">
              @include('alertas.request')
              @include('alertas.error')
              <div class="form-group">
                <label for="name">Ingrese el nombre de usuario:</label>
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del empleado aqui...','id'=>'name']) !!}
              </div>

              <div class="form-group">
                <label for="email">Escriba el email del usuario:</label>
                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del empleado aqui...','id'=>'email']) !!}
              </div>

              <div class="form-group">
                <label for="password">Escriba el nuevo password:</label>
                <input id="password" type="password" class="form-control" name="password">
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
                  Actualizar Usuario <i class="fa fa-arrow-circle-right"></i>
                </button>
                <br>
              </div>
            </div>
            {!! Form::close() !!}

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