@extends('app.appfront')
<?php
$title = 'Nosotros - San Fernando';
?>
@section('style')
<link href="css/libro-reclamo.css" rel="stylesheet" type="text/css" />
@endsection
@section('script')
<script src="js/validacionLibro.js"></script>
@endsection
<!-- /.heading-->
@section('content')
  @include('front.includes.header')
  <section>
  <div class="libroReclamos-cont">
    <div class="row cont-cabecera row-nomargin">
      <div class="main-text-cont">
        <h1 class="tit-cabecera">Libro de Reclamaciones</h1>
        <p class="parraf-cabecera">Aquí podrás presentar formalmente cualquier reclamo que tengas. Nosotros nos encargaremos de resolver tu caso de la mejor manera y en el menor tiempo posible.</p>
        <p class="parraf-cabecera">No olvides leer las instrucciones del proceso <span class="txt-blue" data-toggle="modal" data-target="#modalInstrucciones">Aquí.</span></p>
        <div class="modal fade" id="modalInstrucciones" role="dialog">
         <div class="modal-dialog">
           <!-- Modal content-->
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Instrucciones</h4>
             </div>
             <div class="modal-body">
               <p>Instrucciones a observar por el cliente:</p>
               <ul class="list_reclamos list-unstyled">
                <li>
                  <span>1</span>
                  <p>
                    Para mayor entendimiento de su Reclamo o Queja es necesario contar con la totalidad de la información de lo sucedido.
                  </p>
                </li>
                <li>
                  <span>2</span>
                  <p>
                    El plazo de respuesta es de 30 días calendario, el cual podrá extenderse dependiendo de su complejidad, previo aviso por el medio que usted escoja para el envío de su respuesta.
                  </p>
                </li>
                <li>
                  <span>3</span>
                  <p>
                    La formulación de reclamo no impide acudir a otras vías de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI.
                  </p>
                </li>
                </ul>
             </div>
           </div>
         </div>
       </div>
      </div>
    </div>
    <div class="bookForm-cont" id="" >
        <div class="row row-main-title">
          <div class="col-lg-12 col-sm-12 col-xs-12 main-title">
            <div class="title-form">
              <div class="icon-plate-cont"><img src="images/icon-calendar.svg" class="img-responsive  text-center" alt="icono preparac+on receta" / ></div>
              <h2 class=""> <?php echo date("d/m/Y"); ?></h2>
            </div>
            <p class="txt-14">Para poder ayudarte, por favor, bríndanos tus datos personales.</p>
          </div>
        </div>
        <div class="contendor-form">
          <form action="" id="formReclamaciones" class="book-form" file="true">
            {{ csrf_field() }}
            <div class="part1">
              <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                  <div class="form-group" id="id-doc">
                    <p class='lbl'>Tipo de Documento</p>
                    <select class="select" name="tipodocumento_libro">
  										<option value="DNI">DNI</option>
  										<option value="Pasaporte">Pasaporte</option>
  										<option value="Carnet de extranjería">Carnet de Extranjería</option>
  									</select>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12">
                 <div class="form-group">
                   <p class='lbl'>Nro de Documento</p>
                    <div class="controls">
                      <input type="text" name="numdocumento_libro" class="form-control" placeholder="Escribe tu numero de documento">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                 <div class="form-group">
                   <p class='lbl'>Nombres</p>
                    <div class="controls">
                      <input type="text" name="nombre_libro" class="form-control" placeholder="Nombres completos">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                    <p class='lbl'>Apellido Paterno</p>
                    <div class="controls">
                      <input type="text" name="apellido_libro" class="form-control" placeholder="Apellido Paterno">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                    <p class='lbl'>Apellido Materno</p>
                    <div class="controls">
                      <input type="text" name="apellidom_libro" class="form-control" placeholder="Apellido Materno">
                    </div>
                  </div>
                </div>
              </div>


              <hr class="hidden-xs">

              <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                 <div class="form-group" id="id-recepcion">
                   <p class='lbl'>¿A dónde preferirías recibir nuestra respuesta?</p>
                   <select class="select" name="recibir_libro">
                     <option value="A mi casa">A mi casa</option>
                     <option value="A mi correo E-mail">A mi correo E-mail</option>
                   </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                 <div class="form-group" id="id-depart">
                   <p class='lbl'>Departamento</p>
                   <input type="hidden" name="departamento_only" value="">
                   <select class="select" name="departamento_libro">
                     <option value="0">Seleccione</option>
                     @foreach ($departamento as $key )
                       {{-- <option value="{!!$key->id!!}-{!!$key->departamento!!}" >{!!$key->departamento!!}</option> --}}
                       <option value="{!!$key->id!!}" >{!!$key->departamento!!}</option>
                     @endforeach
                     {{-- <option value="Ancash">Ancash</option>
                     <option value="Apurimac">Apurimac</option>
                     <option value="Ayacucho">Ayacucho</option> --}}
                   </select>
                   <label for="id-depart" class="error departamento hidden">*Seleccione una opción</label>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12">
                  <div class="form-group" id="id-provincia">
                    <p class='lbl'>Provincia</p>
                    <input type="hidden" name="provincia_only" value="">
                    <select class="select" name="provincia_libro">
                      <option value="0">Seleccione</option>
                    </select>
                    <label for="id-provincia" class="error provincia hidden">*Seleccione una opción</label>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12">
                  <div class="form-group" id="id-distrito">
                    <p class='lbl'>Distrito</p>
                    <input type="hidden" name="distrito_only" value="">
                    <select class="select" name="distrito_libro">
                      <option value="0">Seleccione</option>
                      <option value="Ancash">Ancash</option>
                      <option value="Apurimac">Apurimac</option>
                      <option value="Ayacucho">Ayacucho</option>
                    </select>
                    <label for="id-distrito" class="error distrito hidden">*Seleccione una opción</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                 <div class="form-group">
                   <p class='lbl'>Ingrese Dirección</p>
                    <div class="controls">
                      <input type="text" name="direccion_libro" class="form-control" placeholder="Dirección del domicilio">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                    <p class='lbl'>Teléfono</p>
                    <div class="controls">
                      <input type="text" name="telefono_libro" class="form-control" placeholder="Numero de teléfono">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                    <p class='lbl'>Correo</p>
                    <div class="controls">
                      <input type="email" name="correo_libro" class="form-control" placeholder="Email">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="part2">
              <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                 <div class="form-group form-checkbox">
                   <p class='lbl'>Menor de Edad</p>
                   <div class="checkbox-cont">
                      <input type="radio" name="radioedad_libro" id="radio1" class="radio" value="si" />
                      <label for="radio1"><span>Si</span></label>
                    </div>
                    <div class="checkbox-cont">
                      <input type="radio" name="radioedad_libro" id="radio2" class="radio" value="no"checked/>
                      <label for="radio2">No</label>
                    </div>
                  </div>
                </div>
              </div>
              {{-- <div id="underage-cont"> --}}
              <div>
                <div class="row">
                  <div class="col-xs-12">
                    <p>Datos del Apoderado</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="form-group" id="id-doc-age">
                      <p class='lbl'>Tipo de Documento</p>
                      <select class="select" name="tipodocapoderado_libro">
                        <option value="DNI">DNI</option>
                        <option value="Pasaporte">Pasaporte</option>
                        <option value="Carnet de extranjería">Carnet de Extranjería</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4 col-xs-12">
                   <div class="form-group">
                     <p class='lbl'>Nro de Documento</p>
                      <div class="controls">
                        <input type="text" name="numdocumentomenor_libro" class="form-control" placeholder="Escribe tu numero de documento">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-sm-4 col-xs-12">
                   <div class="form-group">
                     <p class='lbl'>Nombres</p>
                      <div class="controls">
                        <input type="text" name="nombreapoderado_libro" class="form-control" placeholder="Nombres completos">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <p class='lbl'>Apellido Paterno</p>
                      <div class="controls">
                        <input type="text" name="apellidoapoderado_libro" class="form-control" placeholder="Apellido Paterno">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <p class='lbl'>Apellido Materno</p>
                      <div class="controls">
                        <input type="text" name="apellidoapoderadom_libro" class="form-control" placeholder="Apellido Materno">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="part3">
              <div class="row">
                <h3>Información general del caso:</h3>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                 <div class="form-group">
                   <p class='lbl'>Nombre del producto:</p>
                    <div class="controls">
                      <input type="text" name="producto_libro" class="form-control" placeholder="Nombre del producto:">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                 <div class="form-group">
                   <p class='lbl'>Fecha de Incidente</p>
                    <div class="controls">
                      <input type="date" name="fechaincidente_libro" class="form-control" placeholder="Fecha de Incidente">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                    <p class='lbl'>Lugar</p>
                    <div class="controls">
                      <input type="text" name="lugar_libro" class="form-control" placeholder="Lugar">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                 <div class="form-group">
                   <p class='lbl'>Monto Reclamo S/:</p>
                    <div class="controls">
                      <input type="number" name="monto_libro" class="form-control" placeholder="S/.">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                    <p class='lbl'>Lugar donde adquirió el producto</p>
                    <div class="controls">
                      <input type="text" name="adquirio_libro" class="form-control" placeholder="Lugar donde adquirió el producto">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="part4">
              <div class="row">
                <h3>Cuéntenos su incidente:</h3>
              </div>
              <div class="row">
                <div class="col-lg-3 col-sm-3 col-xs-6">
                  <div class="form-group form-radio">
                    <div class="radio-cont">
                      <input type="radio" name="incidente_libro" id="radio3" value="reclamo" class="radio" checked/>
                      <label for="radio3">Reclamo</label>

                     </div>
                     <div class="radio-cont">
                       <input type="radio" name="incidente_libro" id="radio4" value="queja" class="radio"/>
                       <label for="radio4">Queja</label>
                     </div>
                  </div>
                </div>


              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <p class='lbl'>Detalle su incidente:</p>
                   <div class="controls">
                     <textarea name="descripcion_libro" rows="5" cols="80" placeholder="Detalle su incidente:" class="form-control"></textarea>
                   </div>
                 </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <p class='lbl'>Solicitud del Cliente (Ejem: Cambio de producto):</p>
                   <div class="controls">
                     <textarea name="solicitud_libro" rows="5" cols="80"  placeholder="Solicitud del Cliente (Ejem: Cambio de producto):" class="form-control"></textarea>
                   </div>
                 </div>
                </div>
                <div class="col-lg-12 col-sm-12 col-xs-12 col-upload">
                  <div class="form-group form-file">
                    <span>Adjuntar documentos adicionales:</span>
                    {{-- <div class="upload-btn-wrapper">
                      <button class="btn-upload">Choose File</button>
                      <input type="file" name="archivo_reclamo" />
                      <small>No file chosen</small>

                    </div> --}}
                  <input type="file" name="prueba_file" id="prueba_file" value="">
                  <input class="" type="hidden" name="link_reclamo" value="">
                  </div>
                </div>
                <hr class="hidden-xs">

              </div>

            </div>

            <div class="part5 footer-shadow">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group form-confirm">
                    <div class="checkbox-cont">
                      <input type="checkbox" name="radio5" id="radio5" class="radio" required/>
                      <label for="radio5">
                        <span>Declaro ser el titular del servicio y acepto el contenido del presente formulario manifestando bajo declaración jurada la veracidad de los hechos descritos.</span>
                      </label>
                      <br>
                    </div>
                    <label for="radio5" class="error declaracion hidden"></label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                  <div class="btn-next-cont">
                    <button id="btnForm" class="btn-red btn-send" type="button">ENVIAR</button>
                    <button class="btn-red btn-cancel" href="#" id="">CANCELAR</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <button class="hidden" type="button" id="libro_reclamo_enviado"></button>
        </div>
      </div>
  </div>

  @include('front.includes.footer')
  <script type="text/javascript">
  function postToGoogle_reclamo() {

    var archivo= $("input[name=prueba_file]").prop("files")[0];
    var ruta= "{{url('/')}}";
    if(archivo)
    {
        var file = document.getElementById('prueba_file');
        var archivo= file.files[0];

          var data = new FormData();
          data.append('archivo',archivo);
          data.append('_token',$('meta[name="csrf-token"]').attr('content'));

          $.ajax({
            url: '{!!url('/save-img')!!}',
            type: "POST",
            processData: false,
            contentType: false,
            cache: false,
            data: data,
            success: function (data) {
            $("input[name=link_reclamo]").val(ruta+data);

            var field1 = ruta+'/'+data;

            var field2 = $("input[name=nombre_libro]").val();
            var field3 = $("select[name=tipodocumento_libro]").val();
            var field4 = $("input[name=numdocumento_libro]").val();

            var field6 = $("input[name=apellido_libro]").val();
            var field7 = $("input[name=apellidom_libro]").val();
            var field8 = $("select[name=recibir_libro]").val();
            var field9 = $("input[name=departamento_only]").val();
            var field10 = $("input[name=provincia_only]").val();
            var field11 = $("input[name=distrito_only]").val();
            var field12 = $("input[name=direccion_libro]").val();
            var field13 = $("input[name=telefono_libro]").val();
            var field14 = $("input[name=correo_libro]").val();
            var field15 = $("input[name=radioedad_libro]:checked").val();
            var field16 = $("select[name=tipodocapoderado_libro]").val();
            var field17 = $("input[name=numdocumentomenor_libro]").val();
            var field18 = $("input[name=nombreapoderado_libro]").val();
            var field19 = $("input[name=apellidoapoderado_libro]").val();
            var field20 = $("input[name=apellidoapoderadom_libro]").val();
            var field21 = $("input[name=producto_libro]").val();
            var field22 = $("input[name=fechaincidente_libro]").val();
            var field23 = $("input[name=lugar_libro]").val();
            var field24 = $("input[name=monto_libro]").val();
            var field25 = $("input[name=adquirio_libro]").val();
            var field26 = $("input[name=incidente_libro]:checked").val();
            var field27 = $("textarea[name=descripcion_libro]").val();
            var field28 = $("textarea[name=solicitud_libro]").val();

            //Ajax q envia datos al controller para el envio del Mail
            var data_store = {};
              data_store._token = $('meta[name="csrf-token"]').attr('content')
              data_store.ruta= field1;
              data_store.nombre = field2;
              data_store.tipo = field3;
              data_store.documento = field4;
              data_store.apellidop = field6;
              data_store.apellidom = field7;
              data_store.recibir = field8;
              data_store.departamento = field9;
              data_store.provincia = field10;
              data_store.distrito = field11;
              data_store.direccion = field12;
              data_store.telefono = field13;
              data_store.correo = field14;
              data_store.edad = field15;
              data_store.tipoA = field16;
              data_store.documentoA = field17;
              data_store.nombreA = field18;
              data_store.apellidoPA = field19;
              data_store.apellidoMA = field20;
              data_store.producto = field21;
              data_store.fecha = field22;
              data_store.lugar = field23;
              data_store.monto = field24;
              data_store.adquirio = field25;
              data_store.incidente = field26;
              data_store.descripcion = field27;
              data_store.solicitud = field28;

              $.ajax({
                data:  data_store,
                url:   '{!!url('/envia_libro')!!}',
                type:  'POST',
                beforeSend: function () {
                  console.log('cargando');
                },
                success:  function (response) {
                  console.log(response);
                }});
            //fin ajax mail

             $.ajax({
               url: "https://docs.google.com/forms/d/e/1FAIpQLSeys6WDbDl3NiEaZXxBbdT6yamaeygAGCHWMuHvkZeOk2RyaA/formResponse",
               data: {
                 "entry.290201019": field1,
                 "entry.1554001313": field2,
                 "entry.1139500796": field3,
                 "entry.1124930380": field4,

                 "entry.2117252070": field6,
                 "entry.1389577562": field7,
                 "entry.218010035": field8,
                 "entry.2127814722": field9,
                 "entry.70701988": field10,
                 "entry.1371842858": field11,
                 "entry.1587019873": field12,
                 "entry.780526867": field13,
                 "entry.1309233123": field14,
                 "entry.1509310404": field15,
                 "entry.633594631": field16,
                 "entry.15558647": field17,
                 "entry.171325522": field18,
                 "entry.1248245930": field19,
                 "entry.733261560": field20,
                 "entry.1608905905": field21,
                 "entry.90561729": field22,
                 "entry.896349463": field23,
                 "entry.2140097147": field24,
                 "entry.1870136099": field25,
                 "entry.1293670450": field26,
                 "entry.722612835": field27,
                 "entry.1338952799": field28
               },
               type: "POST",
               dataType: "xml",
               statusCode: {
                 0: function() {

              
                   $("#libro_reclamo_enviado").click();
                    swal("Gracias!", "Se envió correctamente el formulario.", "success");

                 },
                 200: function() {
                   //Success Message
                 }
               }
             });

            },
            error: function (){
            }
          });
      }
    else {
      // var field1="";
      var field2 = $("input[name=nombre_libro]").val();
      var field3 = $("select[name=tipodocumento_libro]").val();
      var field4 = $("input[name=numdocumento_libro]").val();
      // var field5 = $("input[name=nombre_libro]").val();
      var field6 = $("input[name=apellido_libro]").val();
      var field7 = $("input[name=apellidom_libro]").val();
      var field8 = $("select[name=recibir_libro]").val();
      var field9 = $("input[name=departamento_only]").val();
      var field10 = $("input[name=provincia_only]").val();
      var field11 = $("input[name=distrito_only]").val();
      var field12 = $("input[name=direccion_libro]").val();
      var field13 = $("input[name=telefono_libro]").val();
      var field14 = $("input[name=correo_libro]").val();
      var field15 = $("input[name=radioedad_libro]:checked").val();
      var field16 = $("select[name=tipodocapoderado_libro]").val();
      var field17 = $("input[name=numdocumentomenor_libro]").val();
      var field18 = $("input[name=nombreapoderado_libro]").val();
      var field19 = $("input[name=apellidoapoderado_libro]").val();
      var field20 = $("input[name=apellidoapoderadom_libro]").val();
      var field21 = $("input[name=producto_libro]").val();
      var field22 = $("input[name=fechaincidente_libro]").val();
      var field23 = $("input[name=lugar_libro]").val();
      var field24 = $("input[name=monto_libro]").val();
      var field25 = $("input[name=adquirio_libro]").val();
      var field26 = $("input[name=incidente_libro]:checked").val();
      var field27 = $("textarea[name=descripcion_libro]").val();
      var field28 = $("textarea[name=solicitud_libro]").val();

      //Ajax q envia datos al controller para el envio del Mail
      var data_store = {};
        data_store._token = $('meta[name="csrf-token"]').attr('content');
        data_store.nombre = field2;
        data_store.tipo = field3;
        data_store.documento = field4;
        data_store.apellidop = field6;
        data_store.apellidom = field7;
        data_store.recibir = field8;
        data_store.departamento = field9;
        data_store.provincia = field10;
        data_store.distrito = field11;
        data_store.direccion = field12;
        data_store.telefono = field13;
        data_store.correo = field14;
        data_store.edad = field15;
        data_store.tipoA = field16;
        data_store.documentoA = field17;
        data_store.nombreA = field18;
        data_store.apellidoPA = field19;
        data_store.apellidoMA = field20;
        data_store.producto = field21;
        data_store.fecha = field22;
        data_store.lugar = field23;
        data_store.monto = field24;
        data_store.adquirio = field25;
        data_store.incidente = field26;
        data_store.descripcion = field27;
        data_store.solicitud = field28;

        $.ajax({
          data:  data_store,
          url:   '{!!url('/envia_libro')!!}',
          type:  'post',
          beforeSend: function () {
            console.log('cargando');
          },
          success:  function (response) {
            console.log(response);
          }});
      //fin ajax mail

       $.ajax({
         url: "https://docs.google.com/forms/d/e/1FAIpQLSeys6WDbDl3NiEaZXxBbdT6yamaeygAGCHWMuHvkZeOk2RyaA/formResponse",
         data: {
           // "entry.290201019": field1,
           "entry.1554001313": field2,
           "entry.1139500796": field3,
           "entry.1124930380": field4,
           // "entry.1554001313": field5
           "entry.2117252070": field6,
           "entry.1389577562": field7,
           "entry.218010035": field8,
           "entry.2127814722": field9,
           "entry.70701988": field10,
           "entry.1371842858": field11,
           "entry.1587019873": field12,
           "entry.780526867": field13,
           "entry.1309233123": field14,
           "entry.1509310404": field15,
           "entry.633594631": field16,
           "entry.15558647": field17,
           "entry.171325522": field18,
           "entry.1248245930": field19,
           "entry.733261560": field20,
           "entry.1608905905": field21,
           "entry.90561729": field22,
           "entry.896349463": field23,
           "entry.2140097147": field24,
           "entry.1870136099": field25,
           "entry.1293670450": field26,
           "entry.722612835": field27,
           "entry.1338952799": field28
         },
         type: "POST",
         dataType: "xml",
         statusCode: {
           0: function() {

          //   $("input[name=link_reclamo]").val('');
             // $("input[name=dni_contacto]").val('');
             // $("input[name=correo_contacto]").val('');
             // $("input[name=celular_contacto]").val('');
             // $("input[name=distrito_contacto]").val('');
             // $("textarea[name=asunto_contacto]").val('');
             $("#libro_reclamo_enviado").click();
              swal("Gracias!", "Se envió correctamente el formulario.", "success");

           },
           200: function() {
             //Success Message
           }
         }
       });

    }
  }
  $(document).ready(function() {
       $('#btnForm').click(function() {
         // console.log('gg');
         postToGoogle_reclamo();

       });


    //ubigueo
      $("select[name=departamento_libro]").on('change', function(event) {
        $("select[name=provincia_libro]").find('option').remove();
        $("select[name=distrito_libro]").find('option').remove();
        $("select[name=distrito_libro]").prepend('<option value="0" selected>Seleccione</option>');
        $("select[name=provincia_libro]").prepend('<option value="0" selected>Seleccione</option>');
        var departamento = $(this).val();
        var array= departamento.split('-');

       $("input[name=departamento_only]").val($("select[name=departamento_libro] option:selected").text());

        var id_departamento= array[0];
        var nombre_departamento=array[1];
        var data = {};
        data._token= $("meta[name='csrf-token']").attr('content');
        data.provincia = departamento;

        $.ajax({
          type: "POST",
          url: '{!!url('/provincia')!!}',
          data: data,
          success: function(data)
          {
            $("select[name=provincia_libro]").find('option').remove();
            $("select[name=distrito_libro]").find('option').remove();
            $("select[name=distrito_libro]").prepend('<option value="0" selected>Seleccione</option>');
            for (var i = 0; i < data.length; i++) {
                $("select[name=provincia_libro]").append('<option value="'+data[i].id+'">'+data[i].provincia+'</option>');

            }
              $("select[name=provincia_libro]").prepend('<option value="0" selected>Seleccione</option>');
          },
          error: function()
          {
            alert('Error en la conexión');
          }
        });
      });

      $("select[name=provincia_libro]").on('change', function(event) {
         $("input[name=provincia_only]").val($("select[name=provincia_libro] option:selected").text());
        var provincia = $(this).val();
        var array= provincia.split('-');

        var id_provincia= array[0];
        var nombre_provincia=array[1];
        var data = {};
        data._token= $("meta[name='csrf-token']").attr('content');
        data.provincia = provincia;

        $.ajax({
          type: "POST",
          url: '{!!url('/distrito')!!}',
          data: data,
          success: function(data)
          {
            $("select[name=distrito_libro]").find('option').remove();
            for (var i = 0; i < data.length; i++) {
                $("select[name=distrito_libro]").append('<option value="'+data[i].id+'">'+data[i].distrito+'</option>');

            }
              $("select[name=distrito_libro]").prepend('<option value="0" selected>Seleccione</option>');
          },
          error: function()
          {
            alert('Error en la conexión');
          }
        });
      });
    });
  $("select[name=distrito_libro]").on('change', function(event) {
       $("input[name=distrito_only]").val($("select[name=distrito_libro] option:selected").text());
  });
  </script>
@endsection
