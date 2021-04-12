  <?php if(validation_errors()){ ?>
        <div class="alert alert-izq alert-danger alert-dismissible fade show animated bounceInLeft" role="alert">
          <?php echo validation_errors()  ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php } ?>

<div class="row justify-content-start">
	<div class="col-md-11 socio-fondo quitar-margen">
		
	<div class="row justify-content-end">
		<div class="col-md-5 quitar-margen">
			<div class="formulario-login">
				
			<form id="formulario" class="needs-validation" action="<?php echo base_url("registro/post") ?>" novalidate method="post">
			  <h2>Registrate</h2>
			  <p>Es fácil y rápido</p>	
			  <br>
						  
				<div class="row">
					<div class="col">
			  			<input id="nom" type="text" class="form-control" placeholder="NOMBRE" name="nombre" value="<?php echo set_value('nombre') ?>" required>
			 		 </div>
					<div class="col">
			  			<input id="ape" type="text" class="form-control" placeholder="APELLIDOS" name="apellidos" value="<?php echo set_value('apellidos') ?>" required>
					</div>
				</div>
				<br>
				
     			<div class="row">
         			<div class="col">
      					<input id="correo" type="email" class="form-control" placeholder="CORREO ELECTRÓNICO" name="correo" value="<?php echo set_value('correo') ?>" required>
    				</div>
      			</div>
      			<br>
				
				<div class="row">
					<div class="col">
				  		<input id="cel" type="number" class="form-control" placeholder="NÚMERO CELULAR" name="cel" value="<?php echo set_value('cel') ?>"  maxlength="10" required>
					</div>
				</div>
      			<br>
				
				<div class="row">
					<div class="col">
				  		<input id="pass" type="password" class="form-control" placeholder="CONTRASEÑA" name="pass" required>
							<div class="invalid-feedback">
							Todos los campos son requeridos
							</div>
					</div>
					<div class="col">
						<input id="pass2" type="password" class="form-control" placeholder="CONFIRMAR CONTRASEÑA" name="cpass" required>
					</div>
				</div>
      			<br>
				
	<div class="row">
    	<div class="col">
		<?php if($tipo="2"){ ?>          
			<div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="customRadioInline1" name="tipo" class="custom-control-input" required value="1">
			  <label class="custom-control-label text-white" for="customRadioInline1">USUARIO</label>
			</div>
			
			<div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="customRadioInline2" name="tipo" class="custom-control-input" value="2" required checked>
			  <label class="custom-control-label text-white" for="customRadioInline2">AFILIADO</label>
			</div>
			
		<?php }else{  ?> 
			<div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="customRadioInline1" name="tipo" class="custom-control-input" required value="1" checked>
			  <label class="custom-control-label text-white" for="customRadioInline1">USUARIO</label>
			</div>
			
			<div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="customRadioInline2" name="tipo" class="custom-control-input" value="2" required >
			  <label class="custom-control-label text-white" for="customRadioInline2">AFILIADO</label>
			</div>
			
		 <?php }  ?> 
    	</div>	
	</div>
      <br>
				
	<div class="row">
    	<div class="col">
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" id="customCheck1" required>
			  	<label class="custom-control-label text-white" for="customCheck1">Al continuar, acepto los términos de uso de CrownClean y reconozco que he leido la politica de privacidad <br> <br> También acepto que CrownClean o sus agentes pueden ponerse en contacto conmigo por correo electrónico, teléfono o SMS (incluidos medios automatizados) a la dirección de correo electrónico o al número que yo indique, incluso, para fines de publicidad. </label>
			</div>
		</div>
	</div>
    <br>
				
	<div class="row">
		<div class="col">
			<div class="cuadro">
              <a class="terminos" data-toggle="modal" data-target="#exampleModalScrollable" href="#">Ver términos y condiciones</a>
          	</div>
		</div>
	</div>
	<br>
	
    <div class="row">
    	<div class="col">
      		<button class="btn-formulario btn-form" type="submit">Registrarse</button>
      	</div>
    </div>
</form>
	</div>
		</div>
			</div>
				</div>
					</div>


