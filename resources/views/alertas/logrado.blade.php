@if(Session::has('msj'))
  <div id="msj" class ="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
      <h4><i class="icon fa fa-check"></i> Alert!</h4>
    {{Session::get('msj')}}
  </div>
@endif