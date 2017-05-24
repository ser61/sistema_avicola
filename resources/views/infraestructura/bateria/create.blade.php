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
			
			<h3>Nueva Batería</h3>
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

			{!! Form::open(array('url'=>'infraestructura/bateria','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}
		<div class="col-lg-8 col-sm8 col-md8 col-xs-12">
			<div class="form-group">
				<label for="capacidad">Capacidad</label>
				<input type="number" name="capacidad" class="form-control" placeholder="Capacidad..">
			</div>
		</div>

		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label>Galpones Activos</label>
				<select name="idGalpon" class="form-control">
					@foreach($galpones as $galpon)
					<option value="{{ $galpon->idGalpon }}">Id:{{$galpon->idGalpon}} | Capacidad:{{ $galpon->capacidad }} | Estado:{{ $galpon->estado }} | Tipo:{{ $galpon->tipo }}</option>
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