<!-- MODAL TERMINOS Y CONDICIONES -->

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Términos y condiciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>INFORMACIÓN RELEVANTE</h6>
        <p>
        Es requisito necesario para la adquisición de los productos que se ofrecen en este sitio, que lea y acepte los siguientes Términos y Condiciones que a continuación se redactan. El uso de nuestros servicios así como la compra de nuestros productos implicará que usted ha leído y aceptado los Términos y Condiciones de Uso en el presente documento. Todas los productos  que son ofrecidos por nuestro sitio web pudieran ser creadas, cobradas, enviadas o presentadas por una página web tercera y en tal caso estarían sujetas a sus propios Términos y Condiciones. En algunos casos, para adquirir un producto, será necesario el registro por parte del usuario, con ingreso de datos personales fidedignos y definición de una contraseña.

        El usuario puede elegir y cambiar la clave para su acceso de administración de la cuenta en cualquier momento, en caso de que se haya registrado y que sea necesario para la compra de alguno de nuestros productos.  no asume la responsabilidad en caso de que entregue dicha clave a terceros.

        Todas las compras y transacciones que se lleven a cabo por medio de este sitio web, están sujetas a un proceso de confirmación y verificación, el cual podría incluir la verificación del stock y disponibilidad de producto, validación de la forma de pago, validación de la factura (en caso de existir) y el cumplimiento de las condiciones requeridas por el medio de pago seleccionado. En algunos casos puede que se requiera una verificación por medio de correo electrónico.

        Los precios de los productos ofrecidos en esta Tienda Online es válido solamente en las compras realizadas en este sitio web.</p>
        <h6>LICENCIA</h6>
        <p>CrownClean a través de su sitio web concede una licencia para que los usuarios utilicen  los productos que son vendidos en este sitio web de acuerdo a los Términos y Condiciones que se describen en este documento.</p>
        <h6>USO NO AUTORIZADO</h6>
        <p>En caso de que aplique (para venta de software, templetes, u otro producto de diseño y programación) usted no puede colocar uno de nuestros productos, modificado o sin modificar, en un CD, sitio web o ningún otro medio y ofrecerlos para la redistribución o la reventa de ningún tipo.</p>
        <h6>PROPIEDAD</h6>
        <p>Usted no puede declarar propiedad intelectual o exclusiva a ninguno de nuestros productos, modificado o sin modificar. Todos los productos son propiedad  de los proveedores del contenido. En caso de que no se especifique lo contrario, nuestros productos se proporcionan  sin ningún tipo de garantía, expresa o implícita. En ningún esta compañía será  responsables de ningún daño incluyendo, pero no limitado a, daños directos, indirectos, especiales, fortuitos o consecuentes u otras pérdidas resultantes del uso o de la imposibilidad de utilizar nuestros productos.</p>
        <h6>POLÍTICA DE REEMBOLSO Y GARANTÍA</h6>
        <p>En el caso de productos que sean  mercancías irrevocables no-tangibles, no realizamos reembolsos después de que se envíe el producto, usted tiene la responsabilidad de entender antes de comprarlo.  Le pedimos que lea cuidadosamente antes de comprarlo. Hacemos solamente excepciones con esta regla cuando la descripción no se ajusta al producto. Hay algunos productos que pudieran tener garantía y posibilidad de reembolso pero este será especificado al comprar el producto. En tales casos la garantía solo cubrirá fallas de fábrica y sólo se hará efectiva cuando el producto se haya usado correctamente. La garantía no cubre averías o daños ocasionados por uso indebido. Los términos de la garantía están asociados a fallas de fabricación y funcionamiento en condiciones normales de los productos y sólo se harán efectivos estos términos si el equipo ha sido usado correctamente. Esto incluye:
        <br>
        – De acuerdo a las especificaciones técnicas indicadas para cada producto.
        <br>
        – En condiciones ambientales acorde con las especificaciones indicadas por el fabricante.
        <br>
        – En uso específico para la función con que fue diseñado de fábrica.
        <br>
        – En condiciones de operación eléctricas acorde con las especificaciones y tolerancias indicadas.</p>
        <h6>COMPROBACIÓN ANTIFRAUDE</h6>
        <p>La compra del cliente puede ser aplazada para la comprobación antifraude. También puede ser suspendida por más tiempo para una investigación más rigurosa, para evitar transacciones fraudulentas.</p>
        <h6>PRIVACIDAD</h6>
        <p>Este sitio web CrownClean garantiza que la información personal que usted envía cuenta con la seguridad necesaria. Los datos ingresados por usuario o en el caso de requerir una validación de los pedidos no serán entregados a terceros, salvo que deba ser revelada en cumplimiento a una orden judicial o requerimientos legales.
        <br>
        La suscripción a boletines de correos electrónicos publicitarios es voluntaria y podría ser seleccionada al momento de crear su cuenta.
        <br>
        CrownClean reserva los derechos de cambiar o de modificar estos términos sin previo aviso.</p>
      </div>
      <div class="modal-footer">
        <button data-dismiss="modal" type="button" class="btn btn-primary">Entiendo</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL TERMINOS Y CONDICIONES -->