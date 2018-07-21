
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

<h1 class="page-title"> Nueva Receta </h1>
<div class="portlet light ">
  <div class="portlet-body form">
    <div class="form-body">
      {!! Form::open(['url' => 'crear-receta/', 'method' => 'POST', 'files' => 'true'])!!}
      <div class="row">
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Variaciones de productos</label>
                {!! Form::select('variaciones[]', Funciones::SelectsVariaciones('variaciones_idiomas'),null, ['class' => 'form-control edited select2-select', 'id'=>'form_control_1','multiple', 'data-placeholder'=>'Seleccione una o más variaciones']) !!}
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label class="label-input-format label-titulo">Nombre receta</label>
            <input type="text" class="form-control" name="nombre_receta">
            </div>
          </div>
          </div>

        <div class="col-md-12">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Imagen</label>
              <img src="" class="img-responsive img-general"/>
              <input type="file" class="form-control file" name="img_receta">
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Titulo</label>
              <input type="text" class="form-control" name="titulo_receta">
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >URL Video</label>
              <input type="text" class="form-control" name="urlvideo">
            </div>
          </div>
        </div>
    </div>
    <div class="form-actions noborder">
      <button type="submit" class="btn blue">Crear Receta</button>
      <a class="btn btn-danger btn-cancelar" href="{{url('/recetas')}}" type="button">Cancelar</a>
    </div>
    {!! Form::close() !!}
  </div>
</div>
<script>
  $(".select2-select").select2();
</script>
<!-- <script>
  $('.wysi-contenido').wysihtml5({
    "font-styles": true,
    "emphasis": true,
    "lists": true,
    "html": true,
    "link": false,
    "image": false,
    "stylesheets": []
  });
</script> -->
@endsection
