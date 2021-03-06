@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>P R O C E S O</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">show</a></li>
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

          <div class="panel-body">
          	<div class="row">
			        
			        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			            <div class="form-group">
			                <label><b>Fecha</b></label>
			                <p>{{ $factura -> fecha }}</p>
			            </div>
			        </div>

			    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			            <div class="form-group">
			                <label><b>Nro</b></label>
			                <p>{{ $factura -> id }}</p>
			            </div>
			        </div>

			        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			            <div class="form-group">
			                <label><b>NIT</b></label>
			                <p>{{ $factura -> nit }}</p>
			            </div>
			        </div>

			        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			            <div class="form-group">
			                <label><b>Nombre</b></label>
			                <p>{{ $factura -> nombre }}</p>
			            </div>
			        </div>

			    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			    		<div class="form-group">
			    			<label><b>Cliente</b></label>
			    			<p>{{ $factura -> cliente}} {{ $factura -> cap }}</p>
			    		</div>
			    	</div>

			    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			    		<div class="form-group">
			    			<label><b>Empleado</b></label>
			    			<p>{{ $factura -> empleado}} {{ $factura -> eap }}</p>
			    		</div>
			    	</div>


			        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			            <div class="form-group">
			                <label><b>Monto Total</b></label>
			                <p>{{ $factura -> montoTotal}}</p>
			            </div>
			        </div>



			    </div>      

			    <div class="container">
			    <div class="row">
			        <div class="panel panel-info">
			        <div class="panel-heading"><b>Detalle</b></div>
			            <div class="panel-body">

			                <div class="row">
								<div class="container">
									<div class="table-responsive">
			                    		<table id="carrito" class="table table-striped table-bordered table-condensed table-hover">
			                        <thead style="background-color: #A9D0F5">
			                            <th>Nombre</th>
			                            <th>Cantidad</th>
			                            <th>Precio</th>
			                            <th>Sub Total</th>
			                        </thead>
			                        <tbody>
			                            @foreach($detalle as $det)
			                                <tr>
			                                    <td>{{$det -> nombre}}</td>
			                                    <td>{{$det -> cantidad}}</td>
			                                    <td>{{$det -> precioUnitario}}</td>
			                                    <td>{{$det -> precioUnitario * $det -> cantidad}}</td>
			                                </tr>
			                            @endforeach
			                        </tbody>
			                        <tfoot>
			                            <th>TOTAL</th>             
			                            <th></th>       
			                            <th></th>
			                            <th><h4 id="total">Bs/. {{ $factura -> montoTotal}}</h4><input type="hidden" name="total" id="total"></th>
			                        </tfoot>
		                    			</table>
			    		            </div>
								</div>			
				            </div> 
			            </div> 
			        </div>
			    </div>
			</div>
        </div>


        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        
      </div>
      </div>
    </div>
    <br>
  </section>
@endsection