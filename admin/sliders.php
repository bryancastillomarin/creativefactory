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
    	<div class="titulo">Agregar Slider</div>
        <a href="#">Regresar</a>
		<form enctype="multipart/form-data" action="servicios/slider.php" method="POST">
			<label>Imagen:</label>
			<input type="file" name="titulo" accept="image/*" required >
			<label>Url de Salida:</label>
			<input type="text" name="url" required>
			<input type="submit" value="Guardar Banner">
		</form>
	</div>   
</body>
</html>