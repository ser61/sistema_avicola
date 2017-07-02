@extends ('layouts.fondo')
@section ('content')
<section class="content-header">
	<h1 align="center">
		<b>R E P O R T E S &ensp;D E  M E D I C A C I Ó N</b>
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
			<h3 align="center">Panel de Registro de <span class="text-bold">Reporte de Medicación</span></h3>
		</div>

		<div class="box-body">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3>Nuevo Reporte de Medicación</h3>
				</div>
			</div>

			{!! Form::open(array('url'=>'reportes/reporte_medicacion','method'=>'POST','autocomplete'=>'off'))!!}
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
						<label for="cantidadHuevos">Cantidad de Huevos Recolectados</label>
						<input type="number" name="cantidadHuevos" class="form-control" placeholder="Inserte la cantidad de Huevos..">
					</div>
				</div>
				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
					<div class="form-group">
						<label for="pesoPromedio">Peso Promedio</label>
						<input type="number" step="any" name="pesoPromedio" class="form-control" placeholder="Insertar precio promedio..">
					</div>
				</div>
				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
					<div class="form-group">
						<label>Etapa</label>
						<select name="idEtapa" id="etapa" class="form-control selectpicker" data-live-search="true">
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
						<select name="idPlantaIncubacion" class="form-control selectpicker" data-live-search="true">
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
				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
					<div class="form-group">
						<label>Categoría del Huevo</label>
						<select name="idCategoria" class="form-control selectpicker" data-live-search="true">
							@foreach($categorias as $categoria)
							<option value="{{ $categoria->id }}">{{ $categoria->id }} {{ $categoria->nombre }} {{ $categoria->descripcion }} ({{ $categoria->pesoIntervaloInferior }} - {{ $categoria->pesoIntervaloSuperior }})</option>
							@endforeach
						</select>
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
	</div>
</section>
@push('scripts')
<script>

</script>
@endpush
@endsection