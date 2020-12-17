<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$asuntoWeb = $_POST['asuntoWeb'];
$empresa = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'benjamin@gpoindico.com';
$para2 = 'verrodrigo_20@hotmail.com';
$asunto = 'Mensaje del sitio www.quailficame.com'.' Asunto: '.$asuntoWeb;

mail($para, $asunto, utf8_decode($mensaje), $header);
mail($para2, $asunto, utf8_decode($mensaje), $header);
header("Location:../index.html");
?>
