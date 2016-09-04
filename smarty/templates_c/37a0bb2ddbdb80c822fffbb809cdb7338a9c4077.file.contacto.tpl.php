<?php /* Smarty version Smarty-3.1.16, created on 2014-09-04 17:41:31
         compiled from "smarty/templates/contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28577595952dec98b314b20-99911013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37a0bb2ddbdb80c822fffbb809cdb7338a9c4077' => 
    array (
      0 => 'smarty/templates/contacto.tpl',
      1 => 1409863263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28577595952dec98b314b20-99911013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dec98b35f907_98473232',
  'variables' => 
  array (
    'texto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dec98b35f907_98473232')) {function content_52dec98b35f907_98473232($_smarty_tpl) {?>﻿<!doctype html>
<html>
<head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49873560-5', 'estandarq.com.ar');
  ga('send', 'pageview');

</script>

<link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon"/>
<meta charset="utf-8">
<title>Contacto- Estandarq- Estudio de Arquitectura- Posadas, Misiones, Argentina</title>
<meta name="keywords" content="arquitectura, proyectos, casas, planos, edificios, arquitectos, remodelaciones, contrucciones, construir, viviendas, hogares, deptos">
<link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="contenedora">
  <div id="encabezado">
    <div id="logo"><a href="index.php"><img src="imagenes/logo.png" width="308" height="94" alt="Arquitectos "></a></div>
    <div id="facebook"><a href="https://www.facebook.com/estand.arq?fref=ts" target="_blank"><img src="imagenes/face.jpg" alt="facebook Estandarq" width="36" height="33"></a></div>
    <!-- InstanceBeginEditable name="menu" -->
    <div id="menu">
      <ul>
        <li><a href="quienessomos.php">QUIENES SOMOS</a></li>
        <li><a href="servicios.php">SERVICIOS</a></li>
        <li><a href="instrucciones.php">INSTRUCCIONES</a> </li>
        <li><a href="catalogo.php">CATALOGO</a></li>
        <li><a class="seleccion1" href="contacto.php">CONTACTO</a></li>
      </ul>
    </div>
    <!-- InstanceEndEditable --></div>
  <!-- InstanceBeginEditable name="contenido" --><img src="imagenes/contacto.jpg" alt="contacto con arquitectos" width="980" height="149">
    <div id="col04">
    	<h1>HAGA SU CONSULTA<br></h1>
      	<form action="sendMail.php" method="post">       
	    	<p>(*) Nombre y apellido:
            	<br>
            	<input name="nombre" type="text" class="formulario" required>
          		<br>
        	</p>
        	<p>(*) Tel&eacute;fono:
          		<br>
				<input name="telefono" type="text" class="formulario" required>
          		<br>
        	</p>
          	<p>(*) e-mail:
          		<br>
				<input name="email" type="text" class="formulario" required>
          		<br>
        	</p>
          	<p>(*) C&oacute;mo nos contacto ?
            	<br>
            	<input name="empresa" type="text" class="formulario" required>
          		<br>          
          	</p>
          	<p>Localidad,  provincia, pa&iacute;s:
            	<br>
            	<input name="localidad" type="text" class="formulario">
          		<br>          
          	</p>
          	<p>Comente  brevemente el motivo por el cual nos contact&oacute;</p>
          	<textarea name="consulta" class="formulario2"><?php echo $_smarty_tpl->tpl_vars['texto']->value;?>
</textarea>
      
          	<br>
          	<input name="enviar" type="submit" class="enviar" id="enviar" value="Enviar">
          	<br>
          	<p>(*) campos  obligatorios</p>
          	<p>O escribanos a  info@estandarq.com.ar </p>
          	<p>&nbsp; </p>
          	<p>Oficina Estandarq: Av. Centenario Nº 2615, Posadas (Misiones)</p>
          	<p>TEL: 0376- 4913374</p>
          	<p> M&oacute;vil: 0376- 154845924</p>
      	</form>
      </div>
      	<div id="bloqueo">
      		<a href="http://qr.afip.gob.ar/?qr=DKNU8suqoVNRyyNQkQp8EQ,," target="_blank">
      			<img src="http://www.afip.gob.ar/images/f960/DATAWEB.jpg" width="62" height="85" class="datafiscal" alt="afip">
            </a>
      	</div>
      	<div class="publicidades">
        	<a class="proyeccion" href="http://proyeccioninmobiliaria.net/"target="_blank"></a>
        	<a class="masverde" href="https://www.facebook.com/mas.verde.16?fref=ts"target="_blank"></a>
        	<a class="sgs" href="https://www.facebook.com/sgs.construccion?fref=ts"target="_blank"></a>
        	<div class="bloqueo2"></div>
		</div>
  <!-- InstanceEndEditable -->
  <div id="menu2">
    <ul>
      <li><a href="quienessomos.php">QUIENES SOMOS</a></li>
      <li>|</li>
      <li><a href="servicios.php">SERVICIOS</a></li>
      <li>|</li>
      <li><a href="instrucciones.php">INSTRUCCIONES</a></li>
      <li>|</li>
      <li><a href="catalogo.php">CATALOGO</a></li>
      <li>|</li>
      <li><a href="contacto.php">CONTACTO</a></li>
<li></li></ul></div>
  <div id="pie">
    <div id="copyright">
      <p class="pie">copyright 2014</p>
    </div>
    <div id="sitio">
    <p class="pie">Sitio creado por</p></div>
    <div id="blick"><a href="http://blicksite.com.ar/" target="_blank"><img src="imagenes/blick.png" width="50" height="34" alt="blick"></a></div>
  </div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php }} ?>
