@extends ('layouts.fondo')
@section ('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Batería: {{ $bateria->id}}</h3>
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
			{!! Form::model($bateria,['method'=>'PATCH','route'=>['bateria.update',$bateria->id]])!!}
			{{Form::token()}}
		<div class="col-lg-8 col-sm8 col-md8 col-xs-12">
			<div class="form-group">
				<label for="capacidad">Capacidad</label>
				<input type="number" name="capacidad" value="{{$bateria->capacidad}}" class="form-control" placeholder="Capacidad..">
			</div>
		</div>

		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label>Galpones Activos</label>
				<select name="idGalpon" class="form-control">
					@foreach($galpones as $galpon)
					@if($galpon->idGalpon == $bateria->idGalpon)
					<option value="{{ $galpon->idGalpon }}" selected>Id:{{$galpon->idGalpon}} | Capacidad:{{ $galpon->capacidad }} | Estado:{{ $galpon->estado }} | Tipo:{{ $galpon->tipo }}</option>
					@else
					<option value="{{ $galpon->idGalpon }}">Id:{{$galpon->idGalpon}} | Capacidad:{{ $galpon->capacidad }} | Estado:{{ $galpon->estado }} | Tipo:{{ $galpon->tipo }}</option>
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