@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
<!-- start: TOOLBAR -->
<div class="toolbar row">
  <div class="page-header">
    <h1 style="text-align: center;">* * * S E G U R I D A D * * *
      <small> Sección de los Empleados </small>
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
        <h2 class="panel-title center">Panel de Registro de <span class="text-bold">Empleados</span></h2>
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
        {!! Form::open(['route' => 'empleado.store','method' => 'POST','files' => true]) !!}
        <div class="form-group">
          <div class="col-sm-8 col-sm-offset-2">
            <p>
              Ingrese el ci del empleado.
            </p>
            {!! Form::number('ci',null,['class'=>'form-control','placeholder'=>'Ingrese el ci del empleado aqui...']) !!}
            <hr>
          </div>

          <div class="col-sm-8 col-sm-offset-2">
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del empleado aqui...','id'=>'form-field-1']) !!}
            <hr>
          </div>

          <div class="col-sm-8 col-sm-offset-2">
            {!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingrese el apellido del empleado aqui...','id'=>'form-field-1']) !!}
            <hr>
          </div>

          <div class="col-sm-8 col-sm-offset-2">
            {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese la direccion del empleado aqui...','id'=>'form-field-1']) !!}
            <hr>
          </div>

          <div class="col-sm-8 col-sm-offset-2">
            <p>
              Ingrese la fecha de nacimiento del empleado.
            </p>
            <div class="input-group">
              <input name="fechaNacimiento" type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" class="form-control date-picker">
              <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
            </div>
            <hr>
          </div>

          <div class="col-sm-8 col-sm-offset-2">
            <p>
              Ingrese la fecha de inicio de trabajo.
            </p>
            <div class="input-group">
              <input name="fechaIngreso" type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" class="form-control date-picker">
              <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
            </div>
            <hr>
          </div>

          <div class="col-sm-8 col-sm-offset-2">
            <label>
              Foto del Empleado.
            </label>
            <div class="fileupload fileupload-new" data-provides="fileupload">
              <div class="fileupload-new thumbnail">
                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
              </div>
              <div class="fileupload-preview fileupload-exists thumbnail"></div>
              <div>
                <span class="btn btn-light-grey btn-file">
                  <span class="fileupload-new"><i class="fa fa-picture-o"></i> Seleccinar imagen</span>
                  <span class="fileupload-exists"><i class="fa fa-picture-o"></i> Cambiar</span>
                  <input name="foto" type="file">
                </span>
                <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                  <i class="fa fa-times"></i> Remover
                </a>
              </div>
            </div>
            <hr>
          </div>

          <div class="col-sm-8 col-sm-offset-2">
            <p>
              Seleccione un Cargo para el Empleado.
            </p>
            {!! Form::select('idCargo',$cargos, null, ['class'=>'form-control search-select', 'id' => 'form-field-select-3']) !!}
            <hr>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-8 col-sm-offset-2">
            <br>
            <button class="btn btn-blue btn-block">
              Registrar Empleado <i class="fa fa-arrow-circle-right"></i>
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