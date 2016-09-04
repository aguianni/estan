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

Printer::execute(array(), "enviado.tpl");
?>