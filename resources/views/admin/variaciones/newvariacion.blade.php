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

{!! Form::open(['url' => '/admin/variaciones/'.$producto->id, 'method' => 'POST', 'files' => 'true'])!!}
<h1 class="page-title"> <img src="{!!url($producto->icono_path)!!}" alt="imagen San Fernando" width="80"> {{$producto->nombre}} - Nueva variación
</h1>
<div class="portlet light ">
  <div class="portlet-body form">
    <div class="form-body">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1">Nombre</label>
              <input type="text" class="form-control" name="nombre_es">
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Descripción</label>
              <textarea class="wysihtml5-textarea" placeholder="Ingrese una descripción ..." autofocus rows="8" name="descripcion_es" ></textarea>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Ingredientes</label>
              <textarea class="wysihtml5-textarea" placeholder="Ingrese ingredientes ..." autofocus rows="8" name="ingredientes_es" ></textarea>
            </div>
          </div>
        </div>
          <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label class="label-input-format label-titulo">Presentación</label>
              <input type="text" class="form-control" name="presentacion_es">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label class="label-input-format label-titulo">Sello</label>
                {!! Form::select('sello',array(''=>'Ninguno')+$sellos, null ,['class' => 'form-control input-admin', 'placeholder' => 'Selecciona'])!!}
                {!! $errors->first('sello', '<span class="help-block alert-danger">:message</span>') !!}
              </div>
            </div>
          </div>
          <div class="col-md-6">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label for="form_control_1" >Imagen Principal</label>
                  <img src="" class="img-responsive img-general" alt="imagen San Fernando"/>
                  <input type="file" class="form-control file" name="imagen_principal">
                </div>
              </div>
          </div>


      <div class="form-actions noborder col-md-12">
        <button type="submit" class="btn blue">Crear variación</button>
        <a class="btn btn-danger btn-cancelar" href="{{url('/admin/variaciones/'.$producto->id)}}" type="button">Cancelar</a>
      </div>
    </div>


  </div>
</div>
{!! Form::close() !!}
<script>
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
