@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
  <!-- start: TOOLBAR -->
  <div class="toolbar row">
    <div class="page-header">
      <h1 style="text-align: center;">* * * P R O C E S O * * *
        <small> Sección de Produccion Alimento </small>
      </h1>
    </div>
  </div>
  <!-- end: TOOLBAR -->
  <!-- end: PAGE HEADER -->

  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="panel panel-white">

        <div class="panel-heading">
          <h2 class="panel-title center">Panel de Registro de las <span class="text-bold">Produccion Alimento</span></h2>
          <div class="panel-tools">
            <div class="dropdown">
              <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                <i class="fa fa-cog"></i>
              </a>
              <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                <li>
                  <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                </li>
                <li>
                  <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

<div class="panel-body">
          @include('alertas.request')
          {!!Form::open(array('url'=>'proceso/ordenproduccion','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

<div class="row">
	<div class="col-lg-12 col-md-6 col-dm-12 col-xs-12">
		<div class="form-group">
				  <label for="nombre">Nombre del Alimento</label>
	             <input type="text" name="cantidadpollos"  class="form-control" placeholder="Nombre...">
			</div>
	</div>

	<div class="col-lg-12 col-md-6 col-dm-12 col-xs-12">
		<div class="form-group">
				  <label for="nombre">Cantidad Requerida del Alimento</label>
	             <input type="number" name="cantidadpollos"  class="form-control" placeholder="Cantidad Requerida...">
			</div>
	</div>

</div>

<div class="row">
<div class="panel panel-primary">
<div class="panel-body">
	
<div class="col-lg-6 col-md-6 col-dm-12 col-xs-12">
	<div class="form-group">	
		<label>Materia Prima (Composicion del Alimento)</label>
		<select name="pidinsumo" id="pidinsumo" class="form-control">
			<option></option>
			@foreach($insumos as $ins)
				<option value="{{$ins->id}}">{{$ins->nombre}}</option>
			@endforeach
		</select>
	</div>
</div>	

<div class="col-lg-6 col-md-6 col-dm-12 col-xs-12">
	<div class="form-group">
	<label for="cantidad">Cantidad de la Materia Prima Kg. (Composicion)</label>
	<input type="number" name="ppeso" id="ppeso" class="form-control" placeholder="Cantidad...">
	</div>
</div>


	
	<div class="col-lg-2 col-md-2 col-dm-12 col-xs-12">
		<div class="form-group">
		<button class="btn btn-primary" type="button"  id="bt_add" >Agregar</button>
		</div>
	</div>

		<div class="col-lg-12 col-md-12 col-dm-12 col-xs-12">
			  <div class="table-responsive">
			<table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color:#caf5a9">
				<th>Opcciones</th>
				<th>Materia Prima</th>
				<th>Cantidad de Materia Prima Kg.</th>
			</thead>
				<tfoot>
					<th>Composicion del Alimento</th>
					<th></th>
					<th></th>
				</tfoot>
			<tbody></tbody>
			</table>
			</div>
		</div>
	</div>
	</div>
</div>		

	<div class="col-sm-8 col-sm-offset-2" id="guardar">
          <div class="form-group">
            <input name="_token" value="{{ csrf_token() }}" type="hidden"></input>
              
              <button class="btn btn-blue btn-block" type="submit">
                Registrar Orden <i class="fa fa-arrow-circle-right"></i>
              </button>
             
            </div>
    </div>
          {!! Form::close() !!}



        </div>
      </div>
    </div>
  </div>

@push ('scripts')
		<script>

		$(document).ready(function(){
			$('#bt_add').click(function(){
				agregar();
			});
		});	

		var cont=0;
		$("#guardar").hide();
function agregar()
		{
			idalimento=$("#pidalimento").val();
			alimento=$("#pidalimento option:selected").text();
			peso=$("#ppeso").val();
			
		if (idalimento!="" && peso!="" && peso>0)
		{
		var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idalimento[]" value="'+idalimento+'">'+alimento+'</td><td><input type="number" name="peso[]" value="'+peso+'"></td></tr>';
		cont++;
		limpiar();
		evaluar();
		  $('#detalles').append(fila);
		
		}
	else
	{
		alert("Error al ingresar el detalle ");
	}
		}
function limpiar()
			 {
			    $("#pidalimento").val("");
				$("#ppeso").val("");
			 }
function evaluar()
	{
		if(cont>0)
		{
			$("#guardar").show();
		}
		else
		{
			$("#guardar").hide();
		}	
	}
function eliminar(index)
	{
		$('#fila'+index).remove();
		evaluar();
	}
</script>
@endpush
@endsection

