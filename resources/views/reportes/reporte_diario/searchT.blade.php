

{!! Form::open(array('url'=>'reportes/reporte_diario','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="panel panel-blue">
	<div class="panel-body">
		@include('alertas.logrado')
		@include('alertas.request')
		<div class="input-group margin">
			<input type="text" class="form-control" value="{{$searchText}}" placeholder="Buscar por Registro Diario">
              <span class="input-group-btn">
                <button type="button" class="btn btn-info btn-flat">
	                <i class="fa fa-search"></i>
                </button>
                <a href="reporte_diario/create">
	                <button type="button" class="btn btn-danger btn-flat">
		                <i class="fa fa-plus"></i>
	                </button>
                </a>
              </span>
		</div>
	</div>
</div>

{{Form::close()}}
