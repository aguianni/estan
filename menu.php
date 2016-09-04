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

$casas1p = Casa::getWhere("id_tipo = 1");
$casas2p = Casa::getWhere("id_tipo = 2");
$duplex = Casa::getWhere("id_tipo = 3");
$edificios = Casa::getWhere("id_tipo = 4");
$cabanas = Casa::getWhere("id_tipo = 5");
$ampliaciones = Casa::getWhere("id_tipo = 6");
$obras = Casa::getWhere("id_tipo = 7");
?>