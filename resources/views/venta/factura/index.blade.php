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
          @include('alertas.logrado')
        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        @if(count($cantidad) > 0)
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
        {{$factura->links()}}
        <!-- fin-> TABLA DE DATOS -->
        @else
          @if(count($cant_c)==0)
            <div class="box">
              <div class="box-header">
                <h3 align="center"><b>Aun no tiene ningun Cliente Registrado...</b></h3>
              </div>
              <div class="box-body">
                <br>
                <p align="center">Para agregar un nuevo Cliente, Dirijase a la Area de Cliente.</p>
                <br>
                <div class="col-md-6 col-sm-offset-3">
                  <a href="cliente"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
                    Area de Clientes<i class="fa fa-arrow-circle-right"></i>
                  </button></a>
                  

                </div>
              </div>
            </div>
          @endif
          @if(count($cant_p)==0)
            <div class="box">
              <div class="box-header">
                <h3 align="center"><b>Aun no tiene ningun Producto de Venta Registrado...</b></h3>
              </div>
              <div class="box-body">
                <br>
                <p align="center">Para agregar un nuevo Producto, Dirijase a la Area de Producto de Venta.</p>
                <br>
                <div class="col-md-6 col-sm-offset-3">
                  <a href="pollo"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
                    Area de Producto de Venta<i class="fa fa-arrow-circle-right"></i>
                  </button></a>
                  

                </div>
              </div>
            </div>
          @endif
          @if(count($cant_e)==0)
            <div class="box">
              <div class="box-header">
                <h3 align="center"><b>Aun no tiene ningun Empleado Registrado...</b></h3>
              </div>
              <div class="box-body">
                <br>
                <p align="center">Para agregar un nuevo Empleado, Dirijase a la Area de Empleados.</p>
                <br>
                <div class="col-md-6 col-sm-offset-3">
                  <a href="{{url('emplea')}}"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
                    Area de Empleado<i class="fa fa-arrow-circle-right"></i>
                  </button></a>
                  

                </div>
              </div>
            </div>
          @endif
          @if(count($cant_c)>0 and count($cant_e)>0 and count($cant_p)>0 )
          <div class="box">
            <div class="box-header">
              <h3 align="center"><b>Aun no tiene ninguna Factura Realizada...</b></h3>
            </div>
            <div class="box-body">
              <br>
              <p align="center">Bienvenido a la seccion de Facturas, para agregar una nueva Factura, haga click en icono de mas.</p>
              <br>
              <div class="col-md-6 col-sm-offset-3">
                <a href="factura/create"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
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