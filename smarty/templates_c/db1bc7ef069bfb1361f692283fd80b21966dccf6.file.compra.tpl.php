<?php /* Smarty version Smarty-3.1.16, created on 2014-08-07 10:57:42
         compiled from "smarty/templates/compra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62792543152e82a288d7103-07635111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db1bc7ef069bfb1361f692283fd80b21966dccf6' => 
    array (
      0 => 'smarty/templates/compra.tpl',
      1 => 1407419859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62792543152e82a288d7103-07635111',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e82a2897a661_81063344',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e82a2897a661_81063344')) {function content_52e82a2897a661_81063344($_smarty_tpl) {?>﻿<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon"/>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49873560-5', 'estandarq.com.ar');
  ga('send', 'pageview');

</script>

<title>Contacto- Estandarq- Estudio de Arquitectura- Posadas, Misiones, Argentina</title>
<meta name="keywords" content="arquitectura, proyectos, casas, planos, edificios, arquitectos, remodelaciones, contrucciones, construir, viviendas, hogares, deptos">
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="contenedora">
  <div id="encabezado">
     <div id="logo"><a href="index.php"><img src="imagenes/logo.png" width="308" height="94" alt="Arquitectos"></a></div>
    <div id="facebook"><a href="https://www.facebook.com/estand.arq?fref=ts"><img src="imagenes/face.jpg" alt="facebook Estandarq" width="36" height="33"></a></div>
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
      <h1>Formulario de compra</h1>
      <form method="post" action="sendMailCompra.php">
        <h2 class="azul"><strong>1. Datos personales:</strong></h2>
        <p>Nombre y apellido (*): <br>
          <label for="Nombre y apellido"></label>
          <input type="text" class="formulariocompra" name="nombre" required>
          <br>
          <label for="email3"></label>
        </p>
        <p>Email (*):<br>
          <label for="email4"></label>
          <input type="text" class="formulariocompra" name="email" required>
        </p>
        <p>Teléfono:<br>
          <label for="Teléfono"></label>
          <input type="text" class="formulariocompra" name="telefono" required>
          <br>
        </p>
        <p>Dirección: <br>
          <label for="Dirección"></label>
          <input type="text" class="formulariocompra" name="direccion">
          <br>
          <label for="Localidad7"></label>
        </p>
        <p>Localidad,  Provincia: <br>
          <label for="Localidad"></label>
          <input type="text" class="formulariocompra" name="localidad" required>
        </p>
        <h2 class="azul"><strong>2. Interes</strong></h2>
        <p>¿Qué es lo que me interesa de Estandarq?</p>
        <p>Consulta
          <label for="checkbox"></label>
          <input type="checkbox" name="consulta">
          <label for="consulta"></label>
        </p>
        <p>Asesoramiento
          <label for="checkbox2"></label>
          <input type="checkbox" name="asesoramiento">
          <label for="asesoramiento"></label>
        </p>
        <p>Entrevista
          <label for="checkbox3"></label>
          <input type="checkbox" name="entrevista">
          <label for="entrevista"></label>
        </p>
        <p>Compra del Proyecto de interés
          <label for="checkbox4"></label>
          <input type="checkbox" name="compra">
          <label for="compra del proyecto"></label>
        </p>
        <p>
          <label for="comentarios2"></label>
          Consultas y/o comentarios:</p>
        <p>
          <label for="consultas"></label>
          <textarea name="comentarios" class="formulariocompra2"></textarea>
        </p>
        <h2>3. Contacto:</h2>
        <p>¿ Dónde nos podemos reunir?</p>
        <p>Reunión en las oficinas de Estandarq
          <label for="checkbox5"></label>
          <input type="checkbox" name="reunion-oficina">
          <label for="reunión en oficinas"></label>
        </p>
        <p>Reunión en el terreno
          <label for="checkbox6"></label>
          <input type="checkbox" name="reunion-terreno">
          <label for="reunión en el terreno"></label>
        </p>
        <h2>4. Datos del terreno</h2>
        <p>Dirección: <br>
          <label for="dirección terreno"></label>
          <input name="direccion-terreno" type="text" class="formulariocompra">
          <br>
          <label for="Localidad"></label>
        </p>
        <p>Localidad,  Provincia:<br>
          <label for="Localidad, Provincia"></label>
          <input name="localidad-terreno" type="text" class="formulariocompra">
        </p>
        <p>Dimensiones:<br>
          <label for="Dimensiones"></label>
          <input name="dimensiones" type="text" class="formulariocompra">
        </p>
        
        <p>
          <input name="enviar" type="submit" class="enviar" value="Enviar">
        </p>
        <p>*campos  obligatorios</p>
        <p>O escribanos a  <span class="azul">info@estandarq.com.ar </span></p>
      </form>
    </div>
      <div id="bloqueo"><a href="http://qr.afip.gob.ar/?qr=DKNU8suqoVNRyyNQkQp8EQ,," target="_F960AFIPInfo"><img src="http://www.afip.gob.ar/images/f960/DATAWEB.jpg" width="62" height="85" class="datafiscal" border="0"></a></div>
  <!-- InstanceEndEditable -->
  <div id="menu2">
    <ul>
      <li><a href="quienesomos.php">QUIENES SOMOS</a></li>
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
    <div id="blick"><a href="https://www.facebook.com/pages/Blick-Site/232041186948371?fref=ts"><img src="imagenes/blick.png" width="50" height="34" alt="blick"></a></div>
  </div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php }} ?>
