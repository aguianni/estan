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
require_once 'model/Casa.php';

$tipo = 7;
if(isset($_GET["tipo"]))
{
	$tipo = $_GET["tipo"];
}

require_once 'menu.php';

$casas = $obras;
switch ($tipo) {
	case 7:
		$casas = $obras;
		break;
}

Printer::execute(
array(
"menuCasaId" => $casas1p[0]->id,
"menuTipo" => $tipo,
"casas" => $casas,
"casas1p" => $casas1p, 
"casas2p" => $casas2p, 
"duplex" => $duplex, 
"edificios" => $edificios, 
"cabanas" => $cabanas,
"ampliaciones" => $ampliaciones,
"obras" => $obras),
"catalogo-obras.tpl");
?>