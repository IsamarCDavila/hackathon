<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="../../../public/css/vale-pavo.css" rel="stylesheet" type="text/css" />
    <style media="screen">
      body{
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif !important;
      }
    </style>
  </head>
  <body>
    <section class="background-cotizacion" id="s-cotizar">
      <div class="bloque_2">
        <div class="events-content">

            <ol class="list-unstyled">
              <li data-date="20/04/2014">
                <br>
                <div class="msj-container" style="display: block">


                  <div class="msj-info">
                    <p class="cotizacion-title">DATOS DEL CONTACTO</p>
                  <div class="row" style="width: 100%;">
                      <div class="col-md-12">
                        <p class="subtitulo_db_">RUC: {{$ruc}}</p>
                        <p class="subtitulo_db_">Razon Social:{{$razonsocial}}</p>
                        <p class="subtitulo_db_">Nombres: {{$name}}</p>
                        <p class="subtitulo_db_">Apellidos:{{$apellidoP}}</p>
                        <p class="subtitulo_db_">E-mail:{{$email}}</p>
                        <p class="subtitulo_db_">Teléfono:{{$telefono}}</p>
                        <p class="subtitulo_db_">Lugar de Canje:{{$lugar}}</p>
                        <p class="subtitulo_db_">Comentario:{{$mensaje}}</p>
                      </div>
                    </div>
                    <p class="cotizacion-title">RESUMEN DE LA COTIZACIÓN</p>
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
  </body>
</html>
