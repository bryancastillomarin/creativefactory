<?php
    session_start();
    if(isset($_SESSION['estaLogueado'])){
        if(!($_SESSION['estaLogueado'])){
            header("Location:index.php");
        }
    } else {
        header("Location:index.php");
    }

    include "db/conexion.php";
    include "inc/header.php";
    include "inc/aside.php";
    
    $sql = "SELECT * FROM sliders";
?>
    <div class="admin-content">
        <div class="titulo">
            <h2>Sliders</h2>
            <a href="sliders.php" class="nuevo"><span class="sign">&plus;</span>
                Agregar Slider 
            </a>
        </div>
        <div class="clearfix"></div>
        <table id="tabla-sliders">
            <thead>
                <th>IMAGEN</th>
                <th>URL</th>
                <th>ACCIÓN</th>
            </thead>
            <tbody> 
                <?php
                    if ($resultado = $db->query($sql)) {
                        while ($fila = $resultado->fetch_row()) {
                            echo "<tr>";
                            echo "<td><img src=\"../img/sliders/".$fila[1]."\"</td>";
                            echo "<td>".$fila[2]."</td>";
                            echo "<td>";
                ?>           
                            <form action="actualizarSlider.php" method="post">
                            <input type="hidden" name="id" value =<?php echo $fila[0]; ?> >
                            <input type="hidden" name="url_salida" value =<?php echo $fila[2]; ?> >
                            <input type="submit" name="editar" value ="Editar">
                            </form>
                            <form action="servicios/sliderUD.php" method="post">
                            <input type="hidden" name="id" value =<?php echo $fila[0]; ?> >
                            <input type="hidden" name="imagen" value =
                            <?php echo "\"". $fila[1]. "\""; ?> >
                            <input type="submit" name="borrar" value ="Borrar">
                            </form>
                <?php
                            echo"</td></tr>";
                        }
                        $resultado->close();
                    }
                ?>
            </tbody>
        </table>
    </div>     
</body>
</html>