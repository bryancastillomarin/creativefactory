<?php

	require("class.phpmailer.php");
	require("class.smtp.php");

	// Valores enviados desde el formulario
	if ( !isset($_POST["nombre"]) || !isset($_POST["correo"]) || !isset($_POST["telefono"]) 
		|| !isset($_POST["texto"]) ) {
	    echo'<script type="text/javascript">
    	alert("Es necesario llenar todos los campos.");
    	window.location.href="../acercate.php";
    	</script>';
	}

	$nombre = $_POST["nombre"];

	$email = $_POST["correo"];

	$telefono = $_POST["telefono"];

	$mensaje = $_POST["texto"];

	$destinatario = "destinatario@eldominio.com";//aqui va el correo de creative factory

//////////////////////////////////Modificar datos aqui///////////////////////////////////////////
	// Datos de la cuenta de correo utilizada para enviar vía SMTP
	$smtpHost = "mail.tudominio.com";  // Dominio alternativo brindado en el email de alta 
	$smtpUsuario = "correo@tudominio.com";  // Mi cuenta de correo
	$smtpClave = "123456789";  // Mi contraseña

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Port = 587; 
	$mail->IsHTML(true); 
	$mail->CharSet = "utf-8";

	// VALORES A MODIFICAR //
	$mail->Host = $smtpHost; 
	$mail->Username = $smtpUsuario; 
	$mail->Password = $smtpClave;

	$mail->From = $email; // Email desde donde envío el correo.
	$mail->FromName = $nombre;
	$mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario

	$mail->Subject = "Correo sitio web Creative Factory"; // Este es el asunto del email.
	$mensajeHtml = nl2br($mensaje);
	$mail->Body = "
	<html> 

	<body> 

	<h1>Saludos Creative Factory</h1>

	<p>Envia: {$nombre}</p>

	<p>Teléfono: {$telefono}</p>

	<p>{$mensaje}</p>

	</body> 

	</html>

	<br />"; // Texto del email en formato HTML

	$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
	// FIN - VALORES A MODIFICAR //

	$mail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    )
	);

	$estadoEnvio = $mail->Send(); 
	if($estadoEnvio){
	    echo'<script type="text/javascript">
    	alert("Gracias por contactarnos.");
    	window.location.href="../acercate.php";
    	</script>';
	} else {
	    echo'<script type="text/javascript">
    	alert("Error al enviar correo. Intente nuevamente.");
    	window.location.href="../acercate.php";
    	</script>';
	}
?>