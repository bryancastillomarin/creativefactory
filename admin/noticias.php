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
    <div class="admin-content">
    	<div class="titulo">
    		<h2>Noticia</h2>
    	</div>
		<form enctype="multipart/form-data" action="servicios/noticia.php" method="POST"
			class="form noticias">
			<label>Imagen:</label>
			<input type="file" name="imagen" accept="image/*" required >
			<div class="clearfix"></div>
			<label>Encabezado:</label>
			<input type="text" name="encabezado" required>
			<div class="clearfix"></div>
			<label>Texto:</label>
			<textarea name="texto" rows="12" required></textarea>
			<div class="clearfix"></div>
			<input type="submit" value="Guardar Noticia">
		</form>
	</div>     
</body>
</html>