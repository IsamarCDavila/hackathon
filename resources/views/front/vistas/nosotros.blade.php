@extends('app.appfront')
<?php
$title = 'Nosotros - San Fernando';
?>
@section('style')
<link href="<?php echo URL::asset('css/styles.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('css/nosotros.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('css/trabaja.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('css/linea-mobile.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('css/responsabilidad.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('css/media-queries.css'); ?>" rel="stylesheet" type="text/css" />
@endsection
@section('script')
@endsection
<!-- /.heading-->
@section('content')
<div id="container-sanfer" class="container-sanfer">
  @include('front.includes.header')
  <div class="nosotros-container">
  <div class="cont-cabecera row row-nomargin">
      <div class="main-text-cont">
        <h1 class="tit-cabecera">Nosotros</h1>
        <p class="parraf-cabecera"></p>
      </div>
  </div>
  <div class="row section-familia">
    <div class="fondo-familia bloque_1 fondo_db">
      <div class="col-md-12 col-sm-12 col-xs-12 col-nopadding">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="titulo-intro">
            <p class="tit-valor titDorado titulo_db">El valor <br>de mi <br> mi tierra</p>
            <p class='hidden-xs parrafo-text descripcion_db'>La ciudad fue fundada el 15 de agosto de 1540, bajo la denominación de «Villa Hermosa de Nuestra Señora de la Asunta» en nombre del marqués don Francisco Pizarro. </p>
          </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12 img-family-col">
          <div class="con-imgvalor" id="fondo_db"></div>
        </div>
      </div>
    </div>
  </div>

  <!--inicio line-->
  		<div id="below-the-fold" class="hidden-xs">
  				<div id="timeline" class="section">
          <div class="responsive">
          <div class="fondo">
  					<div id="timeline-2010" class="timeline">
  						<h3>1948</h3>
  						<img class="img-uno" src="img/timeline/photo-timeline-2010.png">
  						<img class="img-dos" src="img/timeline/img2.png">
              <img class="img-tres" src="img/timeline/img3.png">
  						<h2 class="parallax comillas">
  							<span>  <figure class="quote-principal" >
              <blockquote class="curly-quotes">
                Desde hace más de 69 años <br>venimos agrandando <br> nuestra familia. Hoy, tú <br>formas parte de ella.
              </blockquote>
            </figure></span>
  						</h2>
  						<div id="milestone-01" class="milestone-right parallax">
  							<div class="hexagon hexagon-1"></div>
                <p class="texto1">Iniciamos actividades con 35 patas reproductoras en Tomas Marsano</p>
  							<p class="timeline-anios">1963</p>
  							<p>Después de 15 años ingresamos al negocio de pollos. Se inicia la crianza con 468 pollos</p>
  						</div>
  						<div id="milestone-02" class="milestone-left parallax">
  							<div class="hexagon hexagon-3"></div>
  							<p class="timeline-anios anio-1965">1972</p>
  							<p>Se abre la primera tienda de San Fernando, ubicada en Tomas Marsano con la venta de pollos y huevos</p>
                <p class="timeline-anios anio-1970">1974</p>
  							<p>Inicamos la crianza de reproductoras de carne</p>
  						</div>
  						<div id="milestone-03" class="milestone-right parallax">
  							<div class="hexagon hexagon-2"></div>
  							<p class="timeline-anios anio-1965">1978</p>
  							<p>Ingresamos al negocio de pavos</p>
  						</div>
  						<div id="milestone-04" class="milestone-left parallax">
  							<p class="timeline-anios">1977</p>
  							<p>San Fernando inagura su propia planta de alimentos balanceados de Lurin</p>
                <div class="hexagon hexagon-4"></div>
              </div>
  						<div id="milestone-05" class="milestone-right parallax">
  							<div class="hexagon"><i class="flash"></i></div>
  							<p class="timeline-anios">1979</p>
  							<p>Ingresamos al negocio de huevos en las granjas de Lurin</p>
  						</div>
  						<div id="milestone-06" class="milestone-right parallax">
  							 <div class="hexagon"><i class="signpost"></i></div>
  							<p class="timeline-anios">1980</p>
  							<p>Iniciamos la venta de genética (Pollos bebés)</p>
  						</div>
  					</div>
            </div> <!--fin fondo-->

            <div class="fondo-azul">
  					<div id="timeline-2013" class="timeline">
  						<h3 class="h3_ball_red_one">2011</h3>
  						<img class="2013-one-img"src="images/effie.png">
              <img class="2013-two-img effie-imag"src="images/delgado.png">
              <img class="2013-three-img pavita-imag"src="images/pavita.png">
  						<!-- <h2 class="parallax">
  							<span>Your<br/>
  								ideas</span>
  						</h2> -->
  						<div id="milestone-07" class="milestone-left parallax">
                <hr class="linea2">
                <p class="titDorado lideres-titulo"> Ahora somos líderes en todos los mercados en los que participamos a nivel nacional. </p>
                <hr class="linea2">
  						</div>
  						<div id="milestone-08" class="milestone-right parallax">
  							<h4>Campaña Lanzamiento de Pavita San Fernando</h4>
  							<p class="subtitle-2011">Gran marca clásica 2011</p>
  						</div>
  						<div id="milestone-09" class="milestone-left parallax">
  							<p class="parraf-timeline">Destacamos como el mayor productor de carne de aves, huevos, cerdo y embutidos. En el extranjero, exportamos a mercados competitivos como Bolivia, Colombia, Ecuador y Panamá. Así, todos nuestros esfuerzos buscan convertir a la gran familia San Fernando en una compañía que compite en el mercado global con productos de valor agregado y servicios actualizados.</p>
  						</div>
  						<div id="milestone-10" class="milestone-right parallax">
  							<!-- <h4>June 2013</h4> -->
                <div class="group">
    							<p class="subtitle-2011">Gran Effie 2011</p>
                  <p class="parraf-timeline">Mejor campaña publicitaria en todas las categorias.</p>
                </div>
                <div class="espacios"></div>
                <div class="group">
                  <p class="subtitle-2011">Effie Oro 2012</p>
                  <p class="parraf-timeline">Mejor campaña categoría alimentos y bebidas.</p>
                </div>
  						</div>
  						<div id="milestone-11" class="milestone-left parallax">
  							<h4>Campaña Relanzamiento de Marca</h4>
                <div class="espacios"></div>
                <div class="group">
                  <p class="subtitle-2011">Effie Oro 2013</p>
                  <p class="parraf-timeline">Mejor campaña categoría alimentos y bebidas.</p>
              </div>
                <div class="espacios_sub"></div>
                <div class="group">
                  <p class="subtitle-2011">Gran Effie 2013</p>
                  <p class="parraf-timeline">Mejor campaña publicitaria en todas las categorias.</p>
              </div>
  						</div>
              <h3 class="h3_ball_red_two">2014</h3>
              <div id="milestone-12" class="milestone-right parallax">
  							<h4>Campaña: <br>
                  Jueves de Pavita<br>
                  2012 - 2013.</h4>
                <div class="espacios"></div>
                  <div class="group">
                    <p class="subtitle-2011">Effie Plata 2014</p>
                    <p class="parraf-timeline">Categoría Alimentos.</p>
                </div>
                <div class="espacios_sub"></div>
                <div class="group">
                    <p class="subtitle-2011">Effie Oro 2014</p>
                    <p class="parraf-timeline">Mejor campaña categoría Nuevos Productos.</p>
               </div>
  						</div>
              <div id="milestone-13" class="milestone-left parallax">
                <p class="subtitle-2011">Gran Effie 2014</p>
                <p class="parraf-timeline">Mejor campaña publicitaria en todas las categorias. </p>
  						</div>
              <div id="milestone-14" class="milestone-right parallax">
                <div class="hexagon hexagon-5"></div>
                <p class="subtitle-2011">Reputación Corporativa</p>
                <p class="parraf-timeline">En el 2014, obtuvimos el 12º puesto en MERCO (Monitor Empresarial de Reputación Corporativa) y ocupamos el 8º lugar del Reputation Institute.</p>
  						</div>
              <div id="milestone-15" class="milestone-left parallax">
  							<h4>Campaña <br> ¡No es atún de pollo! 2014.</h4>
  						</div>
  					</div>
  					 <div id="timeline-2014" class="timeline">
  						<h3 class="h3_ball_red_three">2017</h3>
  						<div id="milestone-16" class="milestone-right parallax">
                <div class="hexagon hexagon-5"></div>
                <p class="subtitle-2011">Premio Creatividad Empresarial 2017</p>
                <p class="parraf-timeline">Ganador: Línea de abonos orgánicos Mallki en la categoría Productos y Servicios Intermedios.</p>
              </div>
  						<div id="milestone-17" class="milestone-left parallax">
                <div class="hexagon hexagon-5"></div>
                <p class="subtitle-2011">MERCO 2017</p>
                <p class="parraf-timeline">En el 2017, obtuvimos el 14° en MERCO (Monitor Empresarial de Reputación Corporativa).</p>
              </div>
  					</div>

          </div> <!--fin fondodos-->
  				</div>
  		</div>
  </div>
  <!--fin time-->
  <!--inicio line mobile-->
  <div class="contenido-Nosotros hidden-md hidden-lg visible-xs">
  <div class="row row-nomargin section-linea">
    <div class="col-md-12 col-xs-12 col-nopadding">
     <div class="timeline-body intro-principal">
        <div class="hidden-lg hidden-md hidden-sm col-xs-12 col-nopadding">
          <figure class="quote-principal" >
            <blockquote class="curly-quotes"> Desde hace más de 69 <br>años venimos <br> agrandando nuestra <br>familia. Hoy, tú formas <br>parte de ella.
            </blockquote>
          </figure>
        </div>
      </div>
      <div class="cont-lineatiempo">
        <ul class="timeline list-unstyled">
              <li class="content-left info-cont">
                <div class="timeline-badge info"><p class="fecha">1948</p></div>
                <div class="timeline-panel">
                  <div class="timeline-body">
                    <div class="row row-nomargin">
                      <div class="col-md-5 hidden-xs"></div>
                        <div class="col-md-7 hidden-xs leftcero" data-aos="fade-down-right">
                          <figure class="quote-principal">
                            <blockquote class="curly-quotes hidden-xs">
                              Desde hace más de 69 años venimos agrandando nuestra familia. Hoy, tú formas parte de ella.
                            </blockquote>
                          </figure>
                        </div>
                        <div class="col-md-1 hidden-xs"></div>
                      </div>
                    </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="imagen-linea timeline-badge img-familia" data-aos="zoom-in">

                    <!-- <img src="images/first-family.png" class="img-responsive"/> -->
                </div>
                <div class="timeline-panel julio">
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <div class="col-md-2 hidden-xs"></div>
                      <div class="col-md-5 col-xs-12">
                        <p>Iniciamos actividades con 35 patas reproductoras en Tomas Marsano</p>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted hidden-md hidden-xs">
                <div class="timeline-panel pavo icono-familia">
                  <div class="img-lt1" data-aos="fade-left">
                    <img src="images/icon1.svg" alt="icono San Fernando" class="img-responsive"/>
                  </div>
                </div>
              </li>
              <li class="content-left hidden-md hidden-xs">
                <div class="timeline-panel hombre">
                  <div class="img-lt3" data-aos="fade-right">
                    <img src="images/icon3.svg" alt="icono San Fernando" class="img-responsive"/>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-panel _1963">
                  <div class="timeline-heading">
                    <div class="row row-nomargin pddng-tp">
                      <div class="col-md-2 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l">
                        <P class="timeline-title">1963</P>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <div class="col-md-2 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l">
                        <p>Después de 15 años ingresamos al negocio de pollos. Se inicia la crianza con 468 pollos</p>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="content-left">
                <div class="timeline-panel primer-left">
                  <div class="timeline-heading">
                    <div class="row row-nomargin">
                      <div class="col-md-2 hidden-xs"></div>
                      <div class="col-md-8 col-xs-12 column-l rightcero">
                        <P class="timeline-title">1972</P>
                      </div>
                      <div class="col-md-1 hidden-xs"></div>
                    </div>
                  </div>
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <div class="col-md-4 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l rightcero">
                        <p>Se abre la primera tienda de San Fernando, ubicada en Tomas Marsano con la venta de pollos y huevos</p>
                      </div>
                      <div class="col-md-1 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="content-left">
                <div class="timeline-panel segundo-left">
                  <div class="timeline-heading">
                    <div class="row row-nomargin">
                      <div class="col-md-4 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l rightcero">
                        <P class="timeline-title">1963</P>
                      </div>
                      <div class="col-md-1 hidden-xs"></div>
                    </div>
                  </div>
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <div class="col-md-4 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l rightcero">
                        <p>Después de 15 años ingresamos al negocio de pollos. Se inicia la crianza con 468 pollos</p>
                      </div>
                      <div class="col-md-1 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted hidden-md hidden-xs">
                <div class="timeline-panel pavo">
                  <div class="img-lt4" data-aos="fade-left">
                    <img src="images/icon2.svg" alt="icono San Fernando" class="img-responsive"/>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted segunda-imagen">
                <div class="img-sig" data-aos="zoom-in">
                    <img src="images/img2.png" alt="icono San Fernando" class="img-market img-responsive"/>
                </div>
                <div class="timeline-panel _1971">
                  <div class="timeline-heading">
                    <div class="row row-nomargin">
                      <div class="col-md-1 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12">
                        <P class="timeline-title">1978</P>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <div class="col-md-1 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12">
                        <p>Ingresamos al negocio de pavos</p>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-panel _1972">
                  <div class="timeline-heading">
                    <div class="row row-nomargin">
                      <div class="col-md-1 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l">
                        <P class="timeline-title">1977</P>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <div class="col-md-1 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l">
                        <p>San Fernando inagura su propia planta de alimentos balanceados de Lurin</p>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="content-left">
                <div class="img-sig img-parque" data-aos="zoom-in">
                    <img src="images/img3.png" alt="icono San Fernando" class="img-responsive"/>
                </div>
                <div class="timeline-panel _1976">
                  <div class="timeline-heading">
                    <div class="row">
                      <div class="col-md-5 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l col-nopadding">
                        <P class="timeline-title">1979</P>
                      </div>
                      <div class="col-md-1 hidden-xs"></div>
                    </div>
                  </div>
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row">
                      <div class="col-md-5 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l col-nopadding">
                        <p>Ingresamos al negocio de huevos en las granjas de Lurin</p>
                      </div>
                      <div class="col-md-1 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="content-left hidden-md hidden-xs">
                <div class="timeline-panel hombre2">
                  <div class="img-lt3" data-aos="fade-right" >
                    <img src="images/icon4.svg" alt="icono San Fernando" class="img-responsive"/>
                  </div>
                </div>
              </li>

              <li class="timeline-inverted">
                <div class="timeline-panel _1970">
                  <div class="timeline-heading">
                    <div class="row row-nomargin">
                      <div class="col-md-1 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12">
                        <P class="timeline-title">1980</P>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <div class="col-md-1 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12">
                        <p>Iniciamos la venta de genética (Pollos bebés)</p>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>
          </ul>
      </div>
      <!-- segunda parte timeline -->
      <div class="cont-lineatiempo2">
        <ul class="timeline">
              <li class="content-left">
                <div class="timeline-badge danger danger1">
                  <p class="fecha">2011</p>
                  <div class="effie translate-other">
                    <img src="images/effie.png" alt="icono San Fernando" class="img-responsive">
                </div>
                </div>
                <div class="timeline-panel lideres" data-aos="zoom-in">
                  <div class="timeline-heading lideres-heading">
                    <div class="row row-nomargin">
                      <div class="col-md-5 hidden-xs"></div>
                        <div class="col-md-7 col-xs-12 column-l">
                          <hr class="linea2">
                          <h4 class="titDorado lideres-titulo"> Ahora somos líderes en todos los mercados en los que participamos a nivel nacional. </h4>
                          <hr class="linea2">
                        </div>
                        <div class="col-md-1 hidden-xs"></div>
                      </div>
                  </div>
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <div class="col-md-5 hidden-xs"></div>
                      <div class="col-md-6 hidden-xs">
                        <p>Destacamos como el mayor productor de carne de aves, huevos, cerdo y embutidos. En el extranjero, exportamos a mercados competitivos como Bolivia, Colombia, Ecuador y Panamá. Así, todos nuestros esfuerzos buscan convertir a la gran familia San Fernando en una compañía que compite en el mercado global con productos de valor agregado y servicios actualizados.</p>
                      </div>
                      <div class="col-md-1 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <!-- <div class="effie translate">
                    <img src="images/effie.png" class="img-responsive"/>
                </div> -->
                <div class="timeline-panel primer-rigth" data-aos="zoom-in-left">
                  <div class="timeline-heading">
                    <div class="row row-nomargin">
                      <!-- <div class="col-md-1 hidden-xs"></div> -->
                      <div class="col-md-6 col-xs-12 column-l col-effie">
                        <p class="timeline-title2">Campaña <br> Lanzamiento <br>de Pavita <br> San Fernando</p>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <!-- <div class="col-md-1 hidden-xs"></div> -->
                      <div class="col-md-6 col-xs-12 marca-clasica">
                        <p class="titDorado titp">Gran Marca Clásica 2011</p>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted delgado">
                <div class="img-sig">
                    <img src="images/delgado.png" alt="Delgado San Fernando" class="img-delgado img-responsive"/>
                </div>
                <div class="timeline-panel effie-2011"  data-aos="zoom-in-left">
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <div class="col-md-1 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l padding-izq parraf-2011">
                        <p class="titDorado">Gran Effie 2011</p>
                        <p>Mejor campaña publicitaria en todas las categorias.</p>
                        <p class="titDorado">Effie Oro 2012 </p>
                        <p>Mejor campaña categoría alimentos y bebidas.</p>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="content-left relanzamineto_marca">
                <div class="timeline-panel" data-aos="zoom-in-right">
                  <div class="timeline-heading">
                    <div class="row row-nomargin">
                      <div class="col-md-5 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l left">
                        <p class="timeline-title2 padding-camp">Campaña Relanzamiento de Marca</p>
                      </div>
                      <div class="col-md-1 hidden-xs"></div>
                    </div>
                  </div>
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <div class="col-md-5 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l left">
                        <p class="titDorado">Effie Oro 2013</p>
                        <p>Mejor campaña categoría alimentos y bebidas.</p>
                        <p class="titDorado">Gran Effie 2013</p>
                        <p>Mejor campaña publicitaria en todas las categorias.</p>
                      </div>
                      <div class="col-md-1 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="timeline-inverted jueves-pavita">
                <div class="img-sig">
                    <img src="images/pavita.png" alt="icono San Fernando" class="img-pavita"/>
                </div>
                <!-- <div class="timeline-badge success"><i class="glyphicon glyphicon-chevron-right"></i></div> -->
                <div class="timeline-panel cont-pavita" data-aos="zoom-in-left">
                  <div class="timeline-heading">
                    <div class="row row-nomargin">
                      <div class="col-md-2 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l titulo-pavita">
                        <p class="timeline-title2">Campaña:<br> Jueves de Pavita <br>2012 - 2013.</p>
                      </div>
                      <!-- <div class="col-md-4 hidden-xs"></div> -->
                    </div>
                  </div>
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <div class="col-md-2 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l effie-2014">
                        <p class="titDorado">Effie Plata 2014</p>
                        <p>Categoría Alimentos.</p>
                        <p class="titDorado">Effie Oro 2014</p>
                        <p>Mejor campaña categoría Nuevos Productos.</p>
                      </div>
                      <!-- <div class="col-md-4 hidden-xs"></div> -->
                    </div>
                  </div>
                </div>

              </li>
              <li class="content-left gran-effie">
                <div class="timeline-panel"  data-aos="zoom-in-right">
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <div class="col-md-6 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l">
                        <p class="titDorado">Gran Effie 2014</p>
                        <p>Mejor campaña publicitaria en todas las categorias. </p>
                      </div>
                      <!-- <div class="col-md-1 hidden-xs"></div> -->
                    </div>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted reputacion">
                <div class="timeline-badge danger danger2">
                  <p class="fecha">2014</p>
                  <div class="position-mdlla">
                    <img src="images/medalla.png" alt="medalla San Fernando" class="img-responsive">
                  </div>
                </div>
                <div class="timeline-panel reputacion-panel"  data-aos="zoom-in-left">
                  <div class="timeline-heading">
                    <div class="row row-nomargin">
                      <!-- <div class="col-md-1 hidden-xs"></div> -->
                      <div class="col-md-6 col-xs-12 column-l col-nopadding">
                        <h4 class="titDorado">Reputación Corporativa</h4>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                  <div class="timeline-body textoLineaBlanco">
                    <div class="row row-nomargin">
                      <!-- <div class="col-md-1 hidden-xs"></div> -->
                      <div class="col-md-6 col-xs-12 column-l col-nopadding">
                        <p class="parraf-paddtop">En el 2014, obtuvimos el 12º puesto en MERCO (Monitor Empresarial de Reputación Corporativa) y ocupamos el 8º lugar del Reputation Institute.</p>
                      </div>
                      <div class="col-md-5 hidden-xs"></div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- <li class="timeline-inverted medalla">
                <div class="img-sig">
                    <img src="images/medalla.png" class="img-responsive"/>
                </div>
              </li> -->
              <li class="content-left atun">
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <div class="row">
                      <div class="col-md-6 hidden-xs"></div>
                      <div class="col-md-6 col-xs-12 column-l tit-atun col-nopadding">
                        <p class="timeline-title2">Campaña <br>¡No es atún de pollo!<br>2014.</p>
                      </div>
                      <!-- <div class="col-md-1 hidden-xs"></div> -->
                    </div>
                  </div>
                </div>
              </li>
          </ul>
      </div>
    </div>
  </div>
  </div>
  <!--fin linemobile -->

  <div class="row">
    <div class="fondo-familia_1 bloque_1" >
      <div class="col-md-12 col-sm-12 col-xs-12 col-nopadding">
        <div class="col-md-6 col-xs-12">
          <div class="">
            <p class="tit-valor titDorado text-center">Misión</p>
            <p class="parrafo-text">Contribuir al bienestar de la humanidad, suministrando alimentos de consumo masivo en el mercado global. </p>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 line_nosotros">
          <div class="">
            <p class="tit-valor titDorado text-center">Visión</p>
            <p class="parrafo-text">Ser competitivos a nivel mundial, suministrando productos de valor agregado para la alimentación humana. </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- certificaciones -->
    <div class="section-certificaciones">
      <div class="row row-nomargin">
        <div class="col-md-12 col-xs-12 certificaciones">
          <div class="col-md-2 col-sm-3 hidden-xs iso-img-cont"></div>
          <div class="col-md-3 col-sm-3 col-xs-12 iso-certificaciones">
            <a href="#" class="titDorado2" data-toggle="modal" data-target="#isoModal" id="iso9001">
            <div class="img-sgs-rep">
              <img src="images/ISO_9001.png" alt="certificado San Fernando" class="img-responsive iso_ultimo"/>
              <span>ISO 9001</span>
            </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12 iso-img-cont">
            <a href="#" class="titDorado2" data-toggle="modal" data-target="#iso2Modal" id="iso14001">
            <div class="img-iso-resp">
              <img src="images/ISO_14001.png" alt="certificado San Fernando" class="img-responsive iso_ultimo"/>
              <span>ISO 14001</span>
            </div>
            </a>
            <div class="col-md-2 hidden-xs"></div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12 iso-img-cont">
            <a href="#" class="titDorado2" data-toggle="modal" data-target="#iso4Modal" id="ohsas18001">
            <div class="img-iso-resp">
              <img src="images/ISO_18001.png" alt="certificado San Fernando"  class="img-responsive iso_ultimo"/>
              <span>OHSAS 18001</span>
            </div>
            </a>
            <div class="col-md-2 hidden-xs"></div>
          </div>
          <div class="col-md-3 col-sm-3 hidden-xs iso-img-cont"></div>
          <!-- <div class="col-md-3 col-sm-3 col-xs-12 iso-img-cont hidden">
            <a href="#" class="titDorado2" data-toggle="modal" data-target="#iso3Modal" id="iso17025">
            <div class="img-iso-resp">
              <img src="images/iso-17025.png" alt="certificado San Fernando"  class="img-responsive iso_ultimo"/>
              <span>ISO 17025</span>
            </div>
            </a>
            <div class="col-md-2 hidden-xs"></div>
          </div> -->

        </div>
        <!-- <div class="col-md-1 hidden-xs"></div> -->
      </div>
    </div>
  <!-- fin certificaciones -->
  <!-- responsabilidad social -->
    <div class="row section-responsabilidad" id="responsabilidad-social">
      <div class="col-lg-12 col-sm-12 col-xs-12 secction-respon col-nopadding">
        <div class="col-lg-6 col-sm-6 col-xs-12 col-nopadding con-imgresp">
             <!-- <img src="images/responsabilidad.png" class="img-responsive img-resp"/> -->
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12 cont-txtresp">
          <div class="resp-txt-cont responsabilidad_clase">
            <h1 class="titulo-resp titDorado2">Responsabilidad Social</h1>
            <p class="parrafo-resp">En San Fernando reafirmamos nuestro compromiso no sólo con nuestros clientes, sino con todos nuestros grupos de interés, principalmente con nuestros colaboradores, la comunidad y el medio ambiente.</p>
            <div class="cont-span">
              <div class="col-md-4 col-xs-12 col-nopadding" id="colaboradores">Colaboradores</div>
              <div class="col-md-4 col-xs-12 col-nopadding" id="comunidad">Comunidad</div>
              <div class="col-md-4 col-xs-12 col-nopadding" id="gestionambiental">Gestión Ambiental</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- responsabilidad social -->
  <!--contenido responsabilidad social colaboradores-->
  <section id="Colaboradores" class="contenido_responsabilidad">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 section-colaboradores">
      <div class="contenedor-x">
        <button type="button" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="contenedor-white">
        <h2 class="colaboradores-tit">Colaboradores</h2>
        <p class="colaboradores-sub">Nuestros colaboradores son, más que nuestra principal fortaleza, nuestra familia. Por ello nos esforzamos por ofrecerles un buen ambiente de trabajo, buscando que nuestra empresa sea cada día un mejor lugar donde desarrollarse profesional y personalmente.</p>
        <div class="colaboradores-image"></div>
      </div>
      <div class="col-md-12 col-xs-12 close-btn-cont text-center">
          <button type="button" name="button" align="center">CERRAR</button>
      </div>
    </div>
  </div>
  </section>
  <!--fin responsabilidad social colaboradores-->
  <!--contenido responsabilidad social comunidad-->
  <section id="Comunidad" class="contenido_responsabilidad">
  <div class="comunidad-section">
      @include('front.includes.comunidad')
  </div>
  </section>
  <!--fin responsabilidad social comunidad-->
  <!--contenido responsabilidad social comunidad-->
  <section id="Gestion"  class="contenido_responsabilidad">
  <div class="comunidad-section">
    @include('front.includes.gestion-ambiental')
  </div>
  </section>
  <!--fin responsabilidad social comunidad-->
  <!-- BEGIN NOTICIAS-->
  <div class="noticias noticias-nosotros">
    <div class="row row-nomargin">
      <div class="col-lg-offset-2 col-lg-8 col-sm-offset-1 col-sm-10 col-nopadding noticias-cont">
        <h1 class="txt-marron46">Lo que está pasando</h1>
        @include('front.includes.sliderNoticias')
      </div>
    </div>
  </div>
  <!--END NOTICIAS-->
  @include('front.includes.trabaja')
  <div class="noticias noticias-nosotros enlaces_interes">
    <div class="row">
      <div class="col-lg-offset-2 col-lg-8 col-sm-offset-1 col-sm-10 col-nopadding noticias-cont">
        <h1 class="txt-marron46">Enlaces de interés</h1>
      </div>
    </div>
    <div class="row row_enlace">
      <div class="col-md-3 col-xs-12"></div>
      <div class="col-md-3 col-xs-12 text-center col-descargar">
        <a id="memoriapdf" class="download_text" href="files/memoria_sanfernando.PDF" download="Memoria_Sanfernando.pdf"><i class="fa fa-download"></i> Memoria 2016</a>
      </div>
      <div class="col-md-3 col-xs-12 text-center col-descargar politica_integrada">
        <a id="politicaintegradapdf" class="download_text" href="files/Política-del-Sistema-Integrado-de-Gestión-con-firma-2017.pdf" download="Política-del-Sistema-Integrado-de-Gestión-con-firma-2017.pdf"><i class="fa fa-file"></i> Política Integrada</a>
      </div>
      <div class="col-md-3 col-xs-12"></div>
    </div>
  </div>

  <div id="fondo-azul" class="fondo-azul"></div>

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
</div>
<!--fin modal-->
<script type="text/javascript">
var banner={!!$banners!!};
var url = "{!! url('/') !!}";
</script>
<script src="js/banners.js"></script>

<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script src="cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script type="text/javascript" src="js/lib/smoothPageScroll.js"></script>
<script type="text/javascript" src="js/lib/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/lib/jquery.ba-throttle-debounce.min.js"></script>
<script type="text/javascript" src="js/lib/jquery.slides.min.js"></script>
<script type="text/javascript" src="js/lib/jquery.jcarousel.min.js"></script>

<script src="js/lib/jquery.form.js"></script>
<script src="js/lib/jquery.dropdown.js"></script>
<script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
 <!-- <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
<script src="assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/slick.js');?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/scroll.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/noticiaSlider.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/media-queries.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/validaciones.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/jquery-sticktotop.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/linea_tiempo_efecto.js'); ?>" type="text/javascript"></script>
@endsection
