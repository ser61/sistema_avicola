@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>P R I V I L E G I O S</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">index</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">

        @if(count($cargos) > 0)

          @foreach($cargos as $cargo)

            <div class="box box-primary collapsed-box">

            <div class="box-header with-border">
              <h4 align="center">Cargo: <b>{{ $cargo->nombre }}</b></h4>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">

                  <div class="box box-danger">
                    <div class="box-header">
                      <h3 class="box-title">Input masks</h3>
                    </div>
                    <div class="box-body">
                      <!-- Date dd/mm/yyyy -->
                      <div class="form-group">
                        <label>Date masks:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- Date mm/dd/yyyy -->
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- phone mask -->
                      <div class="form-group">
                        <label>US phone mask:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- phone mask -->
                      <div class="form-group">
                        <label>Intl US phone mask:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- IP mask -->
                      <div class="form-group">
                        <label>IP mask:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-laptop"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                    </div>
                    <!-- /.box-body -->
                  </div>

                  <div class="box box-danger">
                    <div class="box-header">
                      <h3 class="box-title">Input masks</h3>
                    </div>
                    <div class="box-body">
                      <!-- Date dd/mm/yyyy -->
                      <div class="form-group">
                        <label>Date masks:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- Date mm/dd/yyyy -->
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- phone mask -->
                      <div class="form-group">
                        <label>US phone mask:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- phone mask -->
                      <div class="form-group">
                        <label>Intl US phone mask:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- IP mask -->
                      <div class="form-group">
                        <label>IP mask:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-laptop"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                    </div>
                    <!-- /.box-body -->
                  </div>

                </div>
                <div class="col-md-6">

                  <div class="box box-danger">
                    <div class="box-header">
                      <h3 class="box-title">Input masks</h3>
                    </div>
                    <div class="box-body">
                      <!-- Date dd/mm/yyyy -->
                      <div class="form-group">
                        <label>Date masks:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- Date mm/dd/yyyy -->
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- phone mask -->
                      <div class="form-group">
                        <label>US phone mask:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- phone mask -->
                      <div class="form-group">
                        <label>Intl US phone mask:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- IP mask -->
                      <div class="form-group">
                        <label>IP mask:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-laptop"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                    </div>
                    <!-- /.box-body -->
                  </div>

                  <div class="box box-danger">
                    <div class="box-header">
                      <h3 class="box-title">Input masks</h3>
                    </div>
                    <div class="box-body">
                      <!-- Date dd/mm/yyyy -->
                      <div class="form-group">
                        <label>Date masks:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- Date mm/dd/yyyy -->
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- phone mask -->
                      <div class="form-group">
                        <label>US phone mask:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- phone mask -->
                      <div class="form-group">
                        <label>Intl US phone mask:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- IP mask -->
                      <div class="form-group">
                        <label>IP mask:</label>

                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-laptop"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                    </div>
                    <!-- /.box-body -->
                  </div>

                </div>
              </div>
            </div>

            <div class="box-footer">
              Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
              the plugin.
            </div>
          </div>

          @endforeach

        @else

          <div class="box">
            <div class="box-header">
              <h3 align="center"><b>Aun no tiene ningun Cargo al cual asignar privilegios...</b></h3>
            </div>
            <div class="box-body">
              <br>
              <p align="center">Bienvenido a la seccion de Privilegios, parece que aun no tiene ningun cargo, para agregar un nuevo Cargo, haga click en icono de mas.</p>
              <br>
              <div class="col-md-6 col-sm-offset-3">
                <a type="button" href="#" class="btn btn-danger btn-block">
                  <i class="fa fa-plus"></i>
                </a>
              </div>
            </div>
          </div>

        @endif

      </div>
    </div>
  </section>
@endsection