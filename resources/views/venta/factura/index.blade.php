@extends ('layouts.fondo')
@section ('content')
<br>
	<div class="panel panel-white panel-body">

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Lista de Facturas <a href="factura/create"><button class="btn btn-success">Nueva Factura</button></a></h3><br>
			@include('venta.factura.search')
			<br>
		</div>
	</div>
		
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-condensed table-hover">
					<thead>
						<th>Id</th>						
						<th>Nombre</th>
						<th>NIT</th>
						<th>Fecha</th>
						<th>Monto Total</th>
						<th>Estado</th>
						<th>Empleado</th>
						<th>Cliente</th>
						<th>Opciones</th>
					</thead>
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
							<a href="{{URL::action('FacturaController@show',$fac -> id)}}"><button class="btn btn-primary">Detalle</button></a>
							<a href="" data-target="#modal-delete-{{$fac->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('venta.factura.modal')
					@endforeach
				</table>
			</div>
			{{$factura->render()}}
		</div>			
	</div>			
	</div>

@endsection