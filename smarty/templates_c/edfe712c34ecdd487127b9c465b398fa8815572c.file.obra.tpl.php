<?php /* Smarty version Smarty-3.1.16, created on 2015-11-10 20:56:41
         compiled from "smarty/templates/obra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105055149956428439b89234-92308057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edfe712c34ecdd487127b9c465b398fa8815572c' => 
    array (
      0 => 'smarty/templates/obra.tpl',
      1 => 1447199776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105055149956428439b89234-92308057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'casa' => 0,
    'videos' => 0,
    'imagenes' => 0,
    'imagenes_dir' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5642843a07f945_73150206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642843a07f945_73150206')) {function content_5642843a07f945_73150206($_smarty_tpl) {?>﻿<!doctype html>
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
<title>Casas - Estandarq- Estudio de Arquitectura- Posadas, Misiones, Argentina</title>
<meta name="description" content="Nuestro objetivo es hacer m&aacute;s simple, r&aacute;pido y econ&oacute;mico el proceso de proyectar la construcci&oacute;n de tu vivienda; brind&aacute;ndote lo que necesit&aacute;s, partiendo de un Cat&aacute;logo de proyectos listos para ser construidos, que se adaptan a tus necesidades. ">
<meta name="keywords" content="duplex, departamentos, casas, edificios, planos, arquitectos, arquitectura, remodelaciones, proyectos, inversi&oacute;n, planos">

<link rel="stylesheet" href="css/estilos.css" type="text/css">
<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>


<script type="text/javascript">

	var tipo = <?php echo $_smarty_tpl->tpl_vars['casa']->value->tipo->id;?>
 - 1;
	var casa = "<?php echo $_smarty_tpl->tpl_vars['casa']->value->nombre;?>
";

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

	function comprar()
	{
		var texto = casa + " &#10;";
		$("input[type=checkbox]:checked").each(function(){
      		texto += this.parentNode.parentNode.textContent + " &#10;";
    	});
    	
    	var newForm = jQuery("<form>", {"action": "contacto.php", "method" : "post"});
    	newForm.append(jQuery('<input>', {"name": "texto", "value": texto}));
    	newForm.appendTo('body').submit();
	}
	
	
</script>

</head>
<body>
	<div id="contenedora">
  		<div id="encabezado">
    		<div id="logo">
            	<a href="index.php"><img src="imagenes/logo.png" width="308" height="94" alt="Arquitectos Posadas"> </a>
            </div>
    		<div id="facebook">
            	<a href="https://www.facebook.com/estand.arq?fref=ts" target="_blank">
                	<img src="imagenes/face.jpg" alt="facebook Estandarq" width="36" height="33">
                </a>
            </div>
      		<div id="menu">
        		<ul>
		          	<li><a href="quienessomos.php">QUIENES SOMOS</a></li>
		          	<li><a href="servicios.php">SERVICIOS</a></li>
		          	<li><a href="instrucciones.php">INSTRUCCIONES</a></li>
		          	<li><a href="catalogo.php" class="seleccion1">CATALOGO</a></li>
		          	<li><a href="contacto.php">CONTACTO</a></li>
        		</ul>
      		</div>
		</div><!--encabezado-->
  		<div id="contenido">
    		<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		    <div id="catalogo">
      			<h4>VIDEOS</h4>
    		</div>
		    <div id="galeria">		   	 	
		    	<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
		    		<video controls>
					  	<source src="catalogo/obras/ejemplo/videos/video" type="video/mp4" />
					</video>					
		    	<?php } ?>
		    	<video controls>
				  	<source src="catalogo/obras/ejemplo/videos/video.mp4" type="video/mp4" />
				</video>
				<video controls>
				  	<source src="catalogo/obras/ejemplo/videos/video.mp4" type="video/mp4" />
				</video>
		    </div>
		    <div id="catalogo">
      			<h4>FOTOS</h4>
    		</div>
		    <div id="galeria">	    		
		    	<?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
		    		<a class="fancybox" data-fancybox-group="imagenes" href="<?php echo $_smarty_tpl->tpl_vars['imagenes_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['casa']->value->nombre;?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['imagenes_dir']->value;?>
thumb/<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" alt="" />
					</a>
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
    	</div><!--contenido-->
	
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
			</ul>
		</div>
  		<div id="pie">
    		<div id="copyright">
      			<p class="pie">copyright 2014</p>
    		</div>
    		<div id="sitio">
    			<p class="pie">Sitio creado por</p>
    		</div>
    		<div id="blick">
    			<a href="http://blicksite.com.ar/" target="_blank">
            		<img src="imagenes/blick.png" width="50" height="34" alt="blick">
                </a>
            </div>
		</div><!--pie-->
  	</div><!--contenedora-->
</body>
<!-- InstanceEnd --></html>
<?php }} ?>
