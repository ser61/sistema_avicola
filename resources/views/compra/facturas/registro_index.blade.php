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
          @include('compra.facturas.models.producto_sanitizacion')
          @include('compra.facturas.models.medicamento')
            <!-- fin-> TITULO DE PANEL -->
            <!-- CUADRO DE BUSQUEDA -->
          <div class="panel panel-blue">
            <div class="row">
              @include('alertas.logrado')
              @include('alertas.request')
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1">
                  <div class="form-group">
                    <label for="insumo">Seleccione un Proveedor:</label>
                    {!! Form::select('tipoInsumo',$proveedores,null, ['class'=>'form-control select2', 'id' => 'insumo', 'placeholder'=>'Seleccion tipo...']) !!}
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1">
                  <button class="btn btn-primary btn-block">
                    <i class="fa fa-plus pull-left"></i> <b>MATERIA PRIMA</b>
                  </button>
                  <button class="btn btn-primary btn-block">
                    <i class="fa fa-plus pull-left"></i> <b>MEDICAMENTO</b>
                  </button>
                  <button class="btn btn-primary btn-block">
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
                  <td>{{$insumo->cantidad}}</td>
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
                <th><h4>Bs/. 0.00</h4></th>
              </tfoot>
            </table>
          </div>
          <div class="footer">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-lg-offset-6">
                  <button class="btn btn-danger btn-block">
                    <i class="fa fa-exit"></i> Cancel
                  </button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button class="btn btn-primary btn-block">
                    <i class="fa fa-exit"></i> Cancel
                  </button>
                </div>
                <br>
              </div>
            </div>
          </div>
          <!-- fin-> TABLA DE DATOS -->
        </div>
      </div>
    </div>
    <br>
  </section>
@endsection
@push('scripts')
<script type="text/javascript">
  $('#search').on('keyup', function () {
    $value = $(this).val();
    $.ajax({
      type: 'GET',
      url: "{{url('searchinsumos/')}}",
      data: {'search': $value},
      success: function (data) {
        console.log(data);
        $('#tbody').html(data);
      }
    });
  });

  $(document).on('click', '.pagination a', function (e) {
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    insumos(page, $('#search').val());
  });

  function insumos(page, search) {
    var url = "{{url('searchPaginateinsumos/')}}";
    $.ajax({
      type: 'GET',
      url: url + '?page=' + page,
      data: {'search': search},
    }).done(function (data) {
      $('#tbody').html(data);
    })
  }

  $("#insumo").change(mostrarCampo);

  function mostrarCampo(){
    var dato = document.getElementById('insumo').value;
    if (dato == 2){
      eliminar();
      var div = $('#insumoBody');
      var label = '<label id="milabel" for="insumo">Seleccione el tipo Medicamento</label>';
      var select = ''+
        '<select name="tipo" class="form-control select2" id="tipo" placeholder="Seleccion un tipo">' +
        '<option value="1">Aereo</option>' +
        '<option value="2">Venereo</option>' +
        '<option value="3">Rozamiento</option>' +
        '<option value="4">liquido</option>' +
        '</select>';

      div.append(label);
      div.append(select);
      document.getElementById('insumoBody').style.display = 'block';
    }else if(dato == 3){
      eliminar();
      var div = $('#insumoBody');
      var label = '<label id="milabel" for="insumo">Seleccione el tipo Producto Sanitario</label>';
      var select = ''+
        '<select name="tipo" class="form-control select2" id="tipo" placeholder="Seleccion un tipo">' +
        '<option value="1">Pesticida</option>' +
        '<option value="2">Bactericida</option>' +
        '<option value="3">Legia</option>' +
        '</select>';

      div.append(label);
      div.append(select);
      document.getElementById('insumoBody').style.display = 'block';
    }else{
      eliminar();
      document.getElementById('insumoBody').style.display = 'none';
    }

  }

  function eliminar(){
    $("#milabel").remove();
    $("#tipo").remove();
  }
</script>
@endpush