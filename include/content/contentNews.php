<?php
	include "admin/db/conexion.php";
	$sql = "SELECT * FROM news";
	if ($resultado = $db->query($sql)) {
		while ($fila = $resultado->fetch_row()) {
			$encabezado = $fila[1];
			$imagen = "img/noticias/".$fila[2];
			$texto = $fila[3];
		}
	} else {
		echo "Error de conexion";
	}
?>

	<section class="content">
		<div class="imagenprincipal">
			<img src="img/contenido/news.jpg">
		</div>
		
		<div class="frase">
			<img src="img/frases/07CFWebFrase.jpg">
		</div>

		<div class="noticia">
			<div class="noticia-encabezado">
				<h1><?php echo $encabezado; ?></h1>
			</div>
			<div class="noticia-imagen">
				<img src=<?php echo "\"".$imagen."\""; ?> >
			</div>
			<div class="noticia-texto">
				<p>
					<?php echo $texto; ?>
				</p>
			</div>
		</div>
		
	</section>