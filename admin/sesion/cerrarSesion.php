<?php 
	session_start();
	unset($_SESSION['estaLogueado']);
	session_destroy();
	header("Location:../index.php");
 ?>