<?php /* Smarty version Smarty-3.1.16, created on 2016-08-22 21:35:57
         compiled from "smarty\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1825652d72bc5cce976-95446465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc07832f31669ee90ef301186fe475e8bcff0eef' => 
    array (
      0 => 'smarty\\templates\\contacto.tpl',
      1 => 1471912528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1825652d72bc5cce976-95446465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d72bc604f695_69088662',
  'variables' => 
  array (
    'texto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d72bc604f695_69088662')) {function content_52d72bc604f695_69088662($_smarty_tpl) {?><!DOCTYPE html>
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
		
		<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		
		<script type="text/javascript" >
		
			var map;

			function initMap()
			{
			  	map = new google.maps.Map(document.getElementById('map'), {			
			    	center: {lat: -27.3670582, lng: -55.9047856},			
			    	zoom: 13			
			  	});
			  	
  				new google.maps.Marker({
	    			position: {lat: -27.3670582, lng: -55.9047856},
	    			map: map,
	    			title: 'Av. Centenario N 2615, Posadas (Misiones) - TEL: 0376- 4913374 - Movil: 0376- 154845924',
	    			icon: 'http://blicksite.com.ar/estan/images/logomini.png'
	  			});

			}
			
		</script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-qjblZjMfBX0pIZ83wEML6wDRFAHWoCw&callback=initMap"></script>		
	</head>
  	<body>
  		<?php echo $_smarty_tpl->getSubTemplate ("nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	
		<?php echo $_smarty_tpl->getSubTemplate ("carousel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	

		<div class="container marketing">
		
	      	<div class="row featurette">
	      		
        		<div class="col-lg-3">
          			<img class="featurette-image center-block" src="images/publicidades.jpg" alt="sobre nosotros">
        		</div>
        		
        		<div class="col-lg-5">        			
	          		<h2>HAGA SU CONSULTA A ESTAND<span class="text-muted azul">ARQ.</span></h2>
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
			          	<button type="submit" class="enviar">Enviar</button>
			          	<br>
			          	<p>(*) campos  obligatorios</p>
			          	<p>O escribanos a  info@estandarq.com.ar </p>
			          	<p>&nbsp; </p>
			          	<p>Oficina Estandarq: Av. Centenario Nº 2615, Posadas (Misiones)</p>
			          	<p>TEL: 0376- 4913374</p>
			          	<p> M&oacute;vil: 0376- 154845924</p>
			      	</form>
        		</div>
				<div id="col_map" class="col-lg-4">
					 <div id="map" class="map"></div>
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
