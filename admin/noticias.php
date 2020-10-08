<?php
	session_start();
	if(isset($_SESSION['estaLogueado'])){
		if(!($_SESSION['estaLogueado'])){
			header("Location:sistema.php");
		}
	} else {
		header("Location:index.php");
	}
	include "inc/header.php";
	include "inc/aside.php";
?>
    <div>
    	<div class="titulo">Noticia</div>
		<form enctype="multipart/form-data" action="servicios/noticia.php" method="POST">
			<label>Imagen:</label>
			<input type="file" name="imagen" accept="image/*" required >
			<label>Encabezado:</label>
			<input type="text" name="encabezado" required>
			<label>Texto:</label>
			<input type="text" name="texto" required>
			<input type="submit" value="Guardar Noticia">
		</form>
	</div>     
</body>
</html>