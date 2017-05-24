{!! Form::open(array('url'=>'infraestuctura/proceso_sanitario','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">

		<input type="text" class="form-control" name="searchText" placeholder="Buscar.." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default"
			data-toggle="tooltip" data-placement="top" title="Busca un proceso sanitario por su nombre o número.">Buscar</button>
		</span>

	</div>
</div>

{{Form::close()}}