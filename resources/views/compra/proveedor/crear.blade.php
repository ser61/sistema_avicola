@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{url('/proveedores')}}">Index</a></li>
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
            <h3 align="center">Panel de Registro de <span class="text-bold">Proveedores</span></h3>
          </div>

          <div class="box-body">

            {!! Form::open(['route' => 'proveedor.store','method' => 'POST']) !!}
            <div class="col-sm-8 col-sm-offset-2">
              @include('alertas.request')
              @include('alertas.error')
              <div class="form-group">
                <label for="ci">Ingrese el ci del proveedor:</label>
                {!! Form::number('ci',null,['class'=>'form-control','placeholder'=>'Ingrese el ci del proveedor aqui...','id'=>'ci']) !!}
              </div>

              <div class="form-group">
                <label for="nombre">Escriba el nombre del Proveedor:</label>
                {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del proveedor aqui...','id'=>'nombre']) !!}
              </div>

              <div class="form-group">
                <label for="apellido">Escriba el apellido del Proveedor:</label>
                {!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingrese el apellido del proveedor aqui...','id'=>'apellido']) !!}
              </div>

              <div class="form-group">
                <label for="direccion">Escriba la dirección del Proveedor:</label>
                {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese la direccion del proveedor aqui...','id'=>'direccion']) !!}
              </div>

              <div class="form-group">
                <label for="email">Escriba el email del Proveedor:</label>
                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese el email del proveedor aqui...','id'=>'email']) !!}
              </div>

              <div class="form-group">
                <label for="empresa">Escriba el nombre de la Empresa del Proveedor:</label>
                {!! Form::text('empresa',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la Empresa aqui...','id'=>'empresa']) !!}
              </div>

              <div class="form-group">
                <label>Ingrese el telefono del proveedor:</label>
                <div id="telefonoBody">

                </div>
              </div>

              <div class="form-group">
                <input type="button" value="Agregar Telefono" class="btn btn-primary" id="add"/>
              </div>

            </div>

            <div class="form-group">
              <div class="col-sm-8 col-sm-offset-2">
                <br>
                <button class="btn btn-primary btn-block">
                  Registrar proveedor <i class="fa fa-arrow-circle-right"></i>
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
  var indice = 0;
  function comenzar(){
    $(".select2").select2();
    $('#add').click(function(){
      agregar();
    });
  }

  function agregar(){
    var div =$("<div class=\"input-group\" style=\"margin-bottom: 10px\" id=\"miInput"+indice+"\"></div>");
    var button = '' +
      '<div class="input-group-btn" id="miInput'+indice+'">'+
      '<button type="button" class="btn btn-danger" onclick="eliminar('+indice+');">Quitar</button>'+
      '</div>';
    var input = '<input type="number" name="telefono[]" id="miInput'+indice+'" class="form-control" placeholder="Ingrese el telefono del proveedor aqui...">';

    div.append(button);
    div.append(input);
    $('#telefonoBody').append(div);
    indice++;
  }

  function eliminar(index){
    $("#miInput" + index).remove();
    indice--;
  }

  window.addEventListener("load",comenzar, false);
</script>
@endpush