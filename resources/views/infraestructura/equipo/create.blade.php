@extends ('layouts.fondo')

@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{ Session::get('message') }}
</div>

@endif

@section ('content')

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			<h3>Nuevo Equipo</h3>
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

			{!! Form::open(array('url'=>'infraestructura/equipo','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre..">
			</div>
		</div>

		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label for="capacidad">Capacidad</label>
				<input type="text" name="capacidad" class="form-control" placeholder="Capacidad..">
			</div>
		</div>

		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label>Tipo Equipo</label>
				<select name="tipo" class="form-control">
					@foreach($tipos as $tipo)
						<option value="{{ $tipo }}">{{ $tipo }}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label>Plantas Incubadoras</label>
				<select name="idPlantaIncubacion" class="form-control">
					@foreach($plantas as $planta)
						<option value="{{ $planta->idPlantaIncubacion }}">{{$planta->idPlantaIncubacion}} {{$planta->capacidad}} {{$planta->estado}}</option>
					@endforeach
				</select>
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
@endsection