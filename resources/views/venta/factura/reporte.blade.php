
  <head>
  	
  </head>
  <section class="content-header">
    <h1 align="center">
      * * *  <b>REPORTE   DE  FACTURAS</b>  * * *
    </h1>
 <body>   
  </section>
  <br>

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