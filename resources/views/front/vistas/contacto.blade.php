@extends('app.appfront')
<?php
$title = 'Contacto - San Fernando';
?>
@section('style')
<link href="<?php echo URL::asset('css/distribuidores.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('css/contacto.css'); ?>" rel="stylesheet" type="text/css" />
@endsection
@section('script')
@endsection
<!-- /.heading-->
@section('content')
<div id="container-sanfer" class="container-sanfer">
  @include('front.includes.header')
  <div class="row cont-cabecera row-nomargin">
  <div class="main-text-cont">
    <h1 class="tit-cabecera">Contacto</h1>
    <p class="parraf-cabecera">Para temas de atención al cliente pueden comunicarse directamente al 213-5300 de lunes a viernes de 09:00 a.m. a 06:00 p.m. o pueden llenar el siguiente formulario y atenderemos sus dudas lo más pronto posible.</p>
  </div>
</div>

<div class="row row-nomargin distribuidor-mapa col-nopadding bloque_1 banner">
  <div class="row-mapa">
    <div class="col-md-12 col-xs-12 col-nopadding">
      <div class="form-nuevo contact-content-form">
          {{-- <form class="distribuidor-form overlap-form" id="cometarios-form"> --}}
          {!! Form::open(['url' => '/envia_contacto', 'method' => 'POST', 'id' => 'cometarios-form'])!!}
          <p class="distribuidor-title-form titulo_db">Escríbenos<p>
          <p class="distribuidor-line"> </p>
          <p class="distribuidor-subtitle-form descripcion_db">Rellene los siguientes datos:</p>
          <div class="form-group">
            <input type="text" class="form-control distribuidor-input" name="nombre_contacto" placeholder="Nombre" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control distribuidor-input" name="dni_contacto" placeholder="DNI" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control distribuidor-input" name="correo_contacto" placeholder="Correo" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control distribuidor-input" name="celular_contacto" placeholder="Teléfono/Celular" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control distribuidor-input" name="distrito_contacto" placeholder="Distrito" required>
          </div>
          <div class="form-group">
            <textarea class="form-control distribuidor-input" rows="2" name="asunto_contacto" placeholder="Asunto" required></textarea>
          </div>
          <div class="form-group content-btn">
          <button class="btn btn-red btn-red-title" id="contacto_enviado" type="submit">ENVIAR DATOS</button>
          </div>
        {!! Form::close() !!}
        {{-- <button class="hidden" type="button" id="contacto_enviado"></button> --}}
      </div>
    </div>
  </div>
