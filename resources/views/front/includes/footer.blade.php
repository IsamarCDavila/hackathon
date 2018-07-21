<div class="row cont-footer">
  <div class="row-global row">
    <div class="col-cont">
      <div class="col-lg-offset-right-1 col-lg-2 col-sm-3 col-xs-12 logo-cont"><h1 class="logo_h">VIVE AQP</h1></div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <ul class="lista_menu">
          <li class="hidden"><a href="#responsabilidad-social">Responsabilidad social</a></li>
          <!-- <li><a target="_blank" href="http://intranet.san-fernando.com.pe/" id="intranet">Intranet</a></li> -->
          <li><a target="_blank" href="http://webbrill.san-fernando.com.pe/portal/proveedores.asp" id="proveedores">Acceso a guías de turismo certificados</a></li>
          <li class="memoria hidden"><a href="{!!url('files/memoria_sanfernando.PDF')!!}" target="_blank">Memoria 2016</a></li>
          <li class="politica hidden"><a target="_blank" href="{!!url('files/Política-del-Sistema-Integrado-de-Gestión-con-firma-2017.pdf')!!}">Política Integrada</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <ul class="lista_menu">
          <li>Arequipa - Perú</li>
          <!-- <li>Av. República de Panamá 4295, Surquillo</li> -->
          <li>Teléfono: 213-5300</li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 libroRecla-cont" align="center" style="display: none;">
        <a href="{!!url('/libroreclamos')!!}">
          <div class="con-libro">
            <img src="{!!url('images/libro-reclamaciones.png')!!}" alt="libro reclamaciones san fernando" class="img-responsive"/>
          </div>
          <div class="libro">Libro de Reclamaciones</div>
        </a>
      </div>
    </div>
  </div>

  <div class="cont-tigres">
    <div class="respo-tigres">
      <p class="derechos">Viva AQP - Todos los derechos reservados 2018</p>
    </div>
    <div class="img-studio">
      <p class="desarrollado">Desarrollado por:</p>
      <a href="">Las abejitas</a>
    </div>
  </div>
</div>
<script>
   function setActive(){
     var path = document.location.href;
      if(path.indexOf("nosotros") > -1){
        $(".politica").css("display","block");
        $(".memoria").css("display","block");
      }else{
        $(".politica").css("display","none");
        $(".memoria").css("display","none");
      }
   }
   window.onload = setActive;
</script>
