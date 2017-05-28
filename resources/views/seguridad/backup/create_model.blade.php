<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <div class="box box-primary">
        {!! Form::open(['route' => 'backup.create','method' => 'POST']) !!}
          <div class="box-header with-border">
            <h3 align="center">Nuevo <span class="text-bold">Backup</span></h3>
          </div>

          <div class="box-body">
            <div class="form-group">
              <label for="nombre">Nombre o describción del Backup:</label>
              {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre o descripción aqui...','id'=>'nombre']) !!}
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary pull-right">
              Crear BackUp <i class="fa fa-arrow-circle-right"></i>
            </button>
          </div>
        {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>