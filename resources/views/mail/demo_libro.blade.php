<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|ACaslonPro:100,300,400,500,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link href="../../../public/css/estilos.css" rel="stylesheet" type="text/css" />
    <style>
      .titmail{
        font-size: 18px;
        font-weight: bold;
        letter-spacing: -0.5px;
        color: #bca266;
        text-align: center;
      }
      body{
        border-bottom: 0px !important;
      }
      .content p{
        font-size: 16px;
        text-align: left;
        color: #7b6851;
      }
      .content{
        border: 3px solid rgba(242,242,242,1);
        padding: 20px 35px;
        width: 500px;
        left: 30%;
        position: absolute;
      }
      hr{
        width: 500px;
        border: 1px solid rgba(242,242,242,1) !important;
      }
      
    </style>
  </head>

  <body>
    <div class="content">
      <h3 class="titmail">Libro de Reclamaciones</h3>
      <hr>
      <p><b>Datos Personales</b></p>
      <hr>
      <p>Tipo de Documento: {{$tipo}}</p>
      <p>Nro. de Documento: {{$documento}}</p>
      <p>Nombres: {{$name}}</p>
      <p>Apellido Paterno: {{$apellidop}}</p>
      <p>Apellido Materno: {{$apellidom}}</p>
      <p>Enviar la respuesta a: {{$recibir}}</p>
      <p>Departamento {{$departamento}}</p>
      <p>Provincia: {{$provincia}}</p>
      <p>Distrito: {{$distrito}}</p>
      <p>Dirección: {{$direccion}}</p>
      <p>Teléfono: {{$telefono}}</p>
      <p>Correo: {{$correo}}</p>
      <p>Menor de edad: {{$edad}}</p>
      <hr>
      <p><b>Datos del apoderado</b></p>
      <hr>
      <p>Tipo de Documento: {{$tipoA}}</p>
      <p>Nro. de Documento: {{$documentoA}}</p>
      <p>Nombres: {{$nombreA}}</p>
      <p>Apellido Paterno: {{$apellidoPA}}</p>
      <p>Apellido Materno: {{$apellidoMA}}</p>
      <hr>
      <p><b>Información general del caso</b></p>
      <hr>
      <p>Nombre del producto: {{$producto}}</p>
      <p>Fecha del incidente: {{$fecha}}</p>
      <p>Lugar: {{$lugar}}</p>
      <p>Monto:{{$monto}}</p>
      <p>Lugar donde adquirio el producto: {{$adquirio}}</p>
      <hr>
      <p><b>Cuentenos su incidente</b></p>
      <hr>
      <p>Incidente: {{$incidente}}</p>
      <p>Solicitud del cliente: {{$descripcion}}</p>
      <p>Solicitud del cliente: {{$solicitud}}</p>
    </div>
  </body>
</html>
