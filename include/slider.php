<?php
    include "admin/db/conexion.php";
    $sql = "SELECT * FROM sliders";
    $contador = 0;
    
?>

<div class="clearfix"></div>
    <div id="slider">
        <div class="w3-content w3-display-container">
            <?php 
                if ($resultado = $db->query($sql)) {
                    while ($fila = $resultado->fetch_row()) {
                        $imagen = "img/sliders/".$fila[1];
                        $url = $fila[2];
                        $contador++;
            ?>
            <a target="_" href=<?php echo $fila[2]; ?> >
                <img class="mySlides" src=<?php echo "\"".$imagen."\""; ?> >
            </a>
            <?php
                    }
                } else {
                    echo "Error de conexion";
                }
            ?>
            <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-center w3-display-bottommiddle" style="width:100%">
                
                <?php 
                    for ($i=0; $i < $contador; $i++) { 
                ?>
                <span class="w3-badge demo w3-border" onclick=<?php echo "\"currentDiv(".($i + 1).")\""; ?> ></span>
                <?php
                    }
                ?>   
            </div>
            <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
        </div>
    </div>