
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>R E P O R T E--D E--F A C T U R A S</b> * * * * *
    </h1>
    
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
        <!-- TITULO DE PANEL -->
        <div class="box-header with-border">
          <h3 align="center">Reporte de<span class="text-bold"> Facturas</span></h3>

          <div class="panel-body">
          		<div class="row">
			        
			       


			    </div>      

			    <div class="container">
			    <div class="row">
			        <div class="panel panel-info">
			        <div class="panel-heading" align="center"><b>------F A C T U R A S------ </b></div>
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