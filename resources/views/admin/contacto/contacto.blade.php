@extends('app.app')
@section('style')
    <link href="<?php echo URL::asset('http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
@endsection
@section('script')
<!--[if lt IE 9]>
    <script src="../assets/global/plugins/respond.min.js"></script>
    <script src="../assets/global/plugins/excanvas.min.js"></script>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->

    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
@endsection
<!-- /.heading-->

@section('content')
<h1 class="page-title"> Contacto
    <!-- <a class="btn btn-primary right" href="{!!url('/newnoticia')!!}"><i class="fa fa-plus"></i></a> -->
</h1>
<div class="portlet light ">
  <div class="portlet-body">
    <ul class="nav nav-tabs">
			<li class="active"><a  href="#1" data-toggle="tab">Formulario Contacto</a></li>
      <li><a href="#4" data-toggle="tab">Formulario Distribuidor</a></li>
			<li><a href="#2" data-toggle="tab">Contacto</a></li>
			<li><a href="#3" data-toggle="tab">Distribuidor</a></li>

		</ul>

			<div class="tab-content ">
			  <div class="tab-pane active" id="1">
          <div class="table-scrollable">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th> # </th>
                  <th> NOMBRE  </th>
                  <th> DNI </th>
                  <th> CORREO </th>
                </tr>
              </thead>
              <tbody>
                <tr id="">
                  <td>1</td>
                  <td>vcosta@apros.pe</td>
                  <td>4525635822</td>
                  <td>vcosta@apros.pe</td>
                </tr>
              </tbody>
            </table>
          </div>
				</div>
				<div class="tab-pane" id="2">
          <div class="table-scrollable">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th> # </th>
                  <th> DIRECCION </th>
                  <th> ACCIONES </th>
                </tr>
              </thead>
              <tbody>
                <tr id="">
                  <td>1</td>
                  <td>San fernando .....</td>
                  <td>
                    <a  class="btn btn-xs green btn-outline" href="{!!url('/newcontactoubicacion')!!}"><i class="fa fa-plus ico-nuevo"></i></a>
                    <a  class="btn btn-xs blue btn-outline" href="{!!url('/editcontactoubicacion')!!}"><i class="fa fa-pencil ico-editar"></i></a>
                    <a class="btn btn-xs red btn-outline eliminar" href="javascript:;"><i class="fa fa-times"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
				</div>
        <div class="tab-pane" id="3">
          <div class="table-scrollable">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th> # </th>
                  <th> UBICACIÓN </th>
                  <th> CIUDAD </th>
                  <th> DISTRIBUIDOR </th>
                  <th> DIRECCIÓN </th>
                  <th> TELÉFONO/CORREO </th>
                  <th> ACCIONES </th>
                </tr>
              </thead>
              <tbody>
                <tr id="">
                  <td>1</td>
                  <td>Sur</td>
                  <td>Arequipa</td>
                  <td>Granja Rinconada Del Sur SA</td>
                  <td>Av. Alcides Carrión 168</td>
                  <td>(054) 221212</td>
                  <td>
                    <a  class="btn btn-xs green btn-outline" data-toggle="modal" href="#newDistribuidor"><i class="fa fa-plus ico-nuevo"></i></a>
                    <a  class="btn btn-xs blue btn-outline" data-toggle="modal" href="#editDistribuidor"><i class="fa fa-pencil ico-editar"></i></a>
                    <a class="btn btn-xs red btn-outline eliminar" href="javascript:;"><i class="fa fa-times"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
				</div>
        <div class="tab-pane" id="4">
          <div class="table-scrollable">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th> # </th>
                  <th> NOMBRE  </th>
                  <th> DNI </th>
                  <th> CORREO </th>
                </tr>
              </thead>
              <tbody>
                <tr id="">
                  <td>1</td>
                  <td>Martin</td>
                  <td>4525635822</td>
                  <td>vcosta@apros.pe</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="formcontacto" role="tabpanel" aria-labelledby="formcontacto-tab">
          <div class="table-scrollable">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th> # </th>
                  <th> NOMBRE  </th>
                  <th> DNI </th>
                  <th> CORREO </th>
                </tr>
              </thead>
              <tbody>
                <tr id="">
                  <td>1</td>
                  <td>vcosta@apros.pe</td>
                  <td>4525635822</td>
                  <td>vcosta@apros.pe</td>
                </tr>
              </tbody>
            </table>
          </div>
				</div>
			</div>
  </div>
</div>

<!--    NEW DISTRIBUIDOR         -->
<div class="modal fade" id="newDistribuidor">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Nuevo Distribuidor</h4>
      </div>

      <div class="col-md-12">
        <div class="form-group ">
          <div class="input-icon">
            <label>Ubicación</label>
            <select class="form-control" name="ubicacion_newdistribucion">
              <option value="lima">Lima</option>
              <option value="sur">Sur</option>
              <option value="este">Este</option>
              <option value="oeste">Oeste</option>
            </select>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <div class="input-icon">
            <label>Ciudad </label>
            <input type="text" value="" class="form-control" name="ciudad_newdistribucion">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <div class="input-icon">
            <label>Distribuidor </label>
            <input type="text" value="" class="form-control" name="distribuidor_newdistribucion">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <div class="input-icon">
            <label>Dirección </label>
            <input type="text" value="" class="form-control" name="direccion_newdistribucion">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <div class="input-icon">
            <label>Teléfono/Correo </label>
            <input type="text" value="" class="form-control" name="telefono_newdistribucion">
          </div>
        </div>
      </div>

      <div class="modal-footer">
      <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cancelar</button>
      <button type="submit" class="btn blue">Crear</button>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->

</div>
<!--    FIN NEW DISTRIBUIDOR         -->

<!--    EDIT DISTRIBUIDOR         -->
<div class="modal fade" id="editDistribuidor">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Editar Distribuidor</h4>
      </div>

      <div class="col-md-12">
        <div class="form-group ">
          <div class="input-icon">
            <label>Ubicación</label>
            <select class="form-control" name="ubicacion_distribucion">
              <option value="lima">Lima</option>
              <option value="sur">Sur</option>
              <option value="este">Este</option>
              <option value="oeste">Oeste</option>
            </select>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <div class="input-icon">
            <label>Ciudad </label>
            <input type="text" value="" class="form-control" name="ciudad_distribucion">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <div class="input-icon">
            <label>Distribuidor </label>
            <input type="text" value="" class="form-control" name="distribuidor_distribucion">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <div class="input-icon">
            <label>Dirección </label>
            <input type="text" value="" class="form-control" name="direccion_distribucion">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <div class="input-icon">
            <label>Teléfono/Correo </label>
            <input type="text" value="" class="form-control" name="telefono_distribucion">
          </div>
        </div>
      </div>

      <div class="modal-footer">
      <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cancelar</button>
      <button type="submit" class="btn blue">Guardar Cambios</button>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->

</div>
<!--    FIN EDIT DISTRIBUIDOR         -->
@endsection
