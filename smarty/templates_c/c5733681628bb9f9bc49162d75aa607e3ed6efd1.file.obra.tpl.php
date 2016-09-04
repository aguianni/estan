<?php /* Smarty version Smarty-3.1.16, created on 2016-08-22 21:40:04
         compiled from "smarty\templates\obra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311445754b5f57ff636-81688046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5733681628bb9f9bc49162d75aa607e3ed6efd1' => 
    array (
      0 => 'smarty\\templates\\obra.tpl',
      1 => 1471912788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311445754b5f57ff636-81688046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5754b5f5d7db77_34398555',
  'variables' => 
  array (
    'casa' => 0,
    'sliders' => 0,
    'slider' => 0,
    'imagenes_dir' => 0,
    'imagenes' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5754b5f5d7db77_34398555')) {function content_5754b5f5d7db77_34398555($_smarty_tpl) {?><!DOCTYPE html>
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
	  	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	  	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
		
		<script src="js/jquery-2.1.4.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.js"></script>


		<script type="text/javascript">
			var tipo = <?php echo $_smarty_tpl->tpl_vars['casa']->value->tipo->id;?>
 - 1;
			var casa = "<?php echo $_smarty_tpl->tpl_vars['casa']->value->nombre;?>
";
			var casaId = "<?php echo $_smarty_tpl->tpl_vars['casa']->value->id;?>
";
		
			$(document).ready(function() {
				$(".fancybox").fancybox();
				
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
			
			
			var points = {
				40:{lat:-27.3652220567, lng:-55.9011741229}, //sb
				41:{lat:-27.3652220567, lng:-55.9011741229}, //gualok
				42:{lat:-27.3737402384, lng:-55.9099596499}, //lumicity
				43:{lat:-27.3737402384, lng:-55.9099596499}  //gastronomico
			}
			
			var point = points[casaId];
			
			
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

			var map;

			function initMap()				
			{
			  	map = new google.maps.Map(document.getElementById('map'), {
			    center: {lat: point.lat, lng: point.lng},
			    zoom: 13
			  });
			  
			
			  new google.maps.Marker({
				    position: {lat: point.lat, lng: point.lng},
				    map: map,
				    title: casa,				
				    icon: 'http://blicksite.com.ar/estan/images/logomini.png'				
				  });
			}

		
		</script>
		
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-qjblZjMfBX0pIZ83wEML6wDRFAHWoCw&callback=initMap"></script>
	</head>
  	<body>
  		<?php echo $_smarty_tpl->getSubTemplate ("nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	
    	
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
		  	<ol class="carousel-indicators">
		    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    	<li data-target="#myCarousel" data-slide-to="1"></li>
		    	<li data-target="#myCarousel" data-slide-to="2"></li>
		  	</ol>
		  	<div class="carousel-inner" role="listbox">
		  		<?php  $_smarty_tpl->tpl_vars['slider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sliders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slider']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->key => $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->_loop = true;
 $_smarty_tpl->tpl_vars['slider']->index++;
 $_smarty_tpl->tpl_vars['slider']->first = $_smarty_tpl->tpl_vars['slider']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slider']['first'] = $_smarty_tpl->tpl_vars['slider']->first;
?>
		    		<div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['slider']['first']) {?>active<?php }?>">
			    		<img src="<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>
" alt="Arquitectos Posadas Misiones">
			    	</div>
		    	<?php } ?>
		  	</div>
		  	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		 	 </a>
		</div><!-- carousel-->

		<div class="row casa">
			<div class="col-md-2 col-md-offset-1">
	        	<?php echo $_smarty_tpl->getSubTemplate ("side_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	        	<div id="map" class="map"></div>
        	</div>
        	<div class="col-md-7">
        		<div class="row">
        			<h3 class="azul"><?php echo $_smarty_tpl->tpl_vars['casa']->value->nombre;?>
</h3>
					<img src="<?php echo $_smarty_tpl->tpl_vars['imagenes_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['imagenes']->value[0];?>
" class="fotogrande">
        		</div>
        		<div class="row galeria">        			
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
        		<div class="row descripcion">
        			<p class="lead"><?php echo $_smarty_tpl->tpl_vars['casa']->value->descripcion;?>
</p>
        		</div>
        	</div><!-- md9-->
        	<div class="col-md-1">
        	</div>
		</div><!-- row casa-->
	</body>
</html><?php }} ?>
