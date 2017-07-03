@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>C O M P R A</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:window.history.go(-1);">index</a></li>
      <li><a href="#">Detalle</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center"><span class="text-bold">Detalle de Factura</span></h3>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-lg-offset-3 col-sm-offset-3 col-xs-offset-3">
                <h4><b>ID:</b></h4>
                <h4><b>Proveedor:</b></h4>
                <h4><b>Empleado:</b></h4>
                <h4><b>Monoto Total:</b></h4>
                <h4><b>Fecha:</b></h4>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <h4>{{$factura->id}}</h4>
                <h4>{{$factura->proveedor}}</h4>
                <h4>{{$factura->empleado}}</h4>
                <h4>{{$factura->total}} Bs.</h4>
                <h4>{{$factura->fecha}}</h4>
              </div>

            </div>
            <div class="title col-lg-8 col-md-8 col-sm-8 col-xs-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">

              <h3><b>Detalle:</b></h3>
              <hr size="10px" width="80%" noshade="noshade" align="left"/>
              <table class="table table-bordered" style="border-top-color: #00AEFF">
                <thead>
                <tr>
                  <th class="center">ID</th>
                  <th>Nombre</th>
                  <th>Cantidad</th>
                  <th>Precio/U</th>
                  <th>Marca</th>
                  <th>Tipo</th>
                </tr>
                </thead>
                <tbody>
                @foreach($insumos as $insumo)
                  <tr>
                    <td class="center">{{$insumo->id}}</td>
                    <td>{{$insumo->nombre}}</td>
                    <td>{{$insumo->cantidadTotal}}</td>
                    <td>{{$insumo->precio}} Bs</td>
                    <td>{{$insumo->marca}}</td>
                    <td>
                      @if($insumo->tipoInsumo == 1)
                        Materia Prima
                      @elseif($insumo->tipoInsumo == 2)
                        Medicamento
                      @else
                        Producto Sanitario
                      @endif
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
    <br>
  </section>
@endsection