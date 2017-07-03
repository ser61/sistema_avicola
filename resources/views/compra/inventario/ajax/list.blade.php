<div class="title col-lg-8 col-md-8 col-sm-8 col-xs-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
  <h3><b>Materia Prima:</b></h3>
  <hr size="10px" width="80%" noshade="noshade" align="left"/>
  <table class="table table-bordered" style="border-top-color: #00AEFF">
    <thead>
    <tr>
      <th class="center">ID</th>
      <th>Nombre</th>
      <th>Marca</th>
      <th>Cantidad</th>
      <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($insumosMP as $insumoMP)
      <tr>
        <td class="center">{{$insumoMP->id}}</td>
        <td>{{$insumoMP->nombre}}</td>
        <td>{{$insumoMP->marca}}</td>
        <td>{{$insumoMP->cantidadTotal}}</td>
        <td>
          <a type="button" class="btn btn-warning" onclick="showModal({{$insumoMP->id}});" data-toggle="modal" data-target="#quitar">
            Descontar
          </a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

<div class="title col-lg-8 col-md-8 col-sm-8 col-xs-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
  <h3><b>Medicamento:</b></h3>
  <hr size="10px" width="80%" noshade="noshade" align="left"/>
  <table class="table table-bordered" style="border-top-color: #00AEFF">
    <thead>
    <tr>
      <th class="center">ID</th>
      <th>Nombre</th>
      <th>Marca</th>
      <th>Tipo</th>
      <th>Cantidad</th>
      <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($insumosM as $insumoM)
      <tr>
        <td class="center">{{$insumoM->id}}</td>
        <td>{{$insumoM->nombre}}</td>
        <td>{{$insumoM->marca}}</td>
        <td>{{$insumoM->tipo}}</td>
        <td>{{$insumoM->cantidadTotal}}</td>
        <td>
          <a href="#" class="btn btn-warning" onclick="showModal({{$insumoM->id}});" data-toggle="modal" data-target="#quitar">
            Descontar
          </a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

<div class="title col-lg-8 col-md-8 col-sm-8 col-xs-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
  <h3><b>Producto Sanitarios:</b></h3>
  <hr size="10px" width="80%" noshade="noshade" align="left"/>
  <table class="table table-bordered" style="border-top-color: #00AEFF">
    <thead>
    <tr>
      <th class="center">ID</th>
      <th>Nombre</th>
      <th>Marca</th>
      <th>Tipo</th>
      <th>Cantidad</th>
      <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($insumosS as $insumoS)
      <tr>
        <td class="center">{{$insumoS->id}}</td>
        <td>{{$insumoS->nombre}}</td>
        <td>{{$insumoS->marca}}</td>
        <td>{{$insumoS->tipo}}</td>
        <td>{{$insumoS->cantidadTotal}}</td>
        <td>
          <a href="#" class="btn btn-warning" onclick="showModal({{$insumoS->id}});" data-toggle="modal" data-target="#quitar">
            Descontar
          </a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>