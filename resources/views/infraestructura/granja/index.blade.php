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
					<h3 align="center">Panel de control de las <span class="text-bold">Granjas</span></h3>
				</div>
				@include('alertas.logrado')
				@include('alertas.request')
				@include('infraestructura.granja.searchT')

				<!-- TABLA DE DATOS -->
				<div class="box-body">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-condensed table-hover" style="border-top-color: #00AEFF">
								<thead>
								<th>Id</th>
								<th>Ubicacion</th>
								<th>Tipo</th>
								<th>Id Empresa</th>
								<th>Opciones</th>
								</thead>
								@foreach($granjas as $granja)
								@if($granja->visible == '1')
								<tr>
									<td>{{ $granja->id }}</td>
									<td>{{ $granja->ubicacion }}</td>
									<td>{{ $granja->tipo }}</td>
									<td>{{ $granja->idEmpresa }}</td>
									<td>
										<a href="{{URL::action('GranjaController@edit',$granja->id)}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
										<a href="" data-target="#modal-delete-{{$granja->id}}" data-toggle="modal"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
									</td>
								</tr>
								@endif
								@include('infraestructura.granja.modal')
								@endforeach
							</table>
						</div>
					</div>
					{{$granjas->links()}}
				</div>
				<!-- fin-> TABLA DE DATOS -->
			</div>
		</div>
	</div>
	<br>
</section>
@endsection