<!DOCTYPE html>
  <head>
  	
  </head>
  <section class="content-header">
    <h1 align="center">
      * * *  <b>REPORTE   DE  FACTURAS</b>  * * *
    </h1>
 <body>   
  </section>
  <br>
<a >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="imagenes/productos/icono.jpg" style="width: 20% " align="center"></a>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
        <!-- TITULO DE PANEL -->
        <div class="box-header with-border">
        			

       <table class="anch-tb" align="center"">
        <tr>
          <td style="border-right: 3px solid #286090; padding: 3px;" align="center">
            
            <p style="text-align: left;">
            <b>&nbsp;&nbsp;Reporte: </b>0001<br>
            <b>&nbsp;&nbsp;Fecha: </b>{{\Carbon\Carbon::now()->toFormattedDateString()}}
            </p>
          </td>
          <td style="padding-left: 50px;">
            <p style="vertical-align: middle;">
              <br>
              <b>Ciudad: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bolivia-Santa Cruz<br>
            <b>Empresa: </b>&nbsp;&nbsp;&nbsp;Sistema Pio Avicola <br>
            <b>Teléfono: </b>&nbsp;3-491370<br>
            <b>Email: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pio_granja@gmail.com.bo <br>
            <b>Dirección: </b>Canal Cotoca Calle 13 (San Luís Cáceres esq. Las Petas)
            </p>
          </td>
        </tr>
      </table>
      <br>
      <br>

          <div class="panel-body">
          		     

			    <div class="container">
			    <div class="row">
			        <div class="panel panel-info">
			        <div class="panel-heading" align="center"><b>Cantidad de Factuas: {{count($facturas)}}</b></div>
			        <br>
			        <br>
			        <br>

			        @if(count($fa_c) == 0)
			            <div class="panel-body">
			                <div class="row">
								<div class="container">
									<div class="table-responsive">
			                    		<table align="center" border="1" class="table table-striped table-bordered table-condensed table-hover">
			                        <thead style="background-color: #A9D0F5">
			                            <th>Id</th>						
										<th>Nombre</th>
										<th>NIT</th>
										<th>Fecha</th>
										<th>Monto Total</th>
										<th>Estado</th>
										<th>ID Empleado</th>
										<th>Empleado</th>
										<th>Cliente</th>
			                        </thead>
			                        <tbody>
			                        <tr></tr>
			                            @foreach($facturas as $fac)
											<tr>
											<td>{{ $fac->id }}</td>
											<td>{{ $fac->nombre }}</td>
											<td>{{ $fac->nit }}</td>
											<td>{{ $fac->fecha }}</td>
											<td>{{ $fac->montoTotal }}</td>
											<td>{{ $fac->estado }}</td>
											<td>{{ $fac->idEmpleado }}</td>
											<td>{{ $fac->nombreC}}</td>
											<td>{{ $fac->idCliente }}</td>
															
											</tr>
										
										@endforeach
			                        </tbody>
			                       
		                    			</table>
			    		            </div>
								</div>			
				            </div> 
			            </div> 
			            <br>
			            <br><br>
			            <b>NOTA: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Porfavor Guarde Su Factura
			        @else
			        	<div class="panel-body">
				          	<div class="row">
							        <b>Fecha: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $facturas -> fecha }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Nro: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $facturas -> id }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>NIT:</b>&nbsp;&nbsp;{{ $facturas -> nit }}<br>

							        <br>

							        <b>A nombre de: </b>&nbsp;{{ $facturas -> nombre }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Cliente: </b>&nbsp;{{ $facturas -> cliente }} {{ $facturas -> cap }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Empleado: </b>&nbsp;{{ $facturas -> empleado}} {{ $facturas -> eap }}<br>

							        <br>
							        <br>
							        




							    </div>      

							    <div class="container">
							    <div class="row">
							        <div class="panel panel-info">
							        <div class="panel-heading" align="center"><b>* * Detalle de la Factura * *</b></div>
							            <div class="panel-body">
							            <br>
							            <br>
							                <div class="row">
												<div class="container">
													<div class="table-responsive">
							                    		<table align="center" border="1" class="table table-striped table-bordered table-condensed table-hover">
							                        <thead style="background-color: #A9D0F5">
							                            <th>Nombre del Producto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							                            <th>Cantidad del Producto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							                            <th>Precio Por Unidad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							                            <th>Sub Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							                        </thead>
							                        <tbody>
							                        <tr></tr>
							                            @foreach($detalle as $det)
							                                <tr>
							                                    <td align="center">{{$det -> nombre}}</td>
							                                    <td align="center">{{$det -> cantidad}}</td>
							                                    <td align="center">{{$det -> precioUnitario}}</td>
							                                    <td align="center">{{$det -> precioUnitario * $det -> cantidad}}</td>
							                                </tr>
							                            @endforeach
							                        </tbody>
							                        <br>
							                        <tfoot>
							                            <th>TOTAL</th>             
							                            <th></th>       
							                            <th></th>
							                            <th><h4 id="total">Bs/. {{ $facturas -> montoTotal}}</h4><input type="hidden" name="total" id="total"></th>
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
				        <b>NOTA: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Porfavor Cuide Su Factura Por Si Tiene Algun Reclamo Mas Posterior  :D

			        @endif

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
</body>