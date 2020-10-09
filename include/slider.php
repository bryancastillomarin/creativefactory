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
            <img class="mySlides" src=<?php echo "\"".$imagen."\""; ?> >
            <?php
                    }
                } else {
                    echo "Error de conexion";
                }
            ?>
            <!--
            <img class="mySlides" src="img/sliders/slider1covid19.jpg">
            <img class="mySlides" src="img/sliders/slider2cocina.jpg">
            <img class="mySlides" src="img/sliders/slider3teotihuacan.jpg">
            <img class="mySlides" src="img/sliders/slider4RR.jpg">
            -->
            <div class="w3-center w3-display-bottommiddle" style="width:100%">
                <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
                <?php 
                    for ($i=0; $i < $contador; $i++) { 
                ?>
                <span class="w3-badge demo w3-border" onclick=<?php echo "\"currentDiv(".($i + 1).")\""; ?> ></span>
                <?php
                    }
                ?>
                <!--
                <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
                <span class="w3-badge demo w3-border" onclick="currentDiv(4)"></span>
                -->
                <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
            </div>
        </div>
    </div>

<script>

    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " w3-white";
    }
</script>