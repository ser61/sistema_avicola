{!! Form::open(array('url'=>'reportes/reporte_diario','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

<div class="panel panel-blue">
	<div class="panel-body">
		<div class="input-group margin">
			<input type="text" class="form-control" name="searchText" placeholder="Buscar por ID de Registro..." values="{{$searchText}}">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-info btn-flat" id="mos" value="mos">
	                  <i class="fa fa-search"></i>
                  </button> </span>
			</span>
                <span class="input-group-btn">
                  <a href="reporte_diario/create" class="btn btn-danger btn-flat">
	                  <i class="fa fa-plus"></i>
                  </a>
                </span>


		</div>
	</div>
</div>


{{Form::close()}}

<!--{!! Form::open(array('url'=>'reportes/reporte_diario','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
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

{{Form::close()}}-->
