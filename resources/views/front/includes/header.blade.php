@include('front.includes.scroll-top')
<div class="header container-fluid col-nopadding">
  <div class="row row-nomargin row-header">
    <div class="col-md-12 col-xs-12 col-noppading cont-menu menu-trans">
      <div class="menu-inact col-md-6 col-sm-6 col-xs-12 col-nopadding" id="front">
        <div class="container-menu">
          <div class="row row-nomargin row-menu">
            <div class="logo-main max">
              <a href="{!!url('/')!!}" class='logo'><img src="{!!url('images/logo.png')!!}" ></a>
  						<a href="{!!url('/')!!}" class='logo-min'><img src="{!!url('images/small-logo.png')!!}" ></a>
            </div>

              <div class="link-sup">
                <div class="burger-cont" id="abre-menu-topo">
                  <a href="#" class="btn-collapse" id="click_a_menu">
                    <div class="lista-collapse"></div>
                    <div class="lista-collapse"></div>
                    <div class="lista-collapse"></div>
                    <div class="menu-label">MENÚ</div>
                  </a>
                </div>
              </div>
              <!-- <a class="lang-activo en" href="#">EN</a>
              <a class="lang-inactivo es" href="#">ES</a> -->
          </div><!--Fim da Row1 -->

          <div class="cont-link menu-topo main-menu" id="menu-topo">
            <ul id="menu-main" class="col-lg-offset-3 col-lg-9 col-sm-offset-1 col-sm-11 col-xs-12">
              <li id="li1"><a href="{!!url('/nosotros')!!}">Nosotros</a></li>
              <li id="li2"><a href="{!!url('/productos')!!}">Productos</a></li>
              <li id="li3"><a href="{!!url('/recetas')!!}">Recetas</a></li>
              <li id="li4"><a href="{!!url('/puntosdeventa')!!}" class="dentro">Puntos de venta</a></li>
              <li id="li5"><a href="{!!url('/contacto')!!}" class="dentro">Contacto</a></li>
              <!-- <li id="li6"><a href="noticias" class="dentro">Noticias</a></li> -->
              <li id="li7"><a href="{!!url('/puntosdecanje')!!}" class="link-turkey">Canje vale de Pavo</a></li>
            </ul>
            <div class="hidden-lg hidden-md socialmedia-cont">
              <a href="https://www.facebook.com/san.fernando.labuenafamilia" target="_blank" id="facebook"><img src="{!!url('images/icon-fb.png')!!}" class="img-responsive img-redes" alt="logo facebook"/></a>
              <a href="https://www.youtube.com/user/sanfernandoperu1" target="_blank" id="youtube"><img src="{!!url('images/icon-yt.png')!!}" class="img-responsive img-redes yt" alt="logo youtube"/></a>
              <a href="https://www.linkedin.com/company/2049199" id="linkedin"><img src="{!!url('images/icn-linkedin.png')!!}" class="img-responsive img-redes tw" alt="logo linkedin"/></a>
            </div>
          </div>
        </div><!--Fim da coontainer -->
      </div><!--Fim do topo -->
      <div class="cont-redes hidden-xs">
        <a href="https://www.facebook.com/san.fernando.labuenafamilia" target="_blank" id="facebook"><img src="{!!url('images/icon-fb.png')!!}" class="img-responsive" alt="logo facebook"/></a>
        <a href="https://www.youtube.com/user/sanfernandoperu1" target="_blank" id="youtube"><img src="{!!url('images/icon-yt.png')!!}" class="img-responsive" alt="logo youtube"/></a>
        <a href="https://www.linkedin.com/company/2049199" id="linkedin" target="_blank"><img src="{!!url('images/icn-linkedin.png')!!}" class="img-responsive" alt="logo linkedin"/></a>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo URL::asset('js/scroll.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
function click_link(id_ref){
$(id_ref).on('click touchend', function(e) {
  var el = $(this);
  var link = el.attr('href');
  window.location = link;
});
}
  click_link('#li1');
  click_link('#li2');
  click_link('#li3');
  click_link('#li4');
  click_link('#li5');
  click_link('#li6');
</script>
