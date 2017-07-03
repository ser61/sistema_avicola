<div class="modal fade" id="create_medicina" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="box box-primary">

        <div class="box-header with-border">
          <h3 align="center">Panel de Registro de <span class="text-bold">Medicamentos</span></h3>
        </div>

        <div class="box-body">

          <div class="form-group">
            <label for="nombre">Nombre de Insumo:</label>
            {!! Form::text('nombreM',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del cargo aqui...','id'=>'nombreM']) !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" name="tipoIM" value="2" id="tipoIM">
          </div>

          <div class="form-group">
            <label for="precio">Precio:</label>
            {!! Form::number('precioM','0.00',['class'=>'form-control', 'step'=>'any','placeholder'=>'Ingresa precio aqui...','id'=>'precioM']) !!}
          </div>

          <div class="form-group">
            <label for="cantidadTotal">Cantidad:</label>
            {!! Form::number('cantidadTotalM',null,['class'=>'form-control','placeholder'=>'Ingresa cantidad aqui...','id'=>'cantidadTotalM']) !!}
          </div>

          <div class="form-group">
            <label for="marca">Marca de Insumo:</label>
            {!! Form::text('marcaM',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la marca aqui...','id'=>'marcaM']) !!}
          </div>

          <div class="form-group">
            <label for="tipo">Seleccione tipo de medicamento:</label>
            {!! Form::select('tipoM',['Inyectable'=>'Inyectable', 'Crema'=>'Crema', 'Rociable'=>'Rociable', 'Tableta'=>'Tableta'],
             null, ['class'=>'form-control select2', 'id' => 'tipoM', 'placeholder'=>'Seleccion tipo...']) !!}
          </div>

          <div class="form-group">
            <label for="descripcion">Escriba una breve descriptión:</label>
            <textarea name="descripcionM" id="descripcionM" class="form-control" rows="3" placeholder="Escriba aqui..."></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary pull-right" id="btnMedicamento" data-dismiss="modal">
            Agregar Medicamento <i class="fa fa-arrow-circle-right"></i>
          </button>
        </div>

      </div>

    </div>
  </div>
</div>
