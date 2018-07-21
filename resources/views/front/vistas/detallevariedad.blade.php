@extends('app.appfront')
<?php
$title = 'Producto - San Fernando';
?>
@section('style')
<link href="<?php echo URL::asset('css/detalle-variedad.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('css/nosotros.css'); ?>" rel="stylesheet" type="text/css" />
@endsection
@section('script')
@endsection
<!-- /.heading-->
@section('content')
  @include('front.includes.header')
  <div id="container-sanfer" class="container-sanfer">
  <div class="receta-cont footer-shadow">
    <div class="cont-cabecera row row-nomargin">
      <div class="row-global">
        <div class="col-lg-offset-3 col-lg-7 col-sm-10 col-xs-12 col-sm-offset-1 col-nopadding">
          <h1 class="tit-cabecera">Productos</h1>
          <p class="parraf-cabecera">¿Buscas un poco de inspiración?  Te damos algunas recetas  para que cocines una variedad de platos para engreír a toda tu familia.</p>
        </div>
      </div>
    </div>

    <div class="cont-recetas row">
      <div class="section-menu recetas_section row">
        <div class="col-md-6 col-sm-6 col-xs-12 imagen-home col-nopadding">

          <div class="col-lg-12  col-sm-12 col-xs-12 col-nopadding cont-familia-slider contenedor_recetaprincipal">
            <div class="cont-slider">
              <!-- slider menu -->
                <!-- <div id="myCarouselRecetas" class="carousel sliderhome slide carousel-sync-intro" data-ride="carousel" data-pause="false"> -->
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner homeslider" role="listbox">
                    <div class="item active">
                      <h1 class="disfruta">Salchicha de Pollo</h1>
                      <p class="item-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                      <h1 class="ingredientes">Ingredientes</h1>
                      <p class="item-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="item">
                      <h1 class="disfruta">Salchicha de Pollo</h1>
                      <p class="item-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                      <h1 class="ingredientes">Ingredientes</h1>
                      <p class="item-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                  </div>
                <!-- </div> -->
                <!-- fin slider home -->
            </div>
          </div>

        </div>
          <div class="col-lg-6 col-sm-6 col-xs-12 menu-slider col-nopadding">

            <div class="col-lg-12  col-sm-12 col-xs-12 col-nopadding contenedor_img_receta cont-familia-slider">
              <div class="row row-nomargin row-global row-buscador">
                <div class="cont-buscadorreceta col-xs-12 ">
                  <input type="text" class="form-control input-buscador" placeholder="Busque por cualquier palabra">
                  <a class="btn-buscar" href="#">Buscar</a>
                </div>
              </div>
              <div class="cont-slider">
                <!-- slider menu -->
                  <div id="myCarouselimgrecetas" class="carousel sliderhome slide carousel-sync-intro" data-ride="carousel" data-pause="false">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner homeslider" role="listbox">
                      <div class="item active">
                        <div class="cont-imghome" style="background: url('images/embutidos.jpg') no-repeat center center; background-size: cover;" ></div>
                      </div>
                      <div class="item">
                        <div class="cont-imghome" style="background: url('images/foto_huevos.jpg') no-repeat center center; background-size: cover;" ></div>
                      </div>
                      <div class="item">
                        <div class="cont-imghome" style="background: url('images/foto_paneton.jpg') no-repeat center center; background-size: cover;" ></div>
                      </div>
                    </div>
                  </div>
                  <!-- fin slider home -->
                  <!-- Botones slider -->
                  <div class="botones-avanzar hidden-xs" id="botones-avanzar">
                    <!-- Left controls -->
                    <button class="btn-retrocede" href="#myCarouselimgrecetas" data-slide="prev">
                      <img src="images/arrow-left.png" class="img-responsive"/>
                    </button>
                    <!-- Right controls -->
                    <button class="btn-adelanta" href="#myCarouselimgrecetas" data-slide="next">
                      <img src="images/arrow-right.png" class="img-responsive"/>
                    </button>
                  </div>
                  <!-- Fin Botones slider -->
              </div>
            </div>

          </div>
        </div>
        <!--fin slider-->


        <div class="row section_nutricional">
          <div class="col-lg-12 col-sm-12 col-xs-12 puntos-vta">
            <h3 class="txt-azul46">Resumen Nutricional</h3>
          </div>
          <div class="resumen_nutricional">
            <div class="col-md-3 col-xs-6">
              <div class="caja">
                <div class="contenido-caja">
                  <h1 class="titulo_nutricional">Calorias</h1>
                  <p class="num_nutricional">48g</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="caja">
                <div class="contenido-caja">
                  <h1 class="titulo_nutricional">Grasas</h1>
                  <p class="num_nutricional">48g</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="caja">
                <div class="contenido-caja">
                  <h1 class="titulo_nutricional">Carbohidratos</h1>
                  <p class="num_nutricional">48g</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="caja">
                <div class="contenido-caja">
                  <h1 class="titulo_nutricional">Proteínas</h1>
                  <p class="num_nutricional">48g</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row nutricion">
            <div class="container_nutricion">
              <h1 class="tit_nutricion">Nutrición</h1>
              <hr class="hrunion">
              <div class="row">
                <div class="col-md-6  col-sm-6 col-xs-12 contenedor_cajadorada">
                  <div class="caja_dorada">
                    <p class="distribuidor-subtitle-form">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <h3>Desglose de calorias: </h3>
                  <div class="row desgloso_categoria">
                    <div class="col-md-4 col-xs-6">
                      <a href="#" class="titDorado2" data-toggle="modal" data-target="#isoModal">
                      <img src="images/sgs.png" alt="certificado San Fernando" class="img-responsive">
                      </a>
                    </div>
                    <div class="col-md-4 col-xs-6">
                      <a href="#" class="titDorado2" data-toggle="modal" data-target="#isoModal">
                      <img src="images/sgs.png" alt="certificado San Fernando" class="img-responsive">
                      </a>
                    </div>
                    <div class="col-md-4 hidden-xs"></div>

                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 contenedor">

                    <div class="caja-azul" id="">
                      <div class="caja-blanca">
                        <div class="row caja_informacion">
                          <div class="caja_dorada">
                            <p class="distribuidor-subtitle-form">INFORMACIÓN NUTRICIONAL</p>
                            <p class="distribuidor-subtitle-form">Porción 350g</p>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12 col-xs-12">
                            <p class="text-right">Valor diario(%)</p>
                            <hr class="principal">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-8 col-xs-8 col bef"><p>Carbohidratos</p></div>
                          <div class="col-md-2 col-xs-2 col befe"><p>34g</p></div>
                          <div class="col-md-2 col-xs-2 col befe"><p>28%</p></div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 col-xs-8 bef"><p>Proteínas</p></div>
                          <div class="col-md-2 col-xs-2 col befe"><p>34g</p></div>
                          <div class="col-md-2 col-xs-2 col befe"><p>28%</p></div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 col-xs-8 bef"><p>Grasa</p></div>
                          <div class="col-md-2 col-xs-2 col befe"><p>34g</p></div>
                          <div class="col-md-2 col-xs-2 col befe"><p>28%</p></div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 col-xs-8 bef"><p>Sodio</p></div>
                          <div class="col-md-2 col-xs-2 col befe"><p>34g</p></div>
                          <div class="col-md-2 col-xs-2 col befe"><p>28%</p></div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 col-xs-8 bef"><p>Energía</p></div>
                          <div class="col-md-2 col-xs-2 col befe"><p>34g</p></div>
                          <div class="col-md-2 col-xs-2 col befe"><p>28%</p></div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 col-xs-8"><p>Calorías Totales</p></div>
                          <div class="col-md-4 col-xs-2">34g</div>
                          <div class="col-md-12 col-xs-12">
                            <hr class="principal">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-10 col-xs-10 bef"><p>Calorías provenientes de Proteínas</p></div>
                          <div class="col-md-2 col-xs-2 befe"><p class="cal">34g</p></div>
                        </div>
                        <div class="row">
                          <div class="col-md-10 col-xs-10 bef"><p>Calorías provenientes de Grasa</p></div>
                          <div class="col-md-2 col-xs-2 befe"><p class="cal">34g</p></div>
                        </div>
                        <div class="row">
                          <div class="col-md-10 col-xs-10"><p>Calorías provenientes de Carbohidatos</p></div>
                          <div class="col-md-2 col-xs-2">34g</div>
                        </div>

                        <div class="row aviso">
                          <div class="col-md-12 col-xs-12">
                            <span>*Los porcentajes de valores diarios están basados en una dieta de 2000 calorías.Sus valores diarios puedes ser mayores o menores dependiendo de sis necesidades calóricas</span>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>






            </div>
        </div>

        <div class="section-menu recetas_section  recetaspreparacion_slider row">
          <div class="col-md-6 col-sm-6 col-xs-12 imagen-home col-nopadding">

            <div class="col-lg-12  col-sm-12 col-xs-12 col-nopadding cont-familia-slider">

              <div class="cont-slider">
                <!-- slider menu -->
                  <!-- <div id="myCarouselRecetas2" class="carousel slide carousel-sync" data-ride="carousel" data-pause="false"> -->
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner homeslider" role="listbox">

                      <div class="item active">
                        <h1 class="disfruta">Recetas</h1>
                        <div class="row row-recetas">
                          <div class="col-lg-12  col-sm-12 col-xs-12">
                            <div class="col-lg-6  col-sm-6 col-xs-12">
                              <div class="col-lg-6  col-sm-6 col-xs-6 img-receta recetas">
                                <img src="images/foto_cerdo.jpg" class="img-responsive" alt="recetas San Fernando">
                              </div>
                              <div class="col-lg-6  col-sm-6 col-xs-6 recetas"><p>Pollo a la Plancha</p></div>

                            </div>
                            <div class="col-lg-6  col-sm-6 col-xs-12">
                              <div class="col-lg-6  col-sm-6 col-xs-6 img-receta recetas"><img src="images/foto_pollo.jpg" class="img-responsive" alt="recetas San Fernando"></div>
                              <div class="col-lg-6  col-sm-6 col-xs-6 recetas"><p>Pollo a la Plancha</p></div>
                            </div>
                          </div>
                        </div>


                        <div class="row row-recetas">
                          <div class="col-lg-12  col-sm-12 col-xs-12">
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                              <div class="col-lg-6  col-sm-6 col-xs-6 img-receta recetas">
                                <img src="images/famila-home.jpg" class="img-responsive" alt="recetas San Fernando">
                              </div>
                              <div class="col-lg-6  col-sm-6 col-xs-6 recetas"><p>Pollo a la Plancha</p></div>

                            </div>
                            <div class="col-lg-6  col-sm-6 col-xs-12">
                              <div class="col-lg-6  col-sm-6 col-xs-6 img-receta recetas"><img src="images/foto_pollo.jpg" class="img-responsive" alt="recetas San Fernando"></div>
                              <div class="col-lg-6  col-sm-6 col-xs-6 recetas"><p>Pollo a la Plancha</p></div>
                            </div>
                          </div>
                        </div>
                      </div>





                    </div>
                  <!-- </div> -->
                  <!-- fin slider home -->
              </div>
            </div>

          </div>
            <div class="col-lg-6 col-sm-6 col-xs-12 menu-slider col-nopadding">

              <div class="col-lg-12  col-sm-12 col-xs-12 col-nopadding contenedor_img_receta img-recetapreperacion cont-familia-slider slider2">

                <div class="cont-slider">
                  <!-- slider menu -->
                    <div id="myCarouselrecetas" class="carousel sliderhome slide carousel-sync" data-ride="carousel" data-pause="false">
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner homeslider" role="listbox">
                        <div class="">
                          <div class="cont-imghome" style="background: url('images/foto_pollo.jpg') no-repeat center center; background-size: cover;" ></div>
                        </div>
                      </div>
                    </div>
                    <!-- fin slider home -->
                    <!-- Botones slider -->
                    <div class="botones-avanzar recetas hidden-xs" id="recetas">
                        <span class="titulo-receta">Adobo de medallones de Pavita</span>
                    </div>
                    <!-- Fin Botones slider -->
                </div>
              </div>

            </div>
          </div>
          <!--fin slider-->






    </div>
  </div>
