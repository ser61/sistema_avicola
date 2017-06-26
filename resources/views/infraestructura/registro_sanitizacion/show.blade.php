@extends ('layouts.fondo')
@section ('content')
	<section class="content-header" xmlns:background-color="http://www.w3.org/1999/xhtml"
			 xmlns:background-color="http://www.w3.org/1999/xhtml" xmlns:background-color="http://www.w3.org/1999/xhtml">
		<h1 align="center">
			<b>I N F R A E S T R U C T U R A</b>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="{{url('infraestructura/proceso_sanitario')}}">index</a></li>
			<li><a href="#">Detalle</a></li>
		</ol>
	</section>
	<br>

	<section class="content">
		<div class="row">
			<div class="col-sm-12 col-xs-12">

				<div class="box box-primary">

					<!-- TITULO DEL PANEL-->
					<div class="box-header with-border">
						<h3 align="center">Panel de Detalle de un <span class="text-bold">Registro de Sanitización</span></h3>
					</div>

					<div class="box-body">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h3>Registro de Sanitización {{$registro->id}}</h3>
							</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h3>Fecha registrada: {{$registro->fecha}}</h3>
                            </div>
						</div>

                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>Empleado:</label>
                                    <p>{{$registro->nombre}} {{$registro->apellido}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>Infraestructura:</label>
                                    <p>{{$registro->infraestuctura}}</p>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <br>

                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover>
									<thead style="background-color: #A9D0F5">

                                            <th>ID Proceso</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            </thead>

                                            <tbody>
                                            @foreach($detalles as $det)
                                            <tr>
                                                <td>{{$det->id}}</td>
                                                <td>{{$det->nombre}}</td>
                                                <td>{{$det->descripcion}}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <a href="{{url('infraestructura/registro_sanitizacion')}}"><button class="btn btn-success">
                                                    Volver
                                                </button></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection