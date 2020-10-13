<?php

	include "db/conexion.php";

	$user = "admin";
	$pass = "creative";

	//tercer parametro: array("cost"=>12); para modificar la fuerza de encriptacion
	$enc_pass = password_hash($pass, PASSWORD_DEFAULT); 

	$sql = "INSERT INTO usuarios(usuario,password) VALUES ('$user', '$enc_pass')";

	if(mysqli_query($db,$sql)) {
		echo "ingresado";
	} else {
		echo mysqli_error($db);
	}

?>