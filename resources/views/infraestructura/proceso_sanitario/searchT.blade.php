{!! Form::open(array('url'=>'infraestructura/proceso_sanitario','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

<div class="panel panel-blue">
	<div class="panel-body">
		<div class="input-group margin">
			<input type="text" class="form-control" name="searchText" placeholder="Buscar por ID de proceso..." values="{{$searchText}}">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-info btn-flat" id="mos" value="mos">
	                  <i class="fa fa-search"></i>
                  </button> </span>
			</span>
                <span class="input-group-btn">
                  <a href="proceso_sanitario/create" class="btn btn-danger btn-flat">
	                  <i class="fa fa-plus"></i>
                  </a>
                </span>


		</div>
	</div>
</div>


{{Form::close()}}