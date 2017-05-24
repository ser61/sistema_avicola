{!! Form::open(array('url'=>'reportes/reporte_diario','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

<div class="form-group">
	<div class="input-group">
		
		<input type="text" class="form-control" name="searchText" placeholder="Buscar.." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default">Buscar</button>
		</span>
	
	</div>
</div>

{{Form::close()}}

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover style="border-top-color: #00AEFF"">
				<thead>
				<tr>
					<th class="center">Nro</th>
					<th>Fecha</th>
					<th>Mortalidad</th>
					<th>Cantidad Huevos</th>
					<th>Peso Promedio</th>
					<th>Observaciones</th>
					<th>Cantidad Agua</th>
					<th>Etapa</th>
					<th>Id Parvada</th>
					<th>Cantidad Pollos(Parvada)</th>
					<th>Empleado</th>
					<th>Opciones</th>
				</tr>
				</thead>
				@foreach($reportes as $rep)
				@if($rep->visible == '1')
				<tr>
					<td>{{ $rep->id }}</td>
					<td>{{ $rep->fecha }}</td>
					<td>{{ $rep->mortalidad }}</td>
					<td>{{ $rep->cantidadHuevos }}</td>
					<td>{{ $rep->pesoPromedio }}</td>
					<td>{{ $rep->observaciones }}</td>
					<td>{{ $rep->cantidadAgua }}</td>
					<td>{{ $rep->etapa }}</td>
					<td>{{ $rep->idParvada }}</td>
					<td>{{ $rep->cantidadPollos }}</td>
					<td>{{ $rep->idEmpleado }} {{ $rep->nombre }} {{ $rep->apellido }}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$rep->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@endif
				@include('reportes.reporte_diario.modal')
				@endforeach
			</table>
		</div>
		{{$reportes->render()}}
	</div>
</div>