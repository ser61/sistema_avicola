@extends ('layouts.fondo')
@section ('content')
<br>
<div class="panel panel-white panel-body">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Tipo: {{ $categoria->nombre}}</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!! Form::model($categoria,['method'=>'PATCH','route'=>['categoria.update',$categoria->id]])!!}
			{{Form::token()}}			
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}">
			</div>

			<div class="form-group">
				<label for="descripcion">Descripcion</label>
				<input type="text" name="descripcion" class="form-control" value="{{$categoria->descripcion}}">
			</div>

			<div class="form-group">
				<label for="pesoIntervaloSuperior">Peso Intervalo Superior</label>
				<input type="text" name="pesoIntervaloSuperior" class="form-control" value="{{$categoria->pesoIntervaloSuperior}}">
			</div>

			<div class="form-group">
				<label for="pesoIntervaloInferior">Peso Intervalo Inferior</label>
				<input type="text" name="pesoIntervaloInferior" class="form-control" value="{{$categoria->pesoIntervaloInferior}}">
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