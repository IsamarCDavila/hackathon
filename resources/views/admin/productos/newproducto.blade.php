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
{!! Form::open(['url' => '/admin/productos/', 'method' => 'POST', 'files' => 'true'])!!}
<h1 class="page-title"> Nuevo Producto </h1>
<div class="portlet light ">
  <div class="portlet-body form">
    <div class="form-body">
      <div class="row">
        <div class="col-md-12"><h4>Menú Producto</h4><br></div>

        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1">Icono</label>
              <img src="" class="img-responsive img-general" alt="imgen San Fernando"/>
              <input type="file" class="form-control file"  name="icono" required>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Nombre Producto</label>
              <input type="text" class="form-control" name="nombre_es_newproducto" required>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1">Introducción</label>
              <textarea name="intro_es_newproducto" class="form-control" rows="3" placeholder=""></textarea>
            </div>
          </div>
        </div>
        <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >Imagen Producto</label>
                <img src="" class="img-responsive img-general" alt="imgen San Fernando"/>
                <input type="file" class="form-control file" name="imagen_intro">
              </div>
            </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Texto botón</label>
              <input type="text" class="form-control" name="texto_boton_es">
            </div>
          </div>
        </div>
        <div class="col-md-12"><h4>Descripción Receta</h4><br></div>

        <div class="col-md-12">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1">Descripción receta</label>
              <textarea name="descripcion_es_receta" class="form-control" rows="3" placeholder=""></textarea>
            </div>
          </div>
        </div>

        <div class="col-md-12"><h4>Detalle Producto</h4><br></div>

        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Título Detalle</label>
              <input type="text" class="form-control" name="titulo_detalle_es">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Título descripción</label>
              <input type="text" class="form-control" name="titulo_es_newproducto">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1">Descripción Detalle</label>
              <textarea name="descripcion_detalle_es" class="form-control" rows="3" placeholder=""></textarea>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1">Descripción Producto</label>
              <textarea name="descripcion_es_newproducto" class="form-control" rows="3" placeholder=""></textarea>
            </div>
          </div>
        </div>
        <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >Imagen Flotante</label>
                <img src="" class="img-responsive img-general" alt="imgen San Fernando"/>
                <input type="file" class="form-control file" name="imagen_flotante">
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >Imagen Fondo</label>
                <img src="" class="img-responsive img-general" alt="imgen San Fernando"/>
                <input type="file" class="form-control file" name="imagen_fondo">
              </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >Icono Certificado 1</label>
                <img src="" class="img-responsive img-general" alt="imgen San Fernando"/>
                <input type="file" class="form-control file" name="icono_certificado1">
              </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >Icono Certificado 2</label>
                <img src="" class="img-responsive img-general" alt="imgen San Fernando"/>
                <input type="file" class="form-control file" name="icono_certificado2">
              </div>
            </div>
        </div>

      </div>


      <div class="form-actions noborder">
        <button type="submit" class="btn blue">Crear producto</button>
      </div>
    </div>

  </div>
</div>
{!! Form::close() !!}
@endsection
