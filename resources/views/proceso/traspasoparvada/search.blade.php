{!! Form::open(array('url'=>'proceso/traspasoparvada','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

		  <div class="panel panel-blue">
            <div class="panel-body">
              <div class="input-group">
                <input type="text" class="form-control" name="searchText" placeholder="Buscar por ID Traspaso de Parvada..." values="{{$searchText}}">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-main-color btn-squared" id="mos" value="mos">
                    <i class="fa fa-search"></i>
                  </button> </span>
                </span>
                <span class="input-group-btn">
                  <a href="traspasoparvada/create" class="btn btn-red btn-squared">
                    <i class="fa fa-plus"></i>
                  </a>
                </span>
              </div>
            </div>
          </div>
        

{{Form::close()}}