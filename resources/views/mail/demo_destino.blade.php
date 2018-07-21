<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|ACaslonPro:100,300,400,500,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Helvetica+Neue:100,300,400,500,700,800,900" rel="stylesheet">
    <link href="../../../public/css/estilos.css" rel="stylesheet" type="text/css" />
    <style>
      .titmail{
        font-size: 18px;
        font-weight: bold;
        letter-spacing: -0.5px;
        color: #bca266;
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
    </style>
  </head>

  <body>
    <div class="content">
      <h3 class="titmail">Datos del Contacto</h3>
      <p>Nombre: {{$name}}</p>
      <p>DNI: {{$dni}}</p>
      <p>Email: {{$email_contacto}}</p>
      <p>Teléfono: {{$telefono}}</p>
      <p>Distrito: {{$distrito}}</p>
      <p>Mensaje: {{$mensaje}}</p>
    </div>
  </body>
</html>
