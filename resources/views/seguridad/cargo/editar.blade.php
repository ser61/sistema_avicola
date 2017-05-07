@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
<!-- start: TOOLBAR -->
<div class="toolbar row">
  <div class="page-header">
    <h1 style="text-align: center;">* * * S E G U R I D A D * * *
      <small> Sección de los Cargos </small>
    </h1>
  </div>
</div>
<!-- end: TOOLBAR -->
<!-- end: PAGE HEADER -->
<br>

<div class="row">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="panel panel-white">

      <div class="panel-heading">
        <h2 class="panel-title center">Panel de edicion del Cargo: <span class="text-bold">{{$cargo->nombre}}</span></h2>
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
        {!!Form::model($cargo, ['route'=> ['cargo.update', $cargo->id], 'method'=>'PUT'])!!}
        <div class="form-group">
          <div class="col-sm-8 col-sm-offset-2">
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del cargo aqui...','id'=>'form-field-1']) !!}
          </div>
          <br><br>
        </div>

        <div class="form-group">
          <div class="col-sm-8 col-sm-offset-2">
            <label for="descripcion">
              Escriba una breve description:
            </label>
            <textarea class="autosize form-control" id="descripcion" name="descripcion">{{$cargo->descripcion}}</textarea>
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