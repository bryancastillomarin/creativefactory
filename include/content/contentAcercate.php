	<section class="content">
		<div class="imagenprincipal">
			<img src="img/contenido/Acercate.jpg">
		</div>
		<div class="frase">
			<img src="img/frases/06CFWebFrase.jpg">
		</div>

		<div id="formulario">
			<p><span class="textobold">¿Cómo te ayudamos?</span> Dinos tus necesidades.</p>
			<form method="POST" id="mensaje" action="mail/enviarCorreo.php" autocomplete="off">
				<input type="text" name="nombre" required placeholder="Nombre completo">
				<label for="nombre">Nombre completo</label>
				<div class="clearfix"></div>
				<input type="email" name="correo" required placeholder="E-mail">
				<input type="number" name="telefono" required placeholder="Teléfono">
				<div class="clearfix"></div>
				<label for="correo">Email</label>
				<label for="telefono">Teléfono</label>
				<textarea name="texto" rows="3" required placeholder="Escribe aquí tu mensaje"></textarea>
				<div class="clearfix"></div>
				<input type="checkbox" name="checkbox" required id="check">
				<label for="checkbox" onclick="check();">
				Al seleccionar ésta casilla, autoriza a Creative Factory México a ponerse en contacto con Usted mediante los medios proporcionados para dar seguimiento a su solicitud, de igual forma acepta los Términos y Aviso de Privacidad de la empresa, así como recibir eventualmente información o promociones de productos o servicios de su interés. Recibirá una respuesta en un máximo de 24 hrs. Todos los campos son obligatorios. Gracias.</label>
				<input type="submit" name="enviar" value="Enviar">
			</form>

			<p>
				<img src="img/iconos/CFBanderita.png" class="icon">
				Ciudad de México <span class="textobold">&</span> Veracruz
			</p>
			<p>
				<img src="img/iconos/TELCF.png" class="icon">
				228 117 5569
			</p>
			<p class="social">
				<img src="img/iconos/CFSkypeLogo.png" class="icon">
				Creative Factory MX
			</p>
			<p class="social">
				Síguenos en
				<a href="https://instagram.com" target="_">
					<img src="img/iconos/CFINSTAGRAMlogo.png" class="icon">
				</a> 
				<a href="https://facebook.com" target="_">
					<img src="img/iconos/CFFBlogo.png" class="icon">
				</a>
			</p>
		</div>
	</section>