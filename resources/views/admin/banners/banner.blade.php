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
<h1 class="page-title"> BANNER
   <a class="btn btn-primary right" data-toggle="modal" href="#newBanner"><i class="fa fa-plus"></i></a>
</h1>
<div class="portlet light ">
   <div class="portlet-body">
      <div class="table-scrollable">
         <table class="table table-hover">
            <thead>
               <tr>
                  <th> # </th>
                  <th> TÍTULO </th>
                  <th> SUBTÍTULO </th>
                  <th> DESCRIPCIÓN </th>
                  <th> TEXTO BOTÓN </th>
                  <th> URL BOTÓN</th>
                  <th> IMAGEN FONDO</th>
                  <th> ICONO</th>
                  <th> UBICACION</th>
                  <th> ORDEN</th>
                  <th> ACCIONES </th>
               </tr>
            </thead>
            <tbody>
               @foreach ($banners as $key)
               <tr id="">
                  <td> {!!$key->id!!}</td>
                  <td> {!!$key->titulo!!}</td>
                  <td> {!!$key->subtitulo!!}</td>
                  <td> {!!$key->descripcion!!}</td>
                  <td> {!!$key->texto_boton!!}</td>
                  <td> {!!$key->url_boton!!}</td>
                  <td> <img src="{!!$key->path_imagen!!}" alt="icono" width="80"></td>
                  <td> <img src="{!!$key->path_icono!!}" alt="icono" width="25"></td>
                  <td> {!!$key->ubicacion!!}</td>
                  <td> {!!$key->orden!!}</td>
                  <td>
                     <a  class="btn btn-xs blue btn-outline" data="{!!$key->id!!}"  onclick="load_banner({{ $key->id }});"><i class="fa fa-pencil ico-editar"></i></a>
                     <a class="btn btn-xs red btn-outline eliminar" href="javascript:;"><i class="fa fa-times"></i></a>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
