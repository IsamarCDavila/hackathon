@extends('app.app')
@section('style')
<link href="<?php echo URL::asset('http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css'); ?>" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
@endsection
@section('script')
<!-- BEGIN CORE PLUGINS -->
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
@endsection
<!-- /.heading-->
@section('content')
<h1 class="page-title"> SLIDER
   <a class="btn btn-primary right" data-toggle="modal" href="#newSlider"><i class="fa fa-plus"></i></a>
</h1>
<div class="portlet light ">
   <div class="portlet-body">
      <div class="table-scrollable">
         <table class="table table-hover">
            <thead>
               <tr>
                  <th> # </th>
                  <th> TÍTULO PRINCIPAL </th>
                  <th> SUBTÍTULO BACKGROUND</th>
                  <th> BOTÓN </th>
                  <th> URL BOTÓN </th>
                  <th> IMAGEN </th>
                  <th> ACCIONES </th>
                  <!-- <th> IMAGEN </th> -->
               </tr>
            </thead>
            <tbody>
               @foreach ($sliders as $key)
               <tr id="lista_sliders">
                  <td> {!!$key->id!!} </td>
                  <td> {!!$key->descripcion!!} </td>
                  <td> {!!$key->texto_background!!} </td>
                  <td> {!!$key->button_txt!!} </td>
                  <td> {!!$key->url_boton!!} </td>
                  <td>  <img src="{!!$key->path_imagen!!}" alt="imagen San Fernando" width="80"></td>
                  <td>
                     {{-- <a  class="btn btn-xs blue btn-outline btn-editar" data="{{$key->id}}" data-toggle="modal" href="#editSlider"><i class="fa fa-pencil ico-editar"></i></a> --}}
                     <a  class="btn btn-xs blue btn-outline btn-editar"  onclick="load_slider({{ $key->id }});" data-toggle="modal" href="#editSlider"><i class="fa fa-pencil ico-editar"></i></a>
                     <a class="btn btn-xs red btn-outline eliminar" href="javascript:;"><i class="fa fa-times"></i></a>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
<!--    NEW SLIDER         -->
<div class="modal fade" id="newSlider">
   <div class="modal-dialog">
      <div class="modal-content">
         {!! Form::open(['url' => 'crear-slider/', 'method' => 'POST','files' => true])!!}
         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Nuevo Slider</h4>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Descripción</label>
                  <textarea name="descripcion_newslider" class="form-control" rows="3" placeholder=""></textarea>
                  {!! $errors->first('descripcion_newslider', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Texto background</label>
                  <input name="textoback_newslider" class="form-control" rows="3" placeholder=""></input>
                  {!! $errors->first('textoback_newslider', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group ">
               <div class="input-icon">
                  <label>Texto boton</label>
                  <input type="text" value="" class="form-control" name="text_newslider">
                  {!! $errors->first('text_newslider', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>URL boton </label>
                  <input type="text" value="" class="form-control" name="url_newslider">
                  {!! $errors->first('url_newslider', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <input type="checkbox" value="1" class="" name="url_tipo">
               <label>Url externo</label>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Imagen</label>
                  <input type="file" value="" class="form-control" name="img_newslider">
                  {!! $errors->first('img_newslider', '<span class="help-block alert-danger">:message</span>') !!}
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
<!--    FIN NEW SLIDER         -->
<!--    EDIT SLIDER         -->
<div class="modal fade" id="editSlider">
   <div class="modal-dialog">
      <div class="modal-content">
         {!! Form::open(['url' => 'editar-slider/', 'method' => 'POST','files' => true])!!}
         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Actualizar Slider</h4>
         </div>
         <input type="hidden" class="id_slider" name="id_sl" value="">
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Descripción</label>
                  <textarea name="descripcion_editslider" class="form-control" rows="3" placeholder=""></textarea>
                  {!! $errors->first('descripcion_editslider', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Texto background</label>
                  <input name="textoback_editslider" class="form-control" rows="3" placeholder=""></input>
                  {!! $errors->first('textoback_editslider', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group ">
               <div class="input-icon">
                  <label>Texto boton</label>
                  <input type="text" value="" class="form-control" name="text_editslider">
                  {!! $errors->first('text_editslider', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>URL boton </label>
                  <input type="text" value="" class="form-control" name="url_editslider">
                  {!! $errors->first('url_editslider', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <input type="checkbox" value="1" class="" name="url_tipo">
               <label>Url externo</label>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <div class="input-icon">
                  <label>Imagen</label><br>
                   <img src="" width="200" class="imagen_editar" alt="imagen San Fernando">
                  <br>
                  <input type="file" value="" class="form-control" name="img_editslider">
                  {!! $errors->first('img_editslider', '<span class="help-block alert-danger">:message</span>') !!}
               </div>
            </div>
         </div>

         <div class="modal-footer">
            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn blue">Guardar cambios</button>
         </div>
         {!! Form::close() !!}
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>

<!--    FIN EDIT SLIDER         -->
@if (session('status')=='error')
<script type="text/javascript">
   $(window).load(function() {
     $('#newSlider').modal('show');
   });
</script>
@endif


<script type="text/javascript">

   function load_slider(id_slider){
     var variable=  $('.id_slider').val(id_slider);
     var id= $('.id_slider').val();
      var data={};
      data.id=id;
      data._token = $('meta[name="csrf-token"]').attr('content');
         $.ajax({
           url: '{!!url('/cargar-slider')!!}',
           data: data,
           type: 'post',
         }).done( function(resul)
         {
           $('#editSlider input[name="textoback_editslider"]').val($(resul)[0].texto_background);
           $('#editSlider input[name="text_editslider"]').val($(resul)[0].button_txt);
           $('#editSlider input[name="url_editslider"]').val($(resul)[0].url_boton);
           $('#editSlider textarea[name="descripcion_editslider"]').val($(resul)[0].descripcion);
           $('.imagen_editar').attr('src',$(resul)[0].path_imagen);

           if(resul[0].url_tipo=='1'){
             $('#editSlider input[name="url_tipo"]').prop('checked', 'checked');
           }
           else{
             $('#editSlider input[name="url_tipo"]').removeAttr('checked');
           }
           // $('#editSlider input[name="img_editslider"]').val($(resul)[0].path_imagen);
         }).fail( function()
         {
           alert("Oops, intentalo nuevamente o revisa tu conexion");
         }) ;
   }
</script>
@endsection
