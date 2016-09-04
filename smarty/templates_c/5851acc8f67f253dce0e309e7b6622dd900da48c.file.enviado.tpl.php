<?php /* Smarty version Smarty-3.1.16, created on 2015-11-27 21:11:44
         compiled from "smarty\templates\enviado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221755658f0afc9d6f1-15496724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5851acc8f67f253dce0e309e7b6622dd900da48c' => 
    array (
      0 => 'smarty\\templates\\enviado.tpl',
      1 => 1448669502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221755658f0afc9d6f1-15496724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5658f0afd16882_34418916',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5658f0afd16882_34418916')) {function content_5658f0afd16882_34418916($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>

		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<meta charset="utf-8">
		<title>Home Estandarq- Estudio de Arquitectura- Posadas, Misiones, Argentina.</title>
		<meta name="keywords" content="arquitectura, arquitectos, estudio de arquitectura, Posadas, Misiones, planos de arquitectura, proyectos, casas, edificios, duplex, ">
		<meta name="description" content="Somos un estudio multidisciplinario dedicado a la creaci&oacute;n de proyectos de buena calidad a un bajo costo y en un menor tiempo del habitual. La empresa esta conformada por 4 profesionales especializados en las distintas &aacute;reas que conforman la vivienda, como ser el paisajismo, el mobiliario, la morfolog&iacute;a, la sustentabilidad, la est&eacute;tica, etc.">


	  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
	  	<link rel="stylesheet" type="text/css" href="bootstrap/css/carousel.css">
	  	<link rel="stylesheet" type="text/css" href="css/estilos.css">
		
		<script src="js/jquery-2.1.4.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	
	</head>
  	<body>
  		<?php echo $_smarty_tpl->getSubTemplate ("nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	
		<?php echo $_smarty_tpl->getSubTemplate ("carousel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	

		<div class="container marketing">
		
	      	<div class="row featurette">
        		<div class="col-md-9 col-md-push-3" id="sobre_nosotros">
	          		<h2>SU CONSULTA HA SIDO ENVIADA A ESTAND<span class="text-muted azul">ARQ.</span></h2>
				    <p class="formenviado">Será respondida a la brevedad.</p>
				    <p class="formenviado">¡Muchas Gracias! </p>
				    <p class="formenviado">Estandarq</p>
        		</div>
        		<div class="col-md-1 col-md-pull-9">
          			<img class="featurette-image center-block" src="images/publicidades.jpg" alt="sobre nosotros">
        		</div>
      		</div>

      		
      		<hr class="featurette-divider">

      		<!-- /END THE FEATURETTES -->

      		<!-- FOOTER -->
			<footer>
	      		<p class="pull-right"><a href="#">Back to top</a></p>
	        	<p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
	      	</footer>

		</div><!-- /.container -->
	</body>
</html><?php }} ?>
