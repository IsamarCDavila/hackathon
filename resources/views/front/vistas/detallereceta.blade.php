@extends('app.appfront')
<?php
$title = $receta->titulo.'- San Fernando';
?>
@section('style')
<link href="{!!url('css/recetas.css')!!}" rel="stylesheet" type="text/css" />
<link href="{!!url('css/style.css')!!}" rel="stylesheet" type="text/css" />
@endsection
@section('script')
@endsection
<!-- /.heading-->
@section('content')
  @include('front.includes.header')
  <div class="recetaDetalle-cont">
  <div class="cont-receta row row-nomargin">
    <div class="row-global">
      <div class="cont-receta-txt">
        <div class="link-receta">
          <span class="txt-blanco18">Recetas</span>
          <span class="txt-blanco18">/</span>
          <span class="txt-blanco18">Cerdo</span>
          <span class="txt-blanco18">/</span>
          <span class="txt-blanco18 name_receta">{!!$receta->nombre!!}</span>
        </div>
        <h1 class="nombre-receta">{!!$receta->titulo!!}</h1>
      </div>
    </div>
  </div>
  <div class="cont-porciones row ">
    <div class="row-global">
      <div class="resp-porciones">
        <span class="">
          @if ($receta->minutos_coccion !="")
          <span class="txt-dorado52 tiempo_receta">{!!$receta->minutos_coccion!!}</span>
          @else
          <span class="txt-dorado52 tiempo_receta">--</span>
          @endif
          <img src="{!!url('images/icon-time.svg')!!}" alt="Recetas San Fernando" class="image-responsive ico-receta"/>
        </span>
        <span class="line-dorada hidden-xs"></span>
        <span class="">
          @if ($receta->numero_porciones !="")
          <span class="txt-dorado52 porciones_receta">{!!$receta->numero_porciones!!}</span>
          <span class="txt-dorado52 porciones_receta">Porciones</span>
          @else
          <span class="txt-dorado52 porciones_receta">--</span>
          @endif
          <img src="{!!url('images/icon-plate.svg')!!}" alt="porciones San Fernando" class="image-responsive ico-receta"/>
        </span>
      </div>
    </div>
  </div>
  <div class="cont-recetarelacionada row row-nomargin">
    <div class="row-global">
      <div class="col-xs-12 col-nopadding">
        <div class="detalle-receta col-md-12 col-nopadding">
          <div class="col-md-6 col-sm-6 col-xs-12 col-nopadding col-video videoWrapper">
            <div class="embed-responsive embed-responsive-4by3">
                @if ($receta->video !="")
                <iframe class="videoreceta" src="https://www.youtube.com/embed/{{$receta->video}}?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                @else
                <div class="img-prod-cont" style="background: url('{!!url($receta->path_imagen)!!}') no-repeat center center; background-size: contain;"></div>
                @endif
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 col-nopadding col-ingredientes">
            <div class="lista-ingredientes">
              <div class="todos-ingredientes">
                <h1 class="ingredientes">Ingredientes</h1>
                <div class="contenedor-ingredientes scrollbar">
                  <div class="detalleingrediente nombre-ingrediente">
                    {!!$receta->ingredientes!!}
                  </div>
                </div>
                @if ($receta->preparacion !="")
                <div class="cont-btnlp">
                  <a class="btn-vermas dropdown-toggle" href="#" type="button" data-toggle="dropdown" id="open-recipe">LEER PREPARACIÓN</a>
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="redes-receta row">
          <div class="col-lg-12 col-sm-12 col-xs-12 col-redes">
            <span class="txt-redes">Compartir esta receta:</span>
            <a href="http://www.facebook.com/sharer/sharer.php?u="javascript:$("nombre-receta").html();"&amp; Receta" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank"><img src="{!!url('images/icon-fb.png')!!}" alt="facebook San Fernando" class="image-responsive ico-redes"/></a>
            <a href="http://twitter.com/share?text="="javascript:$("nombre-receta").html();" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"  target="_blank"><img src="{!!url('images/icon-tw.png')!!}" alt="twitter San Fernando" class="image-responsive ico-redes"/></a>
          </div>
          </div>
      </div>
    </div>
  </div>
  <div class="row recipe-container">
    <div class="recipe-content">
      <div class="icon-plate-cont"><img src="{!!url('images/icon-preparation.svg')!!}" class="img-responsive  text-center" alt="icono preparacion receta"></div>
      <h2 class="text-center">Modo de Preparación</h2>
      <ul class="list-unstyled">
        {!!$receta->preparacion!!}
      </ul>
      <div class="close-btn-cont">
        <button type="button" name="button" align="center" id="close-recipe">CERRAR PREPARACIÓN</button>
      </div>
    </div>
  </div>
  <div class="recetas-rel-shadow footer-shadow">
    <div class="recetas-relacionadas-cont">
      <div class="cont-relacionadas">
        <h1 class="receta-relacionada">Recetas Recomendadas</h1>
        <p class="parraf-relacionada hidden-xs">Prueba cualquiera de estas ricas preparaciones</p>
      </div>
      <div class="row li_preparacion">
          @include('front.includes.recetasrecomendadas')
      </div>
    </div>
  </div>
