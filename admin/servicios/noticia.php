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
    //Desvincular imagen
    $sql2 = "SELECT * FROM news";
    $resultado = $db->query($sql2);
    if ($resultado = $db->query($sql2)) {
        while ($fila = $resultado->fetch_row()) {
            unlink("../../img/noticias/". $fila[2]);
        }
    } else {
    
    }
    //borrar noticia anterior
    $sql = "DELETE FROM news";
    if (mysqli_query($db, $sql)) {
    
    } else {
    
    }
    //subir noticia nueva
    $encabezado= $_POST["encabezado"];
    $imagen = $_FILES["imagen"]["name"];
    $texto= $_POST["texto"];
    $ruta = "../../img/noticias/";
    $ruta = $ruta . basename( $_FILES["imagen"]["name"]); 
    if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta)) {
        
    } else {
    
    }
    $sql = "INSERT INTO news(encabezado,imagen,texto) VALUES ('$encabezado', '$imagen','$texto')";
    if (mysqli_query($db, $sql)) {
    
    } else {
    
    }
?>