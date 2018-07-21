<div class="cd-horizontal-timeline bloque_2">
	<div class="events-content">
		<h2 class="title-cotizacion titulo_db">Cotización de <br class="hidden-lg hidden-md hidden-sm">productos</h2>
		<p class="hidden-xs subtitulo_db">
			Sorprende esta Navidad y regala la rica tradición <br> de la mesa peruana
		</p>
		<form class="" action="{{url('/send-mail')}}" method="post"  id="cotizacion" class="formCotizacion">
			{{ csrf_field() }}
			<input type="text" name="" value="" hidden id="pavo">
			<input type="text" name="" value=""  hidden id="paneton">
			<ol class="list-unstyled">
				<li class="selected" data-date="16/01/2014">
					<small class="txt-small descripcion_db">Selecciona los productos a cotizar:</small>
					<div class="row step1">
						<div class="col-lg-12 col-sm-12 col-xs-12 product-items">
					      <div class="product-item item-pavo" data="pavo">
									<div class="item-info">
					          <div class="item-title item-title-pavo">Vales de Pavo</div>
										<input type="hidden" name="tipo_cotizar_pavo" value="" class="tipo_cotizacion_pavo">
					          <div class="item-price"><i class="fa fa-check" aria-hidden="true"></i></div>
					        </div>
					        <div class="item-wrap">
					        </div>
					      </div>
					      <div class="product-item item-paneton" data="paneton">
									<div class="item-info">
					          <div class="item-title item-title-paneton">Panetón Navilandia</div>
										<input type="hidden" name="tipo_cotizar_paneton" value="" class="tipo_cotizacion_paneton">
					          <div class="item-price" data-price="35"><i class="fa fa-check" aria-hidden="true"></i></div>
					        </div>
					        <div class="item-wrap">
					        </div>
					      </div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
							<div class="btn-next-cont">
								<a class="btn-red btn-next" href="#" id="cotiza_cantidad">Siguiente<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</li>

				<li data-date="28/02/2014" class="vales">
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-xs-12 firstrow-step2 col-nopadding">
							<div class="col-lg-6 col-sm-6 col-xs-12 col-nopadding col-pavo">
								<div class="col-lg-4 col-sm-4 col-xs-4 prod-cont">
								</div>
								<div class="col-lg-8 col-sm-8 col-xs-12 tipo-vale-select" id="tipo-valepavo">
									<p class="txt-select">Selecciona tipo de <br class="hidden-lg hidden-md hidden-xs">vale:</p>
									<select class="select" id="vales" name="tipo_vale_pavo">
										<option value="5">Vale por 5 Kg</option>
										<option value="6">Vale por 6 Kg</option>
										<option value="7">Vale por 7 Kg</option>
										<option value="8">Vale por 8 Kg</option>
										<option value="9">Vale por 9 Kg</option>
										<option value="10">Vale por 10 Kg</option>
										<option value="11">Vale por 11 Kg</option>
										<option value="12">Vale por 12 Kg</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 col-xs-12 col-nopadding paneton">
								<div class="col-lg-4 col-sm-4 col-xs-4 prod-cont second-prod">
								</div>
								<div class="col-lg-8 col-sm-8 col-xs-12 tipo-vale-select" id="tipo-valepaneton">
									<p class="txt-select">Selecciona la presentación de <br class="hidden-lg hidden-md hidden-xs">panetón:</p>
									<select class="select" id="cajas" name="tipo_vale_paneton">
										<option value="caja">Caja x 6 Unidades</option>
										<option value="bolsa">Bolsa x 6 Unidades</option>
									</select>

								</div>
							</div>
						</div>
					</div>
					<div class="row row-step2">
						<div class="col-lg-12 col-sm-12 col-xs-12 secondrow-step2">
							<div class="col-lg-6 col-sm-12 col-xs-12 col-qty pavo scrollbar" id="vale-pavo">
								<div class="vale-qty-cont">
									<p>Tipos de vales</p>
									<div id="vale_qty"></div>
								</div>
								<div class="cantidad-cont-vale">
									<p>Cantidad</p>
								</div>
									<div class="force-overflow"></div>
							</div>

							<div class="col-lg-6 col-sm-12 col-xs-12 col-qty paneton scrollbar" id="vale-paneton">
								<div class="paneton-qty-cont">
									<p>Panetón</p>
									<div id="paneton-qty"></div>
								</div>
								<div class="cantidad-cont-paneton">
									<p>Cantidad</p>
								</div>
							</div>
						</div>
					</div>
					<p class="paneton-input-qty">Total <span id="sum"></span> Panetones</p>
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
							<div class="btn-next-cont">
								<a class="btn-red btn-next" href="#" id="cotiza_datos">Siguiente<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</li>

				<li data-date="20/04/2014">
					<div class="contendor-form">
							<div class="row">
								<div class="col-lg-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<p class='lbl'>Ruc</p>
										<div class="controls">
											<input type="text" name="ruc" class="form-control" placeholder="RUC de la empresa">
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6 col-xs-12">
								 <div class="form-group">
									 <p class='lbl'>Razón Social *</p>
										<div class="controls">
											<input type="text" name="razonsocial" class="form-control" placeholder="Razón social de la empresa">
										</div>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-sm-6 col-xs-12">
								 <div class="form-group">
									 <p class='lbl'>Nombre *</p>
									<div class="controls">
										<input type="text" name="nombreP" class="form-control" placeholder="Nombre del solicitante">
									</div>
								</div>
								</div>
								<div class="col-lg-6 col-sm-6 col-xs-12">
								 <div class="form-group">
									 <p class='lbl'>Apellidos *</p>
									<div class="controls">
										<input type="text" name="apellidoP" class="form-control" placeholder="Apellidos de solicitante">
									</div>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-sm-6 col-xs-12">
								 <div class="form-group">
									 <p class='lbl'>E-mail *</p>
									<div class="controls">
										<input type="text" name="email" class="form-control" placeholder="Ingresa e-mail">
									</div>
								</div>
								</div>
								<div class="col-lg-6 col-sm-6 col-xs-12">
								 <div class="form-group">
									 <p class='lbl'>Teléfono o Celular *</p>
									<div class="controls">
										<input type="text" name="telefono" class="form-control" placeholder="Ingresa Teléfono">
									</div>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-sm-6 col-xs-12">
								 <div class="form-group">
									 <p class='lbl'>Lugar de Canje *</p>
									<div class="controls">
										<select class="select select-lugar" name="lugar">
											<option value="Lima">Lima</option>
											<option value="Provincia">Provincia</option>
											<option value="Ambos">Ambos</option>
										</select>
									</div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<p class='lbl'>Comentario</p>
									 <div class="controls">
										 <textarea rows="2" cols="80" name="mensaje" placeholder="Algun comentario sobre la solicitud" class="form-control"></textarea>
									 </div>
								 </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<p>* Estos campos son obligatorios</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
									<div class="btn-next-cont">
										<button type="submit" class="btn-red" href="" id="btn-send-form">Enviar</button>
										<button type="button" class="hidden" id="cotizacion_canje_pavo_enviada"></button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="msj-container">
						<p class='msj-title'>Envío de solicitud exitoso</p>
						<p class="msj-paragraph">Gracias por confiar en la buena Familia para sorprender a tus colaboradores. Te hemos enviado un correo detallando tu solicitud. Te contactaremos lo mas pronto posible. Si tienes alguna consulta, comunicate al 213-5300, anexo 2274.</p>
						<div class="msj-info">
							<p class="cotizacion-title">Resumen de tu cotización</p>
							<ul class="list-unstyled info-list">
							</ul>
						</div>
					</div>
				</li>

			</ol>
		</form>
	</div>

	<div class="timeline">
		<div class="events-wrapper">
			<div class="events">
				<ul class="list-unstyled">
					<li><a href="#0" data-date="16/01/2014" class="selected" id="step1"><span class="hidden-lg hidden-md hidden-sm">1</span></a></li>
					<li><a href="#0" data-date="28/02/2014" id="step2"><span class="hidden-lg hidden-md hidden-sm">2</span></a></li>
					<li><a href="#0" data-date="20/04/2014" id="step3"><span class="hidden-lg hidden-md hidden-sm">3</span></a></li>
				</ul>
				<span class="filling-line" aria-hidden="true"></span>
			</div>
		</div>
	</div>

</div>
<script src="js/sweetalert.min.js" type="text/javascript"></script>
