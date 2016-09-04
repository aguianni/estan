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

$id=1;
if(isset($_GET["casa"]))
{
	$id = $_GET["casa"];	
}

$casa = Casa::get($id);

if($casa == NULL)
{
	header("Location:" . ConfigFile::$URL);
}

if($casa->tipo->id == 7)
{
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	header ("Location: http://$host$uri/obra.php?casa=$id");
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

$planos_dir = $casa->carpeta_imagenes . "planos/";
$files = scandir($planos_dir);
$planos = array();
foreach ($files as $key => $value)
{
	if(is_file($planos_dir.$value))
	{
		array_push($planos, $value);
	}
}

$videos_dir = $casa->carpeta_imagenes . "videos/";
$files = scandir($videos_dir);
$videos = array();
foreach ($files as $key => $value)
{
	if(is_file($videos_dir.$value))
	{
		array_push($videos, $videos_dir.$value);
	}
}

require_once 'menu.php';
 
$etapas = "";

if($casa->etapas &&  $casa->tipo->nombre != "turismo")
{
	$etapas = "*Esta vivienda puede realizarse en etapas; o bien construir la opción más pequeña. Consulte por precios.";
	$etapas = "<p>" . htmlentities($etapas, ENT_NOQUOTES, "UTF-8") . "</p>";
}
if($casa->etapas &&  $casa->tipo->nombre == "turismo")
{
	$etapas = "*Para realizar complejos turícos con este prototipo, elija el modelo y consulte por precios.";	
	$etapas = "<p>" . htmlentities($etapas, ENT_NOQUOTES, "UTF-8") . "</p>";
}

Printer::execute(
array(
"menuTipo" => $casa->tipo->id,
"menuCasaId" => $casa->id,
"casa" => $casa, 
"etapas" => $etapas,
"sliders" => $sliders,
"imagenes_dir" => $imagenes_dir, 
"imagenes" => $imagenes, 
"planos_dir" => $planos_dir, 
"planos" => $planos,
"videos" => $videos,
"casas1p" => $casas1p, 
"casas2p" => $casas2p, 
"duplex" => $duplex, 
"edificios" => $edificios, 
"cabanas" => $cabanas,
"ampliaciones" => $ampliaciones,
"obras" => $obras), 
"casa.tpl");
?>