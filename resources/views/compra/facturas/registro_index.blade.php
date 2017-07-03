@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>C O M P R A</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:window.history.go(-1);">index</a></li>
      <li><a href="#">Registro</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center">Panel de control: <span class="text-bold">Registros de Compra</span></h3>
          </div>
          @include('compra.facturas.models.materia_prima')
          @include('compra.facturas.models.medicamento')
          @include('compra.facturas.models.producto_sanitizacion')
            <!-- fin-> TITULO DE PANEL -->
            <!-- CUADRO DE BUSQUEDA -->
          <div class="panel panel-blue">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @include('alertas.logrado')
                @include('alertas.request')
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1">
                  <div class="form-group">
                    <label for="insumo">Seleccione un Proveedor:</label>
                    {!! Form::select('tipoInsumo',$proveedores,null, ['class'=>'form-control select2', 'id' => 'insumo', 'placeholder'=>'Seleccion tipo...']) !!}
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1">
                  <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#create_materia" data-backdrop=”false”>
                    <i class="fa fa-plus pull-left"></i> <b>MATERIA PRIMA</b>
                  </button>
                  <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#create_medicina" data-backdrop=”false”>
                    <i class="fa fa-plus pull-left"></i> <b>MEDICAMENTO</b>
                  </button>
                  <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#create_producto" data-backdrop=”false”>
                    <i class="fa fa-plus pull-left"></i> <b>PRODUCTO SANITARIO</b>
                  </button>
                </div>
              </div>
          </div>
            <div class="panel-body">
            </div>
          </div>
          <!-- fin-> CUADRO DE BUSQUEDA -->
          <!-- TABLA DE DATOS -->
          <div id="tbody" class="box-body">
            <table class="table table-bordered" style="border-top-color: #00AEFF">
              <thead>
              <tr>
                <th class="center">ID</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>
              @foreach($insumos as $insumo)
                <tr>
                  <td class="center">{{$insumo->id}}</td>
                  <td>{{$insumo->nombre}}</td>
                  <td>{{$insumo->cantidadTotal}}</td>
                  <td>{{$insumo->precio}}</td>
                  <td class="center">
                    {!! Form::open(['method'=>'DELETE', 'route'=>['insumo.destroy',$insumo->id]]) !!}
                    <a href="{{ route('insumo.detallar', $insumo->id) }}" class="btn btn-info">
                      <i class="fa fa-edit"></i> Detallar
                    </a>
                    <button class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                    {!! Form::close() !!}
                  </td>
                </tr>
              @endforeach
              </tbody>
              <tfoot>
                <th></th>
                <th></th>
                <th></th>
                <th><h4><b>TOTAL</b></h4></th>
                <th><h4>Bs/. {{$total}}</h4></th>
              </tfoot>
            </table>
          </div>
          <div class="footer">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-lg-offset-6">
                  <button class="btn btn-danger btn-block">
                    <i class="fa fa-arrow-left"></i> <b>Volver</b>
                  </button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button class="btn btn-primary btn-block">
                    <i class="fa fa-check"></i> <b>Guardar</b>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <br>
          <!-- fin-> TABLA DE DATOS -->
        </div>
      </div>
    </div>
    <br>
  </section>
@endsection
@push('scripts')
<script type="text/javascript">
  $('#btnMateria').click(function(){
    document.getElementById('insumo').disabled = true;
    var nombre = $('#nombre').val();
    var precio = $('#precio').val();
    var cantidadTotal = $('#cantidadTotal').val();
    var marca = $('#marca').val();
    var descripcion = $('#descripcion').val();
    var token = $('#token').val();
    $.ajax({
      type: 'POST',
      url: "{{route('insumo.store')}}",
      headers: {'X-CSRF-TOKEN':token},
      data: {'nombre': nombre, 'precio':precio, 'cantidadTotal':cantidadTotal, 'marca':marca, 'descripcion':descripcion},
      dataType: 'json',
      success: function (data) {
        console.log(data);
        $('#tbody').html(data);
      }
    });
  });

  $('#btnMedicamento').click(function(){
    document.getElementById('insumo').disabled = true;
    var nombre = $('#nombreM').val();
    var precio = $('#precioM').val();
    var cantidadTotal = $('#cantidadTotalM').val();
    var marca = $('#marcaM').val();
    var descripcion = $('#descripcionM').val();
    var tipo = $('#tipoM').val();
    var token = $('#token').val();
    $.ajax({
      type: 'POST',
      url: "{{route('insumo.store')}}",
      headers: {'X-CSRF-TOKEN':token},
      data: {'nombre': nombre, 'precio':precio, 'cantidadTotal':cantidadTotal, 'tipo':tipo, 'marca':marca, 'descripcion':descripcion},
      dataType: 'json',
      success: function (data) {
        console.log(data);
        $('#tbody').html(data);
      }
    });
  });

  $('#btnSanitario').click(function(){
    document.getElementById('insumo').disabled = true;
    var nombre = $('#nombreS').val();
    var precio = $('#precioS').val();
    var cantidadTotal = $('#cantidadTotalS').val();
    var marca = $('#marcaS').val();
    var descripcion = $('#descripcionS').val();
    var tipo = $('#tipoS').val();
    var token = $('#token').val();
    $.ajax({
      type: 'POST',
      url: "{{route('insumo.store')}}",
      headers: {'X-CSRF-TOKEN':token},
      data: {'nombre': nombre, 'precio':precio, 'cantidadTotal':cantidadTotal, 'tipo':tipo, 'marca':marca, 'descripcion':descripcion},
      dataType: 'json',
      success: function (data) {
        console.log(data);
        $('#tbody').html(data);
      }
    });
  });

  $("#create_materia").on('hidden.bs.modal', function (e) {
    e.preventDefault();
    refrech();
  });

  $("#create_medicina").on('hidden.bs.modal', function (e) {
    e.preventDefault();
    refrech();
  });

  $("#create_producto").on('hidden.bs.modal', function (e) {
    e.preventDefault();
    refrech();
  });

  function refrech(){
    $vari = 'p';
    $.ajax({
      type: 'GET',
      url: "{{url('factura_compra/showList/')}}",
      data: {'dato': $vari },
    }).done(function (data) {
      console.log(data);
      $('#tbody').html(data);
    })
  }
</script>
@endpush