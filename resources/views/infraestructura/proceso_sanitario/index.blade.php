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
					<h3 align="center">Panel de control de los <span class="text-bold">Procesos Sanitarios</span></h3>
				</div>
			@include('alertas.logrado')
			@include('alertas.request')
			@if(count($procesos) > 0 && count($insumos) > 0)
				@include('infraestructura.proceso_sanitario.searchT')

				<!-- TABLA DE DATOS -->
					<div class="box-body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="table-responsive">
									<table class="table  table-bordered table-condensed table-hover">
										<thead >
											<tr class="active">
												<th>Id</th>
												<th>Nombre</th>
												<th>Descripción</th>
												<th>Cantidad Total Insumos</th>
												<th>Opciones</th>
											</tr>
										</thead>

										@foreach($procesos as $proceso)
										<tr>

											<td>{{ $proceso->id }}</td>
											<td>{{ $proceso->nombre }}</td>
											<td>{{ $proceso->descripcion }}</td>
											<td>{{ $proceso->cantidad }}</td>
											<td>
												<a href="{{URL::action('ProcesoSanitarioController@show',$proceso->id)}}">
													<button class="btn btn-primary">Detalles</button>
												</a>

												<!--<a href="" data-target="#modal-delete-{{$proceso->id}}" data-toggle="modal"><button class="btn btn-danger"
												>Anular</button></a>-->
											</td>
										</tr>
										@include('infraestructura.proceso_sanitario.modal')
										@endforeach

									</table>
								</div>
								{{$procesos->render()}}
							</div>
						</div>
						@else
							@if(count($insumos) == 0)
								<div class="box-header">
									<h3 align="center"><b>Aun no tiene ningún Insumo registrado...</b></h3>
								</div>
								<div class="box-body">
									<br>
									<p align="center">Bienvenido a la seccion de Procesos Sanitarios, para agregar un nuevo Proceso,</p>
									<p align="center">es necesario que cree al menos un Insumo de tipo SANITARIO</p>
									<p align="center">haga click en el icono de más.</p>
									<br>
									<div class="col-md-6 col-sm-offset-3">
										<a href="{{ url('infraestructura/proceso_sanitario/create') }}" type="button" class="btn btn-danger btn-block">
											<i class="fa fa-plus"></i>
										</a>
									</div>
								</div>
							@elseif(count($procesos) == 0)
								<div class="box-header">
									<h3 align="center"><b>Aun no tiene ningún Proceso Sanitario registrado...</b></h3>
								</div>
								<div class="box-body">
									<br>
									<p align="center">Bienvenido a la seccion de Procesos Sanitarios, para agregar un nuevo Proceso Sanitario, haga click en icono de más.</p>
									<br>
									<div class="col-md-6 col-sm-offset-3">
										<a href="{{ url('infraestructura/proceso_sanitario/create') }}" type="button" class="btn btn-danger btn-block">
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