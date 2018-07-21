<?php
 $variable_a = $request->input('tipo_cotizar_pavo');
 $variable_b = $request->input('tipo_cotizar_paneton');

 $ruc=  $request->input('ruc');
 $razonsocial=  $request->input('razonsocial');
 $nombreP= $request->input('nombreP');
 $apellidoP= $request->input('apellidoP');
 $email= $request->input('email');
 $telefono= $request->input('telefono');
 $mensaje= $request->input('mensaje');
 $lugar= $request->input('lugar');
	// if($lugar==0){$lugar_texto='Lima';}
	// if($lugar==1){$lugar_texto='Provincias';}
	// if($lugar==2){$lugar_texto='Ambos';}

// tipo de vales
 $tipo_vale_pavo= $request->input('tipo_vale_pavo');
 $tipo_vale_paneton= $request->input('tipo_vale_paneton');

 /*Preparar Mail*/
 $to= "zmendoza@apros.pe";
 // $to = "guribe@san-fernando.com.pe";
 // $to_a = "cpalominoq@san-fernando.com.pe";
 // $to_b = "lhidalgow@san-fernando.com.pe";
 // $to_c= "cpalominoq@san-fernando.com.pe";


 $subject= "Cotización de Productos";
 $headers =  'MIME-Version: 1.0' . "\r\n";
 $headers .= 'From:'.$nombreP.' '.$apellidoP.'<'.$email.'>'. "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $message = '----------------------------------------'."<br>\n";
 $message .= 'Datos Personales'."<br>\n";
 $message .= '----------------------------------------'."<br>\n";
 $message .=  'Nombre: '.$nombreP."<br>\n";
 $message .= 'Apellido: '.$apellidoP."<br>\n";
 $message .= 'Email: '.$email."<br>\n";
 $message .= 'Teléfono: '.$telefono."<br>\n";
 $message .= 'Mensaje: '.$mensaje."<br>\n";

 $message .= "<br>\n";

 $flag='';
 $flag_1='';

 if($variable_a=='') // si escogio solo paneton
 {
	 $tipo_cantidad_paneton = $request->input('tipo_cantidad_paneton');
	 $array_paneton= $request->input('paneton-input');
	 $message .= '----------------------------------------'."<br>\n";
	 $message .= 'Vale de: '.$variable_b."<br>\n";
	 $message .= '----------------------------------------'."<br>\n";
	 $message .= 'Panetón / Cantidad'."<br>\n";
	 for ($i=0; $i < sizeof($array_paneton); $i++)
	 {
		 $flag= $tipo_cantidad_paneton[$i].': '.$array_paneton[$i]."<br>\n".$flag;
	 }
	 $message .=$flag."<br>\n";
	 $message .= '----------------------------------------'."<br>\n";

 }
 if($variable_b=='') //si escogio solo pavo
 {
	 $tipo_cantidad_pavo= $request->input('tipo_cantidad_pavo');
	 $array_pavo= $request->input('pavo-input');
	 $message .= '----------------------------------------'."<br>\n";
	 $message .= 'Vale de: '.$variable_a."<br>\n";
	 $message .= '----------------------------------------'."<br>\n";
	 $message .= 'Tipos de vales / Cantidad'."<br>\n";
	 for ($i=0; $i < sizeof($array_pavo); $i++)
	 {
		 $flag=  $tipo_cantidad_pavo[$i].': '.$array_pavo[$i]."<br>\n".$flag;
	 }
	 $message .=$flag."<br>\n";
	 $message .= '----------------------------------------'."<br>\n";
 }

 if(($variable_b=='paneton')and($variable_a=='pavo')) //si escogio los dos
 {
	 $tipo_cantidad_paneton = $request->input('tipo_cantidad_paneton');
	 $array_paneton= $request->input('paneton-input');
	 $message .= '----------------------------------------'."<br>\n";
	 $message .= 'Vale de: '.$variable_b."<br>\n";
	 $message .= '----------------------------------------'."<br>\n";
	 $message .= 'Panetón / Cantidad'."<br>\n";
	 for ($i=0; $i < sizeof($array_paneton); $i++)
	 {
		 $flag= $tipo_cantidad_paneton[$i].': '.$array_paneton[$i]."<br>\n".$flag;
	 }
	 $message .=$flag."<br>\n";

	 $tipo_cantidad_pavo= $request->input('tipo_cantidad_pavo');
	 $array_pavo= $request->input('pavo-input');
	 $message .= '----------------------------------------'."<br>\n";
	 $message .= 'Vale de: '.$variable_a."<br>\n";
	 $message .= '----------------------------------------'."<br>\n";
	 $message .= 'Tipos de vales / Cantidad'."<br>\n";
	 for ($j=0; $j < sizeof($array_pavo); $j++)
	 {
		 $flag_1=  $tipo_cantidad_pavo[$j].': '.$array_pavo[$j]."<br>\n".$flag_1;
	 }
	 $message .=$flag_1."<br>\n";
	 $message .= '----------------------------------------'."<br>\n";
 }

  //
  // // $url= $_SERVER["HTTP_HOST"];
  // mail($to,$subject, $message, $headers);
   // mail("$to,$to_a,$to_b,$to_c",$subject, $message, $headers);
