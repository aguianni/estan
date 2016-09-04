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

$obra1 = Casa::getWhereLimit("id = 43", "1");
$obra2 = Casa::getWhereLimit("id = 42", "1");
$obra3 = Casa::getWhereLimit("id = 40", "1");

Printer::execute(array("obra1" => $obra1[0], "obra2" => $obra2[0], "obra3" => $obra3[0]), "index.tpl");
?>