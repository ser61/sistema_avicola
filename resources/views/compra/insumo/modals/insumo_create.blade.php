<div class="modal fade" id="create" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="box box-primary">

        <div class="box-header with-border">
          <h3 align="center">Panel de Registro de <span class="text-bold">Insumo</span></h3>
        </div>

        {!! Form::open(['route' => 'insumo.store','method' => 'POST']) !!}
        <div class="box-body">

          <div class="form-group">
            <label for="nombre">Nombre de Insumo:</label>
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del cargo aqui...','id'=>'nombre']) !!}
          </div>

          <div class="form-group">
            <label for="insumo">Seleccione el tipo de Insumo:</label>
            {!! Form::select('tipoInsumo',['1'=>'Materia prima', '2'=>'Medicamento', '3'=>'Producto Sanitario'],
             null, ['class'=>'form-control select2', 'id' => 'insumo', 'placeholder'=>'Seleccion tipo...']) !!}
          </div>

          <div class="form-group" id="insumoBody" style="display: none">

          </div>

          <div class="form-group">
            <label for="descripcion">Escriba una breve descriptión:</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" placeholder="Escriba aqui..."></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary pull-right">
            Registrar Insumo <i class="fa fa-arrow-circle-right"></i>
          </button>
        </div>

        {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>
