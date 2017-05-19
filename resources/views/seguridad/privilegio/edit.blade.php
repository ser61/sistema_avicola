@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{url('/home')}}">Index</a></li>
      <li><a href="{{url('/home')}}">Editar</a></li>
    </ol>
  </section>
  <br>
  <section class="content">
    <div class="row">
      <div class="col-md-10 col-sm-offset-1">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center">Panel de Privilegios de <span class="text-bold">{{ $modulo->nombre }}</span> para:</h3>
            <h3 align="center"><span class="text-bold">{{ $cargo->nombre  }}</span></h3>
          </div>

          <div class="box-body">

            {!! Form::open(['route' => 'privilegio.updatePrivilegiosCargo','method' => 'POST', 'class' => 'form-horizontal']) !!}
            <div class="col-md-8 col-sm-offset-2">
              @include('alertas.request')
              @include('alertas.error')
              @foreach($casosUsoActual as $casoUsoActual)
                <div class="form-group">
                  <label for="permiso" class="col-sm-5">{{ $casoUsoActual->nombre }}:</label>
                  <div class="col-sm-7">
                    {!! Form::select('casoUso['.$casoUsoActual->id.']',$permiso, $casoUsoActual->permiso, ['class'=>'form-control select2', 'id' => 'permiso', 'placeholder'=>'Seleccion un cargo...']) !!}
                  </div>
                </div>
              @endforeach
              <input name="idPrivilegio" type="number" value="{{ $privilegio->id }}" hidden>
            </div>

            <div class="col-md-8 col-sm-offset-2">
              <div class="form-group">
                <div class="col-sm-3">
                  <br>
                  <a href="{{ url('privilegio/') }}" class="btn btn-danger">
                    <i class="fa fa-arrow-circle-left"></i> Cancelar
                  </a>
                  <br>
                </div>
                <div class="col-sm-5">
                  <br>
                  <a href="{{ route('privilegio.deshabilitarCargo',$privilegio->id) }}" class="btn btn-info">
                    <i class="fa fa-arrow-circle-down"></i> Deshabilitar este Modulo <i class="fa fa-arrow-circle-down"></i>
                  </a>
                  <br>
                </div>
                <div class="col-sm-3">
                  <br>
                  <button class="btn btn-primary">
                    Actualizar Privilegios <i class="fa fa-arrow-circle-right"></i>
                  </button>
                  <br>
                </div>
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