?>
@extends('app.appfront')
@section('style')
  <link href="css/vale-pavo.css" rel="stylesheet" type="text/css" />
@endsection
@section('script')
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34020497-2"></script>
@endsection
<!-- /.heading-->
@section('content')
<div id="container-sanfer" class="container-sanfer">
  <div id="home" class="page-content-wrapper">
      <div class="home-container">
        {{-- <section id="s-canjear">
          @include('front.includes.canjear-valepavo')
        </section> --}}
        {{-- @include('front.includes.header-valepavo') --}}
        <div class="canjear-container_2">
          <header class="header-pavo" role="banner">
            <nav id="navbar-primary" class="navbar" role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" id="menu-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar-one"></span>
                    <span class="icon-bar bar-two"></span>
                    <span class="icon-bar bar-three"></span>
                    <div class="menu-label" style="margin-left:-2px">MENÚ</div>
                  </button>
                  <div class="logo-main min hidden-lg hidden-md hidden-sm">
                    <!-- <a href='#' class='logo'><img src="images/logo.png" ></a> -->
                    <a href="{!!url('/')!!}" class='logo-min'><img src="images/small-logo.png" alt="logo san fernando"></a>
                  </div>
                </div>

                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                    {{-- <li class="nav-links"><a href="#canjear" data-ancla="canjear">Canjea</a></li>
                    <li class="nav-links"><a href="#cotizar" data-ancla="cotizar">Cotiza</a></li> --}}
                    <li class="hidden-xs">
                      <div class="logo-main min">
                        <a href="{!!url('/')!!}" class='logo'><img id="logo-navbar-middle" src="images/logo.png" alt="Logo Thing main logo"></a>
                        <a href="{!!url('/')!!}" class='logo-min'><img id="logo-navbar-middle" src="images/small-logo.png" alt="Logo Thing main logo"></a>
                      </div>
                    </li>
                    {{-- <li class="nav-links"><a href="#beneficios" data-ancla="beneficios">Beneficios</a></li>
                    <li class="nav-links"><a href="#recetas" data-ancla="recetas">Receta</a></li> --}}
                    <div class="col-lg-12 col-sm-12 col-xs-12 col-btn-contacto hidden-lg hidden-md hidden-sm">
                      <div class="btn-footer btn-contact-header">
                        <a class="btn-contacto"><i class="fa fa-envelope" aria-hidden="true"></i><span>Contáctenos</span></a>
                      </div>
                      <div class="btn-footer">
                        <a href="https://www.facebook.com/san.fernando.labuenafamilia" target="_blank" class="btn-facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span>Síguenos</span></a>
                      </div>
                    </div>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </header><!-- header role="banner" -->
          <section class="background-cotizacion" id="s-cotizar">
            <div class="bloque_2">
              <div class="events-content">
                <h2 class="title-cotizacion titulo_db subtitle_cotizacion">¡Envío de solicitud exitoso!</h2>
                  <ol class="list-unstyled">
                    <li data-date="20/04/2014">
                      <br>
                      <div class="msj-container" style="display: block">
                        {{-- <p class='title-cotizacion titulo_db subtitle_cotizacion"'></p> --}}
                        <p class="msj-paragraph">Gracias por confiar en la buena Familia para sorprender a tus colaboradores. Te hemos enviado un correo detallando tu solicitud. Te contactaremos lo más pronto posible. Si tienes alguna consulta, comunícate al 213-5300, anexo 2274.</p>
                        <div class="msj-info">
                          <p class="cotizacion-title">Resumen de tu cotización</p>

                            <div class="row" style="width: 100%;">


                            <div class="col-md-6">

                              @if ($tipo_cotizar_pavo)
                                <table class="table table-bordered">
                                  <thead>
                                    <td colspan="2"><p class="text-center">Pavo</p></td>
                                    <tr>
                                      <th>Tipo de vale</th>
                                      <th>Cantidad</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    if(sizeof($tipo_cantidad_pavo)>0)
                                    {
                                    for ($i=0; $i < sizeof($tipo_cantidad_pavo); $i++){
                                        echo '<tr><td>'.$tipo_cantidad_pavo[$i].'</td><td>'.$pavo_input[$i].'</td></tr>';
                                      }
                                    }
                                    ?>
                                  </tbody>
                                </table>
                              @else

                              @endif
                            </div>

                          <div class="col-md-6">

                            @if ($tipo_cotizar_paneton)
                              <table class="table table-bordered">
                                <thead>
                                  <td colspan="2"><p class="text-center">Panetón</p></td>
                                  <tr>
                                    <th>Tipo de vale</th>
                                    <th>Cantidad</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  if(sizeof($tipo_cantidad_paneton)>0)
                                  {
                                  for ($i=0; $i < sizeof($tipo_cantidad_paneton); $i++){
                                      echo '<tr><td>'.$tipo_cantidad_paneton[$i].'</td><td>'.$paneton_input[$i].'</td></tr>';
                                    }
                                  }
                                  ?>
                                </tbody>
                              </table>
                            @else
                            @endif
                          </div>
                         </div>
                        </div>
                      </div>
                    </li>
                  </ol>
              </div>
            </div>
          </section>
        </div>





