@extends ('layouts.fondo')
@section ('content')

<section class="content-header">
	<h1 align="center">
		<b>R E P O R T E S &ensp;D I A R I O S</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{url('/cargo')}}">index</a></li>
		<li><a href="#">Reporte Diario</a></li>
	</ol>
</section>
<br>

<section class="content">
	<div class="box box-primary">
		<!-- TITULO DE PANEL -->
		<div class="box-header with-border">
			<h3 align="center">Panel de Registro de <span class="text-bold">Reporte Diario</span></h3>
		</div>
	</div>

	<div class="panel-body" style="border: #ffffff">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
				@endif

			</div>
		</div>


		<div class="row">
			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label for="mortalidad">Mortalidad de la parvada: </label>
					<p>{{ $reporte->mortalidad }}</p>
				</div>
			</div>

			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label>Empleado que realizó el Registro:</label>
					<p> {{ $reporte->idEmpleado }} {{$empleado->nombre}} {{$empleado->apellido}}</p>
				</div>
			</div>

			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label>Parvadas</label>
					<p> {{ $reporte->idParvada }}</p>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label for="cantidadHuevos">Cantidad de Huevos Recolectados:</label>
					<p>{{ $reporte->cantidadHuevos }}</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label for="pesoPromedio">Peso Promedio:</label>
					<p> {{ $reporte->pesoPromedio }}</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label>Etapa</label>
					<p> {{ $etapa->nombre }} </p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label>Plantas de Incubación al que pertenece el Registro Actual</label>
					<p> {{ $planta->idPlantaIncubacion }} </p>
				</div>
			</div>

			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label for="fecha">Fecha del Registro</label>
					<p> {{ $reporte->fecha }}  </p>
				</div>
			</div>


		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<div class="form-group">
					<label for="observaciones">Observaciones</label>
					<p> {{ $reporte->observaciones }} </p>
				</div>
			</div>
		</div>

	</div>

</section>

@endsection