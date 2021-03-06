@extends ('layouts.fondo')
@section ('content')

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
				@include('alertas.logrado')
				@include('alertas.request')
				@include('reportes.reporte_diario.searchT')

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
									<a href="{{URL::action('ReporteDiarioController@show',$rep->idReporte)}}">
										<button class="btn btn-primary">Ver más</button>
									</a>
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
			</div>
		</div>
	</div>
	<br>
</section>
@endsection