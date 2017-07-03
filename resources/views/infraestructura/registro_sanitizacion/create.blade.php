@extends ('layouts.fondo')
@section ('content')
<section class="content-header" xmlns:background-color="http://www.w3.org/1999/xhtml"
         xmlns:background-color="http://www.w3.org/1999/xhtml" xmlns:background-color="http://www.w3.org/1999/xhtml"
         xmlns:background-color="http://www.w3.org/1999/xhtml" xmlns:background-color="http://www.w3.org/1999/xhtml"
         xmlns:background-color="http://www.w3.org/1999/xhtml">
	<h1 align="center">
		<b>I N F R A E S T R U C T U R A</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{url('infraestructura/proceso_sanitario')}}">index</a></li>
		<li><a href="#">Crear</a></li>
	</ol>
</section>
<br>

<section class="content">
	<div class="row">
		<div class="col-sm-12 col-xs-12">

			<div class="box box-primary">

				<!-- TITULO DEL PANEL-->
				<div class="box-header with-border">
					<h3 align="center">Panel de Registro de un <span class="text-bold">Proceso Sanitario</span></h3>
				</div>

				<div class="box-body">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<h3>Nuevo Proceso Sanitario</h3>
					</div>
				</div>

		{!! Form::open(array('url'=>'infraestructura/registro_sanitizacion','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}

				<div class="row">
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label>Empleado Encargado:</label>
							<select name="idEmpleado" id="idEmpleado" class="form-control selectpicker" data-live-search="true">
								@foreach($empleados as $empleado)
									<option value="{{$empleado->id}}">{{$empleado->id}} {{$empleado->nombre}} {{$empleado->apellido}}</option>
								@endforeach
							</select>
						</div>
					</div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Infraestructura a Realizar Proceso Sanitario:</label>
                            <select name="idInfraestructura" id="idInfraestructura" class="form-control selectpicker" data-live-search="true">
                                @foreach($infraestructuras as $inf)
                                    <option value="{{$inf->id}}">Id:{{$inf->id}} Tipo: {{$inf->tipo}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

				</div>
                    <br>

				<div class="row">
					<div class="panel panel-primary">
						<div class="panel-body">
							<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
								<div class="form-group">
									<label>Procesos</label>
									<select name="pidarticulo" id="pidarticulo" class="form-control selectpicker" data-live-search="true">
										@foreach($procesos as $proceso)
											<option value="{{$proceso->id}}_{{$proceso->nombre}}_{{$proceso->descripcion}}">{{$proceso->nombre}} Descipcion: {{$proceso->descripcion}}</option>
										@endforeach
									</select>
								</div>
							</div>

                            <br>
							<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
								<div class="form-group">
									<button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
								</div>
							</div>

							<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
								<div class="table-responsive">
									<table id="detalles" class="table table-striped table-bordered table-condensed table-hover>
									<thead style="background-color: #A9D0F5">
									<th>Opciones</th>
									<th>ID Proceso</th>
                                    <th>Nombre</th>
									<th>Descripción</th>
									</thead>

									<tbody>
									</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
						<div class="form-group">
							<input name="_token" value="{{ csrf_token() }}" type="hidden"></input>
							<button class="btn btn-primary" type="submit">Guardar</button>
							<button class="btn btn-danger" type="reset">Cancelar</button>
						</div>
					</div>
				</div>

				{!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</section>

@push ('scripts')
<script>
    function comenzar(){
        $('#bt_add').click(function(){
            agregar();
            limpiar();

        });
    }
    /*$(document).ready(function(){
        $('#bt_add').click(function(){
            alert("dsps de agregar!");
            agregar();

        });
    });*/

    var cont = 0;
    total = 0;
    $("#guardar").hide();
    function agregar(){
        datosArticulos = document.getElementById('pidarticulo').value.split('_');
        idarticulo=datosArticulos[0];
        //articulo=$("#pidarticulo option:selected").text();
        nombre=datosArticulos[1];
        descripcion=datosArticulos[2];

        if (idarticulo!="") {
            total++;
            var fila = '<tr class="selected" id="fila' + cont + '"><td><button type="button" class="btn btn-warning" onclick="eliminar(' + cont + ');">X</button></td><td><input type="hidden" name="idarticulo[]" value="' + idarticulo + '">' + idarticulo + '</td><td>'+nombre+'</td><td>'+descripcion+'</td></tr>';
            cont++;
            evaluar();
            $("#detalles").append(fila);
        }else{
            alert("Error al ingresar el detalle del Proceso Sanitario, revise los datos.");
        }
    }

    function evaluar(){
        if (total>0) {
            $("#guardar").show();
        }else{
            $("#guardar").hide();
        }
    }

    function eliminar(index){
        total--;
        $("#fila" + index).remove();
        evaluar();
    }
    window.addEventListener("load",comenzar, false);
</script>
@endpush

@endsection