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
    //Desvincular imagen
    $sql2 = "SELECT * FROM news";
    $resultado = $db->query($sql2);
    if ($resultado = $db->query($sql2)) {
        while ($fila = $resultado->fetch_row()) {
            unlink("../../img/noticias/". $fila[2]);
        }
    } else {
        echo "Ocurrió un error al borrar la imagen anterior";
    }
    //borrar noticia anterior
    $sql = "DELETE FROM news";
    if (mysqli_query($db, $sql)) {
        //
    } else {
        echo "Ocurrió un error al borrar la noticia anterior";
    }
    //subir noticia nueva
    $encabezado= $_POST["encabezado"];
    $imagen = $_FILES["imagen"]["name"];
    $texto= $_POST["texto"];
    $ruta = "../../img/noticias/";
    $ruta = $ruta . basename( $_FILES["imagen"]["name"]); 
    if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta)) {
        //
    } else {
        echo "Ocurrió un error al guardar la imagen de la noticia";
    }

    $sql = "INSERT INTO news(encabezado,imagen,texto) VALUES ('$encabezado', '$imagen','$texto')";
    if (mysqli_query($db, $sql)) {
        header("Location:../noticias.php");
    } else {
        echo "Ocurrió un error al insertar la nueva noticia";
    }
    mysqli_close($db);
?>