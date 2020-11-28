<?php
	// Se obtienen las entradas
	// del usuario para enviar correo

	if(isset($_POST["enviardatos"])) {
		// Si los campos no estan vacios
		if (!empty($_POST["nombre"]) && !empty($_POST["mail"]) && !empty($_POST["asunto"]) && !empty($_POST["mensaje"])) {
			# code...
			$nombre = $_POST["nombre"];
			$telefono = $_POST["telefono"];
			$email = $_POST["mail"];
			$asunto = $_POST["asunto"];
			$mensaje = $_POST["mensaje"];

			// Sanitizando entradas del usuario
			// para evitar XSS, o inyecciones			
			$nombre = htmlspecialchars($nombre);
			$telefono = htmlspecialchars($telefono);
			$email = htmlspecialchars($email);
			$asunto = htmlspecialchars($asunto);
			$mensaje = htmlspecialchars($mensaje);
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$fecha = "";

			// Mensaje a enviar con formato
			// HTML para poder enviar el correo
			// con un buen formato
			$contenido = "
			<!DOCTYPE html>
			<html>
			<head>
				<title>Correo recibido</title>
			</head>
			<body>
				<h1>Formulario de Contacto ByG Riegos</h1>
				<p>Alguien ha llenado un formulario. Por favor, asegurate de que los
				datos sean correctos.</p>
				<ul>
					<li>Nombre del contactante: $nombre</li>
					<li>Teléfono del contactante: $telefono</li>
					<li>E-Mail del contactante: $email</li>
				</ul>
				<hr>
				<h2>Mensaje del contactante</h2>
				<p>$mensaje</p>
				<p>$fecha</p>
				<hr>
				<h6>ESTE ES UN MAIL AUTOMATICO, POR FAVOR NO RESPONDA AL MISMO.</h6>
			</body>
			</html>
			";
			
			// Aqui es importante reemplazar el valor
			// al que queramos poner pidiendo del cliente
			$mail_recibidor = "leandronahuelblandiomg@gmail.com";
			$mail_enviar = mail($mail_recibidor,$asunto,$contenido, $headers);
		}
	}

	// Si el mail se envia entonces
	if($mail_enviar) {
		include("sended.php");
	} // Sino entonces
	else {
		echo "<h1>Ups...</h1>";
		echo "Hubo un problemita al enviar el correo, por favor: intentá mas tarde, gracias.";
		include("redirect.php");
	}
?>