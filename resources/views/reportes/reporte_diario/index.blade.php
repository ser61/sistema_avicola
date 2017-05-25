@extends ('layouts.fondo')
@section ('content')
	<!--<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Reportes Diarios <a href="reporte_diario/create"><button class="btn btn-success">Nuevo Reporte</button></a></h3><br>
			@include('reportes.reporte_diario.search')
			<br>
		</div>
	</div>-->

	<!--<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nro</th>
						<th>Fecha</th>
						<th>Mortalidad</th>
						<th>Cantidad Huevos</th>
						<th>Peso Promedio</th>
						<th>Observaciones</th>
						<th>Cantidad Agua</th>
						<th>Etapa</th>
						<th>Id Parvada</th>
						<th>Cantidad Pollos(Parvada)</th>
						<th>Empleado</th>
						<th>Opciones</th>
					</thead>
				@foreach($reportes as $rep)
					@if($rep->visible == '1')
					<tr>
						<td>{{ $rep->id }}</td>
						<td>{{ $rep->fecha }}</td>
						<td>{{ $rep->mortalidad }}</td>
						<td>{{ $rep->cantidadHuevos }}</td>
						<td>{{ $rep->pesoPromedio }}</td>
						<td>{{ $rep->observaciones }}</td>
						<td>{{ $rep->cantidadAgua }}</td>
						<td>{{ $rep->etapa }}</td>
						<td>{{ $rep->idParvada }}</td>
						<td>{{ $rep->cantidadPollos }}</td>
						<td>{{ $rep->idEmpleado }} {{ $rep->nombre }} {{ $rep->apellido }}</td>
						<td>
							<a href="" data-target="#modal-delete-{{$rep->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@endif
					@include('reportes.reporte_diario.modal')
				@endforeach
				</table>
			</div>
			{{$reportes->links()}}
		</div>			
	</div>-->
<section class="content-header">
	<h1 align="center">
		          <b>R E P O R T E S &ensp;D I A R I O S</b>
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
					<h3 align="center">Panel de control de los <span class="text-bold">Reportes Diarios</span></h3>
				</div>
				@include('reportes.reporte_diario.searchT')
				<!-- fin-> TITULO DE PANEL @include('reportes.reporte_diario.modals.create') -->

				<!-- CUADRO DE BUSQUEDA -->
				<!--<div class="panel panel-blue">
					<div class="panel-body">
						@include('alertas.logrado')
						@include('alertas.request')
						<div class="input-group margin">
							<input type="text" class="form-control" placeholder="Buscar por Nombre">
              <span class="input-group-btn">
                <button type="button" class="btn btn-info btn-flat">
	                <i class="fa fa-search"></i>
                </button>
                <button type="button" class="btn btn-danger btn-flat" data-toggle="modal" data-target="#create" data-backdrop=”false”>
	                <i class="fa fa-plus"></i>
                </button>
              </span>
						</div>
					</div>
				</div>-->
				<!-- fin-> CUADRO DE BUSQUEDA -->

				<!-- TABLA DE DATOS -->
				<div class="box-body">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-condensed table-hover" style="border-top-color: #00AEFF">
							<thead>
							<tr>
								<th class="center">Nro</th>
								<th>Fecha</th>
								<th>Mortalidad</th>
								<th>Cantidad Huevos</th>
								<th>Peso Promedio</th>
								<th>Observaciones</th>
								<th>Cantidad Agua</th>
								<th>Etapa</th>
								<th>Id Parvada</th>
								<th>Cantidad Pollos(Parvada)</th>
								<th>Empleado</th>
								<th>Opciones</th>
							</tr>
							</thead>
							@foreach($reportes as $rep)
							@if($rep->visible == '1')
							<tr>
								<td>{{ $rep->idReporte }}</td>
								<td>{{ $rep->fecha }}</td>
								<td>{{ $rep->mortalidad }}</td>
								<td>{{ $rep->cantidadHuevos }}</td>
								<td>{{ $rep->pesoPromedio }}</td>
								<td>{{ $rep->observaciones }}</td>
								<td>{{ $rep->cantidadAgua }}</td>
								<td>{{ $rep->etapa }}</td>
								<td>{{ $rep->idParvada }}</td>
								<td>{{ $rep->cantidadPollos }}</td>
								<td>{{ $rep->idEmpleado }} {{ $rep->nombre }} {{ $rep->apellido }}</td>
								<td>
									<a href="" data-target="#modal-delete-{{$rep->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
								</td>
							</tr>
							@endif
							@include('reportes.reporte_diario.modal')
							@endforeach
							</table>
						</div>
					</div>
					{{$reportes->links()}}
				</div>
				<!-- fin-> TABLA DE DATOS -->
				<!--
				<div class="box">
					<div class="box-header">
						<h3 align="center"><b>Aun no tiene ninguna Cargo...</b></h3>
					</div>
					<div class="box-body">
						<br>
						<p align="center">Bienvenido a la seccion de Cargos, para agregar un nuevo Cargo, haga click en icono de mas.</p>
						<br>
						<div class="col-md-6 col-sm-offset-3">
							<button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#create" data-backdrop=”false”>
								<i class="fa fa-plus"></i>
							</button>

						</div>
					</div>
				</div>-->

			</div>
		</div>
	</div>
	<br>
</section>
@endsection