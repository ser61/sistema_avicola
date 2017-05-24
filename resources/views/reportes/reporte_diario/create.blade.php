@extends ('layouts.fondo')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{ Session::get('message') }}
</div>
@endif

@section ('content')
<section class="content-header">
	<h1 align="center">
		<b>R E P O R T E S &ensp;D I A R I O S</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{url('/cargo')}}">index</a></li>
		<li><a href="#">Crear</a></li>
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

	<div class="panel-body">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<h3>Nuevo Reporte</h3>
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

			{!! Form::open(array('url'=>'reportes/reporte_diario','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

		<div class="row">
			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label for="mortalidad">Mortalidad</label>
					<input type="number" name="mortalidad" class="form-control" placeholder="Inserte la Mortalidad..">
				</div>
			</div>

			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label>Empleados</label>
					<select name="idEmpleado" class="form-control selectpicker" data-live-search="true">
						@foreach($empleados as $empleado)
						<option value="{{ $empleado->idEmpleado }}">{{ $empleado->idEmpleado }} {{ $empleado->nombre }} {{ $empleado->apellido }}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label>Parvadas</label>
					<select name="idParvada" class="form-control selectpicker" data-live-search="true">
						@foreach($parvadas as $parvada)
						<option value="{{ $parvada->idParvada }}">{{ $parvada->idParvada }} {{ $parvada->tipoParvada}} {{ $parvada->created_at }}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label for="cantidadHuevos">Cantidad de Huevos</label>
					<input type="number" name="cantidadHuevos" class="form-control" placeholder="Inserte la cantidad de Huevos..">
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label for="pesoPromedio">Precio Promedio</label>
					<input type="number" step="any" name="pesoPromedio" class="form-control" placeholder="Insertar precio promedio..">
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label>Etapa</label>
					<select name="idEtapa" class="form-control selectpicker" data-live-search="true">
						@foreach($etapas as $etapa)
						<option value="{{ $etapa->idEtapa }}">{{ $etapa->nombre }}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label>Plantas de Incubación Disponibles</label>
					<select name="idEtapa" class="form-control selectpicker" data-live-search="true">
						@foreach($plantas as $planta)
						<option value="{{ $planta->idPlantaIncubacion}}">(Id:) {{ $planta->idPlantaIncubacion }} (Estado:) {{ $planta->estado }} (Tipo:) {{ $planta->tipo }}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label for="fecha">Fecha del Registro</label>
					<input type="date" name="fecha" class="form-control" placeholder="Introducir la fecha..">
				</div>
			</div>


		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<div class="form-group">
					<label for="observaciones">Observaciones</label>
					<input type="text" name="observaciones" class="form-control" placeholder="Insertar observaciones.."/>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		</div>
		{!!Form::close()!!}
	</div>

</section>
@push('scripts')
@endpush
@endsection