<div class="modal fade" id="create_materia" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="box box-primary">

        <div class="box-header with-border">
          <h3 align="center">Panel de Registro de <span class="text-bold">Materia Prima</span></h3>
        </div>

        <div class="box-body">

          <div class="form-group">
            <label for="nombre">Nombre de Insumo:</label>
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del cargo aqui...','id'=>'nombre']) !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" name="tipoInsumo" value="1" id="tipoInsumo">
          </div>

          <div class="form-group">
            <label for="precio">Precio:</label>
            {!! Form::number('precio','0.00',['class'=>'form-control', 'step'=>'any','placeholder'=>'Ingresa precio aqui...','id'=>'precio']) !!}
          </div>

          <div class="form-group">
            <label for="cantidadTotal">Cantidad:</label>
            {!! Form::number('cantidadTotal',null,['class'=>'form-control','placeholder'=>'Ingresa cantidad aqui...','id'=>'cantidadTotal']) !!}
          </div>

          <div class="form-group">
            <label for="marca">Marca de Insumo:</label>
            {!! Form::text('marca',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la marca aqui...','id'=>'marca']) !!}
          </div>

          <div class="form-group">
            <label for="descripcion">Escriba una breve descriptión:</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" placeholder="Escriba aqui..."></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary pull-right" id="btnMateria" data-dismiss="modal">
            Agregar Materia Prima <i class="fa fa-arrow-circle-right"></i>
          </button>
        </div>

      </div>

    </div>
  </div>
</div>
