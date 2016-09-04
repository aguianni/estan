<?php /* Smarty version Smarty-3.1.16, created on 2014-01-28 21:42:07
         compiled from "smarty/templates/edificio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136249653552e83be54bb1c0-93615742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd43e6b996d5d34779488ed4a4d27b83cb34c1c72' => 
    array (
      0 => 'smarty/templates/edificio.tpl',
      1 => 1390954825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136249653552e83be54bb1c0-93615742',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e83be57a2aa9_06692919',
  'variables' => 
  array (
    'casa' => 0,
    'casas1p' => 0,
    'casa1p' => 0,
    'casas2p' => 0,
    'casa2p' => 0,
    'duplex' => 0,
    'duplexvar' => 0,
    'edificios' => 0,
    'edificio' => 0,
    'imagenes' => 0,
    'imagenes_dir' => 0,
    'imagen' => 0,
    'planos' => 0,
    'planos_dir' => 0,
    'plano' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e83be57a2aa9_06692919')) {function content_52e83be57a2aa9_06692919($_smarty_tpl) {?>﻿<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon"/>
<meta charset="utf-8">

<meta name="description" content="Nuestro objetivo es hacer m�s simple, r�pido y econ�mico el proceso de proyectar la construcci�n de tu vivienda; brind�ndote lo que necesitas, partiendo de un Cat�logo de proyectos listos para ser construidos, que se adaptan a tus necesidades. ">
<meta name="keywords" content="duplex, departamentos, casas, edificios, planos, arquitectos, arquitectura, remodelaciones, proyectos, inversion, planos">

<link rel="stylesheet" href="css/estilos.css" type="text/css">
<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>


<script type="text/javascript">

	var tipo = <?php echo $_smarty_tpl->tpl_vars['casa']->value->tipo->id;?>
 - 1;
	
	$(document).ready(function() {
		$(".fancybox").fancybox();
		$("#acordeon").accordion({ header: "h3", heightStyle: "content"});
		
		$("#acordeon").accordion("option", "active", tipo );
	
		$("input[type=checkbox]").change(function(){
		  recalculate();
		});
	});


	function recalculate()
	{
    	var sum = 0;

    	$("input[type=checkbox]:checked").each(function(){
      		sum += parseInt($(this).val());
    	});

    	$("#total").text(sum);
	}

</script>

</head>
<body>
<div id="contenedora">
  <div id="encabezado">
    <div id="logo"><a href="index.php"><img src="imagenes/logo.jpg" width="360" height="94" alt="arquitectura"></a></div>
    <div id="facebook"><a href="https://www.facebook.com/estand.arq?fref=ts" target="_blank"><img src="imagenes/face.jpg" alt="facebook Estandarq" width="36" height="33"></a></div>
    <!-- InstanceBeginEditable name="menu" -->
      <div id="menu">
        <ul>
          <li><a href="quienessomos.php">QUIENES SOMOS</a></li>
          <li><a href="servicios.php">SERVICIOS</a></li>
          <li><a href="instrucciones.php">INSTRUCCIONES</a></li>
          <li><a href="catalogo.php" class="seleccion1">CATALOGO</a></li>
          <li><a href="contacto.php">CONTACTO</a></li>
        </ul>
      </div>
  <!-- InstanceEndEditable --></div>
  <!-- InstanceBeginEditable name="contenido" -->
  <div id="contenido">
    <div id="acordeon">
    	<p>CASAS</p>
      	<h3>1 PLANTA</h3>
	     <ul>
	     	<?php  $_smarty_tpl->tpl_vars['casa1p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['casa1p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['casas1p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['casa1p']->key => $_smarty_tpl->tpl_vars['casa1p']->value) {
$_smarty_tpl->tpl_vars['casa1p']->_loop = true;
?>
	     		<li <?php if ($_smarty_tpl->tpl_vars['casa1p']->value->id==$_smarty_tpl->tpl_vars['casa']->value->id) {?>class="selected"<?php }?>><a href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['casa1p']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['casa1p']->value->nombre;?>
</a></li>
	     	<?php } ?>
	   	  </ul>
	    	<h3>2 PLANTAS</h3>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['casa2p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['casa2p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['casas2p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['casa2p']->key => $_smarty_tpl->tpl_vars['casa2p']->value) {
$_smarty_tpl->tpl_vars['casa2p']->_loop = true;
?>
			     	<li <?php if ($_smarty_tpl->tpl_vars['casa2p']->value->id==$_smarty_tpl->tpl_vars['casa']->value->id) {?>class="selected"<?php }?>><a href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['casa2p']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['casa2p']->value->nombre;?>
</a></li>
		     	<?php } ?>
			</ul>
    	<p>INVERSIONES</p>
   		<h3>DUPLEX</h3>
    	<ul>
    		<?php  $_smarty_tpl->tpl_vars['duplexvar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['duplexvar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['duplex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['duplexvar']->key => $_smarty_tpl->tpl_vars['duplexvar']->value) {
$_smarty_tpl->tpl_vars['duplexvar']->_loop = true;
?>
	     		<li <?php if ($_smarty_tpl->tpl_vars['duplexvar']->value->id==$_smarty_tpl->tpl_vars['casa']->value->id) {?>class="selected"<?php }?>><a href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['duplexvar']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['duplexvar']->value->nombre;?>
</a></li>
	     	<?php } ?>
    	</ul>
    	<h3>EDIFICIOS</h3>
    	<ul>
    		<?php  $_smarty_tpl->tpl_vars['edificio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['edificio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['edificios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['edificio']->key => $_smarty_tpl->tpl_vars['edificio']->value) {
$_smarty_tpl->tpl_vars['edificio']->_loop = true;
?>
	     		<li <?php if ($_smarty_tpl->tpl_vars['edificio']->value->id==$_smarty_tpl->tpl_vars['casa']->value->id) {?>class="selected"<?php }?>><a href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['edificio']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['edificio']->value->nombre;?>
</a></li>
	     	<?php } ?>
    	</ul>
    </div>
    <img src="<?php echo $_smarty_tpl->tpl_vars['casa']->value->carpeta_imagenes;?>
portada_casa.jpg" alt="Casa Azalea" width="750" height="450" class="fotogrande">
    
    <div id="galeria">
    	<?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['imagen']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['imagen']['index']++;
?>
    		<a <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['imagen']['index']>3) {?>style="display:none"<?php }?> class="fancybox" rel="imagenes" href="<?php echo $_smarty_tpl->tpl_vars['imagenes_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['casa']->value->nombre;?>
">
				<img style="max-height: 180px; max-width: 180px" src="<?php echo $_smarty_tpl->tpl_vars['imagenes_dir']->value;?>
thumb/<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" alt="" />
			</a>
    	<?php } ?>
    </div>
    <div id="planilla">
        <img src="imagenes/lineacatalogo1.gif" width="751" height="2" class="lineacatalogo">
        <div id="col05">
        <h3 class="fondoazul">DATOS DEL PROTOTIPO: <?php echo $_smarty_tpl->tpl_vars['casa']->value->nombre;?>
</h3>
        <p>Plantas: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->plantas;?>
</span></p>
        <p>N&ordm; de departamentos: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->dormitorios;?>
</span></p>
        <p>N&ordm; de locales comerciales: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->banos;?>
</span></p>
        <p>Veh&iacute;culos: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->vehiculos;?>
</span></p>
        <p>Frente del terreno: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->frente;?>
 m.</span></p>
        <p>SUPERFICIE TOTAL: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->total;?>
 m2.</span></p>
      </div>
      <div id="col06">
        <form name="form1" method="post" action="">
          <h3><br>
          PROYECTO DE ARQUITECTURA</h3>
          <p>Legajo Municipal: <span class="form-compra-derecha"> $ <?php echo $_smarty_tpl->tpl_vars['casa']->value->legajo_municipal;?>
 <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->legajo_municipal;?>
"></span></p>
          <p>Proyecto  Ejecutivo: <span class="form-compra-derecha"> $ <?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_ejecutivo;?>
 <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_ejecutivo;?>
"></span></p>
          <p>C&oacute;mputo: <span class="form-compra-derecha"> $ <?php echo $_smarty_tpl->tpl_vars['casa']->value->computo;?>
 <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->computo;?>
"></span></p>
          <h3>PLANOS COMPLEMENTARIOS</h3>
          <p>Proyecto de  Mobiliario: <span class="form-compra-derecha"> $ <?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_mobiliario;?>
 <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_mobiliario;?>
"></span></p>
          <p>Proyecto  Paisaj&iacute;stico: <span class="form-compra-derecha"> $ <?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_paisajistico;?>
 <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_paisajistico;?>
"></span></p>
          <p>Proyecto de  Sustentabilidad: <span class="form-compra-derecha"> $ <?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_sustentabilidad;?>
 <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_sustentabilidad;?>
"></span></p>
        </form>
      </div>
      <div id="col07">
        <form name="form2" method="post" action="">
          <h3><br>
          PLANOS OPCIONALES</h3>
          <p>Modificacion de  Superficie: <span class="form-compra-derecha"> $ <?php echo $_smarty_tpl->tpl_vars['casa']->value->modificacion_superficie;?>
 <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->modificacion_superficie;?>
"></span></p>
          <p>Modificacion de  Materialidad: <span class="form-compra-derecha"> $ <?php echo $_smarty_tpl->tpl_vars['casa']->value->modificacion_materialidad;?>
 <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->modificacion_materialidad;?>
"></span></p>
          <p>Modificacion de  Color: <span class="form-compra-derecha"> $ <?php echo $_smarty_tpl->tpl_vars['casa']->value->modificacion_color;?>
 <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->modificacion_color;?>
"></span></p>
        
        	<h3>TOTAL: <span id="total">0</span></h3>
        </form>
    </div>
    </div>
    <img src="imagenes/lineacatalogo.gif" width="751" height="2" class="lineacatalogo">
    <div id="catalogo">
      <h4>PLANOS</h4>
    </div>
    <br>
    
    <?php  $_smarty_tpl->tpl_vars['plano'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plano']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plano']->key => $_smarty_tpl->tpl_vars['plano']->value) {
$_smarty_tpl->tpl_vars['plano']->_loop = true;
?>
		<a class="fancybox planos" rel="planos" href="<?php echo $_smarty_tpl->tpl_vars['planos_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['plano']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['casa']->value->nombre;?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['planos_dir']->value;?>
thumb/<?php echo $_smarty_tpl->tpl_vars['plano']->value;?>
" alt="" />
		</a>
	<?php } ?>

    <div id="bloqueo">
    <a href="http://qr.afip.gob.ar/?qr=DKNU8suqoVNRyyNQkQp8EQ,," target="_blank">
    	<img src="http://www.afip.gob.ar/images/f960/DATAWEB.jpg" width="62" height="85" class="datafiscal" alt="afip">
    </a>
    </div>
  </div>
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
    <div id="blick"><a href="https://www.facebook.com/pages/Blick-Site/232041186948371?fref=ts" target="_blank"><img src="imagenes/blick.png" width="50" height="34" alt="blick"></a></div>
  </div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php }} ?>