<div class="container" hidden>
    <div class="row">
        <form class="col-md-8 col-md-offset-2" id="form" target="_self" onsubmit="" action="javascript: postToGoogle()">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $nombreP;?>">

                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" value="<?php echo $apellidoP;?>">

                <label for="email">Email (obligatorio)</label>
                <input type="email" class="form-control" id="email" name="email" required value="<?php echo $email;?>">

                <label for="telefono">Teléfono de contacto (opcional)</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Fijo o celular" value="<?php echo $telefono;?>">

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" rows="3" ><?php echo $mensaje;?></textarea>

                <label for="nombre">Lugar</label>
                <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Lugar" value="">

                <label for="nombre">RUC</label>
                <input type="text" class="form-control" id="ruc" name="ruc" placeholder="ruc" value="<?php echo $ruc;?>">

                <label for="nombre">Razon social</label>
                <input type="text" class="form-control" id="razonsocial" name="razonsocial" placeholder="razon social" value="<?php echo $razonsocial;?>">
                @isset($array_paneton)


                <?php
                if(sizeof($array_paneton)>0)
                {
                for ($i=0; $i < sizeof($array_paneton); $i++){
                    if($tipo_cantidad_paneton[$i]=='Bolsa x 6 Unidades')
                    {
                      echo '<input type="text" class="form-control" name="paneton1" id="paneton1" value="'.$array_paneton[$i].'">';
                    }
                    if($tipo_cantidad_paneton[$i]=='Caja x 6 Unidades')
                    {
                      echo '<input type="text" class="form-control" name="paneton2" id="paneton2" value="'.$array_paneton[$i].'">';
                    }
                  }
                }
                else {
                  # code...
                }
                ?>
                @endisset
                @isset($array_pavo)

              <?php
                if(sizeof($array_pavo)>0)
                {
                  for ($i=0; $i < sizeof($array_pavo); $i++){
                      if($tipo_cantidad_pavo[$i]=='Vale por 5 Kg')
                      {
                        echo '<input type="text" class="form-control" name="pavo5" id="pavo5" value="'.$array_pavo[$i].'">';
                      }
                      if($tipo_cantidad_pavo[$i]=='Vale por 6 Kg')
                      {
                        echo '<input type="text" class="form-control" name="pavo6" id="pavo6" value="'.$array_pavo[$i].'">';
                      }
                      if($tipo_cantidad_pavo[$i]=='Vale por 7 Kg')
                      {
                        echo '<input type="text" class="form-control" name="pavo7" id="pavo7" value="'.$array_pavo[$i].'">';
                      }
                      if($tipo_cantidad_pavo[$i]=='Vale por 8 Kg')
                      {
                        echo '<input type="text" class="form-control" name="pavo8" id="pavo8" value="'.$array_pavo[$i].'">';
                      }
                      if($tipo_cantidad_pavo[$i]=='Vale por 9 Kg')
                      {
                        echo '<input type="text" class="form-control" name="pavo9" id="pavo9" value="'.$array_pavo[$i].'">';
                      }
                      if($tipo_cantidad_pavo[$i]=='Vale por 10 Kg')
                      {
                        echo '<input type="text" class="form-control" name="pavo10" id="pavo10" value="'.$array_pavo[$i].'">';
                      }
                      if($tipo_cantidad_pavo[$i]=='Vale por 11 Kg')
                      {
                        echo '<input type="text" class="form-control" name="pavo11" id="pavo11" value="'.$array_pavo[$i].'">';
                      }
                      if($tipo_cantidad_pavo[$i]=='Vale por 12 Kg')
                      {
                        echo '<input type="text" class="form-control" name="pavo12" id="pavo12" value="'.$array_pavo[$i].'">';
                      }
                  }
                }
                else {
                  # code...
                }
                 ?>
                 @endisset
            <div class="text-center col-md-12 mt10 mb20">
                <button id="send" type="submit" class="text-center btn st-btn btn-rounded btn-primary">Enviar</button>
            </div>
            <!-- end text-center -->
        </form>
    </div>
    <!-- end row -->
