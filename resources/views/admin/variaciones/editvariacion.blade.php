@extends('app.app')
<style>
.select2-container--default .select2-selection--multiple{
  border-color: #0028C4 !important;
  height: 34px;
}
</style>
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
    <script src="<?php echo URL::asset('js/variacionadmin.js'); ?>" type="text/javascript"></script>
@endsection
<!-- /.heading-->

@section('content')
{!! Form::open(['url' => 'admin/variaciones/'.$producto->id.'/'.$variacion->id, 'method' => 'PATCH', 'files' => 'true'])!!}
<h1 class="page-title"> <img src="{!!url($producto->icono_path)!!}" alt="imagen San Fernando" width="80"> {{$producto->nombre}} > Editar > {{$variacion->nombre}}
</h1>
  <ul  class="nav nav-tabs tabs-permiso" id="tabs-permiso">
     <li class="active">
        <a  href="#1a" data-toggle="tab"> Editar Datos Variación</a>
     </li>
     <li><a href="#2a" data-toggle="tab">Editar Imágenes Variación</a>
     </li>
     <li><a href="#3a" data-toggle="tab"> Editar Nutrientes Variación</a>
     </li>
  </ul>
<div class="tab-content clearfix">
<input type="hidden" id="variacion_id" value="{{$variacion->id}}"/>

  <div class="portlet light tab-pane active" id="1a">
    <div class="portlet-body form">
      <div class="form-body">

        <div class="row">
          <div class="col-md-12">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1">Nombre</label>
                <input type="text" class="form-control" name="nombre_es" value="{{$variacion->nombre}}">
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >Descripción</label>
                <textarea class="wysihtml5-textarea" placeholder="Ingrese una descripción ..." autofocus rows="8" name="descripcion_es" >{!!$variacion->descripcion!!}</textarea>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >Ingredientes</label>
                <textarea class="wysihtml5-textarea" placeholder="Ingrese ingredientes ..." autofocus rows="8" name="ingredientes_es" >{!!$variacion->ingredientes!!}</textarea>
              </div>
            </div>
          </div>
            <div class="col-md-6">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label class="label-input-format label-titulo">Presentación</label>
                <input type="text" class="form-control" name="presentacion_es" value="{{$variacion->presentacion}}">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label class="label-input-format label-titulo">Sello</label>
                  {!! Form::select('sello',array(''=>'Ninguno')+$sellos, $variacion->id_sello ,['class' => 'form-control input-admin', 'placeholder' => 'Selecciona'])!!}
                  {!! $errors->first('sello', '<span class="help-block alert-danger">:message</span>') !!}
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-success">
                  <div class="input-icon">
                    <label for="form_control_1" >Imagen Principal</label>
                    @if($variacion->imagen_principal_path)
                    <img src="{{url($variacion->imagen_principal_path)}}" class="img-responsive img-general" alt="imagen San Fernando"/>
                    @else
                    <img src="" class="img-responsive img-general" alt="imagen San Fernando"/>
                    @endif
                    <input type="file" class="form-control file" name="imagen_principal">
                  </div>
                </div>
            </div>
            <div class="form-actions noborder col-md-12">
              <button type="submit" class="btn blue">Guardar</button>
              <a class="btn btn-danger btn-cancelar" href="{{url('/recetas')}}" type="button">Cancelar</a>
            </div>

      </div>
    </div>
  </div>
</div>


 <div class="portlet light tab-pane" id="2a">
    <div class="portlet-body form">
      <div class="form-body">
        <div class="row">
            <h1 class="page-title"> Editar Imágenes
              <a class="btn btn-primary right" data-toggle="modal" href="#newImage"><i class="fa fa-plus"></i></a>
            </h1>
            <div class="table-scrollable">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th> IMAGEN </th>
                    <th> ACCIONES </th>
                  </tr>
                </thead>
                <tbody id="listado_imagenes">
                  @foreach($imagenes as $key)
                  <tr id="img{{$key->id}}">
                    <td>
                      @if($key->imagen_path)
                      <img src="{!!url($key->imagen_path)!!}" width="80">
                      @endif
                    </td>
                    <td>
                      <a  class="btn btn-xs blue btn-outline editar-imagen-variacion" data-toggle="modal" href="#editImage" data-id="{{$key->id}}" data-path="<?php if($key->imagen_path){ echo url($key->imagen_path); }?>"><i class="fa fa-pencil ico-editar"></i></a>

                      <a class="btn btn-xs red btn-outline eliminar-img" data-id="{{$key->id}}" href="javascript:;"><i class="fa fa-times"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

              <div class="form-actions noborder">
                <button type="submit" class="btn blue">Guardar</button>
                <a class="btn btn-danger btn-cancelar" href="{{url('admin/variaciones/'.$producto->id)}}" type="button">Cancelar</a>
              </div>
          </div>
        </div>
      </div>
    </div>



 <div class="portlet light tab-pane" id="3a">
    <div class="portlet-body form">
      <div class="form-body">
            <h1 class="page-title"> Editar nutrientes
              <a class="btn btn-primary right" data-toggle="modal" href="#newNutriente"><i class="fa fa-plus"></i></a>
            </h1>

            <div class="table-scrollable">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th> NUTRIENTE </th>
                    <th> UNIDAD </th>
                    <th> CANTIDAD </th>

                    <th> ACCIONES </th>
                  </tr>
                </thead>
                <tbody id="listado_nutrientes">
                  @foreach($variacion_nutrientes as $key)
                  <tr id="nutri{{$key->id}}">
                    <td class="nutri-name">{{$key->nutriente}}</td>
                    <td class="nutri-unidad">{{$key->unidad}}</td>
                    <td class="nutri-cant">{{$key->cantidad}}</td>
                    <td>
                      <a  class="btn btn-xs blue btn-outline editar-nutriente-variacion" data-toggle="modal" href="#editNutriente" data-id="{{$key->id}}" data-nutriente="{{$key->id_nutriente}}" data-cantidad="{{$key->cantidad}}" data-unidad="{{$key->unidad}}"><i class="fa fa-pencil ico-editar"></i></a>
                      <a class="btn btn-xs red btn-outline eliminar-nutriente" data-id="{{$key->id}}" href="javascript:;"><i class="fa fa-times"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="form-actions noborder">
              <button type="submit" class="btn blue">Guardar</button>
              <a class="btn btn-danger btn-cancelar" href="{{url('admin/variaciones/'.$producto->id)}}" type="button">Cancelar</a>
            </div>
      </div>
  </div>

