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
	include "db/conexion.php";
	
	if (isset($_POST["editar"])) {
		$id=$_POST["id"];
		$url=$_POST["url_salida"];
	}
?>
    <div>
    	<div class="titulo">Actualizar Slider</div>
        <a href="#">Regresar</a>
		<form enctype="multipart/form-data" action="servicios/sliderUD.php" method="POST">
  		<input type='hidden' name='id' value=<?php echo $id; ?> >
    	<input type='text' name='url' value=<?php echo $url; ?> >
    	<input type='submit' name='editar' value ='Editar'>
    	</form>
	</div>
</body>
</html>