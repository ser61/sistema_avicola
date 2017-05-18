@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{url('/cargo')}}">Index</a></li>
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
            <h3 align="center">Panel de control de los <span class="text-bold">Cargos</span></h3>
          </div>

          <div class="box-body">

            @include('alertas.request')
            {!!Form::model($cargo, ['route'=> ['cargo.update', $cargo->id], 'method'=>'PUT'])!!}
            <div class="col-sm-8 col-sm-offset-2">
              <div class="form-group">
                <label for="nombre">Nombre de Cargo:</label>
                {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del cargo aqui...','id'=>'nombre']) !!}
              </div>
              <div class="form-group">
                <label for="descripcion">Escriba una breve descriptión:</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{$cargo->descripcion}}</textarea>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-8 col-sm-offset-2">
                <br>
                <button class="btn btn-primary btn-block">
                  Registrar Cargo <i class="fa fa-arrow-circle-right"></i>
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