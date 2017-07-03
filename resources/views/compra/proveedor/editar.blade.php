@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>C O M P R A</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{url('/proveedor')}}">Index</a></li>
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
            <h3 align="center">Panel de Edicion de <span class="text-bold">{{ $proveedor->apellido }}</span> {{ $proveedor->nombre }}</h3>
          </div>
          
          <div class="box-body">
            {!!Form::model($proveedor, ['route'=> ['proveedor.update', $proveedor->id], 'method'=>'PUT'])!!}
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
                {!! Form::text('nombreEmpresa',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la Empresa aqui...','id'=>'empresa']) !!}
              </div>
              
              <h3 align="center"> Aqui puede editar y agregar telefonos</h3>
              
              <div class="form-group">
                <label>Telefonos del proveedor:</label>
                <div id="telefonoBody">
                  @if(count($telefonos) > 0)
                    @foreach($telefonos as $telefono)
                      <div class="input-group" style="margin-bottom: 10px">
                        <div class="input-group-btn">
                          <button type="submit" class="btn btn-danger" form="delete">Quitar</button>
                        </div>
                        <input type="number" name="telefonoEditar[]" value="{{ $telefono->numero }}" class="form-control" placeholder="Ingrese el telefono del proveedor aqui...">
                      </div>
                    @endforeach
                  @endif
                </div>
              </div>
              
              <div class="form-group">
                <input type="button" value="Agregar Telefono" class="btn btn-primary" id="add"/>
              </div>
              
              <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                  <br>
                  <button type="submit" class="btn btn-primary btn-block">
                    Actualizar datos del Proveedor<i class="fa fa-arrow-circle-right"></i>
                  </button>
                  <br>
                </div>
              </div>
            
            </div>
            {!! Form::close() !!}
            <br>
            <div class="col-sm-8 col-sm-offset-2">
              <h3 align="center"> Aqui puede eliminar los telefonos</h3>
              @include('alertas.logrado')
              @include('alertas.error')
              <div class="form-group">
                <label>Telefonos del proveedor:</label>
                @foreach($telefonos as $telefono)
                  {!! Form::open(['method'=>'DELETE', 'route'=>['telefono.destroy',$telefono->id]]) !!}
                  <div class="input-group" style="margin-bottom: 10px">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-danger">Quitar</button>
                    </div>
                    <input type="number" name="telefonoEditar[]" value="{{ $telefono->numero }}" class="form-control" placeholder="Ingrese el telefono del proveedor aqui...">
                  </div>
                  {!! Form::close() !!}
                @endforeach
              </div>
            </div>
          
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