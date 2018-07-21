<!-- Bolsa de trabajo -->
<div class="contacto-valepavo modal-overlay hidden" id="contacto-valepavo" >
  <div class="close-btn-cont">
    <button type="button" name="button" align="center" id="close-formContacto" class="close-formContacto"><span aria-hidden="true">×</span></button>
  </div>
  <div class="col-lg-12 col-sm-12 col-xs-12 main-title-cont">
    <h2>Contáctanos</h2>
  </div>
  <p>
    Envíanos un mensaje si tienes alguna duda.
  </p>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 white-background">
      <p>Si deseas una cotización <br class="hidden-lg hidden-md hidden-sm">para tu empresa, <span class="txt-blue"><a href="#">ingresa aquí.</a></span></p>
      <p class="txt-red">Lamentablemente no podremos atender <br class="hidden-lg hidden-md hidden-sm">pedidos menores a 30 pavos, <br>
        en ese caso comunícate con nuestros<br class="hidden-lg hidden-md hidden-sm"> Multimarket San Fernando al 419-4300.</p>
    </div>
  </div>
  <hr class="hidden-xs">
  <div class="contendor-form">
    <form action="views/includes/send_contacto.php" method="post" id="formContacto" class="formContacto">
      <!--  -->
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12">
         <div class="form-group">
           <p class='lbl'>Nombre y Apellido*</p>
          <div class="controls">
            <input type="text" name="nombreP" class="form-control" placeholder="Nombre del solicitante">
          </div>
        </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
         <div class="form-group">
           <p class='lbl'>Email*</p>
          <div class="controls">
            <input type="email" name="email" class="form-control" placeholder="Ingresa tu e-mail">
          </div>
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12">
         <div class="form-group">
           <p class='lbl'>Empresa*</p>
            <div class="controls">
              <input type="text" name="empresa" class="form-control" placeholder="Ingresa el nombre de la empresa">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <p class='lbl'>RUC*</p>
            <div class="controls">
              <input type="text" name="ruc" class="form-control" placeholder="RUC de la empresa">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12">
         <div class="form-group">
           <p class='lbl'>Teléfono o Celular *</p>
          <div class="controls">
            <input type="text" name="telefono" class="form-control" placeholder="Ingresa Teléfono">
          </div>
        </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <p class='lbl'>Mensaje</p>
           <div class="controls">
             <textarea name="mensaje" rows="2" cols="80" name="mensaje" placeholder="Si tienes una consulta, no dudes en escribir." class="form-control"></textarea>
           </div>
         </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <p class="txt-required">* Estos campos son obligatorios</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
          <div class="btn-next-cont">
            <button class="btn-red" type="submit" id="btn-send-formContacto">Enviar consulta</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Fin Bolsa de Trabajo-->
