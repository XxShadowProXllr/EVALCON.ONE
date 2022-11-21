<?php
$name = $_POST['contactName'];
$mail = $_POST['contactEmail'];
$subject = $_POST['contactSubject'];
$message = $_POST['contactMessage'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $subject . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = $mail;
$asunto = 'Prueba De Envio PHP';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:/index.html");
?>