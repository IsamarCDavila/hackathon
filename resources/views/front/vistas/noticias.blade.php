@extends('app.appfront')
<?php
$title = 'Noticias - San Fernando';
?>
@section('style')
<link href="<?php echo URL::asset('css/noticias.css'); ?>" rel="stylesheet" type="text/css" />
@endsection
@section('script')
@endsection
<!-- /.heading-->
@section('content')
<div id="container-sanfer" class="container-sanfer">
  @include('front.includes.header')
  <div class="row cont-cabecera row-nomargin">
  <div class="main-text-cont">
    <h1 class="tit-cabecera">Noticias</h1>
    <p class="parraf-cabecera">Todas las noticias relacionadas a San Fernando.</p>
  </div>
</div>
<div class="row content-hero row-nomargin footer-shadow">
  <div class="row-global">
    <div class="col-md-9 col-sm-12 col-xs-12 noticias-hero">
      <div class="row row-list-noticias">
        <div class="col-md-12 col-sm-12 col-xs-12 col-nopadding">
          <div class="col-md-12 col-xs-12 col-sm-12 col-nopadding">

            @foreach ($noticias as $noticia)
            <div class="col-md-6 col-xs-12 col-sm-6 noticias_contenedor">
              <div class="img-noticia-cont" style="background: url('{!!url($noticia->path_imagen)!!}') no-repeat center center; background-size: cover;">
              </div>
               <div class="texto-noticia" id="noticia_{!!$noticia->id!!}">
                  <span class="parraf-noticia parraf_noticia_{{$noticia->id}}">{!!$noticia->intro!!}  <span class="mas_noticia_{!!$noticia->id!!}">…<a id="detallenoticia" class="ver_mas" href="javascript:;">Ver más</a></span></span>
                  <span class="parraf-noticia desplegar_contenido noticia_{!!$noticia->id!!}" hidden>
                    {!!$noticia->descripcion!!}
                  {{-- <span class="menos_noticia_{!!$noticia->id!!}">…<a class="ver_menos" href="javascript:;">Ver menos</a></span></span> --}}
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <a href="https://www.facebook.com/san.fernando.labuenafamilia" target="_blank" id="facebook">
      <div class="col-md-3 hidden-xs hidden-sm bannerfb">
        <!-- <img src="images/advertising.png" class="img-responsive img-publicidad"> -->
        <div class="logosanfer">
          <img src="{!!url('images/logo.png')!!}" alt="logo San Fernando" class="img-responsive img-publicidad-logo">
        </div>

          <p id="text">HAZTE FAN EN FACEBOOK</p>
          <div class="likefb">
            <img src="{!!url('images/likefb.png')!!}" alt="facebook San Fernando" class="img-responsive img-publicidad">
          </div>
      </div>
    </a>

  </div>
</div>
  @include('front.includes.footer')
</div>
  <style media="screen">
    .bannerfb{
      height: 78vh;
      background-color: #003197;
     text-align: center;
    }
    .logosanfer{
      margin-top: 40%;
    }
    .likefb{
      margin-top: 35%;
    }
    .img-publicidad{
      /* height: 25%; */
      height: 200px;
    }
    #text {
    z-index: 100;
    position: absolute;
    color: white;
    font-size: 24px;
    font-weight: bold;
    left: 0;
    /* bottom: 10%; */
  }
  </style>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".ver_mas").click(function(){
        var clase= $(this).closest('div').attr("id");
        $(".mas_"+clase).css("display","none");
        $(".parraf_"+clase).css("display","none");
        $("."+clase).slideDown("slow");
        $(".menos_"+clase).css("display","initial");
        // $(this).parent().parent().css("display","none");
        // console.log($(this).parent().parent().html());
    });
    $(".ver_menos").click(function(){
        var clase= $(this).closest('div').attr("id");
        $(".menos_"+clase).css("display","none");
        $("."+clase).slideUp("slow");
        $(".mas_"+clase).css("display","initial");
        $(".parraf_"+clase).css("display","initial");
        //$(this).parent().parent().css("display","block");
    });
  });
  </script>
@endsection
