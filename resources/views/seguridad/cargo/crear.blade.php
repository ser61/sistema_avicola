@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{url('/cargo')}}">index</a></li>
      <li><a href="#">Crear</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="box box-primary">
      <!-- TITULO DE PANEL -->
      <div class="box-header with-border">
        <h3 align="center">Panel de Registro de <span class="text-bold">Cargos</span></h3>
      </div>
    </div>

  </section>

  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="panel panel-white">

        <div class="panel-heading">
          <h2 class="panel-title center">Panel de Registro de <span class="text-bold">Cargos</span></h2>
          <div class="panel-tools">
            <div class="dropdown">
              <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                <i class="fa fa-cog"></i>
              </a>
              <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                <li>
                  <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                </li>
                <li>
                  <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="panel-body">
          @include('alertas.request')
          {!! Form::open(['route' => 'cargo.store','method' => 'POST']) !!}
          <div class="form-group">
            <div class="col-sm-8 col-sm-offset-2">
              {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del cargo aqui...','id'=>'form-field-1']) !!}
            </div>
            <br><br>
          </div>

          <div class="form-group">
            <div class="col-sm-8 col-sm-offset-2">
              <label for="form-field-24">
                Escriba una breve description:
              </label>
              <textarea class="autosize form-control" id="form-field-24" name="descripcion"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-8 col-sm-offset-2">
              <br>
              <button class="btn btn-blue btn-block">
                Registrar Cargo <i class="fa fa-arrow-circle-right"></i>
              </button>
              <br>
            </div>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>

@endsection