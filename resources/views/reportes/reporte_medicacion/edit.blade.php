@extends ('layouts.fondo')
@section ('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Equipo: {{ $equipo->id}}</h3>
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
			{!! Form::model($equipo,['method'=>'PATCH','route'=>['equipo.update',$equipo->id]])!!}
			{{Form::token()}}
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" value="{{$equipo->nombre}}" class="form-control" placeholder="Nombre..">
			</div>
		</div>

		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label for="capacidad">Capacidad</label>
				<input type="text" name="capacidad" value="{{$equipo->capacidad}}" class="form-control" placeholder="Capacidad..">
			</div>
		</div>

		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label>Tipo Equipo</label>
				<select name="tipo" class="form-control">
					@foreach($tipos as $tipo)
					@if($equipo->tipo == $tipo)
					<option value="{{ $tipo }}" selected>{{ $tipo }}</option>
					@else
					<option value="{{ $tipo }}">{{ $tipo }}</option>
					@endif
					@endforeach
				</select>
			</div>
		</div>

		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label>Plantas Incubadoras</label>
				<select name="idPlantaIncubacion" class="form-control">
					@foreach($plantas as $planta)
					@if($planta->idPlantaIncubacion == $equipo->idPlantaIncubacion)
					<option value="{{ $planta->idPlantaIncubacion }}" selected>{{$planta->idPlantaIncubacion}} {{$planta->capacidad}} {{$planta->estado}}</option>
					@else
					<option value="{{ $planta->idPlantaIncubacion }}">{{$planta->idPlantaIncubacion}} {{$planta->capacidad}} {{$planta->estado}}</option>
					@endif
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