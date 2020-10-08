<?php
	session_start();
	if(isset($_SESSION['estaLogueado'])){
		if(($_SESSION['estaLogueado'])){
			header("Location:inicio.php");
		}
	}

	include "inc/header.php";
	include "inc/sesion.php";
?>