</div>

  @include('front.includes.footer')

  <!--inicio modal-->
                <div class="modal fade modal_certificado" id="isoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-body">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <div class="contenido">
                                <h3 class="text-center">ISO 9001</h3>
                                <p>Es una norma internacional que se centra en todos los elementos de la gestión de la calidad con los que una empresa debe contar para tener un sistema efectivo que le permita administrar y mejorar la calidad de sus productos o servicios.</p>
                                <p><strong>Reproducción:</strong> Granjas Reproductoras Abuelos de Carne: Huarmey y Ramadal. Granjas Reproductoras Padres de Carne: Con Con, Iwanco, Tutumo, San Pedro, Asia, Carhuaz, Soxa, San Lucas, Vilcahuaura, Supe y Sarapampa II. Granja Reproductora Padres Postura: Millay. Granjas Reproductoras de Pavos: PV04, PV10 y PL01. Granja Multiplicador de Cerdos: PCH-01.</p>
                                <p><strong>Incubación:</strong> Planta de Incubación Reproductora Abuelos BB: Puente Piedra. Plantas de Incubación de Pollos BB: Chancay y Chincha. Planta de Incubación de Pollos BB / Pavos BB: Mala. Plantas de Incubación de Ponedoras BB: Provi y Chorrillos.</p>
                                <p><strong>Producción Pecuaria:</strong> Granjas de Pollos: PL-120, PL-121, PL-123, PL-128, PL-180, PL-183, PL-184,PL-186, PL-220, PL-254 y los planteles de Cabeza de Toro: PL-350, PL-351, PL-352, PL-353, PL-354,PL-355, PL-356, PL-357 y PL-358. Granjas de Pavos Comerciales: PV-2, PV-6, PV-12, PV- 17, PV- 19,PV- 20 y PL-154. Granja de Ponedora: H017. Granjas de Cerdos Comerciales: PCH-05 y PCH-07.</p>
                                <p><strong>Producción Industrial:</strong> Plantas de Alimentos Balanceados: Lurín y Chancay. Plantas de Beneficio de Aves: Chincha y Huaral. Planta Procesadora de Productos Cárnicos: Chorrillos y Esmeralda. Centro de Distribución Ate.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
