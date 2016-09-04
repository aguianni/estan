<?php /* Smarty version Smarty-3.1.16, created on 2014-09-04 17:39:07
         compiled from "smarty/templates/catalogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67663003552dec93321cd55-51414863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ef8dae45c90e2bf0b04e3d27f30e9bc254be566' => 
    array (
      0 => 'smarty/templates/catalogo.tpl',
      1 => 1409863143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67663003552dec93321cd55-51414863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dec933348053_22690772',
  'variables' => 
  array (
    'casas1p' => 0,
    'casas' => 0,
    'casa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dec933348053_22690772')) {function content_52dec933348053_22690772($_smarty_tpl) {?>﻿<!doctype html>
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

<title>Catalogo - Estandarq- Estudio de Arquitectura- Posadas, Misiones, Argentina</title>

<meta name="keywords" content="arquitectos, arquitectura, planos, casas, remodelaciones, proyectos, inversión, estudio, edificios, departamentos, duplex">
<meta name="description" content="Somos un estudio multidisciplinario, dedicado a la creaci&oacute;n de proyectos de buena calidad a un bajo costo y en un menor tiempo del habitual. La empresa est&aacute; conformada por 4 profesionales especializados en las distintas &aacute;reas que conforman la vivienda, como ser el paisajismo, el mobiliario, la morfolog&iacute;a, la sustentabilidad, la est&eacute;tica, etc.">

<link href="css/estilos.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$("#acordeon").accordion({ header: "h3", heightStyle: "content"});
	});
</script>
</head>
<body>
<div id="contenedora">
  	<div id="encabezado">
    <div id="logo"><a href="index.php"><img src="imagenes/logo.png" width="308" height="94" alt="Arquitectos"></a></div>
    <div id="facebook"><a href="https://www.facebook.com/estand.arq?fref=ts" target="_blank"><img src="imagenes/face.jpg" alt="facebook Estandarq" width="36" height="33"></a></div>
    <!-- InstanceBeginEditable name="menu" -->
	<div id="menu">
    	<ul>
        	<li><a href="quienessomos.php">QUIENES SOMOS</a></li>
          	<li><a href="servicios.php">SERVICIOS</a></li>
          	<li><a href="instrucciones.php">INSTRUCCIONES</a></li>
          	<li><a class="seleccion1">CATALOGO</a></li>
          	<li><a href="contacto.php">CONTACTO</a></li>
        </ul>
	</div>
    <!-- InstanceEndEditable --></div>
  	<!-- InstanceBeginEditable name="contenido" -->
  	<div id="contenido">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="catalogo">
		<a href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['casas1p']->value[0]->id;?>
">
      	<div id="catalogo2">
	        <h2><?php echo $_smarty_tpl->tpl_vars['casas1p']->value[0]->nombre;?>
</h2>
	        <p><?php echo $_smarty_tpl->tpl_vars['casas1p']->value[0]->plantas;?>
 Planta</p>
	        <p><?php echo $_smarty_tpl->tpl_vars['casas1p']->value[0]->dormitorios;?>
 dormitorios </p>
	        <p><?php echo $_smarty_tpl->tpl_vars['casas1p']->value[0]->banos;?>
 baños</p>
	        <p><?php echo $_smarty_tpl->tpl_vars['casas1p']->value[0]->vehiculos;?>
 Vehículos</p>
	        <p>Frente del terreno: <?php echo $_smarty_tpl->tpl_vars['casas1p']->value[0]->frente;?>
 m.</p>
	        <p>Superficie Cubierta: <?php echo $_smarty_tpl->tpl_vars['casas1p']->value[0]->cubierta;?>
 m2.</p>
	        <p>+ info</p>
      	</div>      
      	<img src="<?php echo $_smarty_tpl->tpl_vars['casas1p']->value[0]->carpeta_imagenes;?>
portada_catalogo.jpg" alt="portada" width="445" height="250" class="fotomediana">
      	</a>
      
      <?php  $_smarty_tpl->tpl_vars['casa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['casa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['casas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['casa']->key => $_smarty_tpl->tpl_vars['casa']->value) {
$_smarty_tpl->tpl_vars['casa']->_loop = true;
?>
      	<div class="col05">
        	<a href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['casa']->value->id;?>
">
        	<img src="<?php echo $_smarty_tpl->tpl_vars['casa']->value->carpeta_imagenes;?>
portada_catalogo_thumb.jpg" width="180" height="120" class="fotoschicas" alt="portada">
        	<p><?php echo $_smarty_tpl->tpl_vars['casa']->value->nombre;?>
</p>
        	<p class="letrachica">
    	    <?php echo $_smarty_tpl->tpl_vars['casa']->value->plantas;?>
 Plantas -
          	<?php echo $_smarty_tpl->tpl_vars['casa']->value->dormitorios;?>
 dormitorios - <?php echo $_smarty_tpl->tpl_vars['casa']->value->banos;?>
 baños - <br>
          	<?php echo $_smarty_tpl->tpl_vars['casa']->value->vehiculos;?>
 Vehículos- 
        	Frente del terreno: <?php echo $_smarty_tpl->tpl_vars['casa']->value->frente;?>
 m.</p>
        	</a>
        </div>
      <?php } ?> 
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
</html>
<?php }} ?>
