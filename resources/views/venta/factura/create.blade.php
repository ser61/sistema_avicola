@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>V E N  T A</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">create</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
        <!-- TITULO DE PANEL -->
        <div class="box-header with-border">
          <h3 align="center">Panel de control de  <span class="text-bold">Venta de Factura</span></h3>

          <div class="panel-body">
          {!!Form::open(array('url'=>'venta/factura','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
			    <div class="row">
			        


			        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			            <div class="form-group">
			                <label>NIT</label>
			                <input id="nit" type="text" name="nit" class="form-control">
			            </div>
			        </div>

			        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			            <div class="form-group">
			                <label>Nombre</label>
			                <input type="text" id="nombre" name="nombre" class="form-control">
			            </div>
			        </div>

			    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    		<div class="form-group">
			    			<label>Cliente</label>
			    			<select name="idCliente" class="form-control">
			    				@foreach ($cliente as $cli)
			    				   <option value="{{$cli -> id}}">{{$cli -> nombre}}</option>	 
			    				@endforeach
			    			</select>
			    		</div>
			    	</div>

			    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    		<div class="form-group">
			    			<label>Empleado</label>
			    			<select name="idEmpleado" class="form-control">
			    				@foreach ($empleado as $emp)
			    				   <option value="{{$emp -> id}}">{{$emp -> nombre}}</option>	 
			    				@endforeach
			    			</select>
			    		</div>
			    	</div>


			        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			            <div class="form-group">
			                <label>Monto Total</label>
			                <input readonly id="montoTotal" type="text" name="montoTotal" class="form-control">
			            </div>
			        </div>

			    </div>      

			    <div class="container">
			    <div class="row">
			        <div class="panel panel-info">
			        <div class="panel-heading">Detalle</div>
			            <div class="panel-body">

			                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			                    <div class="form-group">
			                        <label>Productos</label>
			                        <select name="pidProd" class="form-control" id="pidProd"  data-size="6">
			                            @foreach($producto as $pro)
			                            <option value="{{$pro -> id}}_{{$pro -> precioUnitario}}">{{$pro -> nombre}}</option>
			                            @endforeach
			                            
			                        </select>
			                    </div>
			                </div>

			                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			                    <div class="form-group">
			                        <label for="cant">Cantidad</label>
			                        <input type="text" name="pcant" id="pcant" class="form-control">    
			                    </div>
			                </div>
			                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			                    <div class="form-group">
			                        <label for="precio">Precio</label>
			                        <input readonly type="text" name="pprecio" id="pprecio" class="form-control">
			                    </div>
			                </div>

			                <div >
			                    <div class="form-group">
			                      <button type="button" id="bt_add" class="btn btn-primary">Agregar</button>  
			                    </div>
			                </div>
			                <br>
			                <div class="row">
								<div class="container">
									<div class="table-responsive">
			                    		<table id="carrito" class="table table-striped table-bordered table-condensed table-hover">
			                        <thead style="background-color: #A9D0F5">
			                            <th>Opciones</th>
			                            <th>Nombre</th>
			                            <th>Cantidad</th>
			                            <th>Precio</th>
			                            <th>Sub Total</th>
			                        </thead>
			                        <tfoot>
			                            <th>TOTALES</th>
			                            <th></th>               
			                            <th></th>                                               
			                            <th></th>
			                            <th><h4 id="total_precio">Bs/. 0.00</h4><input type="hidden" name="total_precio" id="total_precio"></th>
			                        </tfoot>
		                    			</table>
			    		            </div>
								</div>			
				            </div> 
			            </div> 
			        </div>

			        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
			           <div class="form-group">
			                <button class="btn btn-primary" type="submit">Guardar</button>
			                <button class="btn btn-danger" type="reset">Cancelar</button>
			            </div> 
			        </div>
			            
			    </div>
        		</div>

		</div>
			{!!Form::close()!!}



        </div>


        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        
      </div>
      </div>
    </div>
    <br>
  </section>

@push('scripts')
<script>
function comenzar(){
	$('#bt_add').click(function(){
            agregar();
            limpiar();
            
        });
}

    var cont = 0;
    total_precio = 0;
    subtotal=[];


    //$(document).ready(function(){
        //mostrarValores();
        //$('#bt_add').click(function(){
            //agregar();
            //limpiar();
            
        //});
    //});

    function comenzar(){
      mostrarValores();
      $('#bt_add').click(function(){
        agregar();
        limpiar();

      });
    }


    $("#pidProd").change(mostrarValores);
   
    
    function mostrarValores(){
    	datosProductos = document.getElementById('pidProd').value.split('_');
        $("#pprecio").val(datosProductos[1]);
    }

    function agregar(){
        pidProd1 = datosProductos[0];
        nombre = $("#pidProd option:selected").text();
        cant = $("#pcant").val();
        pprecio = $("#pprecio").val();
        subtotal[cont] = (cant * pprecio);
        total_precio = total_precio + subtotal[cont];
      
        var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type = "hidden" name = "pidProd1[]" value = "'+pidProd1+'" >'+nombre+'</td><td><input  type = "hidden" name = "cant[]" value = "'+cant+'" > '+cant+' </td><td><input  type = "hidden" name = "pprecio[]" value = "'+pprecio+'" >'+pprecio+'</td><td><input  type = "hidden" name = "subtotal[]" value = "'+subtotal[cont]+'" >'+subtotal[cont]+'</td></tr>';
        cont++;
   
   		$("#total_precio").html("Bs. " + total_precio);
        $('#carrito').append(fila);
        $("#montoTotal").val(total_precio);

        
    }

    function limpiar(){
        $("#pcant").val("");
    }

    function eliminar(index){
        $("#fila" + index).remove();
    }


window.addEventListener("load",comenzar, false);

    window.addEventListener("load",comenzar, false);

</script>
@endpush
@endsection