</div>
<div class="contact-section">
  <div class="row row-nomargin contact-list">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-nopadding info-contact">
      <div class="col-lg-6 col-sm-6 col-nopadding">
        <ul class="list-unstyled">
          <li>
            <div class="col-md-12 col-xs-12">
              <div class="col-offset-md-1 col-md-1 col-xs-2 list-btn"><img src="images/mail.svg" alt="mail San Fernando"></div>
              <div class="col-md-10 col-xs-10 list-btn">contacto@sanfernando.com</div>
            </div>
          </li>
          <li>
            <div class="col-md-12 col-xs-12">
              <div class="col-offset-md-1 col-md-1 col-xs-2 list-btn"><img src="images/location.svg" alt="ubicacion San Fernando"></div>
              <div class="col-md-10 col-xs-10 list-btn">Av. Rep. de Panamá 4299, Surquillo-  Lima - Perú</div>
          </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-6 col-sm-6 col-nopadding">
        <ul class="list-unstyled">
          <li>
            <div class="col-md-12 col-xs-12">
              <div class="col-offset-md-1 col-md-1 col-xs-2 list-btn"><img src="images/phone.svg" alt="telefono San Fernando"></div>
              <div class="col-md-10 col-xs-10 list-btn">213-5300  /  213-9845</div>
          </div>
         </li>
          <li>
            <div class="col-md-12 col-xs-12">
              <div class="col-offset-md-1 col-md-1 col-xs-2 list-btn"><img src="images/time.svg" alt="Horario San Fernando"></div>
              <div class="col-md-10 col-xs-10 list-btn">Lunes a Viernes  8:00 - 21:00  /  Sabado a Domingo  8:00 - 16:00</div>
          </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="row content-table row-nomargin distribuidor_tabla">
  <div class="table-distribuidores">
    <div class="col-md-12 col-xs-12 col-nopadding">
      <p class="title-contact-table">Distribuidores</p>
      <br>
      <p class="subtitle-contact-table">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac pretium ligula.</p>
      <div class="col-md-12 col-xs-12 col-nopadding">
      <div id="exTab1" class="container  col-md-12 col-xs-12 col-nopadding">
          <ul class="nav nav-pills nav-justified list-ubicacion col-xs-12 col-nopadding">
              <li class="active col-xs-3 col-nopadding">
                <a  href="#1a" data-toggle="tab">LIMA</a>
              </li>
              <li class="col-xs-3 col-nopadding"><a href="#2a" data-toggle="tab">NORTE</a>
              </li>
              <li class="col-xs-3 col-nopadding"><a href="#3a" data-toggle="tab">CENTRO</a>
              </li>
              <li class="col-xs-3 col-nopadding"><a href="#4a" data-toggle="tab">ORIENTE</a>
              </li>
              <li class="col-xs-3 col-nopadding"><a href="#5a" data-toggle="tab">SUR</a>
              </li>
            </ul>
            <div class="tab-content clearfix">
              <div class="tab-pane active fade in" id="1a">
                <div class="table-responsive">
                <table class="table distribuidor-table">
                  <thead>
                    <tr>
                      <th width="143px" class="text-center">  Ciudad  </th>
                      <th>Distribuidor</th>
                      <th>Dirección</th>
                      <th>Teléfono/Correo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" rowspan="5">Lima</th>
                      <td>Auren S.A</td>
                      <td>Calle Santa Teresa 171 - Urbanización Los Sauces - Ate</td>
                      <td>(01) 3159700o</td>
                    </tr>
                    <tr>

                      <td>Distribuidora Antezana</td>
                      <td>Calle 1 Mz. C Lt. 16 Coop. Hardy Montoya - S.J.M.</td>
                      <td>(01) 2762488 / 7130544</td>
                    </tr>
                    <tr>

                      <td>Distribuidora & Representaciones D´Matos SAC</td>
                      <td>Sc. 3 Gp. 31 Mz. A-6 Lt. 3-A - Villa El Salvador</td>
                      <td>(01) 2878292</td>
                    </tr>
                    <tr>

                      <td>Edimol SAC</td>
                      <td>C.C. Santa Rosa Int.11 C.H - Santa Rosa - Ciudad Satélite</td>
                      <td>Santa Inés 137 - Ate</td>
                    </tr>
                    <tr>
                      <td>Auren S.A</td>
                      <td>Calle Santa Teresa 171 - Urbanización Los Sauces - Ate</td>
                      <td>(01) 3159700</td>
                    </tr>
                    <tr>
                      <th class="th_distribuidor" scope="row" rowspan="5">Cañete</th>
                      <td>Auren S.A</td>
                      <td>Calle Santa Teresa 171 - Urbanización Los Sauces - Ate</td>
                      <td>(01) 3159700o</td>
                    </tr>
                    <tr>

                      <td>Distribuidora Antezana</td>
                      <td>Calle 1 Mz. C Lt. 16 Coop. Hardy Montoya - S.J.M.</td>
                      <td>(01) 2762488 / 7130544</td>
                    </tr>
                    <tr>

                      <td>Distribuidora & Representaciones D´Matos SAC</td>
                      <td>Sc. 3 Gp. 31 Mz. A-6 Lt. 3-A - Villa El Salvador</td>
                      <td>(01) 2878292</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
              <div class="tab-pane fade" id="2a">
                <div class="table-responsive">
                <table class="table distribuidor-table">
                  <thead>
                    <tr>
                      <th width="143px" class="text-center">  Ciudad  </th>
                      <th>Distribuidor</th>
                      <th>Dirección</th>
                      <th>Teléfono/Correo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Cajamarca</th>
                      <td>María Rosa Teran Guevara</td>
                      <td>Jr. Puno 376</td>
                      <td>(076) 341001 / #976942606 <br>
                           maro_tg@hotmail.com</td>
                    </tr>

                    <tr>
                      <th class="th_distribuidor" scope="row">Chiclayo</th>
                      <td>Latino Distribuciones SAC</td>
                      <td>Fundo Chacupe S/N y Fundo Los Mangos <br>
                          (a 1.5 km del Santuario 'Nuestra Sra. DEP'), La Victoria</td>
                      <td>97972643 / 979724623 <br>
                        hugo.diaz@grupolatino.com.pe<br>
                        aldo.oyola@grupolatino.com.pe</td>
                    </tr>

                    <tr>
                      <th class="th_distribuidor" scope="row">Chimbote</th>
                      <td>Perú Carnes SAC</td>
                      <td>Av. Pardo 1570, Pueblo Joven 'Miramar Bajo'</td>
                      <td>(043) 325288 - 943470009 <br>
                          perucarnes.negocios@hotmail.com</td>
                    </tr>

                    <tr>
                      <th scope="row" class="th_distribuidor">Huacho / Huaral</th>
                      <td>Distribuidora Alvarez EIRL</td>
                      <td>Av. Túpac Amaru 155</td>
                      <td>2394082
                          RPC #994663259 <br>
                          RPC #995577004 <br>
                          RPM #352555 <br>
                          chang_1950@hotmail.com <br>
                          distribuidoraobispo@hotmail.com</td>
                    </tr>

                    <tr>
                      <th scope="row" class="th_distribuidor">Piura/ Tumbes</th>
                      <td>Inversiones Ludimarc SAC</td>
                      <td>Calle Los Naranjos, Mza. F, Lote 12, Urb. Club Grau<br>
                          (frente a Emtrafesa)</td>
                      <td>969403720 / #687815 <br>
                        ugasdesulovich@hotmail.com <br>
                        gerencia@ludimarc.com</td>
                    </tr>

                    <tr>
                      <th scope="row" rowspan="2">Trujillo</th>
                      <td>Chimu Agropecuaria SA</td>
                      <td>Av. America Norte 2213, Urb. Las Quintanas</td>
                      <td>(044) 205944 / 987966286 <br>
                          dnapan@chimuagropecuaria.com.pe</td>
                    </tr>
                    <tr>
                      <td>Dismar</td>
                      <td>Av. Miraflores 1810, Urb. Santa Teresa De Ávila</td>
                      <td>RPC #949149077<br>
                          c.gutierrezm@hotmail.com</td>
                    </tr>

                  </tbody>
                </table>
              </div>
              </div>
              <div class="tab-pane fade" id="3a">
                <div class="table-responsive">
                <table class="table distribuidor-table">
                  <thead>
                    <tr>
                      <th width="143px" class="text-center">  Ciudad  </th>
                      <th>Distribuidor</th>
                      <th>Dirección</th>
                      <th>Teléfono/Correo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Abancay</th>
                      <td>Corporación Aveandes</td>
                      <td>Jr. El Salvador 200 (A espaldas de ESSALUD, Casa Blanca y azul)</td>
                      <td>(083) 633593 / 983943629 <br>
                          RPM #559884 <br>
                          corp.aveandes_apurimac@hotmail.com <br>
                           maro_tg@hotmail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">Andahuaylas</th>
                      <td>Corporación Aveandes</td>
                      <td>Jr. César Vallejo 119 (al costado del terminal CELTUR)</td>
                      <td>983623440 / RPM #444900<br>
                          corp.aveandes_apurimac@hotmail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">Ayacucho</th>
                      <td>Granja Quispe SA</td>
                      <td>Av. Ramón Castilla 876, San Juan Bautista	</td>
                      <td>#975503340 / 975503340 <br>
                          thepio2009@hotmail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">Cerro de Pasco</th>
                      <td>Carmen Sucesión Acosta Castro</td>
                      <td>Jr. Arequipa S/N (4ta. Cuadra frente al Mercado 'El Óvalo')	</td>
                      <td>(064) 531044 RPM #268697 <br>
                          dmapelli@inversiones-sanfernando.com.pe</td>
                    </tr>
                    <tr>
                      <th scope="row">Huancayo</th>
                      <td>Comercializadora Wanka SAC</td>
                      <td>Av. Prolongación Arequipa 2785, El Tambo	</td>
                      <td>(064) 416445 / 995668201  <br>
                          RPM #0087345<br>
                          comercializadora.wanka@gmail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">Huánuco</th>
                      <td>Valdivia Quispe Milagros Margarita</td>
                      <td>Jr. Leoncio Prado 1003</td>
                      <td>(062) 514705 / (062) 962636344 <br>
                          RPM #303822 <br>
                          milagros.valdiviaquispe@gmail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">Huaraz</th>
                      <td>Distribuidora Alvarez EIRL</td>
                      <td>Jr Alberto Gridilla S/N (Referencia entrada Villa Sol)</td>
                      <td>945695111 / 977647142 <br>
                        chang_1950@hotmail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">La Merced</th>
                      <td>Distribuidora Mapelli Acosta SAC</td>
                      <td>Jr. Arequipa S/N (4ta. Cuadra frente al Mercado 'El Óvalo')</td>
                      <td>(064) 531044 / 964635674 <br>
                        RPM #268697 <br>
                        dmapelli@inversiones-sanfernando.com.pe</td>
                    </tr>
                    <tr>
                        <th scope="row">Pucallpa</th>
                        <td>Distribuidora Volcán EIRL</td>
                        <td>Jr. Guillermo Sisley 504, Int. A, Coronel Portillo</td>
                        <td>(061) 578833 / (061) 575043 <br>
                            RPM #344840 <br>
                            jesus_nbc@hotmail.com</td>
                      </tr>
                      <tr>
                          <th scope="row">Tingo María</th>
                          <td>Mery y Mary SRL</td>
                          <td>Av. Antonio Raymondi 1150</td>
                          <td>949907311 / RPM #949907311 <br>
                              merymarytingomaria@hotmail.com</td>
                        </tr>
                  </tbody>
                </table>
              </div>
              </div>
                <div class="tab-pane fade" id="4a">
                  <div class="table-responsive">
                  <table class="table distribuidor-table">
                    <thead>
                      <tr>
                        <th width="143px" class="text-center">  Ciudad  </th>
                        <th>Distribuidor</th>
                        <th>Dirección</th>
                        <th>Teléfono/Correo</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Iquitos</th>
                        <td>Servicios Generales y Comercializadora Irmita EIRL</td>
                        <td>Calle Las Colinas 277, San Juan Bautista</td>
                        <td>(065) 268008 / 965975234 <br>
                            RPM #323292<br>
                            segecoirmita@hotmail.com</td>
                      </tr>
                      <tr>
                        <th scope="row">Puerto Maldonado</th>
                        <td>Avícola Santa Isabel SRL</td>
                        <td>Jr. Ica 813, Tambopata</td>
                        <td>(082) 574722 / 994574718<br>
                          avicolastaisabelpto@hotmail.com</td>
                      </tr>
                      <tr>
                        <th scope="row">Tarapoto</th>
                        <td>Tacunga SAC</td>
                        <td>Jr Martinez de Compagñon 126	</td>
                        <td>997628757
                          RPC #954783200<br>
                          RPM #985281533<br>
                          jalepeve_jack1@hotmail.com<br>
                          carlos_angulo@grupolainmaculada.com</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tab-pane fade" id="5a">
                <div class="table-responsive">
                <table class="table distribuidor-table">
                  <thead>
                    <tr>
                      <th width="143px" class="text-center">  Ciudad  </th>
                      <th>Distribuidor</th>
                      <th>Dirección</th>
                      <th>Teléfono/Correo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Arequipa</th>
                      <td>Granja Rinconada Del Sur SA</td>
                      <td>Av. Alcides Carrión 168</td>
                      <td>(054) 221212 <br>
                          RPM #557157 <br>
                          RPM #555269 <br>
                          procesados@rinconadadelsur.com.pe <br>
                          ehuertas@rinconadadelsur.com.pe</td>
                    </tr>
                    <tr>
                      <th scope="row">Cañete</th>
                      <td>Consorcio 3C Playa SAC</td>
                      <td>Panamericana Sur 1719, Sunampe, Chincha</td>
                      <td>575-1504 / 574-8083 / Nextel 836*4226 <br>
                        mcollazos@dismacperu.com</td>
                    </tr>
                    <tr>
                      <th scope="row">Cuzco</th>
                      <td>Consorcio Orión Cusco SRL</td>
                      <td>Av. Vía Expresa, Mza. E , Lote 7, Urb. Parque Industrial</td>
                      <td>(084) 229622 / 984766499<br>
                          aljufadi_1@hotmail.com<br>
                          sanfernandocusco@hotmail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">Ica</th>
                      <td>Logística Del Sur SRL</td>
                      <td>JJ Elías 451</td>
                      <td>(056) 218203 <br>
                          RPM #665553 <br>
                          Nextel 838*2267<br>
                          julita_rh@hotmail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">Ilo / Moquegua / Tacna</th>
                      <td>La Genovesa Distribuciones SAC</td>
                      <td>Mza. I Lote. 9B Parque Industrial - Tacna</td>
                      <td>994029044<br>
                          Nextel 402*9044<br>
                          fsantamaria@lagenovesa.com.pe</td>
                    </tr>
                    <tr>
                      <th scope="row">Pisco / Chincha</th>
                      <td>Consorcio 3C Playa SAC</td>
                      <td>Panamericana Sur 1719, Sunampe, Chincha</td>
                      <td>575-1504 / 574-8083 / Nextel 836*4226<br>
                          mcollazos@dismacperu.com</td>
                    </tr>
                    <tr>
                      <th scope="row">Puno</th>
                      <td>Pineda Melgarejo Miguel Angel</td>
                      <td>Jr. Sandía 262, Barrio Santa Bárbara, Cercado</td>
                      <td>RPM #951880131 / 951880131<br>
                          inversionesyihiro@hotmail.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div><!--fin pane5-->
            </div>
        </div>
      </div> <!--FIN COL CENTRAL DE 8-->
    </div>
  </div>
</div> <!--fin row de distribuidor-->
  @include('front.includes.footer')
</div>
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
        url:   '{!!url('/envia_contacto')!!}',
        type:  'post',
        beforeSend: function () {
          console.log('cargando');
        },
        success:  function (response) {
          console.log(response);
        }});
    //fin ajax mail
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
           $("#contacto_enviado").click();
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
