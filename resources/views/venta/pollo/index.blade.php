@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>V E N T A</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">index</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
        <!-- TITULO DE PANEL -->
        <div class="box-header with-border">
          <h3 align="center">Panel de control de <span class="text-bold">Producto Pollos</span></h3>
          @include('alertas.logrado')
        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        @if(count($cantidad) > 0)
        @include('venta.pollo.search')
          <!-- CUADRO DE BUSQUEDA -->
        
        <!-- fin-> CUADRO DE BUSQUEDA -->

        <!-- TABLA DE DATOS -->

        <div class="box-body">
          <table class="table table-bordered" style="border-top-color: #00AEFF">
            <thead>
            <tr>
              <th>Id</th>						
				<th>Nombre</th>
				<th>Imagen</th>
				<th>Stock</th>
				<th>Precio</th>
				<th>Tipo</th>
				<th>Edad</th>
				<th>Sexo</th>
				<th>Peso Prom.</th>
				<th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productoVenta as $pro)
					<tr>
						<td>{{ $pro->id }}</td>
						<td>{{ $pro->nombre }}</td>
						<td><img src="{{asset('imagenes/productos/'.$pro -> imagen)}}" alt="{{$pro -> nombre}}" height="100px" width="100px" class="img-thumbnail"></td>
						<td>{{ $pro->stock }}</td>
						<td>{{ $pro->precioUnitario }}</td>
						<td>{{ $pro->tipo }}</td>
						<td>{{ $pro->edad }}</td>
						<td>{{ $pro->sexo }}</td>
						<td>{{ $pro->pesoPromedio }}</td>
						<td>
							<a href="{{URL::action('PolloController@edit',$pro->id)}}" class="btn btn-info" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                 			<a href="" data-target="#modal-delete-{{$pro->id}}" data-toggle="modal" class="btn btn-danger" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
						</td>
					</tr>
			@include('venta.pollo.modal')
			@endforeach
            </tbody>
          </table>
          {{$productoVenta->render()}}
        </div>
        <!-- fin-> TABLA DE DATOS -->
        @else
          @if(count($cant_t) == 0)
            <div class="box">
              <div class="box-header">
                <h3 align="center"><b>Aun no tiene ningun Tipo de Pollo...</b></h3>
              </div>
              <div class="box-body">
                <br>
                <p align="center">para agregar un Tipo de Pollo, Dirijase a la Area de Tipos de Pollos.</p>
                <br>
                <div class="col-md-6 col-sm-offset-3">
                  <a href="cliente"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
                    Area de Tipos de Pollos<i class="fa fa-arrow-circle-right"></i>
                  </button></a>
                  

                </div>
              </div>
            </div>
          @endif

          @if(count($cant_t) > 0)
            <div class="box">
              <div class="box-header">
                <h3 align="center"><b>Aun no tiene ninguna Producto de Pollo...</b></h3>
              </div>
              <div class="box-body">
                <br>
                <p align="center">Bienvenido a la seccion de Producto de Pollo, para agregar un Producto de Pollo, haga click en icono de mas.</p>
                <br>
                <div class="col-md-6 col-sm-offset-3">
                  <a href="pollo/create"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
                    <i class="fa fa-plus"></i>
                  </button></a>
                  

                </div>
              </div>
            </div>
          @endif
        @endif
      </div>
      </div>
    </div>
    <br>
  </section>
@endsection