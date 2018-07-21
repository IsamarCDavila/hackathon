<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        @isset($title)
         <title>VIVE AQP</title>
        @endisset

        @empty($records)
        <title>Arequipa - Perú</title>
        @endempty

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="turismo arequipa">
        <meta name="description" content="turismo arequipa">
        <meta property="og:title" content="Vive aqp">
        <meta property="og:type" content="website"/>
        <meta property="og:site_name" content="VIVE AQP - Perú">
        <meta property="og:description" content="VIIVE AQP - Perú">
        <link rel="icon" href="images/hero/heart.svg" type="image/gif" sizes="16x16">
        <!--<meta property="og:image" content="https://www.san-fernando.com.pe/images/logo.png">-->

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="author" name="Ampra Consultant"/>
        <!--<link rel="shortcut icon" href="https://www.san-fernando.com.pe/images/logo.png" type="image/x-icon">-->


        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->

        <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|ACaslonPro:100,300,400,500,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Helvetica+Neue:100,300,400,500,700,800,900" rel="stylesheet">

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
        <script src="<?php echo URL::asset('js/jquery.min.js'); ?>" type="text/javascript"></script>
        <link href="<?php echo URL::asset('assets/global/plugins/jquery-ui/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('assets/global/plugins/bootstrap-select/css/bootstrap-select.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />




        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

        <!--BEGIN GLOBAL STYLE-->
        <link href="<?php echo URL::asset('css/style.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/media-queries.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/estilos.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/lineaProducto.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/distribuidores.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/animate.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/slick.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/slick-theme.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/sweetalert.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/open.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/recetas.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/puntosventa.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/formulario-style.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/inline.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

        <!--END GLOBAL STYLE-->
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W779RK6');</script>
        <!-- End Google Tag Manager -->
      </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W779RK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @yield('script')
    @yield('style')
    @yield('content')
    <div id="fondo-azul" class="fondo-azul"></div>
    <script src="<?php echo URL::asset('assets/global/plugins/jquery-ui/jquery-ui.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

    <script src="<?php echo URL::asset('assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('/js/slick.js'); ?>" type="text/javascript"></script>

    <script src="<?php echo URL::asset('js/sweetalert.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/menu.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/scroll.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/noticiaSlider.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/media-queries.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/validaciones.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/validacion.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/jquery-sticktotop.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/recetaDetalle.js'); ?>" type="text/javascript"></script>
  </body>
</html>
