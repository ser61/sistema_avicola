<div class="modal fade" id="create_producto" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="box box-primary">

        <div class="box-header with-border">
          <h3 align="center">Panel de Registro de <span class="text-bold">Producto Sanitario</span></h3>
        </div>

        <div class="box-body">

          <div class="form-group">
            <label for="nombre">Nombre de Insumo:</label>
            {!! Form::text('nombreS',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del cargo aqui...','id'=>'nombreS']) !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" name="tipoIS" value="3" id="tipoIS">
          </div>

          <div class="form-group">
            <label for="precio">Precio:</label>
            {!! Form::number('precioS','0.00',['class'=>'form-control', 'step'=>'any','placeholder'=>'Ingresa precio aqui...','id'=>'precioS']) !!}
          </div>

          <div class="form-group">
            <label for="cantidadTotal">Cantidad:</label>
            {!! Form::number('cantidadTotalS',null,['class'=>'form-control','placeholder'=>'Ingresa cantidad aqui...','id'=>'cantidadTotalS']) !!}
          </div>

          <div class="form-group">
            <label for="marca">Marca de Insumo:</label>
            {!! Form::text('marcaS',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la marca aqui...','id'=>'marcaS']) !!}
          </div>

          <div class="form-group">
            <label for="tipo">Seleccione tipo de Producto Sanitario:</label>
            {!! Form::select('tipoS',['Bactericida'=>'Bactericida', 'Legia'=>'Legia', 'Desinfectante'=>'Desinfectante', 'Tableta'=>'Tableta'],
             null, ['class'=>'form-control select2', 'id' => 'tipoS', 'placeholder'=>'Seleccion tipo...']) !!}
          </div>

          <div class="form-group">
            <label for="descripcion">Escriba una breve descriptión:</label>
            <textarea name="descripcionS" id="descripcionS" class="form-control" rows="3" placeholder="Escriba aqui..."></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary pull-right" id="btnSanitario" data-dismiss="modal">
            Agregar Producto Sanitario <i class="fa fa-arrow-circle-right"></i>
          </button>
        </div>

      </div>

    </div>
  </div>
</div>
