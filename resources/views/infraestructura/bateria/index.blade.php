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
					<h3 align="center">Panel de control de las <span class="text-bold">Baterías</span></h3>
				</div>
				@include('alertas.logrado')
				@include('alertas.request')
			@if(count($baterias) > 0 && count($inf) > 0)
				@include('infraestructura.bateria.searchT')

				<!-- TABLA DE DATOS -->
				<div class="box-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-condensed table-hover">
									<thead>
										<th>Id</th>
										<th>Capacidad</th>
										<th>Id Galpón</th>
										<th>Opciones</th>
									</thead>
								@foreach($baterias as $bateria)
									@if($bateria->visible == '1')
									<tr>
										<td>{{ $bateria->id }}</td>
										<td>{{ $bateria->capacidad }}</td>
										<td>{{ $bateria->idGalpon }}</td>
										<td>
											<a href="{{URL::action('BateriaController@edit',$bateria->id)}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
											<a href="" data-target="#modal-delete-{{$bateria->id}}" data-toggle="modal"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
										</td>
									</tr>
									@endif
									@include('infraestructura.bateria.modal')
								@endforeach
								</table>
							</div>
							{{$baterias->render()}}
						</div>
					</div>
				@else
					@if(count($inf) == 0)
						<div class="box-header">
							<h3 align="center"><b>Aun no tiene ningún Galpón...</b></h3>
						</div>
						<div class="box-body">
							<br>
							<p align="center">Bienvenido a la seccion de Baterías, para agregar una nueva Batería,</p>
							<p align="center">es necesario que cree al menos una Infraestructura de tipo Galpón</p>
							<p align="center">haga click en el icono de más.</p>
							<br>
							<div class="col-md-6 col-sm-offset-3">
								<a href="{{ url('infraestructura/infraestructura/create') }}" type="button" class="btn btn-danger btn-block">
									<i class="fa fa-plus"></i>
								</a>
							</div>
						</div>
					@elseif(count($baterias) == 0)
					<div class="box-header">
						<h3 align="center"><b>Aun no tiene ninguna Batería...</b></h3>
					</div>
					<div class="box-body">
						<br>
						<p align="center">Bienvenido a la seccion de Baterías, para agregar una nueva Batería, haga click en icono de más.</p>
						<br>
						<div class="col-md-6 col-sm-offset-3">
							<a href="{{ url('infraestructura/bateria/create') }}" type="button" class="btn btn-danger btn-block">
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