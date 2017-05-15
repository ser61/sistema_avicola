@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{url('/home')}}">Index</a></li>
      <li><a href="{{url('/home')}}">Crear</a></li>
    </ol>
  </section>
  <br>
  <section class="content">
    <div class="row">
      <div class="col-md-10 col-sm-offset-1">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center">Panel de Registro de <span class="text-bold">Empleados</span></h3>
          </div>

          <div class="box-body">

            @include('alertas.request')
            {!! Form::open(['route' => 'empleado.store','method' => 'POST','files' => true]) !!}
            <div class="col-sm-8 col-sm-offset-2">

              <div class="form-group">
                <label for="ci">Ingrese el ci del empleado:</label>
                {!! Form::number('ci',null,['class'=>'form-control','placeholder'=>'Ingrese el ci del empleado aqui...','id'=>'ci']) !!}
              </div>

              <div class="form-group">
                <label for="nombre">Escriba el nombre del la persona a contratar:</label>
                {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del empleado aqui...','id'=>'nombre']) !!}
              </div>

              <div class="form-group">
                <label for="apellido">Escriba el apellido del la persona a contratar:</label>
                {!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingrese el apellido del empleado aqui...','id'=>'apellido']) !!}
              </div>

              <div class="form-group">
                <label for="direccion">Escriba la dirección del la persona a contratar:</label>
                {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese la direccion del empleado aqui...','id'=>'direccion']) !!}
              </div>

              <div class="form-group">
                <label for="fechaNacimiento">Ingrese la fecha de nacimiento de la persona a contratar:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::date('fechaNacimiento',null,['class'=>'form-control','id'=>'fechaNacimiento']) !!}
                </div>
              </div>

              <div class="form-group">
                <label for="fechaIngreso">Ingrese la fecha de ingreso de la persona a contratar:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::date('fechaIngreso',null,['class'=>'form-control','id'=>'fechaIngreso']) !!}
                </div>
              </div>

              <div class="form-group">
                <label>Seleccion la foto de la persona a contratar:</label>
                <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
              </div>

              <div class="form-group">
                <label for="idCargo">Seleccione un Cargo para la persona a contratar:</label>
                {!! Form::select('idCargo',$cargos, null, ['class'=>'form-control', 'style' => '"width: 100%;"', 'id' => 'idCargo']) !!}
              </div>

            </div>

            <div class="form-group">
              <div class="col-sm-8 col-sm-offset-2">
                <br>
                <button class="btn btn-primary btn-block">
                  Registrar Empleado <i class="fa fa-arrow-circle-right"></i>
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
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>