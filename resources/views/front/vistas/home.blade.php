@extends('app.appfront')
<?php
$title = 'San Fernando - Peru';
?>
@section('style')
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
<link href="<?php echo URL::asset('css/home.css'); ?>" rel="stylesheet" type="text/css" />
@endsection
@section('script')
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
@endsection
<!-- /.heading-->

@section('content')
<div id="container-sanfer" class="container-sanfer">
<div id="home" class="page-content-wrapper">
      <div class="home-container">
          @include('front.includes.header')
          <div class="section-menu menu-slider row">
            <div class="cont-slider slider_principal">
              <div id="myCarouselhome" class="carousel sliderhome" data-ride="carousel">
                <div class="carousel-inner homeslider" role="listbox">
                @foreach ($sliders as $slider)

                  @if($slider->button_txt!='Crear')
                  <div class="item">
                    <div class="col-lg-6 col-sm-6 col-xs-12 menu-slider col-nopadding">
                      <div class="col-lg-offset-3 col-lg-7 col-sm-offset-3 col-sm-7 col-xs-12 col-nopadding cont-familia-slider cont-familia-principal">
                        <div class="text-back">
                          <p class="familia">{!!$slider->texto_background!!}</p>
                        </div>
                        <p class="mejores">{!!$slider->descripcion!!}</p>
                        <div class="linea-slider"></div>
                        @if ($slider->url_boton !="")
                          <div class="cont-btnconocenos">
                            @if ($slider->url_tipo == 1)
                            <a class="btn-conocenos" target="_blank" href="{!!$slider->url_boton!!}" id="banner_{{str_replace(' ', '_',Funciones::clean_string($slider->button_txt))}}">{!!$slider->button_txt!!}</a>
                            @else
                            <a class="btn-conocenos" href="{!!url('/'.$slider->url_boton)!!}" id="banner_{{str_replace(' ', '_',Funciones::clean_string($slider->button_txt))}}">{!!$slider->button_txt!!}</a>
                            @endif
                          </div>
                          @endif
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 hidden-xs  menu-slider col-nopadding">
                      @if ($slider->url_tipo == 1)
                      <a href="{!!$slider->url_boton!!}" target="_blank" id="banner_img_{{str_replace(' ', '_',Funciones::clean_string($slider->button_txt))}}">
                      @else
                      <a href="{!!url('/'.$slider->url_boton)!!}" id="banner_img_{{str_replace(' ', '_',Funciones::clean_string($slider->button_txt))}}">
                      @endif
                        <div class="cont-imghome" style="background: url('{!!url($slider->path_imagen)!!}') no-repeat center center; background-size: cover;" >
                        </div>
                      </a>
                    <div class="overlay"></div>
                    </div>
                  </div>
                @else
                  <div class="item hidden-xs">
                    <div class="col-lg-6 col-sm-6 col-xs-12 menu-slider col-nopadding">
                      <div class="col-lg-offset-3 col-lg-7 col-sm-offset-3 col-sm-7 col-xs-12 col-nopadding cont-familia-slider cont-familia-principal">
                        <div class="text-back">
                          <p class="familia">{!!$slider->texto_background!!}</p>
                        </div>
                        <p class="mejores">{!!$slider->descripcion!!}</p>
                        <div class="linea-slider"></div>
                        @if ($slider->url_boton !="")
                          <div class="cont-btnconocenos">
                            @if ($slider->url_tipo == 1)
                            <a class="btn-conocenos" target="_blank" href="{!!$slider->url_boton!!}" id="banner_{{str_replace(' ', '_',Funciones::clean_string($slider->button_txt))}}">{!!$slider->button_txt!!}</a>
                            @else
                            <a class="btn-conocenos" href="{!!url('/'.$slider->url_boton)!!}" id="banner_{{str_replace(' ', '_',Funciones::clean_string($slider->button_txt))}}">{!!$slider->button_txt!!}</a>
                            @endif
                          </div>
                          @endif
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 hidden-xs  menu-slider col-nopadding">
                      @if ($slider->url_tipo == 1)
                      <a href="{!!$slider->url_boton!!}" target="_blank" id="banner_img_{{str_replace(' ', '_',Funciones::clean_string($slider->button_txt))}}">
                      @else
                      <a href="{!!url('/'.$slider->url_boton)!!}" id="banner_img_{{str_replace(' ', '_',Funciones::clean_string($slider->button_txt))}}">
                      @endif
                        <div class="cont-imghome" style="background: url('{!!url($slider->path_imagen)!!}') no-repeat center center; background-size: cover;" >
                        </div>
                      </a>
                    <div class="overlay"></div>
                    </div>
                  </div>
                  <script type="text/javascript">
                  var mediaquery = window.matchMedia("(max-width: 767px)");
                    if (mediaquery.matches) {
                         $('.hidden-xs').remove();
                    } else {
                      // mediaquery no es 767
                    }

                  </script>
                @endif
              @endforeach

                </div>
              </div>
              <!-- Botones slider -->
             <div class="botones-avanzar hidden-xs">
               <button class="btn-retrocede" href="#myCarouselhome" data-slide="prev" id="home_carousel_left">
                 <img src="images/arrow-left.png" alt="slider San Fernando"class="img-responsive"/>
               </button>
               <button class="btn-adelanta" href="#myCarouselhome" data-slide="next" id="home_carousel_right">
                 <img src="images/arrow-right.png" alt="slider San Fernando" class="img-responsive"/>
               </button>
             </div>
             <!-- Fin Botones slider -->
            </div>

          </div>
          <!-- Banner Home Historia -->
          <div class="menu-nosotros row banner bloque_1">
            <p class="titulo_db" data-aos="fade-up"></p>
            <p class="descripcion_db" data-aos="fade-up"></p>
            <div align="center" data-aos="fade-up">
              <a class="btn-red historia"></a>
            </div>
          </div>
          <!--Banner Home Historia  -->

          <!-- Seccion Puntos de Venta  -->
          <div class="menu-puntos-vta row banner bloque_2">
            <div class="col-lg-12 col-sm-12 col-xs-12 puntos-vta">
              <h3 class="txt-azul46 titulo_db" data-aos="fade-in"></h3>
              <p class=data-aos="fade-up descripcion_db"></p>
              <div align="center">
                <a class="btn-red"  data-aos="fade-in"></a>
              </div>
            </div>
          </div>
          <!-- Seccion Puntos de Venta -->
          <!-- Banner Home informacion nutricional-->
          <!-- <div class="4"></div> -->
          <div class="menu-nosotros row banner bloque_3">
            <div class="col-lg-3 hidden-sm hidden-xs"></div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
              <p data-aos="fade-up" class="titulo_db"></p>
              <br>
              <p data-aos="fade-up" class="descripcion_db"></p>
            </div>

            <div class="col-lg-4 col-sm-6  col-xs-12  row-buscador">
              <div class="cont-buscadorreceta col-xs-12" data-aos="fade-up">
                <input type="text" class="form-control input-buscador" placeholder="Busca un producto">
                <a class="btn-buscar" href="#"><i class="fa fa-search"></i></a>
              </div>
            </div>

            <div class="col-lg-2 hidden-sm hidden-xs"></div>
          </div>

          <!--Banner Home informacion nutricional -->
          <div class="lineaProductoCont row row-nomargin">
            <div class="lineaProducto-title">
              <div class="row-global col-xs-12 col-nopadding">
                <h1>Línea de Productos</h1>
              </div>
            </div>
            @include('front.includes.lineaProducto')
          </div>
          <!--  Banner Home Frase-->
          <!-- Seccion Puntos de Venta  -->
          <div class="menu-puntos-vta row banner bloque_4">
            <div class="col-lg-12 col-sm-12 col-xs-12 puntos-vta">
              <h3 class="txt-azul46 titulo_db" data-aos="fade-in"></h3>
              <p class="parraf-negro18 hidden-xs descripcion_db" data-aos="fade-in"></p>
              <div align="center">
                <a class="btn-red" data-aos="fade-in"></a>
              </div>
            </div>
          </div>
          <!-- Seccion Puntos de Venta -->