<!--    NEW BANNER        -->
<div class="modal fade" id="newBanner">
   <div class="modal-dialog">
      <div class="modal-content">
         {!! Form::open(['url' => 'crear-banner/', 'method' => 'POST','files' => true])!!}
         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Nuevo Banner</h4>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-icon">
                  <label>Ubicación</label>
                  <select class="form-control" name="ubicacion_newbanner">
                    <option value="selecccione" disabled="disabled" selected>Seleccione</option>
                    <option value="home">home</option>
                    <option value="nosotros">Nosotros</option>
                    <option value="productos">Producto</option>
                    <option value="receta">Recetas</option>
                    <option value="noticias">Noticias</option>
                    <option value="puntosdeventa">Puntos de venta</option>
                    <option value="puntosdecanje">Canje de Pavo</option>
                    <option value="contacto">Contacto</option>
                  </select>
                  {!! $errors->first('ubicacion_newbanner', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-icon">
                  <label>Orden</label>
                  <input type="number" name="orden_newbanner" class="form-control" rows="3" placeholder=""></input>
                  {!! $errors->first('orden_newbanner', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Título</label>
                  <input name="titulo_newbanner" class="form-control" rows="3" placeholder=""></input>
                  {!! $errors->first('titulo_newbanner', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Subtítulo</label>
                  <input name="subtitulo_newbanner" class="form-control" rows="3" placeholder=""></input>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Descripción</label>
                  <input name="descripcion_newbanner" class="form-control" rows="3" placeholder=""></input>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group ">
               <div class="input-icon">
                  <label>Texto boton</label>
                  <input type="text" value="" class="form-control" name="text_newbanner">
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>URL boton </label>
                  <input type="text" value="" class="form-control" name="url_newbanner">
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Imagen fondo </label>
                  <input type="file" value="" class="form-control" name="img_newbanner">
                  {!! $errors->first('img_newbanner', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Icono </label>
                  <input type="file" value="" class="form-control" name="icono_newbanner">
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn blue">Crear</button>
         </div>
         {!! Form::close() !!}
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!--    FIN NEW BANNER         -->
<!--    EDIT BANNER         -->
<div class="modal fade" id="editBanner">
   <div class="modal-dialog">
      <div class="modal-content">
         {!! Form::open(['url' => 'editar-banner/', 'method' => 'POST','files' => true])!!}
         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
         <input type="hidden" class="id_banner" name="id_banner" value="">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Editar Banner</h4>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-icon">
                  <label>Ubicación</label>
                  {{-- {{ Form::select('ubicacion_editbanner', ['home', 'nosotros', 'puntosdecanje'], null, ['class' => 'form-control select_banner']) }} --}}
                  <select class="form-control select_banner" name="ubicacion_editbanner" >
                    <option value="selecccione" disabled="disabled" selected>Seleccione</option>
                    <option value="home">home</option>
                    <option value="nosotros" >Nosotros</option>
                    <option value="productos">Producto</option>
                    {{-- <option value="receta">Recetas</option> --}}
                    <option value="noticias">Noticias</option>
                    <option value="puntosdeventa">Puntos de venta</option>
                    <option value="puntosdecanje">Canje de Pavo</option>
                    <option value="contacto">Contacto</option>
                  </select>
                  {!! $errors->first('ubicacion_editbanner', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-icon">
                  <label>Orden</label>
                  <input type="number" name="orden_editbanner" class="form-control" rows="3" placeholder=""></input>
                  {!! $errors->first('orden_editbanner', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Título</label>
                  <input name="titulo_editbanner" class="form-control" rows="3" placeholder=""></input>
                  {!! $errors->first('titulo_editbanner', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Subtítulo</label>
                  <input name="subtitulo_editbanner" class="form-control" rows="3" placeholder=""></input>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Descripción</label>
                  <input name="descripcion_editbanner" class="form-control" rows="3" placeholder=""></input>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group ">
               <div class="input-icon">
                  <label>Texto boton</label>
                  <input type="text" value="" class="form-control" name="text_editbanner">
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>URL boton </label>
                  <input type="text" value="" class="form-control" name="url_editbanner">
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Imagen fondo </label>
                   <br>
                   <img src="" width="100%" alt="imgen San Fernando" class="imagen_editar">
                   <br>
                  <input type="file" value="" class="form-control" name="img_editbanner">
                  {!! $errors->first('img_editbanner', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Icono </label>
                  <br>
                  <img src="" width="80" alt="imgen San Fernando" class="icono_editar">
                  <br>
                  <input type="file" value="" class="form-control" name="icono_editbanner">
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn blue">Guardar</button>
         </div>
         {!! Form::close() !!}
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!--    FIN EDIT BANNER         -->
@if (session('status')=='error_banner')
<script type="text/javascript">
   $(window).load(function() {
     $('#newBanner').modal('show');
   });
</script>
@endif
{{-- @if (session('status')=='error_banner_edit')
  <input type="text" name="" value="{{$id}}">
<script type="text/javascript">
alert('error');

</script>
@endif --}}

<script type="text/javascript">
   function load_banner(id_banner){
     var variable=  $('.id_banner').val(id_banner);
      var data={};
      data.id=id_banner;
      data._token = $('meta[name="csrf-token"]').attr('content');
         $.ajax({
           url: '{!!url('/cargar-banner')!!}',
           data: data,
           type: 'post',
         }).done( function(resul)
         {
            $('#editBanner input[name="titulo_editbanner"]').val($(resul)[0].titulo);
            $('#editBanner input[name="subtitulo_editbanner"]').val($(resul)[0].subtitulo);
            $('#editBanner input[name="descripcion_editbanner"]').val($(resul)[0].descripcion);
            $('#editBanner input[name="text_editbanner"]').val($(resul)[0].texto_boton);
            $('#editBanner input[name="url_editbanner"]').val($(resul)[0].url_boton);
            $('#editBanner input[name="orden_editbanner"]').val($(resul)[0].orden);
            $('.imagen_editar').attr('src',$(resul)[0].path_imagen);
            $('.icono_editar').attr('src',$(resul)[0].path_icono);
            $('.select_banner option[value="'+ $(resul)[0].ubicacion+ '"]').attr("selected", "selected");
            $('#editBanner').modal('show');
            console.log('ubicacion', $(resul)[0].ubicacion);


         }).fail( function()
         {
           alert("Oops, intentalo nuevamente o revisa tu conexion");
         }) ;
   }
</script>
@endsection
