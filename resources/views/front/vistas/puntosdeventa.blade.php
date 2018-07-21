@extends('app.appfront')
<?php
$title = 'Puntos de venta - San Fernando';
?>
@section('style')
<link href="<?php echo URL::asset('css/distribuidores.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('css/vale-pavo.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('css/puntos_venta.css'); ?>" rel="stylesheet" type="text/css" />
@endsection

@section('script')
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34020497-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-34020497-2');
</script>
@endsection
@section('content')
@include('front.includes.header')
<!-- {{$jsonPines}} -->
<div id="container-sanfer" class="container-sanfer">
  <div class="row cont-cabecera row-nomargin">
    <div class="main-text-cont">
      <h1 class="tit-cabecera">Puntos de Destinos</h1>
      <p class="parraf-cabecera">Conoce todos los puntos turisticos de la ciudad de Arequipa</p>
    </div>
  </div>
  <section id="s-canjear">
    @include('front.includes.puntos-valepavo')
  </section>
</div>

<div class="row row-nomargin espacio footer-shadow">
  <div class="col-md-12 col-xs-12 fondo-distribuidor col-nopadding bloque_1 banner">
    <div class="row-global distribuidor-cont">
      <div class="responsive-center">
        <img src="images/distribuidor.svg" alt="distribuidor San Fernando">
        <div class="distribuidor-centrar">
          <p class="distribuidor-title titulo_db">¿Quieres ser Distribuidor?<p>
          <p class="distribuidor-line"> </p>
          <p class="distribuidor-subtitle descripcion_db">Buscamos socios comerciales interesados en la distribución de nuestros productos. ¡Tu puedes ser uno de ellos!</p>
        </div>
      </div>
      <div class="">
        <form class="distribuidor-form" id="distribuidor-form-2">
        <p class="distribuidor-title-form">Escribenos<p>
        <p class="distribuidor-line"> </p>
        <p class="distribuidor-subtitle-form">Rellene los siguientes datos:</p>
        <div class="form-group">
          <input type="text" class="form-control distribuidor-input" name="nombre_venta" placeholder="Nombre" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control distribuidor-input" name="dni_venta" placeholder="DNI" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control distribuidor-input" name="correo_venta" placeholder="Correo" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control distribuidor-input" name="celular_venta" placeholder="Celular" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control distribuidor-input" name="distrito_venta" placeholder="Distrito" required>
        </div>
        <div class="form-group">
          <textarea class="form-control distribuidor-input" rows="2" name="comentarios_venta" placeholder="Comentarios" required></textarea>
        </div>
        <div class="form-group content-btn">
        <button class="btn btn-red btn-red-title" type="submit">ENVIAR DATOS</button>
        </div>
      </form>
      <button class="hidden" type="button" id="distribuidor_form_enviado"></button>
      </div>
    </div>
  </div>
</div>
@include('front.includes.footer')
<script type="text/javascript">
  var puntos={!! $jsonPines !!};
  console.log("vxcvxc",puntos);
</script>
<script type="text/javascript">
var banner={!!$banners!!};
var url = "{!! url('/') !!}";
var tipo_s = 'pv_';
</script>

<script src="http://js.api.here.com/v3/3.0/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
<script src="http://js.api.here.com/v3/3.0/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>

<script src="js/banners.js"></script>

<script src="js/jsonPuntosVenta.js"></script>

<script src="js/canjear-mapa.js"></script>
<script type="text/javascript">

function postToGoogle_2() {
  var field1 = $("input[name=nombre_venta]").val();
  var field2 = $("input[name=dni_venta]").val();
  var field3 = $("input[name=correo_venta]").val();
  var field4 = $("input[name=celular_venta]").val();
  var field5 = $("input[name=distrito_venta]").val();
  var field6 = $("textarea[name=comentarios_venta]").val();
  //Ajax q envia datos al controller para el envio del Mail
  var data_store = {};
    data_store._token = $('meta[name="csrf-token"]').attr('content');
    data_store.nombre = field1;
    data_store.dni = field2;
    data_store.correo = field3;
    data_store.telefono = field4;
    data_store.distrito = field5;
    data_store.mensaje = field6;
    $.ajax({
      data:  data_store,
      url:   '{!!url('/envia_distribuidor')!!}',
      type:  'post',
      beforeSend: function () {
        console.log('cargando');
      },
      success:  function (response) {
        console.log(response);
      }});
  //fin ajax mail

   $.ajax({
     url: "https://docs.google.com/forms/d/e/1FAIpQLSdUpRcT1nPmZ4awGr8sOCT5JhjJmlZztCcSAxRxh0QFuYxv4A/formResponse",
     data: {
       "entry.1205681239": field1,
       "entry.1915555967": field2,
       "entry.1065399288": field3,
       "entry.1185996703": field4,
       "entry.503664468": field5,
       "entry.2136844373": field6

     },
     type: "POST",
     dataType: "xml",
     statusCode: {
       0: function() {

         $("input[name=nombre_venta]").val('');
         $("input[name=dni_venta]").val('');
         $("input[name=correo_venta]").val('');
         $("input[name=celular_venta]").val('');
         $("input[name=distrito_venta]").val('');
         $("textarea[name=comentarios_venta]").val('');
         $("#distribuidor_form_enviado").click();
         swal("Gracias!", "Se envió correctamente el formulario.", "success");

       },
       200: function() {
         //Success Message
       }
     }
   });
  }
  $(document).ready(function() {
       $('#distribuidor-form-2').submit(function() {
         postToGoogle_2();
         return false;
       });
    });
  </script>
@endsection
