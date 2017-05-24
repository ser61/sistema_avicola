<h3 align="center">Facturas Realizadas</h3>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
				<table align="center" border="1" class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>						
				<th>Nombre</th>
				<th>NIT</th>
				<th>Fecha</th>
				<th>Monto Total</th>
				<th>Estado</th>
				<th>Empleado</th>
				<th>Cliente</th>
						
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
						<td>{{ $fac->idCliente }}</td>
										
						</tr>
					
					@endforeach
					</thead>
					
				</table>	
		</div>
		
	</div>
</div>	