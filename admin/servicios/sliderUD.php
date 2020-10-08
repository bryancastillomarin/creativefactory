<?php
	session_start();
	if(isset($_SESSION['estaLogueado'])){
		if(!($_SESSION['estaLogueado'])){
			header("Location:sistema.php");
		}
	} else {
		header("Location:sistema.php");
	}
	include "../db/conexion.php";

//actualizar
	if (isset($_POST["editar"])) {
		$id = $_POST["id"];
		$url = $_POST["url"];
		$sql = "UPDATE sliders SET url_salida = '$url'  WHERE id = '$id'";
		if ($db->query($sql)) {

		} else {

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

		} else {

		}
	}
?>