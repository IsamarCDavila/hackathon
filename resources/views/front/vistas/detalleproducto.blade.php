@extends('app.appfront')
<?php
$title = $producto->titulo_detalle.' - San Fernando';
?>
@section('style')
<link href="<?php echo URL::asset('css/detalleproducto.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('css/recetas.css'); ?>" rel="stylesheet" type="text/css" />
@endsection
@section('script')
@endsection
@section('content')
  @include('front.includes.header')
  <div class="detalleProducto-cont container-sanfer" id="container-sanfer">
  <div class="row cont-cabecera row-nomargin">
    <div class="main-text-cont">
      <h1 class="tit-cabecera">{{$producto->titulo_detalle}}</h1>
      <p class="parraf-cabecera">{{$producto->descripcion_detalle}}</p>
    </div>
  </div>
  <div class="color-fondo">
    <div class="row row-global">
      <div class="col-xs-12">
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12 col-nopadding icon-title">
                <div class="col-md-2 col-xs-2 col-nopadding" width="auto"><img class="icon-pavo img-responsive" src="{!!url('upload/productos/'.$producto->icono)!!}" alt="icon producto" width="72px"></div>
                <div class="col-md-10 col-xs-7 col-nopadding"> <p class="title-detalle">{{$producto->titulo}}</p></div>
            </div>
            <div class="col-md-12 col-xs-12 col-nopadding icon-pg">
              <p class="subtitle-detalle">{{$producto->descripcion}}</p>
              <div class="img-certificados">
                <img src="{!!url('images/ISO_9001.png')!!}" style="margin-right: 10px;" width="57px" alt="certificado San Fernando">
                <img src="{!!url('images/ISO_14001.png')!!}" width="57px" alt="certificado San Fernando">
              </div>
            </div>
        </div> <!--col-md-4-->
        <div class="col-md-8 col-xs-12 imagen-sinpadding" style="background: url('{!!url('upload/productos/'.$producto->imagen_fondo)!!}') no-repeat center center; background-size: cover; height: 408px;">
          <div class="col-xs-offset-5 col-xs-2 col-md-2 hidden-md img-float col-nopadding">
            <!--col-xs-offset-4 col-xs-2 col-md-2 hidden-md img-float-->
            @if ($producto->imagen_flotante_path != '')
            <img src="{!!url($producto->imagen_flotante_path)!!}" alt="Producto San Fernando" class="visible-xs pavo-res" width="173px">
            @endif
          </div>
          <div class="col-xs-2 col-md-2 img-float hidden-xs">
            @if ($producto->imagen_flotante_path != '')
            <img src="{!!url($producto->imagen_flotante_path)!!}" alt="Producto San Fernando" class="img-escritorio" width="173px">
            @endif
          </div>
        </div>
        <div class="col-md-1">
        </div>
      </div>
    </div>

    @if ($producto->slug == 'pollos' || $producto->slug == 'pollo')
    <div class="row row-nomargin row-global inforgrafia_producto">
      <div class="col-xs-12">
        <div class="col-md-3"></div>
        <div class="col-md-6">  <img src="{!!url('images/infografia_pollo.jpg')!!}" alt="Infografia Pollo San Fernando" class="img-responsive"></div>
        <div class="col-md-3"></div>
      </div>
    </div>
    @elseif($producto->slug == 'pavos' || $producto->slug == 'pavo')
    <div class="row row-nomargin row-global inforgrafia_producto">
      <div class="col-xs-12">
        <div class="col-md-2"></div>
        <div class="col-md-8">  <img src="{!!url('images/infografia_pavo.png')!!}" alt="Infografia Pavo San Fernando" class="img-responsive"></div>
        <div class="col-md-2"></div>
      </div>
    </div>
    @endif
  </div>
  <div class="row back-color row-nomargin row-global">
    <div class="col-xs-12">
      <div class="cont-relacionadas-dos">
        <h1 class="receta-relacionada">Recetas Recomendadas</h1>
        <p class="parraf-relacionada col-nopadding">Prueba cualquiera de estas ricas preparaciones</p>
      </div>
      @include('front.includes.recetasrecomendadas')
  </div>
  </div>
  <!--linea producto-->
  <div class="lineaProducto-detalle">
    <div class="row row-global">
      <div class="col-xs-12">
        <div class="col-md-12 col-xs-12 col-nopadding">
          <p class="detalle-variedades">Más Productos de la familia</p>
          <p class="detalle-line"></p>
          <p class="detalle-subtitle-blue">Otros de nuestros productos San Fernando.</p>
        </div>
      </div>
    </div>
    @include('front.includes.linkslineaProducto')
  </div>
  <!--fin linea Producto-->
  @include('front.includes.footer')
</div>

@endsection
