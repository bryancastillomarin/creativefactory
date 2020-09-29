	<section class="content">
		<div class="imagenprincipal">
			<img src="img/Acercate.jpg">
		</div>
		<div class="frase">
			<img src="img/06CFWebFrase.jpg">
		</div>

		<div id="formulario">
			<p><span class="textobold">¿Cómo te ayudamos?</span> Dinos tus necesidades.</p>
			<form method="POST" id="mensaje" action="acercate.php">
				<input type="text" name="nombre" required>
				<label for="nombre">Nombre completo</label>
				<div class="clearfix"></div>
				<input type="email" name="correo" required>
				<input type="number" name="telefono" required>
				<div class="clearfix"></div>
				<label for="correo">Email</label>
				<label for="telefono">Teléfono</label>
				<textarea name="texto" rows="3" required></textarea>
				<label for="texto">Recibe nuestra respuesta en 24hrs. Todos los campos son obligatorios. Gracias.</label>
				<input type="submit" name="enviar" value="Enviar">
			</form>

			<p>
				<img src="img/CFBanderita.png" class="icon">
				Ciudad de México <span class="textobold">&</span> Veracruz
			</p>
			<p>
				<img src="img/TELCF.png" class="icon">
				228-334-1306
			</p>
			<p class="social">
				<img src="img/CFSkypeLogo.png" class="icon">
				Creative Factory MX
			</p>
			<p class="social">
				Síguenos en
				<a href="https://instagram.com" target="_">
					<img src="img/CFINSTAGRAMlogo.png" class="icon">
				</a> 
				<a href="https://facebook.com" target="_">
					<img src="img/CFFBlogo.png" class="icon">
				</a>
			</p>
		</div>
	</section>