<!--fin modal-->
<!--inicio modal-->
                <div class="modal fade modal_certificado" id="iso2Modal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-body">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <div class="contenido">
                                <h3 class="text-center">ISO 14001</h3>
                                <p>Es la norma internacional de sistemas de gestión ambiental (SGA), que ayuda a su organización a identificar, priorizar y gestionar los riesgos ambientales, como parte de sus prácticas de negocios habituales.</p>
                                <p>Granjas Reproductoras de Abuelos Carne: Huarmey y Ramadal.</p>
                                <p>Granja Reproductora de Pavos: PV-10.</p>
                                <p>Plantas de Apmentos Balanceados: Lurín y Chancay.</p>
                                <p>Planta de Beneficio de Aves: Chincha y Huaral.</p>
                                <p>Planta Procesadora de Productos Cárnicos: Chorrillos. </p>
                                <p>Planta de Abonos: Anita.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
<!--fin modal-->
<!--inicio modal-->
                <div class="modal fade modal_certificado" id="iso3Modal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-body">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <div class="contenido">
                                <h3 class="text-center">ISO 17025</h3>
                                <p>Es una normativa internacional en la que se establecen los requisitos que deben cumplir los laboratorios de ensayo y calibración con el objetivo de demostrar que son técnicamente competentes y que sus resultados son veraces.</p>
                                <p>Laboratorio: Lurín.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
<!--fin modal-->

<!--inicio modal-->
                <div class="modal fade modal_certificado" id="iso4Modal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-body">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <div class="contenido">
                                <h3 class="text-center">OHSAS 18001</h3>
                                <p>La norma OHSAS 18001 establece requisitos mínimos de las mejores prácticas en gestión de Seguridad y en el Trabajo (SST), destinados a permitir que una organización controle sus riesgos para la SST y mejore su desempeño de la SST.</p>
                                <p>Planta de Beneficio de Aves: Chincha. </p>
                                <p>Planta Procesadora de Productos Cárnicos: Chorrillos.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

  <script type="text/javascript">
$(function(){

    $('#botones-avanzar button').click(function(e){
        e.preventDefault();
        console.log("avanzar...");
        $('#myCarouselimgrecetas').carousel( $(this).data() );
    });

    $('#recetas button').click(function(e){
        e.preventDefault();
        console.log("avanzar recetas ...");
        $('#myCarouselrecetas').carousel( $(this).data() );
    });


});
</script>
@endsection