<div class="noticias-mitos row row-nomargin">
  <div class="mitos-inner-cont">
    <!-- Seccion Noticias -->
    <div class="noticias noticias-home hidden-lg hidden-md hidden-sm bloque_5">
      <div class="container">
        <h1 class="titDorado titulo_db">Noticias</h1>
        @include('front.includes.sliderNoticias')
        <div class="verTodasCont">
          <a class="link-vertodas" href="{!!url('/noticias')!!}">VER TODAS</a>
        </div>
      </div>
    </div>
    <div class="menu-noticias hidden-xs">
      <div class="cont-noticiasmenu col-md-6 col-sm-6 hidden-xs bloque_5">
        <div class="col-lg-offset-2 col-lg-6 col-sm-offset-1 col-sm-11">
          <h1 class="tit-blanco46 titulo_db">Noticias</h1>
          <p class="parraf-blanco14 descripcion_db">Todas las noticias relacionadas a San Fernando.</p>
        </div>
        <div class="items-noticias">
          <?php
          $count=0;
          ?>
          @foreach ($noticias as $noticia)
            @if ($noticia->es_destacado == 1)

              @if($count>=2)
                <div class="col-lg-4 col-sm-5 second-news">
                    <div class="">
                    <img src="{!!url($noticia->path_imagen)!!}" class="img-responsive"  alt="" >
                  </div>
                  <div class="det-noticia">
                    <p class="tit-blanco18">{!!$noticia->titulo!!}</p>
                    <p class="parraf-blanco12">{!!$noticia->intro!!}
                      <br>
                      <a class="parraf-blanco12" href="{!!url('/noticias')!!}">ver más...</a>
                    </p>
                  </div>
                </div>
              @else
              <div class="col-lg-offset-2 col-lg-4 col-sm-offset-1 col-sm-5">
                <div class="">
                  <img src="{!!url($noticia->path_imagen)!!}" class="img-responsive"  alt="" >
                </div>
                <div class="det-noticia">
                  <p class="tit-blanco18">{!!$noticia->titulo!!}</p>
                  <p class="parraf-blanco12">{!!$noticia->intro!!}
                    <br>
                    <a class="parraf-blanco12" href="{!!url('/noticias')!!}">ver más...</a>
                  </p>
                </div>
              </div>
              @endif
            @endif
            <?php
            $count++;
            ?>
            @endforeach
        </div>
        <div class="col-lg-offset-2 col-lg-6 col-sm-offset-1 col-sm-11">
          <a class="link-vertodas" href="{!!url('/noticias')!!}">VER TODAS</a>
        </div>
      </div>
    </div>
    <!-- Seccion Mitos -->
    <div class="cont-mitosmenu col-md-6 col-sm-6 col-xs-12">
      <div class="col-sm-offset-right-1 col-sm-offset-1">
        <h1 class="tit-dorado18">Aclarando </h1>
        <ul class="nav nav-tabs tabs-mitos tab-mostrar">
          <li class="righttab">
            <a class="txt-mitos" data-toggle="tab" href="#mito1" id="a_mito1">
              <span class="nro">1</span><span class="tit-blanco20 pos-texto">Crianza</span>
            </a>
          </li>
          <li>
            <a class="txt-mitos" data-toggle="tab" href="#mito2" id="a_mito2">
              <span class="nro">2</span><span class="tit-blanco20 pos-texto">Salud</span>
            </a>
          </li>
          <li class="">
            <a class="txt-mitos" data-toggle="tab" href="#mito3" id="a_mito3">
              <span class="nro">3</span><span class="tit-blanco20 pos-texto">Fitness</span>
            </a>
          </li>
        </ul>
        <div class="tab-content contenido-mito">
          <div id="mito1" class="tab-pane fade in">
            <div class="row det-mito row-nomargin">
              <div class="col-md-3 col-xs-3">
                <img src="images/gallina.svg" alt="mitos San Fernando" class="img-responsive img-mito"/>
              </div>
              <div class="col-md-6 col-xs-8">
                <div class="mito-cont animated">
                  <h1 class="tit-mito">Mito:</h1>
                  <div class="linea-punteada"></div>
                  <p class="parraf-mito">Los pollos no están bien alimentados.</p>
                <button class="btn-true btn-red btn-red-mito" id="verdad1"><span class="true">CONOCE LA VERDAD AQUÍ</span></button>
                </div>
                <div class="verdad-cont animated">
                  <div class="top-arrow">
                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    <span>Verdad:</span>
                  </div>
                  <p>En San Fernando, tenemos nuestra propia planta de alimento balanceado donde procesamos nuestra propia soya y
