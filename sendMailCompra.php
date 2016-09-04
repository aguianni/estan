<?php

$headers = "From: Estandarq\r\n";
$headers .= "Mime-Version: 1.0 \r\n"; 
$headers .= "Content-type: text/html; charset=UTF-8 \r\n";

$text = "<b>Datos Personales:</b><br /> ";

$text .= "<b>Nonmbre y Apellido:</b> " . $_POST['nombre'] . "<br />";
$text .= "<b>Email:</b> " . $_POST['email'] . "<br />";
$text .= "<b>Telefono:</b> " . $_POST['telefono'] . "<br />";
$text .= "<b>Direccion:</b> " . $_POST['direccion'] . "<br />";
$text .= "<b>Localidad:</b> " . $_POST['localidad'] . "<br /><br />";

$text .= "<b>Interes:</b><br /> ";

if(isset($_POST['consulta']))
{
	$text .= "<b>Consulta:</b> X <br />";	
}
if(isset($_POST['asesoramiento']))
{
	$text .= "<b>Asesoramiento:</b> X <br />";	
}
if(isset($_POST['entrevista']))
{
	$text .= "<b>Entrevista:</b> X <br />";
}
if(isset($_POST['compra']))
{
	$text .= "<b>Compra:</b> X <br />";
}
$text .= "<b>Comentarios:</b> " . $_POST['comentarios'] . "<br /><br />";

$text .= "<b>Contacto:</b><br /> ";

if(isset($_POST['reunion-oficina']))
{
	$text .= "<b>Reunion Oficina:</b> X <br />";
}
if(isset($_POST['reunion-terreno']))
{
	$text .= "<b>Reunion Terreno:</b> X <br />";
}
$text .= "<br /><b>Datos Terreno:</b><br /> ";

$text .= "<b>Direccion:</b> " . $_POST['direccion-terreno'] . "<br />";
$text .= "<b>Localidad:</b> " . $_POST['localidad-terreno'] . "<br />";
$text .= "<b>Dimensiones:</b> " . $_POST['dimensiones'] . "<br />";



mail("info@estandarq.com.ar", "COMPRA Estandarq", $text, $headers);

header("Location: enviado.php");

?>