</div>
  @include('front.includes.footer')

  <script src="{!!url('js/jsonReceta.js')!!}"></script>

<script type="text/javascript">
  $(document).ready(function(){
    sizeTheVideo1();
    $(window).resize(function(){
      sizeTheVideo1();
    });
  });
  function sizeTheVideo1(){
    var aspectRatio = 1.78;
    var video = $('.videoWrapper div iframe');
    var videoHeight = video.outerHeight();
    var newWidth = videoHeight*aspectRatio;
    var halfNewWidth = newWidth/2;
  video.css({"width":newWidth+"px","left":"50%","margin-left":"-"+halfNewWidth+"px"});
  }
</script>

{{-- <script type="text/javascript">
// $(document).on('ready', function() {
  var data = sessionStorage.getItem('receta');
  console.log("recerta",data);
  var info_receta = getObjects(recetas, 'name', data);
  $(".detalleingrediente").remove();
  var len = info_receta[0].cantIngrediente;
  for(var i=1;i<=len;i++){
    $(".contenedor-ingredientes").append("<span class='nombre-ingrediente'>"+info_receta[0].Ingredientes[i]+"</span><br>");
  }

  $(".recipe-content").find(".list-unstyled li").remove();
  var len_preparacion = info_receta[0].cantPreparacion;
  for(var i=1;i<=len_preparacion;i++){
    $(".recipe-content").find(".list-unstyled").append("<li><h3>"+i+".- "+info_receta[0].preparacion[i]+"</h3></li>");
  }

  $(".name_receta").html(info_receta[0].name);
  $(".nombre-receta").html(info_receta[0].name);
  $(".tiempo_receta").html(info_receta[0].tiempo_receta);
  $(".porciones_receta").html(info_receta[0].porciones_receta);

  if(info_receta[0].categoria=='imagen'){
    $(".img-prod-cont").css("display",'block');
    $(".categoria_video").css("display",'none');
    $(".img-prod-cont").css("background",info_receta[0].imagen);
    $(".img-prod-cont").css("background-size",'contain');
    $(".img-prod-cont").css("background-repeat","no-repeat");
    $(".img-prod-cont").css("background-position",'center');
  }
  else{
    $(".img-prod-cont").css("display",'none');
    $(".categoria_video").css("display",'block');
    $(".categoria_video").attr("src",info_receta[0].video);
  }

  // console.log("dataaa",info_receta[0].name);

// });

function getObjects(obj, key, val) {
  var objects = [];
  for (var i in obj) {
      if (!obj.hasOwnProperty(i)) continue;
      if (typeof obj[i] == 'object') {
          objects = objects.concat(getObjects(obj[i], key, val));
      } else if (i == key && obj[key] == val) {
          objects.push(obj);
      }
  }
  return objects;
}
</script> --}}
@endsection
