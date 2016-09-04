<?php

$headers = "From: Estandarq\r\n";
$headers .= "Mime-Version: 1.0 \r\n"; 
$headers .= "Content-type: text/html; charset=UTF-8 \r\n";


$text = "<b>NOMBRE Y APELLIDO:</b> " . $_POST['nombre'] . "<br />";
$text .= "<b>TELEFONO:</b> " . $_POST['telefono'] . "<br />";
$text .= "<b>EMAIL:</b> " . $_POST['email'] . "<br />";
$text .= "<b>COMO NOS CONTACTO:</b> " . $_POST['empresa'] . "<br />";
$text .= "<b>LOCALIDAD:</b> " . $_POST['localidad'] . "<br />";
$text .= "<b>CONSULTA:</b> " . $_POST['consulta'] . "<br />";

mail("info@estandarq.com.ar", "Contacto Estandarq", $text, $headers);

header("Location: enviado.php");
?>
