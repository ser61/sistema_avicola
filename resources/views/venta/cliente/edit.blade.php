@extends ('layouts.fondo')
@section ('content')
<br>
<div class="panel panel-white panel-body">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Cliente: {{ $persona->nombre}}</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!! Form::model($persona,['method'=>'PATCH','route'=>['cliente.update',$persona->id]])!!}
			{{Form::token()}}			
				<div class="form-group">
					<label for="ci">Carnet de Identidad</label>
					<input type="text" name="ci" class="form-control" value="{{ $persona->ci}}" >
				</div>

				<div class="form-group">
					<label for="nombre">Nombres</label>
					<input type="text" name="nombre" class="form-control" value="{{ $persona->nombre}}">
				</div>

				<div class="form-group">
					<label for="apellido">Apellidos</label>
					<input type="text" name="apellido" class="form-control" value="{{ $persona->apellido}}">
				</div>

				<div class="form-group">
					<label for="direccion">Direccion</label>
					<input type="text" name="direccion" class="form-control" value="{{ $persona->direccion}}">
				</div>


			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}

		</div>
	</div>
</div>
@endsection