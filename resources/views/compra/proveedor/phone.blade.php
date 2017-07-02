<div class="modal fade bs-example-modal-sm" tabindex="-1" id="phones{{$proveedor->id}}" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Telefonos de {{$proveedor->nombre}}</h4>
      </div>
      <div class="modal-body">
        @forelse( $telefonos as $telefono)
          @if( $telefono->idPersona == $proveedor->id )
            <p align="center">{{$telefono->numero}}</p>
          @endif
        @empty
          <p align="center">{{ $proveedor->nombre }} no tiene telefonos...</p>
        @endforelse
      </div>
    </div>
  </div>
</div>