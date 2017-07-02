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
		<b>* * * R E P O R T E S &ensp;D I A R I O S * * *</b>
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

		<div class="box-body">
			

			{!! Form::open(array('url'=>'reportes/reporte_diario','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label>Elija la Parvada a Realizar El Reporte</label>
						<select name="idParvada" class="form-control selectpicker" data-live-search="true">
							@foreach($parvadas as $parvada)
							<option value="{{ $parvada->idParvada }}">{{ $parvada->idParvada }} {{ $parvada->tipoParvada}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label>Elija Etapa a la que pertenece la Parvada</label>
						<select name="idEtapa" id="etapa" class="form-control selectpicker" data-live-search="true">
							@foreach($etapas as $etapa)
						<option value="{{ $etapa->idEtapa }}">{{ $etapa->nombre }}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="mortalidad">Mortalidad de la Parvada</label>
						<input type="number" name="mortalidad" class="form-control" placeholder="Inserte la Mortalidad..">
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="pesoPromedio">Peso Promedio del Parvada</label>
						<input type="number" step="any" name="pesoPromedio" class="form-control" placeholder="Insertar precio promedio..">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label>Empleado Encargado del Reporte</label>
						<select name="idEmpleado" class="form-control selectpicker" data-live-search="true">
							@foreach($empleados as $empleado)
							<option value="{{ $empleado->idEmpleado }}">{{ $empleado->idEmpleado }} {{ $empleado->nombre }} {{ $empleado->apellido }}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="box-header with-border">
					<h4 align="center"><span class="text-bold">Opciones para Parvada Reproductora o Ponedoras</span></h4>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="cantidadHuevos">Cantidad de Huevos Recolectados</label>
						<input type="number" name="cantidadHuevos" class="form-control" placeholder="Inserte la cantidad de Huevos..">
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label>Plantas de Incubación Disponibles</label>
						<select name="idPlantaIncubacion" class="form-control selectpicker" data-live-search="true">
							@foreach($plantas as $planta)
							<option value="{{ $planta->idPlantaIncubacion}}">(Id:) {{ $planta->idPlantaIncubacion }} (Estado:) {{ $planta->estado }} (Tipo:) {{ $planta->tipo }}</option>
							@endforeach
						</select>
					</div>
				</div>
				
				
			</div>

			<div class="row">
				
			<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
					
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label>Categoría del Huevo</label>
						<select name="idCategoria" class="form-control selectpicker" data-live-search="true">
							@foreach($categorias as $categoria)
							<option value="{{ $categoria->id }}">{{ $categoria->id }} {{ $categoria->nombre }} ({{ $categoria->pesoIntervaloInferior }} - {{ $categoria->pesoIntervaloSuperior }})</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-6 col-dm-12 col-xs-12">
	              <label for="form-field-24">
	                Escriba una breve Observacion:
	              </label>
	              <textarea class="autosize form-control" id="form-field-24" name="observaciones"></textarea>
	            </div>
			</div>

			<div class="form-group">
            <div class="col-sm-8 col-sm-offset-2">
              <br>
              <button class="btn btn-primary btn-block">
                Registrar Reporte <i class="fa fa-arrow-circle-right"></i>
              </button>
              <br>
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