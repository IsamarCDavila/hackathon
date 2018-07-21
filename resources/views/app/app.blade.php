<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>VIVE AQP</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #2 for blank page layout" name="description" />
        <meta content="" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/sweetalert.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo URL::asset('assets/global/css/components-md.min.css'); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo URL::asset('assets/global/css/plugins-md.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css'); ?>" rel="stylesheet" type="text/css">
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo URL::asset('assets/layouts/layout2/css/layout.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('assets/layouts/layout2/css/themes/blue.min.css'); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo URL::asset('assets/layouts/layout2/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap2/bootstrap-switch.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


        <link href="<?php echo URL::asset('assets/global/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/slick.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/slick-theme.css'); ?>" rel="stylesheet" type="text/css" />
        <script src="<?php echo URL::asset('/js/slick.js'); ?>" type="text/javascript"></script>

        <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
        <script src="<?php echo URL::asset('assets/global/plugins/select2/js/select2.full.min.js'); ?>" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.js"></script>
        <script src="https://rubaxa.github.io/Sortable/Sortable.js"></script>
        <script src="<?php echo URL::asset('js/bootstrap3-wysihtml5/wysihtml5.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js'); ?>" type="text/javascript"></script>

        {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
        <script src="http://momentjs.com/downloads/moment.min.js"></script>
        <link href="<?php echo URL::asset('css/main.css'); ?>" rel="stylesheet" type="text/css" />
        <script src="<?php echo URL::asset('js/geoubicacion.js'); ?>" type="text/javascript"></script>
        <!-- slider recetas -->
        <link href="<?php echo URL::asset('css/estilos.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::asset('css/recetas.css'); ?>" rel="stylesheet" type="text/css" />

        <script src="<?php echo URL::asset('js/images.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo URL::asset('js/sweetalert.min.js'); ?>" type="text/javascript"></script>
        <script>
        var ruta_principal = '{{url('/')}}';
        </script>
<style>
.right {
    float: right;
}
</style>
    <!-- END HEAD -->
    </head>

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                  <div class="col-md-9 nopadding imglogo">
                    <a href="{{ url("/") }}"><img src="{!!url('/images/logo-footer.png')!!}" alt="mallki logo" class="img-responsive"/></a>
                  </div>
                  <div class="col-md-3 nopadding">
                    <div class="menu-toggler sidebar-toggler"></div>
                  </div>
                </div>
                <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                                                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

                                    <span class="username username-hide-on-mobile"> ¡Hola! Isa</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">

                                    <li>
                                        <a href="{{url('/salir')}}">
                                            <i class="icon-key"></i> Cerrar Sesión </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN TOP NAVIGATION MENU -->

                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
                <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">



                      <li class="nav-item start ">
                          <a href="{!!url('/slider')!!}" class="nav-link nav-toggle">
                              <i class="icon-home"></i>
                              <span class="title">Slider</span>
                              <span class="arrow"></span>
                          </a>
                      </li>
                        <li class="nav-item  ">
                            <a href="{!!url('/banner')!!}" class="nav-link nav-toggle">
                                <i class="icon-picture"></i>
                                <span class="title">Banner</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{!!url('admin/productos')!!}" class="nav-link nav-toggle">
                                <i class="icon-basket-loaded"></i>
                                <span class="title">Cursos</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{!!url('admin/recetas')!!}" class="nav-link nav-toggle">
                                <i class="icon-list"></i>
                                <span class="title">Recetas</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{!!url('/noticias')!!}" class="nav-link nav-toggle">
                                <i class="icon-book-open"></i>
                                <span class="title">Noticias</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{!!url('/puntosventa')!!}" class="nav-link nav-toggle">
                                <i class="icon-map"></i>
                                <span class="title">Puntos colegio</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{!!url('/contacto')!!}" class="nav-link nav-toggle">
                                <i class="icon-call-end"></i>
                                <span class="title">Contacto</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
             <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="wrapper row">
                      <!-- BEGIN CONTENT -->
                        @yield('content')
                      <!-- END CONTENT -->
                    </div>
                        <!-- BEGIN FOOTER -->
                        <div class="page-footer">
                            <div class="page-footer-inner">2018 &copy; Code en mi cole
                                <div class="scroll-to-top">
                                    <i class="icon-arrow-up"></i>
                                </div>
                            </div>
                            <!-- END FOOTER -->
                            <!--[if lt IE 9]>
                <script src="<?php echo URL::asset('assets/global/plugins/respond.min.js'); ?>"></script>
                <script src="<?php echo URL::asset('assets/global/plugins/excanvas.min.js'); ?>"></script>
                <script src="<?php echo URL::asset('assets/global/plugins/ie8.fix.min.js'); ?>"></script>
                <![endif]-->
                            <!-- BEGIN CORE PLUGINS -->
                            <script src="<?php echo URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo URL::asset('assets/global/plugins/js.cookie.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo URL::asset('assets/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
                            <!-- END CORE PLUGINS -->
                            <!-- BEGIN THEME GLOBAL SCRIPTS -->
                            <script src="<?php echo URL::asset('assets/global/scripts/app.min.js'); ?>" type="text/javascript"></script>
                            <!-- END THEME GLOBAL SCRIPTS -->
                            <!-- BEGIN THEME LAYOUT SCRIPTS -->
                            <script src="<?php echo URL::asset('assets/layouts/layout2/scripts/layout.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo URL::asset('assets/layouts/layout2/scripts/demo.min.js'); ?>" type="text/javascript"></script>

                            <!-- END THEME LAYOUT SCRIPTS -->

                            @yield('script')
                    </body>

                </html>