</div>
<!-- end container -->
<section class="pre-footer-valepavo">
  @include('front.includes.pre-footer-valepavo')
</section>
@include('front.includes.footer')
</div>
<section class="contacto-valepavo-container">
@include('front.includes.contacto-valepavo')
</section>
@include('front.includes.pie-links-valepavo')
<script src="js/cotizacion-timeline.js"></script>
<script src="js/pavicar-modal.js"></script>
<script src="js/jsonPuntos.js"></script>
<script src="js/canjear-mapa.js"></script>
<script type="text/javascript">
function postToGoogle() {
  //datos personales
  var field1 = $('#nombre').val();
  var field2 = $('#apellido').val();
  var field3 = $('#email').val();
  var field4 = $('#telefono').val();
  var field5 = $('#mensaje').val();
  var field6 = $('#lugar').val();
  //pavo
  var field7 = $('#pavo5').val();
  var field8 = $('#pavo6').val();
  var field9 = $('#pavo7').val();
  var field10 = $('#pavo8').val();
  var field11 = $('#pavo9').val();
  var field12 = $('#pavo10').val();
  var field13 = $('#pavo11').val();
  var field14 = $('#pavo12').val();

  //paneton
  var field15 = $('#paneton1').val();
  var field16 = $('#paneton2').val();

  //ruc, razon social
  var field17 = $('#ruc').val();
  var field18 = $('#razonsocial').val();

   $.ajax({
     url: "https://docs.google.com/forms/d/e/1FAIpQLSf1o3u9bhhKY4uvhVjED-_D7vzyFLgbeOr8h7bRcBmutSX0-w/formResponse",
     data: {
       "entry.1751095030": field1,
       "entry.2147023920": field2,
       "entry.1920552079": field3,
       "entry.611157868": field4,
       "entry.1344305836": field5,
       "entry.306696515": field6,

       "entry.1195884696": field7,
       "entry.1173062837": field8,
       "entry.1864340409": field9,
       "entry.1710150398": field10,
       "entry.908972685": field11,
       "entry.1341039556": field12,
       "entry.1997468258": field13,
       "entry.219758233": field14,

       "entry.1047775046": field15,
       "entry.2015721462": field16,

       "entry.806601047": field17,
       "entry.2121021891": field18,

     },
     type: "POST",
     dataType: "xml",
     statusCode: {
       0: function() {
         //Success message
       },
       200: function() {
         //Success Message
       }
     }
   });
  }
  $(document).ready(function() {
    $('#send').click();
    $('#form').submit(function() {
      postToGoogle();
      return false;
    });
});
</script>
</div>
</div>
@endsection
