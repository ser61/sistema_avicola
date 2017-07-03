@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>C O M P R A</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Index</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h2 align="center"><span class="text-bold">Inventario</span></h2>
          </div>
          @include('alertas.request2')
          <div class="row">
            @include('compra.inventario.modals.quitar')
            <div id="tbody">
              <div class="title col-lg-8 col-md-8 col-sm-8 col-xs-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                <h3><b>Materia Prima:</b></h3>
                <hr size="10px" width="80%" noshade="noshade" align="left"/>
                <table class="table table-bordered" style="border-top-color: #00AEFF">
                  <thead>
                  <tr>
                    <th class="center">ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Cantidad</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($insumosMP as $insumoMP)
                    <tr>
                      <td class="center">{{$insumoMP->id}}</td>
                      <td>{{$insumoMP->nombre}}</td>
                      <td>{{$insumoMP->marca}}</td>
                      <td>{{$insumoMP->cantidadTotal}}</td>
                      <td>
                        <a type="button" class="btn btn-warning" onclick="showModal({{$insumoMP->id}});" data-toggle="modal" data-target="#quitar">
                          Descontar
                        </a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>

              <div class="title col-lg-8 col-md-8 col-sm-8 col-xs-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                <h3><b>Medicamento:</b></h3>
                <hr size="10px" width="80%" noshade="noshade" align="left"/>
                <table class="table table-bordered" style="border-top-color: #00AEFF">
                  <thead>
                  <tr>
                    <th class="center">ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Tipo</th>
                    <th>Cantidad</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($insumosM as $insumoM)
                    <tr>
                      <td class="center">{{$insumoM->id}}</td>
                      <td>{{$insumoM->nombre}}</td>
                      <td>{{$insumoM->marca}}</td>
                      <td>{{$insumoM->tipo}}</td>
                      <td>{{$insumoM->cantidadTotal}}</td>
                      <td>
                        <a href="#" class="btn btn-warning" onclick="showModal({{$insumoM->id}});" data-toggle="modal" data-target="#quitar">
                          Descontar
                        </a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>

              <div class="title col-lg-8 col-md-8 col-sm-8 col-xs-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                <h3><b>Producto Sanitarios:</b></h3>
                <hr size="10px" width="80%" noshade="noshade" align="left"/>
                <table class="table table-bordered" style="border-top-color: #00AEFF">
                  <thead>
                  <tr>
                    <th class="center">ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Tipo</th>
                    <th>Cantidad</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($insumosS as $insumoS)
                    <tr>
                      <td class="center">{{$insumoS->id}}</td>
                      <td>{{$insumoS->nombre}}</td>
                      <td>{{$insumoS->marca}}</td>
                      <td>{{$insumoS->tipo}}</td>
                      <td>{{$insumoS->cantidadTotal}}</td>
                      <td>
                        <a href="#" class="btn btn-warning" onclick="showModal({{$insumoS->id}});" data-toggle="modal" data-target="#quitar">
                          Descontar
                        </a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  </section>
@endsection
@push('scripts')
<script type="text/javascript">
  function showModal(id){
    $.ajax({
      type: 'GET',
      url: "{{route('inventario_compra.editar', '0')}}",
      data: {'id':id},
      dataType: 'json',
    }).done(function(res){
      console.log(res);
      $('#id').val(res.id);
      $('#cantidad').val(res.cantidadTotal);
    });
  }

  $('#descontar').click(function(){
    var id = $('#id').val();
    var cantidad = $('#cantidad').val();
    var token = $('#token').val();
    $.ajax({
      type: 'PUT',
      url: "{{route('inventario_compra.update', '0')}}",
      headers: {'X-CSRF-TOKEN':token},
      data: {'id':id, 'cantidad':cantidad},
      dataType: 'json',
      error: function(error){
        var errors = error.responseJSON;
        if ($.trim(errors)){
          var errorsHtml= '';
          $.each( errors, function( key, value ) {
            errorsHtml += '<li>' + value[0] + '</li>';
          });
          $('#miul').html(errorsHtml);
          $('#msj-errorajax').fadeIn();
        }
      }
    });
  });

  $("#quitar").on('hidden.bs.modal', function (e) {
    e.preventDefault();
    refrech();
  });

  function refrech(){
    $vari = 'p';
    $.ajax({
      type: 'GET',
      url: "{{url('inventario_compra/refresh')}}",
      data: {'dato': $vari },
    }).done(function (data) {
      $('#tbody').html(data);
    })
  }
</script>
@endpush