</div>
<div class="modal fade " id="newImage" tabindex="-1" role="dialog" aria-labelledby="nuevaImagenVariacion" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Agregar nueva imagen</h4>
          </div>
            <div class="modal-body">

                  <label class="bold-label">Nueva imagen</label>
                  <img src="" class="img-responsive img-general"/>
                  <input type="file" class="imagen-variacion file" id="nueva_img"/>

                  <label class="spin-message"></label>

            </div>
            <div class="modal-footer">
              <button type="button" class="subir-img btn blue">Subir imagen</button>
              <button type="button" class="btn btn-danger btn-cancelar" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="editImage" tabindex="-1" role="dialog" aria-labelledby="editarImagenVariacion" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Editar nueva imagen</h4>
          </div>
            <div class="modal-body">
                <input type="hidden" id="id_imagen"/>
                  <label class="bold-label">Editar imagen</label>
                  <img src="" class="img-responsive image-edit-show img-general"/>
                  <input type="file" class="imagen-variacion file" id="edit_img"/>

                  <label class="spin-message"></label>

            </div>
            <div class="modal-footer">
              <button type="button" class="edit-img btn blue">Subir imagen</button>
              <button type="button" class="btn btn-danger btn-cancelar" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="newNutriente" tabindex="-1" role="dialog" aria-labelledby="nuevoNutrienteVariacion" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Agregar nuevo nutriente</h4>
          </div>
            <div class="modal-body">

                <div class="form-group">
                  <label class="bold-label">Nutriente</label>
                  <select name="nutriente" class="form-control input-admin select_nutriente" id="new_nutriente">
                    <option value="" >Seleccione un nutriente</option>
                    @foreach ($nutrientes as $key)
                      <option value="{{$key->id}}" data-unidad="{{$key->unidad}}">{{$key->nombre_es}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label class="bold-label">Unidad</label>
                  <input class="form-control unidad_nutriente" name="unidad_nutriente" id="new_unidad_nutriente" readonly/>
                </div>
                <div class="form-group">
                  <label class="bold-label">Cantidad</label>
                  <input class="form-control" name="new_cantidad" id="new_cantidad" />
                </div>

                  <label class="spin-message"></label>

            </div>
            <div class="modal-footer">
              <button type="button" class="agregar-nutriente btn blue">Agregar</button>
              <button type="button" class="btn btn-danger btn-cancelar" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="editNutriente" tabindex="-1" role="dialog" aria-labelledby="editNutrienteVariacion" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Editar nutriente</h4>
          </div>
            <div class="modal-body">
                <input type="hidden" id="id_nutriente"/>
                <div class="form-group">
                  <label class="bold-label">Nutriente</label>
                  <select name="nutriente" class="form-control input-admin select_nutriente" id="edit_nutriente">
                    <option value="" >Seleccione un nutriente</option>
                    @foreach ($nutrientes as $key)
                      <option value="{{$key->id}}" data-unidad="{{$key->unidad}}">{{$key->nombre_es}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label class="bold-label">Unidad</label>
                  <input class="form-control unidad_nutriente" name="unidad_nutriente" id="edit_unidad_nutriente" readonly/>
                </div>
                <div class="form-group">
                  <label class="bold-label">Cantidad</label>
                  <input class="form-control" name="edit_cantidad" id="edit_cantidad"/>
                </div>

                  <label class="spin-message"></label>

            </div>
            <div class="modal-footer">
              <button type="button" class="editar-nutriente btn blue">Agregar</button>
              <button type="button" class="btn btn-danger btn-cancelar" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
<script type="text/javascript">
  $(".select2-select").select2();

  $('.wysihtml5-textarea').wysihtml5({
    "font-styles": true,
    "emphasis": true,
    "lists": true,
    "html": true,
    "link": false,
    "image": false,
    "stylesheets": []
  });

</script>
@endsection
