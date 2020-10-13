<?php
    session_start();
    if(isset($_SESSION['estaLogueado'])){
        if(!($_SESSION['estaLogueado'])){
            header("Location:inicio.php");
        }
    }

    include "../db/conexion.php";

    $user = $_POST["usuario"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios";
    if ($resultado = $db->query($sql)) {
        while ($fila = $resultado->fetch_row()) {
            if($fila[1] == $user) {
                if (password_verify($password, $fila[2])) {
                    $_SESSION["estaLogueado"] = true;
                    header("Location:../inicio.php");                    
                } else {
                    //error en la contraseña
                    header("Location:../index.php");
                }
          	} else {
                //Error en el nombre de usuario
          		header("Location: ../index.php");
          	}
        }
     }else{
      	echo "error de conexion";
     }
?>