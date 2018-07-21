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
@endsection
<!-- /.heading-->

@section('content')
{!! Form::open(['url' => 'editar-receta/'.$receta->id, 'method' => 'POST', 'files' => 'true'])!!}
  <ul  class="nav nav-tabs tabs-permiso" id="tabs-permiso">
     <li class="active">
        <a  href="#1a" data-toggle="tab"> Editar Receta</a>
     </li>
     <!-- <li><a href="#2a" data-toggle="tab">Editar Detalle Receta</a>
     </li> -->
     <li><a href="#3a" data-toggle="tab"> Editar Descripción receta</a>
     </li>
  </ul>
<div class="tab-content clearfix">

<div class="portlet light tab-pane active" id="1a">
  <div class="portlet-body form">
    <div class="form-body">

      <div class="row">
        <h1 class="page-title"> Receta </h1>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo Producto</label>
                {!! Form::select('variaciones[]', Funciones::SelectsVariaciones('variaciones_idiomas'),$array_variaciones, ['class' => 'form-control edited select2-select', 'id'=>'form_control_1', 'multiple', 'data-placeholder'=>'Seleccione una o más variaciones']) !!}
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label class="label-input-format label-titulo">Nombre receta</label>
            <input type="text" class="form-control" name="nombre_receta" value="{{$receta->nombre}}">
            </div>
          </div>
          </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Titulo</label>
              <input type="text" class="form-control" name="titulo_receta" value="{{$receta->titulo}}">
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >URL Video https://youtu.be/...</label>
              <input type="text" class="form-control" name="video" value="{{$receta->video}}">
            </div>
          </div>
        </div>
            <div class="col-md-6">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label class="label-input-format label-titulo">Porciones</label>
                <input type="number" class="form-control" name="porciones_receta" value="{{$receta->numero_porciones}}">
                </div>
              </div>
              </div>
              <div class="col-md-6">
                <div class="form-group has-success">
                  <div class="input-icon">
                    <label class="label-input-format label-titulo">Cocción</label>
                  <input type="text" class="form-control" name="coccion_receta" value="{{$receta->minutos_coccion}}">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group has-success">
                  <div class="input-icon">
                    <label for="form_control_1" >Imagen</label>
                    <img src="{{url($receta->path_imagen)}}" class="img-responsive img-general"/>
                    <input type="file" class="form-control file" name="img_receta">
                  </div>
                </div>
              </div>
              <div class="form-actions noborder col-md-12">
                <button type="submit" class="btn blue">Guardar</button>
                <a class="btn btn-danger btn-cancelar" href="{{url('admin/recetas')}}" type="button">Cancelar</a>
              </div>
          </div>

    </div>
  </div>
</div>



<!-- <div class="portlet light tab-pane" id="2a">
    <div class="portlet-body form">
      <div class="form-body">
        <div class="row">
            <h1 class="page-title"> Detalle Receta </h1>
            <div class="col-md-6">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label for="form_control_1" >Nombre receta</label>
                  <input type="text" class="form-control" name="nombre_detallereceta">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label for="form_control_1" >FRASE título receta</label>
                  <input type="text" class="form-control" name="titulo_deteallereceta">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label for="form_control_1" >URL Video https://youtu.be/...</label>
                  <input type="text" class="form-control" name="tiempo_deteallereceta">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label for="form_control_1" >Texto botón</label>
                  <input type="text" class="form-control" name="texto_boton_deteallereceta">
                </div>
              </div>
            </div>
            <div class="col-md-12">


              <div class="form-actions noborder">
                <button type="submit" class="btn blue">Guardar</button>
                <a class="btn btn-danger btn-cancelar" href="{{url('/recetas')}}" type="button">Cancelar</a>
              </div>
          </div>
        </div>
      </div>
    </div>
</div> -->


<div class="portlet light tab-pane" id="3a">
    <div class="portlet-body form">
      <div class="form-body">
            <h1 class="page-title"> Descripción receta </h1>

            <div class="col-md-12">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label for="form_control_1" >Ingredientes para preparación</label>
                  <br>
                <textarea id="wysihtml5-textarea_2" placeholder="Enter your text ..." autofocus rows="8" name="ingredientes_preparacion_detallereceta" >{!! $receta->ingredientes !!}</textarea>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label for="form_control_1" >Modo de preparación</label>
                  <br>
                  <label for="form_control_1" >Pasos:</label>
                  {{-- <input type="text" class="form-control" name="modo_preparacion_detallereceta"> --}}
                <textarea id="wysihtml5-textarea" placeholder="Enter your text ..." autofocus rows="8" name="modo_preparacion_detallereceta" >{!! $receta->preparacion !!}</textarea>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label for="form_control_1" >Tips</label>
                  <br>
                  <label for="form_control_1" >Pasos:</label>
                  {{-- <input type="text" class="form-control" name="tips_preparacion_deteallereceta"> --}}
                    <textarea id="wysihtml5-textarea_1" placeholder="Enter your text ..." autofocus rows="8" name="tips_preparacion_detallereceta" >{!! $receta->tips !!}</textarea>
                </div>
              </div>
            </div>
            <div class="form-actions noborder">
              <button type="submit" class="btn blue">Guardar</button>
              <a class="btn btn-danger btn-cancelar" href="{{url('admin/recetas')}}" type="button">Cancelar</a>
            </div>
      </div>
  </div>
</div>

</div>
{!! Form::close() !!}
<script type="text/javascript">
  $(".select2-select").select2();

  $('#wysihtml5-textarea').wysihtml5({
    "font-styles": true,
    "emphasis": true,
    "lists": true,
    "html": true,
    "link": false,
    "image": false,
    "stylesheets": []
  });
  $('#wysihtml5-textarea_1').wysihtml5({
    "font-styles": true,
    "emphasis": true,
    "lists": true,
    "html": true,
    "link": false,
    "image": false,
    "stylesheets": []
  });
  $('#wysihtml5-textarea_2').wysihtml5({
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
