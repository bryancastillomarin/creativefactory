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
	//subir slider nuevo
	$url=$_POST["url"];
	$titulo = $_FILES['titulo']['name'];
	$ruta = "../../img/sliders/";

	$ruta = $ruta . basename( $_FILES['titulo']['name']); 
	if(move_uploaded_file($_FILES['titulo']['tmp_name'], $ruta)) {
	
	} else {

	}
	
	$sql = "INSERT INTO sliders(titulo,url_salida) VALUES ('$titulo', '$url')";
	if (mysqli_query($db, $sql)) {

	} else {

	}
?>