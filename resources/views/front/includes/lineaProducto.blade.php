<div class="lineaProducto">
  <div class="row row-nomargin row-global">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-nopadding">
      <div class="cont-linprod">
      <ul class="nav nav-tabs tabs-productos">
        @foreach ($productos as $producto)
        <li>
          <a class="txt-productos" data-toggle="tab" href="{!!'#'.$producto->slug!!}" id="tab_{{$producto->slug}}">
            <div class="cont-img-prod"><img src="{!!url($producto->icono_path)!!}" alt="producto San Fernando" class="img-responsive img-producto svg"/></div>
            {!!$producto->nombre!!}
          </a>
          <span class="triangulo"></span>
        </li>
        @endforeach
      </ul>
      <div class="tab-content contenido-producto">
        @foreach ($productos as $producto)
        <div id="{!!$producto->slug!!}" class="tab-pane">
          <div class="row detprod">
            <div class="col-sm-6 col-xs-12 detalle-izquierda col-nopadding">
              <div class="img-prod-cont" style="background: url('{!!url($producto->imagen_intro_path)!!}') no-repeat center center; background-size: contain;"></div>
            </div>
            <div class="col-sm-6 col-xs-12 detalle-derecha">
              <div class="lp-producto">
                <h1 class="txt-blanco50">{!!$producto->nombre!!}</h1>
                <p class="lpparraf-blanco14">{!!$producto->intro!!} </p>
                  @if ($producto->texto_boton != '')
                    <a class="btn-red" href="{!!url('/detalle-producto/'.$producto->slug)!!}">{!!$producto->texto_boton!!}</a>
                  @endif
              </div>
              @if ($producto->texto_receta != '')
              <div class="lp-receta">
                <h1 class="txt-blanco50">Recetas</h1>
                @if ($producto->video != '')
                <div class="cont-recetavideo embed-responsive embed-responsive-4by3">
                  <a id="video2" href="#" class="yt-video-product" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/{{$producto->video}}"><img class="youtube" src="https://img.youtube.com/vi/{{$producto->video}}/1.jpg" title="..." /><img class="youtube-play" src="images/youtube-play.png" title="icono youtube play"/></a>
                </div>
                @endif
                <p class="lpparraf-blanco14">{!!$producto->texto_receta!!}</p>
                <a class="btn-red" href="{!!url('/detallerecetas/'.$producto->slug_receta)!!}">Ver más</a>
              </div>
              @endif
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- Fin Tabs linea de productos -->
    </div>
    </div>
    </div>
    <!-- <div class="col-md-1 hidden-xs"></div> -->
  </div>

<style media="screen">
  #videoModal iframe{
    margin-left: 0px !important;
    width: 100% !important;
  }
</style>
<script type="text/javascript">
$(".vermas_hamburguesa").click(function(){
  sessionStorage.setItem('receta', 'Hamburguesita Divertida');
});
$(".vermas_cerdo").click(function(){
  sessionStorage.setItem('receta', 'Brazuelo entero de cerdo en salsa de naranja');
});
function call_modal(id){
$(id).click(function () {
    var theModal = $(this).data("target"),
        videoSRC = $(this).attr("data-theVideo"),
        videoSRCauto = videoSRC + "?autoplay=1";
    $(theModal + ' iframe').attr('src', videoSRCauto);
    $(theModal + ' button.close').click(function () {
        $(theModal + ' iframe').attr('src', videoSRC);
    });
});
}

$(document).ready(function(){

  $(".tabs-productos").children().click(function(){
  var href= $(this).find('a').attr('href');
  $(href).addClass('animated fadeInDown');
  });
  call_modal('#video1');
  call_modal('#video2');
  call_modal('#video3');
  call_modal('#video4');
  call_modal('#video5');
  call_modal('#video6');
  call_modal('#video7');
  call_modal('#video8');
});
jQuery('img.svg').each(function(){
           var $img = jQuery(this);
           var imgID = $img.attr('id');
           var imgClass = $img.attr('class');
           var imgURL = $img.attr('src');

           jQuery.get(imgURL, function(data) {
               // Get the SVG tag, ignore the rest
               var $svg = jQuery(data).find('svg');

               // Add replaced image's ID to the new SVG
               if(typeof imgID !== 'undefined') {
                   $svg = $svg.attr('id', imgID);
               }
               // Add replaced image's classes to the new SVG
               if(typeof imgClass !== 'undefined') {
                   $svg = $svg.attr('class', imgClass+' replaced-svg');
               }

               // Remove any invalid XML tags as per http://validator.w3.org
               $svg = $svg.removeAttr('xmlns:a');

               // Replace image with new SVG
               $img.replaceWith($svg);

           }, 'xml');

       });
</script>
<script type="text/javascript">
$(document).ready(function(){
  $(".tabs-productos").find('li').first().addClass("active");
  $(".contenido-producto").find('.tab-pane').first().addClass("in active");
});

</script>
