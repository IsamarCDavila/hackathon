<div class="row row-nomargin espacio footer-shadow">
  <div class="col-md-12 col-xs-12 fondo-distribuidor col-nopadding banner bloque_2">
    <!-- <div class="col-md-2 col-xs-hidden col-sm-1">
    </div> -->
    <div class="row-global distribuidor-cont">
      <div class="responsive-center">
        <!-- <div class="col-md-3 col-xs-12 col-sm-12 distribuidor-centrar"> -->
          <img src="images/distribuidor.svg" alt="distribuidor san fernando" width="61px" style="padding-top: 3px;">
        <!-- </div> -->
        <div class="distribuidor-centrar">
          <p class="distribuidor-title titulo_db">¿Quieres ser Distribuidor?<p>
          <p class="distribuidor-line"> </p>
          <p class="distribuidor-subtitle descripcion_db">Buscamos socios comerciales interesados en la distribución de nuestros productos. ¡Tu puedes ser uno de ellos!</p>
        </div>
      </div>
      <div class="bloque_3">
        <form class="distribuidor-form" id="distribuidor-form">
        <p class="distribuidor-title-form titulo_db" style="visibility:hidden;">Sé un Distribuidor<p>
        <!-- <p class="distribuidor-line"> </p> -->
        <!-- <p class="distribuidor-subtitle-form descripcion_db">Rellene los siguientes datos:</p> -->
        <div class="form-group">
          <input type="text" class="form-control distribuidor-input" name="nombre_distribuidor" placeholder="Nombre" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control distribuidor-input" name="dni_distribuidor" placeholder="DNI" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control distribuidor-input" name="correo_distribuidor" placeholder="Correo" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control distribuidor-input" name="celular_distribuidor" placeholder="Celular" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control distribuidor-input" name="distrito_distribuidor" placeholder="Distrito" required>
        </div>
        <div class="form-group">
          <textarea class="form-control distribuidor-input" rows="2" name="comentarios_distribuidor" placeholder="Comentarios" required></textarea>
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

<script type="text/javascript">
function postToGoogle_1() {
  var field1 = $("input[name=nombre_distribuidor]").val();
  var field2 = $("input[name=dni_distribuidor]").val();
  var field3 = $("input[name=correo_distribuidor]").val();
  var field4 = $("input[name=celular_distribuidor]").val();
  var field5 = $("input[name=distrito_distribuidor]").val();
  var field6 = $("textarea[name=comentarios_distribuidor]").val();
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
      url:   '{!!url('/envia_distribuidorR')!!}',
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

         $("input[name=nombre_distribuidor]").val('');
         $("input[name=dni_distribuidor]").val('');
         $("input[name=correo_distribuidor]").val('');
         $("input[name=celular_distribuidor]").val('');
         $("input[name=distrito_distribuidor]").val('');
         $("textarea[name=comentarios_distribuidor]").val('');
         $("#distribuidor_form_enviado").trigger('click');
         swal("Gracias!", "Se envió correctamente el formulario.", "success");

       },
       200: function() {
         //Success Message
       }
     }
   });
  }
  $(document).ready(function() {
       $('#distribuidor-form').submit(function() {
         postToGoogle_1();
         return false;
       });
    });
</script>
