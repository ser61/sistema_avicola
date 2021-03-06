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
					<h3 align="center">Panel de control de los <span class="text-bold">Equipos</span></h3>
            </div>
			@include('alertas.logrado')
			@include('alertas.request')
            @if(count($equipos) > 0 && count($inf) > 0)
            @include('infraestructura.equipo.searchT')

			<!-- TABLA DE DATOS -->
				<div class="box-body">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-condensed table-hover">
                                    <thead>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Capacidad</th>
                                        <th>Tipo</th>
                                        <th>Id Planta Incubación</th>
                                        <th>Opciones</th>
                                    </thead>
                                @foreach($equipos as $equipo)
                                    @if($equipo->visible == '1')
                                    <tr>
                                        <td>{{ $equipo->id }}</td>
                                        <td>{{ $equipo->nombre }}</td>
                                        <td>{{ $equipo->capacidad }}</td>
                                        <td>{{ $equipo->tipo }}</td>
                                        <td>{{ $equipo->idPlantaIncubacion }}</td>
                                        <td>
                                            <a href="{{URL::action('EquipoController@edit',$equipo->id)}}"><button class="btn btn-primary">Editar</button></a>
                                            <a href="" data-target="#modal-delete-{{$equipo->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                                        </td>
                                    </tr>
                                    @endif
                                    @include('infraestructura.equipo.modal')
                                @endforeach
                                </table>
                            </div>
                            {{$equipos->render()}}
                        </div>
                    </div>
                    @else
                        @if(count($inf) == 0)
                            <div class="box-header">
                                <h3 align="center"><b>Aun no tiene ningúna Planta de Incubación...</b></h3>
                            </div>
                            <div class="box-body">
                                <br>
                                <p align="center">Bienvenido a la seccion de Equipos, para agregar un nuevo Equipo,</p>
                                <p align="center">es necesario que cree al menos una Infraestructura de tipo Planta de Incubación</p>
                                <p align="center">haga click en el icono de más.</p>
                                <br>
                                <div class="col-md-6 col-sm-offset-3">
                                    <a href="{{ url('infraestructura/infraestructura/create') }}" type="button" class="btn btn-danger btn-block">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        @elseif(count($equipos) == 0)
                            <div class="box-header">
                                <h3 align="center"><b>Aun no tiene ninguna Equipo...</b></h3>
                            </div>
                            <div class="box-body">
                                <br>
                                <p align="center">Bienvenido a la seccion de Equipos, para agregar una nuevo Equipo, haga click en icono de más.</p>
                                <br>
                                <div class="col-md-6 col-sm-offset-3">
                                    <a href="{{ url('infraestructura/equipo/create') }}" type="button" class="btn btn-danger btn-block">
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