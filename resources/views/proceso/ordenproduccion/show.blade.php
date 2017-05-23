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
          <h3 align="center">Panel de control de  <span class="text-bold">Orden de Produccion</span></h3>

          <div class="panel-body">
          	<div class="row">
			        
			        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			            <div class="form-group">
			                <label><b>Fecha</b></label>
			                <p>{{ $orden -> fecha }}</p>
			            </div>
			        </div>

			    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			            <div class="form-group">
			                <label><b>Nro</b></label>
			                <p>{{ $orden -> id }}</p>
			            </div>
			        </div>

			        

			        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			            <div class="form-group">
			                <label><b>Nombre</b></label>
			                <p>{{ $orden -> observacion }}</p>
			            </div>
			        </div>


			    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			    		<div class="form-group">
			    			<label><b>Empleado</b></label>
			    			<p>{{ $orden -> empleado}} {{ $orden -> eap }}</p>
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
			                            <th class="center">Alimento</th>
			                            <th class="center">Cantidad (Kg)</th>
			                        </thead>
			                        <tbody>
			                            @foreach($detalle as $det)
			                                <tr>
			                                    <td class="center">{{$det -> nombre}}</td>
			                                    <td class="center">{{$det -> peso}}</td>
			                                </tr>
			                            @endforeach
			                        </tbody>
			                        <tfoot>
			                            <th></th>             
			                            <th></th>
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