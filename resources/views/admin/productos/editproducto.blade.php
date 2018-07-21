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

{!! Form::open(['url' => '/admin/productos/'.$producto->id, 'method' => 'PATCH', 'files' => 'true'])!!}

<h1 class="page-title"> Editar Producto </h1>
<div class="portlet light ">
  <div class="portlet-body form">
    <div class="form-body">
      <div class="row">
        <div class="col-md-12"><h4>Menú Producto</h4><br></div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1">Icono</label>
              <img src="{{url($producto->icono_path)}}" alt="imgen San Fernando" class="img-responsive img-general"/>
              <input type="file" class="form-control file"  name="icono">
            </div>
          </div>
        </div>
        <input type="hidden"  name="idprodidioma_es" value="{{$producto->idprodidioma}}"/>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Nombre Producto</label>
              <input type="text" class="form-control" name="nombre_es_newproducto" value="{{$producto->nombre}}" required>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1">Introducción</label>
              <textarea name="intro_es_newproducto" class="form-control" rows="3" placeholder="">{!! $producto->intro !!}</textarea>
            </div>
          </div>
        </div>
        <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >Imagen Producto</label>
                <img src="{{url($producto->imagen_intro_path)}}" alt="imgen San Fernando" class="img-responsive img-general"/>
                <input type="file" class="form-control file" name="imagen_intro">
              </div>
            </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Texto botón</label>
              <input type="text" class="form-control" name="texto_boton_es" value="{{$producto->texto_boton}}">
            </div>
          </div>
        </div>

        <div class="col-md-12"><h4>Detalle Producto</h4><br></div>

        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Título Detalle</label>
              <input type="text" class="form-control" name="titulo_detalle_es" value="{{$producto->titulo_detalle}}">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Título descripción</label>
              <input type="text" class="form-control" name="titulo_es_newproducto" value="{{$producto->titulo}}">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1">Descripción Detalle</label>
              <textarea name="descripcion_detalle_es" class="form-control" rows="3" placeholder="">{!! $producto->descripcion_detalle !!}</textarea>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1">Descripción Producto</label>
              <textarea name="descripcion_es_newproducto" class="form-control" rows="3" placeholder="">{!! $producto->descripcion !!}</textarea>
            </div>
          </div>
        </div>
        <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >Imagen Flotante</label>
                @if ($producto->imagen_flotante)
                <img src="{{url($producto->imagen_flotante_path)}}" alt="imgen San Fernando" class="img-responsive img-general"/>
                @endif
                <input type="file" class="form-control file" name="imagen_flotante">
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >Imagen Fondo</label>
                @if ($producto->imagen_fondo)
                    <img src="{{url($producto->imagen_fondo_path)}}" alt="imgen San Fernando" class="img-responsive img-general"/>
                @endif

                <input type="file" class="form-control file" name="imagen_fondo">
              </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >Icono Certificado 1</label>
                @if ($producto->icono_certificado1)
                  <img src="{{url($producto->icono_certificado1_path)}}" class="img-responsive img-general"/>
                @endif
                <input type="file" class="form-control file" name="icono_certificado1">
              </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group has-success">
              <div class="input-icon">
                <label for="form_control_1" >Icono Certificado 2</label>
                @if ($producto->icono_certificado2)
                    <img src="{{url($producto->icono_certificado2_path)}}" class="img-responsive img-general"/>
                @endif
                <input type="file" class="form-control file" name="icono_certificado2">
              </div>
            </div>
        </div>
        <div class="col-md-12"><h4>Descripción Receta</h4><br></div>

        <div class="col-md-12">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1">Descripción receta</label>
              <textarea name="descripcion_es_receta" class="form-control" rows="3" placeholder="">{!! $producto->texto_receta !!}</textarea>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <input name="idreceta" type="hidden" value="" class="idreceta-selected"/>
          <div class="recetas-productos row row-nomargin" id="recetasproductos">
            @foreach($recetas as $receta)
            <a class="link-detrect select-receta">
              <input type="hidden" class="id-receta" value="{{$receta->id_receta}}"/>
              <div class="item-receta">
              <div class="img-recrec" style="background: url('images/receta1.png') no-repeat center center; background-size: cover;">
              </div>
              <div class="txt-recrec">
                <h1 class="tit-recrec">{{$receta->titulo}}</h1>
                <p class="parraf-recrec12">{{$receta->numero_porciones}} Personas</p>
              </div>
            </div>
            @if($receta->id_receta==$producto->id_receta)
            <span class="fa-check-circle fa check-receta"></span>
            @endif
            </a>
            @endforeach

          </div>

        </div>

      </div>


      <div class="form-actions noborder">
        <button type="submit" class="btn blue">Guardar cambios</button>
      </div>
    </div>

  </div>
</div>
{!! Form::close() !!}
<script>
$(document).on('click', '.select-receta', function(){
  var receta = $(this).find('.id-receta');
  if($(".idreceta-selected").val() == $(receta).val())
  {
    $(".idreceta-selected").val('');
    $('.select-receta').find('.check-receta').remove();
  }
  else{
    $(".idreceta-selected").val($(receta).val());
    $('.select-receta').find('.check-receta').remove();
    $(this).append('<span class="fa-check-circle fa check-receta"></span>');
  }

});
</script>
<script type="text/javascript">

$('.recetas-productos').slick({
          dots: false,
          slidesToShow: 5,
          slidesToScroll: 1,
          touchMove: true,
          autoplay:true,
          responsive: [
          {
            breakpoint: 1279,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              infinite: true,
              autoplay:true,
              dots: false
            }
          },
          {
            breakpoint: 939,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              arrows: false,
              dots: false,
              autoplay:true,
              centerMode: true,
              centerPadding: '40px'
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              arrows: false,
              dots: false,
              autoplay:true,
              centerMode: true,
              centerPadding: '40px'
            }
          },
          {
            breakpoint: 415,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              dots: false,
              autoplay:true,
              centerMode: true,
              centerPadding: '40px'
            }
          }
        ]
      });
</script>
@endsection
