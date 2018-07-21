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
<h1 class="page-title"> Editar Noticias </h1>
<div class="portlet light ">
  <div class="portlet-body form">
  {!! Form::open(['url' => 'editar-noticia/'. $noticia[0]->id, 'method' => 'POST','files' => true])!!}
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="form-body">
      <div class="row">
        <div class="col-md-6">
           <div class="form-group">
              <div class="input-icon has-success">
                 <label>Es destacado?</label>
                 {{ Form::select('destacado_editnoticia', ['no', 'si'], $noticia[0]->es_destacado, ['class' => 'form-control select_banner']) }}
                 {!! $errors->first('destacado_editnoticia', '<span class="help-block alert-danger">:message</span>') !!}
              </div>
           </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Título</label>
              <input type="text" class="form-control" name="titulo_editnoticia" value="{{$noticia[0]->titulo}}">
              {!! $errors->first('titulo_editnoticia', '<span class="help-block alert-danger">:message</span>') !!}
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Imagen</label>
              <br>
              <img src="../{{$noticia[0]->path_imagen}}" alt="imgen San Fernando" width="300">
              <br>
              <br>
              <input type="file" class="form-control" name="img_editnoticia">
              <label for="">*Tamaño sugerido:710 x 310 pixeles</label>
              {!! $errors->first('img_editnoticia', '<span class="help-block alert-danger">:message</span>') !!}

            </div>
          </div>
          </div>
          <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >URL video</label>
                <input type="text" class="form-control" name="urlvideo_editnoticia">
                {!! $errors->first('urlvideo_editnoticia', '<span class="help-block alert-danger">:message</span>') !!}
              </div>
            </div>
            </div>

          <div class="col-md-12">
            <div class="form-group has-success">
              <div class="input-icon">
                <label class="label-input-format label-titulo">Descripción</label>
                <textarea name="descripcion_editnoticia" class="form-control" rows="5" placeholder="" >{{$noticia[0]->descripcion}}</textarea>
                {!! $errors->first('descripcion_editnoticia', '<span class="help-block alert-danger">:message</span>') !!}
              </div>
            </div>
            </div>

            <div class="col-md-6">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label for="form_control_1" >Intro</label>
                  <input type="text" class="form-control" name="intro_editnoticia" value="{{$noticia[0]->intro}}">
                  {!! $errors->first('intro_editnoticia', '<span class="help-block alert-danger">:message</span>') !!}
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group has-success">
                <div class="input-icon">
                  <label for="form_control_1" >Texto Imagen</label>
                  <input type="text" class="form-control" name="textoimagen_editnoticia" value="{{$noticia[0]->texto_imagen}}">
                  {!! $errors->first('textoimagen_editnoticia', '<span class="help-block alert-danger">:message</span>') !!}
                </div>
              </div>
            </div>
          </div>

      <div class="form-actions noborder">
        <button type="submit" class="btn blue">Guardar noticia</button>
        <a class="btn btn-danger btn-cancelar" href="{{url('/noticias')}}" type="button">Cancelar</a>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>
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
