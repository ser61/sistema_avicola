<div class="row">
{!! Form::open(array('url'=>'infraestructura/granja','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<div class="form-group">
			<div class="input-group">

				<input type="text" class="form-control" name="searchText" placeholder="Buscar.." value="{{$searchText}}">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-default">Buscar</button>
			</span>

			</div>
		</div>
	</div>
{{Form::close()}}

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<a href="../infraestructura.pdf"><button class="btn btn-primary">Generar PDF</button></a>
	</div>
</div>