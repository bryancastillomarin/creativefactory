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
	    	<h2>Agregar Slider</h2>
	        <a href="inicio.php" class="nuevo"><span class="sign">&larr;</span>
	        	Regresar
	        </a>
    	</div>
		<form enctype="multipart/form-data" action="servicios/slider.php" method="POST"
			class="form">
			<label>Imagen:</label>
			<input type="file" name="titulo" accept="image/*" required >
			<div class="clearfix"></div>
			<label>Url de Salida:</label>
			<input type="text" name="url" required>
			<div class="clearfix"></div>
			<input type="submit" value="Guardar Banner">
		</form>
	</div>   
</body>
</html>