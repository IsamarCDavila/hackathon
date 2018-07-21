@extends('app.appfront')
<?php
$title = 'Distribuidor - San Fernando';
?>
@section('style')
<link href="css/distribuidores.css" rel="stylesheet" type="text/css" />
@endsection
@section('script')
@endsection
<!-- /.heading-->
@section('content')
<div id="container-sanfer" class="container-sanfer">
  @include('front.includes.header')
  <div class="row cont-cabecera row-nomargin">
  <div class="main-text-cont">
    <h1 class="tit-cabecera">Sé un Distribuidor</h1>
  </div>
</div>
</div>

  @include('front.includes.distribuidor')
  @include('front.includes.footer')
  <script type="text/javascript">
    var banner={!!$banners!!};
    var url = "{!! url('/') !!}";
  </script>

  <script type="text/javascript">
  function postToGoogle() {
    var field1 = $("input[name=nombre_contacto]").val();
    var field2 = $("input[name=dni_contacto]").val();
    var field3 = $("input[name=correo_contacto]").val();
    var field4 = $("input[name=celular_contacto]").val();
    var field5 = $("input[name=distrito_contacto]").val();
    var field6 = $("textarea[name=asunto_contacto]").val();

     $.ajax({
       url: "https://docs.google.com/forms/d/e/1FAIpQLSerqHueycRiq_RRDWvrVw3FFIBZxF5YbQvkfwHDfbg7fBpXOw/formResponse",
       data: {
         "entry.837398051": field1,
         "entry.748633883": field2,
         "entry.1405432065": field3,
         "entry.595869429": field4,
         "entry.400532017": field5,
         "entry.1082449277": field6

       },
       type: "POST",
       dataType: "xml",
       statusCode: {
         0: function() {

           $("input[name=nombre_contacto]").val('');
           $("input[name=dni_contacto]").val('');
           $("input[name=correo_contacto]").val('');
           $("input[name=celular_contacto]").val('');
           $("input[name=distrito_contacto]").val('');
           $("textarea[name=asunto_contacto]").val('');

            swal("Gracias!", "Se envió correctamente el formulario.", "success");

         },
         200: function() {
           //Success Message
         }
       }
     });
    }
  $(document).ready(function() {
       $('#cometarios-form').submit(function() {
         postToGoogle();
         return false;
       });
    });
</script>
@endsection
