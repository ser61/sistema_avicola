<div class="modal fade bs-example-modal-sm" tabindex="-1" id="quitar" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Descontar Insumo</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="cantidad">Cantidad:</label>
          {!! Form::number('cantidad',null,['class'=>'form-control','placeholder'=>'Ingresa cantidad aqui...','id'=>'cantidad']) !!}
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
          <input type="hidden" name="id" id="id">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary pull-right" id="descontar" data-dismiss="modal">
          Descontar <i class="fa fa-arrow-circle-right"></i>
        </button>
      </div>
    </div>
  </div>
</div>