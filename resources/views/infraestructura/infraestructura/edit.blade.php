@extends ('layouts.fondo')
@section ('content')

<section class="content-header">
	<h1 align="center">
		<b>G R A N J A S &ensp;</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{url('infraestructura/infraestuctura')}}">index</a></li>
		<li><a href="#">editar</a></li>
	</ol>
</section>
<br>

<section class="content">
	<div class="row">
		<div class="col-sm-12 col-xs-12">

			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 align="center">Panel de Edición de una <span class="text-bold">Infraestructura</span></h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<h3>Editar Granja: {{ $inf->id}}</h3>
						</div>
					</div>

					<div class="row">
							{!! Form::model($inf,['method'=>'PATCH','route'=>['infraestructura.update',$inf->id]])!!}
							{{Form::token()}}
						<div class="col-lg-8 col-sm8 col-md8 col-xs-12">
							<div class="form-group">
								<label for="capacidad">Capacidad</label>
								<input type="number" name="capacidad" value="{{ $inf->capacidad }}" class="form-control" placeholder="Capacidad..">
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="form-group">
								<label>Tipo Granja</label>
								<select name="idGranja" class="form-control">
									@foreach($granjas as $granja)
										@if($granja->id == $inf->idGranja)
									<option value="{{ $granja->id }}" selected>{{ $granja->tipo }}</option>
										@else
									<option value="{{ $granja->id }}">{{ $granja->tipo }}</option>
										@endif
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="form-group">
								<label for="estado">Estado</label>
								<input type="text" name="estado" value="{{$inf->estado}}" class="form-control" placeholder="Estado..">
							</div>
						</div>
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="form-group">
								<label for="cantidadHuevosAlmacenados">Cantidad Huevos Almacenados</label>
								<input type="number" name="cantidadHuevosAlmacenados" value="{{$inf->cantidadHuevosAlmacenados}}" class="form-control" placeholder="Cantidad Huevos Almacenados..">
							</div>
						</div>
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="form-group">
								<label>Tipo Infraestructura</label>
								<select name="tipo" class="form-control">
									@foreach($tipos as $tipo)
										@if($tipo==$inf->tipo)
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
									<button class="btn btn-primary" type="submit">Guardar</button>
									<button class="btn btn-danger" type="reset">Cancelar</button>
								</div>
							</div>
							{!!Form::close()!!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection