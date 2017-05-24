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
          <h3 align="center">Panel de control de  <span class="text-bold">Factura de Ventas</span></h3>
        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        @if(5 > 0)
        @include('venta.factura.search')
          <!-- CUADRO DE BUSQUEDA -->
        
        <!-- fin-> CUADRO DE BUSQUEDA -->

        <!-- TABLA DE DATOS -->

        <div class="box-body">
          <table class="table table-bordered" style="border-top-color: #00AEFF">
            <thead>
            <tr>
              <th>Id</th>						
				<th>Nombre</th>
				<th>NIT</th>
				<th>Fecha</th>
				<th>Monto Total</th>
				<th>Estado</th>
				<th>Empleado</th>
				<th>Cliente</th>
				<th>Opciones</th>	
            </tr>
            </thead>
            <tbody>
            @foreach($factura as $fac)
					<tr>
						<td>{{ $fac->id }}</td>
						<td>{{ $fac->nombre }}</td>
						<td>{{ $fac->nit }}</td>
						<td>{{ $fac->fecha }}</td>
						<td>{{ $fac->montoTotal }}</td>
						<td>{{ $fac->estado }}</td>
						<td>{{ $fac->nombEmp }}</td>
						<td>{{ $fac->nombCli }}</td>
						<td>
							<a href="{{URL::action('FacturaController@show',$fac->id)}}" class="btn btn-info" data-placement="top" data-original-title="Ver Detalle de Orden de Produccion"><i class="fa fa-bars"></i></a>
							<a href="" data-target="#modal-delete-{{$fac->id}}" data-toggle="modal" class="btn btn-danger" data-placement="top" data-original-title="Finalizar Ciclo Reproductivo"><i class="fa fa-times fa fa-white"></i></a>
						</td>
					</tr>
			@include('venta.factura.modal')
			@endforeach
            </tbody>
          </table>
        </div>
        <!-- fin-> TABLA DE DATOS -->
        @else
          <div class="box">
            <div class="box-header">
              <h3 align="center"><b>Aun no tiene ningun Orden de Produccion...</b></h3>
            </div>
            <div class="box-body">
              <br>
              <p align="center">Bienvenido a la seccion de Orden de Produccion, para agregar una nueva Orden, haga click en icono de mas.</p>
              <br>
              <div class="col-md-6 col-sm-offset-3">
                <a href="ordenproduccion/create"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
                  <i class="fa fa-plus"></i>
                </button></a>
                

              </div>
            </div>
          </div>
        @endif
      </div>
      </div>
    </div>
    <br>
  </section>
@endsection