maíz siguiendo los mayores estándares de calidad y seguridad alimentaria a nivel mundial. Nuestros pollos crecen
únicamente a base de una buena alimentación sin la utilización de hormonas en ninguna parte del proceso.</p>
                </div>
              </div>
            </div>
          </div>
          <div id="mito2" class="tab-pane fade mito">
            <div class="row det-mito row-nomargin">
              <div class="col-md-3 col-xs-3">
                <img src="images/huevo.svg" alt="mitos San Fernando" class="img-responsive"/>
              </div>
              <div class="col-md-6 col-xs-8">
                <div class="mito-cont animated">
                  <h1 class="tit-mito">Mito:</h1>
                  <div class="linea-punteada"></div>
                  <p class="parraf-mito">El huevo frito tiene mucha grasa.</p>
                <button class="btn-true btn-red btn-red-mito" id="verdad2"><span class="true">CONOCE LA VERDAD AQUÍ</span></button>
                </div>
                <div class="verdad-cont animated">
                  <div class="top-arrow">
                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    <span>Verdad:</span>
                  </div>
                  <p>Te comentamos que el huevo cuenta con una absorción de aceite limitada durante la fritura, esto no afectará de
manera significativa sus calorías regulares. Sin embargo, puedes también disfrutarlo sancochado.</p>
                </div>
              </div>
            </div>
          </div>
          <div id="mito3" class="tab-pane fade mito">
            <div class="row det-mito row-nomargin">
              <div class="col-md-3 col-xs-3">
                <img src="images/pavo.svg" alt="mitos San Fernando"  class="img-responsive img-mito"/>
              </div>
              <div class="col-md-6 col-xs-8">
                <div class="mito-cont animated">
                  <h1 class="tit-mito">Mito:</h1>
                  <div class="linea-punteada"></div>
                  <p class="parraf-mito">Todos los embutidos son altos en grasas.</p>
                <button class="btn-true btn-red btn-red-mito" id="verdad3"><span class="true">CONOCE LA VERDAD AQUÍ</span></button>
              </div>
                <div class="verdad-cont animated">
                  <div class="top-arrow">
                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    <span>Verdad:</span>
                  </div>
                  <p>No es cierto. Tenemos dentro de nuestras opciones como nuestra línea de pavita con bajo porcentaje de grasa y
recomendado dentro de una alimentación balanceada.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <ul class="nav nav-tabs tabs-mitos hidden-lg hidden-md hidden-sm">
          <li class="righttab">
            <a class="txt-mitos" data-toggle="tab" href="#mito3">
              <span class="nro">3</span><span class="tit-blanco20 pos-texto">Valor<br>nutricional</span>
            </a>
          </li>
          <li>
            <a class="txt-mitos" data-toggle="tab" href="#mito4">
              <span class="nro">4</span><span class="tit-blanco20 pos-texto">Fitness</span>
            </a>
          </li>
        </ul> --}}
      </div>
    </div>
  </div>
</div>

    @include('front.includes.trabaja')
    @include('front.includes.footer')
      </div>
    </div>
    <!--inicio modal-->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div>
                      <iframe width="100%" height="400px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="embed-responsive-item" src="" frameborder="0"></iframe>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
  <script type="text/javascript">
  var banner={!!$banners!!};
  var url = "{!! url('/') !!}";
</script>
<script src="js/banners.js"></script>
<script src="js/home.js"></script>
@endsection
