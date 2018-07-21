<div class="slider-recetas-cont row-global">
      <div class="slider-recetas col-xs-12 ">
        <div class="recetas-productos row row-nomargin recetas_pavo" id="recetasproductos">
            @foreach ($recetas as $receta)
          <a class="link-detrect" href="{!!url('/detallerecetas/'.$receta->slug)!!}">
            <div class="item-receta">
            <div class="img-recrec" style="background: url('{!!url($receta->path_imagen)!!}') no-repeat center center; background-size: cover;">
            </div>
            <div class="txt-recrec">
              <h1 class="tit-recrec">{!!$receta->nombre!!}</h1>
              @if ($receta->numero_porciones !="")
              <p class="parraf-recrec12">{!!$receta->numero_porciones!!} Personas</p>
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
