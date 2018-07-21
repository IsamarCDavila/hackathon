@extends('app.appfront')
<?php
$title = 'Recetas - San Fernando';
?>
@section('style')
@endsection
@section('script')
@endsection
<!-- /.heading-->
@section('content')
  @include('front.includes.header')
  <div id="container-sanfer" class="container-sanfer">
    <div class="receta-cont footer-shadow">
      <div class="cont-cabecera row row-nomargin">
        <div class="row-global">

          <div class="col-lg-offset-3 col-lg-7 col-sm-10 col-xs-12 col-sm-offset-1 col-nopadding">
            <h1 class="tit-cabecera">Nuestras Recetas</h1>
            <p class="parraf-cabecera">¿Buscas un poco de inspiración?  Te damos algunas recetas  para que cocines una variedad de platos para engreír a toda tu familia.</p>
          </div>
        </div>
      </div>
      <div class="cont-recetas row">
        <div class="row row-nomargin row-global hidden">
          <div class="cont-buscadorreceta col-xs-12 ">
            <input type="text" class="form-control input-buscador" placeholder="Busque por cualquier palabra">
            <a id="buscar_receta" class="btn-buscar" href="{!!url('/detallerecetas')!!}">Buscar</a>
          </div>
        </div>
        @foreach ($productos as $producto)
        <div class="slider-recetas-cont row-global">
          <div class="slider-recetas col-xs-12 ">
            <div class="contenidorecetas row row-nomargin">
              @if(count($data[$producto->id])>0)
              <h1 class="receta-titulo">{{$producto->nombre}}</h1>
              <p class="receta-parrafo">Aquí te damos algunas recetas con {{$producto->nombre}} San Fernando.</p>
              @endif
            </div>

            <div class="recetas-productos row row-nomargin" id="recetasproductos">
                @foreach ($data[$producto->id] as $key)
              <a class="link-detrect" href="{!!url('/detallerecetas/'.$key->slug)!!}">
                <div class="item-receta">
                <div class="img-recrec" style="background: url('{!!url($key->path_imagen)!!}') no-repeat center center; background-size: cover;">
                </div>
                <div class="txt-recrec">
                  <h1 class="tit-recrec">{{$key->nombre}}</h1>
                  @if ($key->numero_porciones !="")
                  <p class="parraf-recrec12">{{$key->numero_porciones}} Personas</p>
                  @else
                  <p class="parraf-recrec12">-- Personas</p>
                  @endif
                </div>
              </div>
              </a>
                @endforeach
            </div>

          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  @include('front.includes.footer')

  <script type="text/javascript">
    $(".link-detrect").click(function(){
      var receta=$(this).find('.tit-recrec').html();
      sessionStorage.setItem('receta', receta);
    });
  </script>
  <script>
    $(document).on('ready', function() {
     $('.recetas-productos').slick({
            dots: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            responsive: [
            {
              breakpoint: 1279,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                infinite: true,
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
                autoplay: true,
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
    });
  </script>
@endsection
