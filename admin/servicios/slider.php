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
	//subir slider nuevo
	$url=$_POST["url"];
	$titulo = $_FILES['titulo']['name'];
	$ruta = "../../img/sliders/";
	//guardar imagen
	$ruta = $ruta . basename( $_FILES['titulo']['name']); 
	if(move_uploaded_file($_FILES['titulo']['tmp_name'], $ruta)) {
		//continua
	} else {
		echo "Ocurrió un error al intentar guardar la imagen";
	}
	//insertar la noticia
	$sql = "INSERT INTO sliders(titulo,url_salida) VALUES ('$titulo', '$url')";
	if (mysqli_query($db, $sql)) {
		header("Location:../inicio.php");
	} else {
		echo "Ocurrió un error al guardar el slider en la base de datos";
	}
	mysqli_close($db);
?>