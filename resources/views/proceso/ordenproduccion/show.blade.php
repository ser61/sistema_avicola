@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
  <!-- start: TOOLBAR -->
  <div class="toolbar row">
    <div class="page-header">
      <h1 style="text-align: center;">* * * P R O C E S O * * *
        <small> Sección de Orden de Produccion </small>
      </h1>
    </div>
  </div>
  <!-- end: TOOLBAR -->
  <!-- end: PAGE HEADER -->
  <br>

  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="panel panel-white">

        <div class="panel-heading">
          <h2 class="panel-title center">Panel de Registro de <span class="text-bold">Orden de Produccion</span></h2>
          <div class="panel-tools">
            <div class="dropdown">
              <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                <i class="fa fa-cog"></i>
              </a>
              <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                <li>
                  <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                </li>
                <li>
                  <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

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
    </div>
  </div>

@endsection