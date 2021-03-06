@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading" style="text-align: center">Registro de Administradores</div>
          <div class="panel-body">
            {!! Form::open(['url' => '/register','method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>
                <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                    <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <label for="file-1" class="col-md-4 control-label">Seleccion una foto de perfil:</label>
                <div class="col-md-6">
                  <input name="foto" id="file-3" type="file" multiple=true>
                </div>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('idEmpresa') ? ' has-error' : '' }}">
                <label for="idEmpresa" class="col-md-4 control-label">Codigo de Empresa</label>
                <div class="col-md-6">
                  <input id="idEmpresa" type="text" class="form-control" name="idEmpresa" value="{{ old('idEmpresa') }}" required>
                  @if ($errors->has('idEmpresa'))
                    <span class="help-block">
                      <strong>{{ $errors->first('idEmpresa') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>
                <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                    Register
                  </button>
                </div>
              </div>

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<script>
  function comenzar(){
    $("#file-3").fileinput({
      showCaption: false,
      browseClass: "btn btn-primary btn-lg",
      fileType: "any"
    });
  }
  window.addEventListener("load",comenzar, false);
</script>