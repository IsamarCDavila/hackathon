@extends('app.appfront')
<?php
$title = 'Puntos de canje - San Fernando';
?>
@section('style')
  <link href="css/vale-pavo.css" rel="stylesheet" type="text/css" />
@endsection
@section('script')
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34020497-2"></script>
@endsection
<!-- /.heading-->
@section('content')
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-34020497-2');
</script>
<div id="container-sanfer" class="container-sanfer">
  <div id="home" class="page-content-wrapper">
      <div class="home-container">
        <A name="canjear" id="canjear"></A>
        <section id="s-canjear">
          @include('front.includes.canjear-valepavo')
        </section>
          @include('front.includes.header-valepavo')
        <A name="cotizar" id="cotizar"></A>
        <section class="background-cotizacion" id="s-cotizar">
            @include('front.includes.cotizacion-valepavo')
        </section>
        <A name="beneficios" id="beneficios"></A>
        <section id="s-pavicar">
          @include('front.includes.beneficios-valepavo')
        </section>
        <!-- <A name="pavicar" id="pavicar"></A>

        </section> -->
        <A name="recetas" id="recetas"></A>
        <section class="receta-pavos" id="s-recetas">
          @include('front.includes.home-valepavo')
        </section>
        <A name="cinco" id="cinco"></A>
        <section class="pre-footer-valepavo">
          @include('front.includes.pre-footer-valepavo')
        </section>
        @include('front.includes.footer')
      </div>

      <section class="contacto-valepavo-container">
        @include('front.includes.contacto-valepavo')
      </section>
      <section class="receta-pavos">
        @include('front.includes.descongela-pavo')
        @include('front.includes.chef-tips')
        @include('front.includes.pavo-criollo')
        @include('front.includes.pavo-hierbas')
        @include('front.includes.pavo-chiclayana')
        @include('front.includes.pavo-arequipeno')
        @include('front.includes.pavo-chifa')
      </section>
      @include('front.includes.pie-links-valepavo')
      <script type="text/javascript">
        var puntos={!! $jsonPines !!};
        var tipo_s = '';
      </script>

      <script src="js/cotizacion-timeline.js"></script>
      <script src="js/pavicar-modal.js"></script>
      <script src="js/jsonPuntos.js"></script>
      <script src="js/canjear-mapa.js"></script>
    </div>
  </div>

    <script type="text/javascript">
    var banner={!!$banners!!};
    var url = "{!! url('/') !!}";
  </script>
  <script src="<?php echo URL::asset('js/banners.js'); ?>" type="text/javascript"></script>

@endsection
