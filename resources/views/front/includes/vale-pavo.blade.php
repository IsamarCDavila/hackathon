<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
  <html lang="en">
  <?php require_once('views/includes/cabecera-links-valepavo.php');?>
  <link href="public/css/vale-pavo.css" rel="stylesheet" type="text/css" />
  <body>
    <div id="home" class="page-content-wrapper">
      <div class="home-container">
        <?php require_once('views/includes/header-valepavo.php');?>
        <A name="uno" id="uno"></A>
        <section class="background-cotizacion" id="s1">
          <?php require_once('views/includes/cotizacion-valepavo.php');?>
        </section>
        <section>
          <?php require_once('views/includes/beneficios-valepavo.php');?>
        </section>
        <A name="dos" id="dos"></A>
        <section id="s2">
          <?php require_once('views/includes/canjear-valepavo.php');?>
        </section>
        <A name="tres" id="tres"></A>
        <section id="s3">
          <?php require_once('views/includes/pavicar-valepavo.php');?>
        </section>
        <A name="cuatro" id="cuatro"></A>
        <section class="receta-pavos" id="s4">
          <?php require_once('views/includes/home-valepavo.php');?>
        </section>
        <A name="cinco" id="cinco"></A>
        <section class="pre-footer-valepavo">
            <?php require_once('views/includes/pre-footer-valepavo.php');?>
        </section>
        <?php require_once('views/includes/footer.php');?>
      </div>

      <section class="contacto-valepavo-container">
        <?php require_once('views/includes/contacto-valepavo.php');?>
      </section>
      <section class="receta-pavos">
        <?php require_once('views/vistas/descongela-pavo.php');?>
        <?php require_once('views/vistas/chef-tips.php');?>
        <?php require_once('views/vistas/pavo-criollo.php');?>
        <?php require_once('views/vistas/pavo-hierbas.php');?>
        <?php require_once('views/vistas/pavo-chiclayana.php');?>
        <?php require_once('views/vistas/pavo-arequipeno.php');?>
        <?php require_once('views/vistas/pavo-chifa.php');?>
      </section>
    </div>
  </body>
  <?php require_once('views/includes/pie-links-valepavo.php');?>
    <script src="public/js/cotizacion-timeline.js"></script>
    <script src="public/js/pavicar-modal.js"></script>
    <script src="public/js/canjear-mapa.js"></script>
</html>
