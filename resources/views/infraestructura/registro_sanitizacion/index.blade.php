@extends ('layouts.fondo')
@section ('content')

<section class="content-header">

	<h1 align="center">
		<b>I N F R A E S T R U C T U R A</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">index</a></li>
	</ol>
</section>
<br>

<section class="content">

	<div class="row">
		<div class="col-sm-12 col-xs-12">
			<div class="box box-primary">
				<!-- TITULO DE PANEL -->
				<div class="box-header with-border">
					<h3 align="center">Panel de control de los <span class="text-bold">Registros Sanitarios</span></h3>
				</div>
			@include('alertas.logrado')
			@include('alertas.request')
			@if(count($procesos) > 0 && count($registros) > 0)
				@include('infraestructura.registro_sanitizacion.searchT')

				<!-- TABLA DE DATOS -->
					<div class="box-body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="table-responsive">
									<table class="table  table-bordered table-condensed table-hover">
										<thead >
											<tr class="active">
												<th>Id</th>
												<th>Fecha</th>
												<th>Empleado</th>
												<th>Infraestructura</th>
												<th>Opciones</th>
											</tr>
										</thead>

										@foreach($registros as $registro)
										<tr>

											<td>{{ $registro->id }}</td>
											<td>{{ $registro->fecha }}</td>
											<td>{{$registro->idEmpleado}} {{ $registro->nombre }} {{ $registro->apellido }}</td>
											<td>{{ $registro->infraestuctura }}</td>
											<td>
												<a href="{{URL::action('RegistroSanitizacionController@show',$registro->id)}}">
													<button class="btn btn-primary">Detalles</button>
												</a>
											</td>
										</tr>
										@endforeach

									</table>
								</div>
								{{$registros->render()}}
							</div>
						</div>
						@else
							@if(count($procesos) == 0)
								<div class="box-header">
									<h3 align="center"><b>Aun no tiene ningún Proceso Sanitario registrado...</b></h3>
								</div>
								<div class="box-body">
									<br>
									<p align="center">Bienvenido a la seccion de Registro de Sanitización, para agregar un nuevo Registro,</p>
									<p align="center">es necesario que cree al menos un Proceso Sanitario</p>
									<p align="center">haga click en el icono de más.</p>
									<br>
									<div class="col-md-6 col-sm-offset-3">
										<a href="{{ url('infraestructura/proceso_sanitario/create') }}" type="button" class="btn btn-danger btn-block">
											<i class="fa fa-plus"></i>
										</a>
									</div>
								</div>
							@elseif(count($registros) == 0)
								<div class="box-header">
									<h3 align="center"><b>Aun no tiene ningún Registro de Sanitización registrado...</b></h3>
								</div>
								<div class="box-body">
									<br>
									<p align="center">Bienvenido a la seccion de Registro de Sanitización, para agregar un nuevo Registro de Sanitización, haga click en icono de más.</p>
									<br>
									<div class="col-md-6 col-sm-offset-3">
										<a href="{{ url('infraestructura/registro_sanitizacion/create') }}" type="button" class="btn btn-danger btn-block">
											<i class="fa fa-plus"></i>
										</a>
									</div>
								</div>
			@endif
			@endif
					</div>
			</div>
		</div>
	</div>
</section>
@endsection