<?php
	session_start();
	if(isset($_SESSION['estaLogueado'])){
		if(!($_SESSION['estaLogueado'])){
			header("Location:../index.php");
		}
	} else {
		header("Location:../index.php");
	}
	
	include "../db/conexion.php";

//actualizar
	if (isset($_POST["editar"])) {
		$id = $_POST["id"];
		$url = $_POST["url"];
		$sql = "UPDATE sliders SET url_salida = '$url'  WHERE id = '$id'";
		if ($db->query($sql)) {
			header("Location:../inicio.php");
		} else {
			echo "Ocurrió un errro al actualizar el sliders";
		}
		mysqli_close($db);
	}
//borrar
	if (isset($_POST["borrar"])) { 
		$id = $_POST["id"];
		$imagen = $_POST["imagen"];
		echo $imagen;
		unlink("../../img/sliders/". $imagen);
		$sql = "DELETE FROM sliders WHERE id='$id'";
		if ($resultado = $db->query($sql)) {
			header("Location:../inicio.php");
		} else {
			echo "Ocurrió un error al borrarel slider";
		}
		mysqli_close($db);
	}
?>