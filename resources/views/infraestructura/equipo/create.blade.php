@extends ('layouts.fondo')
@section ('content')

<section class="content-header">
	<h1 align="center">
        <b>I N F R A E S T R U C T U R A</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{url('infraestructura/equipo')}}">index</a></li>
		<li><a href="#">Crear</a></li>
	</ol>
</section>
<br>
<section class="content">
	<div class="row">
		<div class="col-sm-12 col-xs-12">

			<div class="box box-primary">

				<!-- TITULO DEL PANEL-->
				<div class="box-header with-border">
					<h3 align="center">Panel de Registro de un <span class="text-bold">Equipo</span></h3>
				</div>

				<div class="box-body">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Nuevo Equipo</h3>
		</div>
	</div>


	{!! Form::open(array('url'=>'infraestructura/equipo','method'=>'POST','autocomplete'=>'off'))!!}
	{{Form::token()}}
			<div class="row">
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
									<option value="{{ $planta->idPlantaIncubacion }}">{{$planta->idPlantaIncubacion}} {{$planta->estado}}</option>
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
			</div>
		{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</section>
@endsection