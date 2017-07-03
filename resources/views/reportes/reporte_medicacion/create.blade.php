@extends ('layouts.fondo')
@section ('content')
<section class="content-header" xmlns:background-color="http://www.w3.org/1999/xhtml"
         xmlns:background-color="http://www.w3.org/1999/xhtml" xmlns:background-color="http://www.w3.org/1999/xhtml"
         xmlns:background-color="http://www.w3.org/1999/xhtml" xmlns:background-color="http://www.w3.org/1999/xhtml"
         xmlns:background-color="http://www.w3.org/1999/xhtml">
	<h1 align="center">
		<b>R E P O R T E S &ensp;D E  M E D I C A C I Ó N</b>
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
					<h3 align="center">Panel de Registro de un <span class="text-bold">Reporte  de Medicación</span></h3>
				</div>

				<div class="box-body">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<h3>Nuevo Registro Medicación</h3>
					</div>
				</div>

		{!! Form::open(array('url'=>'reportes/reporte_medicacion','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}

				<div class="row">
					<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
						<div class="form-group">
							<label>Empleado:</label>
							<select name="idEmpleado" id="idEmpleado" class="form-control selectpicker" data-live-search="true">
								@foreach($empleados as $empleado)
									<option value="{{$empleado->id}}">{{$empleado->id}} {{$empleado->nombre}} {{$empleado->apellido}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
						<div class="form-group">
							<label>Parvadas</label>
							<select name="idParvada" class="form-control selectpicker" data-live-search="true">
								@foreach($parvadas as $parvada)
									<option value="{{ $parvada->id }}">{{ $parvada->id }} {{ $parvada->tipo}} {{ $parvada->created_at }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
						<div class="form-group">
							<label>Lote de Huevo Incubable:</label>
							<select name="idLote" id="idLote" class="form-control selectpicker" data-live-search="true">
								@foreach($lote_huevo_incubables as $lote)
									<option value="{{$lote->id}}">{{$lote->id}} {{$lote->cantidad}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
                    <br>

					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-body">
								<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
									<div class="form-group">
										<label>Medicamentos:</label>
										<select name="pidarticulo" id="pidarticulo" class="form-control selectpicker" data-live-search="true">
											@foreach($articulos as $articulo)
												<option value="{{$articulo->id}}_{{$articulo->cantidadTotal}}">{{$articulo->nombre}}</option>
											@endforeach
										</select>
									</div>
								</div>
                                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                                    <div class="form-group">
                                        <label for="dosis">Dosis</label>
                                        <input type="number" name="pdosis" id="pdosis" class="form-control" placeholder="Dosis (ml)">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                    <div class="form-group">
                                        <label for="aplicacion">Vía aplicación</label>
                                        <input type="text" name="paplicacion" id="paplicacion" class="form-control" placeholder="Vía aplicación">
                                    </div>
                                </div>
								<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
									<div class="form-group">
										<label for="cantidad">Cantidad</label>
										<input type="number" name="pcantidad" id="pcantidad" class="form-control" placeholder="Cantidad">
									</div>
								</div>
								<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
									<div class="form-group">
										<label for="stock">Stock</label>
										<input type="number" disabled name="pstock" id="pstock" class="form-control" placeholder="Stock">
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
										<th>Medicamento</th>
                                        <th>Dosis</th>
                                        <th>Vía Aplicación</th>
										<th>Cantidad</th>
										</thead>
										<tfoot>
										<th>TOTAL</th>
										<th></th>
                                        <th></th>
                                        <th></th>
										<th><h4 id="total">Cantidad Total: </h4></th>
										</tfoot>
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
    var cont = 0;
    total = 0;
    subtotal=[];//Sirve para capturar todos los subtotales de cada una de las líneas de los detalles
    $("#guardar").hide();
    $("#pidarticulo").change(mostrarValores);
    function mostrarValores(){
        datosArticulos = document.getElementById('pidarticulo').value.split('_');
        $("#pstock").val(datosArticulos[1]);
    }
    function agregar(){
        datosArticulos = document.getElementById('pidarticulo').value.split('_');
        idarticulo=datosArticulos[0];
        articulo=$("#pidarticulo option:selected").text();
        cantidad=$("#pcantidad").val();
        stock=$("#pstock").val();
        dosis=$("#pdosis").val();
        aplicacion=$("#paplicacion").val();

        if (idarticulo!="" && cantidad!="" && cantidad>0) {
            stock = stock*1;
            if(stock >=cantidad) {

                subtotal[cont] = (cantidad * 1);
                total = total + subtotal[cont];



                var fila = '<tr class="selected" id="fila' + cont + '">' +
                    '<td><button type="button" class="btn btn-warning" onclick="eliminar(' + cont + ');">X</button></td>' +
                    '<td><input type="hidden" name="idarticulo[]" value="' + idarticulo + '">' + articulo + '</td>' +
                    '<td><input type="number" name="dosis[]" value="' + dosis + '"></td>' +
                    '<td><input type="text" name="aplicacion[]" value="' + aplicacion + '"></td>' +
                    '<td><input type="number" name="cantidad[]" value="' + cantidad + '"></td></tr>';
                cont++;
                limpiar();
                $("#total").html("Cantidad total: " + total);
                evaluar();
                $("#detalles").append(fila);
            } else {
                alert("La cantidad supera el stock actual del insumo. Se recomienda comprar más insumos para continuar.")
            }
        }else{
            alert("Error al ingresar el detalle del producto, revise los datos del insumo.");
        }
    }

    //Jquery toma los id para identificar
    function limpiar(){
        $("#pcantidad").val("");
    }

    function evaluar(){
        if (total>0) {
            $("#guardar").show();
        }else{
            $("#guardar").hide();
        }
    }

    function eliminar(index){
        total = total - subtotal[index];
        $("#total").html("Cantidad total: "+total);
        $("#fila" + index).remove();
        evaluar();
    }
    window.addEventListener("load",comenzar, false);

    window.addEventListener("load",comenzar, false);
</script>
@endpush

@endsection