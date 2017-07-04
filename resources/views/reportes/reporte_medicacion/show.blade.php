@extends ('layouts.fondo')
@section ('content')

<section class="content-header">
	<h1 align="center">
		<b>R E P O R T E S &ensp;D E  M E D I C A C I Ó N</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{url('/cargo')}}">index</a></li>
		<li><a href="#">Reporte Medicación</a></li>
	</ol>
</section>
<br>

<section class="content">
	<div class="box box-primary">
		<!-- TITULO DE PANEL -->
		<div class="box-header with-border">
			<h3 align="center">Panel de Registro de <span class="text-bold">Reporte Medicación</span></h3>
		</div>


        <div class="box-body" style="border: #ffffff">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3>Detalle de Reporte Medicación: </h3>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label>Empleado que realizó el Registro:</label>
                        <p> {{ $empleado->id }} {{$empleado->nombre}} {{$empleado->apellido}}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label>Parvada:</label>
                        <p> {{ $parvada->id }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label>Lote de Huevo Incubable:</label>
                        <p> {{ $lote->id }}</p>
                    </div>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-body">

                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="table-responsive">
                                <table id="detalles" class="table table-striped table-bordered table-condensed table-hover>
										<thead style="background-color: #A9D0F5">
                                <th>Medicamento</th>
                                <th>Dosis</th>
                                <th>Vía Aplicación</th>
                                <th>Cantidad</th>
                                </thead>
                                <tbody>
                                @foreach($detalles as $detalle)
                                    <tr>
                                        <td>{{ $detalle->nombre }}</td>
                                        <td>{{ $detalle->dosis }}</td>
                                        <td>{{ $detalle->viaDeAplicacion }}</td>
                                        <td>{{ $detalle->cantidad }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
                    <div class="form-group">
                        <a href="{{ url('reportes/reporte_medicacion') }}">
                            <button class="btn btn-primary" type="">Volver</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection