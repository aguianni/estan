<?php
/*
 * Created on Jul 21, 2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Argentina/Buenos_Aires");
require_once 'smarty/Printer.php';

require_once './model/Casa.php';

$id=40;
if(isset($_GET["casa"]))
{
	$id = $_GET["casa"];	
}

$casa = Casa::get($id);

if($casa == NULL)
{
	header("Location:" . ConfigFile::$URL);
}

if($casa->tipo->id != 7)
{
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	header ("Location: http://$host$uri/casa.php?casa=$id");
}

$sliders_dir = $casa->carpeta_imagenes . "sliders/";
$files = scandir($sliders_dir);
$sliders = array();
foreach ($files as $key => $value)
{
	if(is_file($sliders_dir.$value))
	{
		array_push($sliders, $sliders_dir.$value);
	}
}

$imagenes_dir = $casa->carpeta_imagenes . "imagenes/";
$files = scandir($imagenes_dir);
$imagenes = array();
foreach ($files as $key => $value)
{
	if(is_file($imagenes_dir.$value))
	{
		array_push($imagenes, $value);		
	}
}

require_once 'menu.php';

Printer::execute(
array(
"menuTipo" => $casa->tipo->id,
"menuCasaId" => $casa->id,
"casa" => $casa,
"sliders" => $sliders,
"imagenes_dir" => $imagenes_dir, 
"imagenes" => $imagenes, 
"casas1p" => $casas1p, 
"casas2p" => $casas2p, 
"duplex" => $duplex, 
"edificios" => $edificios, 
"cabanas" => $cabanas,
"ampliaciones" => $ampliaciones,
"obras" => $obras), 
"obra.tpl");
?>