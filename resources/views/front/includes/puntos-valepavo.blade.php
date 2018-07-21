<div class="canjear-container">
  <div class="white-background">
    <div class="canejar-content">
      <div class="row row-nomargin">
        <div class="table-distribuidores">
          <div class="col-md-12 col-xs-12 col-nopadding">
            <div class="col-md-12 col-xs-12 col-nopadding">
              <div id="exTab1" class="container  col-md-12 col-xs-12 col-nopadding">
                <div class="row row-nav hidden">
                  <ul class="nav nav-pills nav-justified list-ubicacion col-xs-12 col-nopadding">
                        <li class="active col-xs-6 col-nopadding"><a class="filtroExterior" href="#lima" data-toggle="tab">Lima</a>
                      </li>
                      <li class="col-xs-6 col-nopadding"><a href="files/Lugares_de_Canje_2017_Provincias.pdf" target="_blank">Provincias</a>
                      </li>
                  </ul>
                </div>
                <div class="row row-nomargin distribuidor-mapa col-nopadding">
                  <div class="row-mapa">
                    <div class="col-lg-12 col-sm-12 col-xs-12 col-nopadding canjear-col">
                      <div class="col-lg-4 col-sm-4 col-xs-12 col-nopadding info-location tab-content clearfix">
                        <div class="info-location-content tab-pane active fade in" id="lima">
                          <p class="txt-bold">Nombree</p>
                          <p class="title">-</p>
                          <p class="txt-bold">Dirección</p>
                          <p class="address">- </p>
                          <!-- <p class="txt-bold">Horario de atención </p>
                          <p class="atencion">Lunes a viernes de 8:00 a.m. a 9:00 p.m. Sábados y Domingos de 8:00 a.m. a 4:00 p.m.</p>
                          <p class="txt-bold">Teléfono</p>
                          <p class="phone">4194370 </p> -->
                          <p class="txt-bold res">Restricciones</p>
                          <p class="restricciones">Los días 24 y 31 de diciembre se atenderá de 8:00 a.m. a 6:00 p.m. No se atenderá el día 25 de diciembre del 2017 ni el 1 de enero del 2018. Canje por pavo o cerdo (Cerdo sólo si tu vale lo indica).</p>
                        </div>
                        <div class="info-location-content tab-pane fade in" id="provincias">
                          <p class="txt-bold">Nombre</p>
                          <p class="title">Multimarket San Miguel</p>
                          <p class="txt-bold">Dirección</p>
                          <p class="address">Av. Elmer Faucett 579 </p>
                          <p class="txt-bold">Horario de atención </p>
                          <p class="atencion">Lunes a sábado 8:00 a.m. a 9:00 p.m. <br> Domingos 8:00 a.m. a 8:00 p.m</p>
                          <p class="txt-bold">Teléfono</p>
                          <p class="phone">4194380 </p>
                          <p class="txt-bold res">Restricciones</p>
                          <p class="restricciones">Solo canje por pavo, no productos. <br>Indispensable separar tu pavo con 48 horas de anticipación como mínimo. Stock limitado. </p>
                        </div>
                      </div>
                      <div class="col-lg-8 col-sm-8 col-xs-12 col-nopadding">
                        <div class="filtro" >
                          <div class="col-md-4 col-sm-4 col-xs-12 filtro-input">
                            <div class="form-group" id="ciudad">
                              <select id="filtro_ciudad" class="selectpicker">
                                   <option>Seleccione ciudad</option>
                               </select>
                            </div>
                            <div class="form-group" id="distrito">
                              <select id="filtro_distrito">
                                <option>Seleccione distrito</option>
                              </select>
                            </div>
                            <!-- <div class="form-group" id="cate">
                              <select id="filtro_categoria" class="selectpicker">
                                <option>Seleccione lugar</option>
                              </select>
                            </div> -->
                          </div>
                        </div>
                        <div id="map3" class="mapa-canjear"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!--FIN COL CENTRAL DE 8-->
          </div>
        </div>
      </div> <!--fin row de distribuidor-->
    </div>
  </div>
</div><style media="screen">
  .restricciones, .res{
    display: none;
  }
</style>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCWUk5brFv69vhogpT6rr9wG38iLgVGSIQ&libraries=places'></script>
