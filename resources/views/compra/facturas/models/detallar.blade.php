<div class="modal fade" id="detallar" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="box box-primary">

        <div class="box-header with-border">
          <h3 align="center">Panel de Edicion de <span class="text-bold">Insumo</span></h3>
        </div>

        <div class="box-body">

          <div class="form-group">
            <label for="nombre">Nombre de Insumo:</label>
            {!! Form::text('nombreG',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del cargo aqui...','id'=>'nombreG']) !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" name="tipoIM" id="tipoIM">
            <input type="hidden" name="id" id="id">
          </div>

          <div class="form-group">
            <label for="precio">Precio:</label>
            {!! Form::number('precioG',null,['class'=>'form-control', 'step'=>'any','placeholder'=>'Ingresa precio aqui...','id'=>'precioG']) !!}
          </div>

          <div class="form-group">
            <label for="cantidadTotal">Cantidad:</label>
            {!! Form::number('cantidadTotalG',null,['class'=>'form-control','placeholder'=>'Ingresa cantidad aqui...','id'=>'cantidadTotalG']) !!}
          </div>

          <div class="form-group">
            <label for="marca">Marca de Insumo:</label>
            {!! Form::text('marcaG',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la marca aqui...','id'=>'marcaG']) !!}
          </div>

            <div class="form-group" id="divM" style="display: none">
              <label for="tipo">Seleccione tipo de medicamento:</label>
              {!! Form::select('tipoGM',['Inyectable'=>'Inyectable', 'Crema'=>'Crema', 'Rociable'=>'Rociable', 'Tableta'=>'Tableta'],
               null, ['class'=>'form-control select2', 'id' => 'tipoGM', 'placeholder'=>'Seleccion tipo...']) !!}
            </div>

            <div class="form-group" id="divS" style="display: none">
              <label for="tipo">Seleccione tipo de Producto Sanitario:</label>
              {!! Form::select('tipoGS',['Bactericida'=>'Bactericida', 'Legia'=>'Legia', 'Desinfectante'=>'Desinfectante', 'Tableta'=>'Tableta'],
               null, ['class'=>'form-control select2', 'id' => 'tipoGS', 'placeholder'=>'Seleccion tipo...']) !!}
            </div>

          <div class="form-group">
            <label for="descripcion">Escriba una breve descriptión:</label>
            <textarea name="descripcionG" id="descripcionG" class="form-control" rows="3" placeholder="Escriba aqui..."></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary pull-right" id="btnUpdate" data-dismiss="modal">
            Actualizar Insumo <i class="fa fa-arrow-circle-right"></i>
          </button>
        </div>

      </div>

    </div>
  </div>
</div>
