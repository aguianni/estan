<?php /* Smarty version Smarty-3.1.16, created on 2016-08-22 19:58:56
         compiled from "smarty\templates\casa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2713452d73d06241cd4-31513294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6d9e570d6151012571c97c4e9cfea37b9e6eb72' => 
    array (
      0 => 'smarty\\templates\\casa.tpl',
      1 => 1471906720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2713452d73d06241cd4-31513294',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d73d0628fef3_99175376',
  'variables' => 
  array (
    'casa' => 0,
    'sliders' => 0,
    'slider' => 0,
    'imagenes_dir' => 0,
    'imagenes' => 0,
    'datosJPG' => 0,
    'imagen' => 0,
    'videos' => 0,
    'video' => 0,
    'etapas' => 0,
    'planos' => 0,
    'planos_dir' => 0,
    'plano' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d73d0628fef3_99175376')) {function content_52d73d0628fef3_99175376($_smarty_tpl) {?><!DOCTYPE html>
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
		</div>

		<div class="row casa">
			<div class="col-md-2 col-md-offset-1">
	        	<?php echo $_smarty_tpl->getSubTemplate ("side_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        	</div><!-- side bar md 2-->
        	<div class="col-md-7">
        		<div class="row">
        			
        			<div class="col-md-8">
						<h3 class="azul"><?php echo $_smarty_tpl->tpl_vars['casa']->value->nombre;?>
</h3>
						<img src="<?php echo $_smarty_tpl->tpl_vars['imagenes_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['imagenes']->value[0];?>
" class="fotogrande">
					</div><!-- md 8 foto grande casa-->
					
					<div class="col-md-4 prototipo">
						<h3 class="azul">Datos del prototipo</h3>
						<?php $_smarty_tpl->tpl_vars["datosJPG"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['casa']->value->carpeta_imagenes)."datos.jpg", null, 0);?>
						<?php if (file_exists($_smarty_tpl->tpl_vars['datosJPG']->value)) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['casa']->value->carpeta_imagenes;?>
datos.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['casa']->value->nombre;?>
">
						<?php } else { ?>
							<p>Plantas: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->plantas;?>
</span></p>
			        		<?php if ($_smarty_tpl->tpl_vars['casa']->value->tipo->nombre=="edificio") {?>
			        			<p>N&ordm; de departamentos: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->dormitorios;?>
</span></p>
			        			<p>N&ordm; de locales comerciales: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->banos;?>
</span></p>
			        		<?php } else { ?>
				        		<p>N&ordm; de dormitorios: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->dormitorios;?>
</span></p>
				        		<p>N&ordm; de ba&ntilde;os: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->banos;?>
</span></p>
			        		<?php }?>
			                
			        		<p>Veh&iacute;culos: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->vehiculos;?>
</span></p>
			        		<p>Frente del terreno: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->frente;?>
 m.</span></p>
			        
			        		<?php if ($_smarty_tpl->tpl_vars['casa']->value->tipo->nombre!="edificio") {?>
		        			<p>Sup. Cubierta: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->cubierta;?>
 m2.</span></p>
		        			<p>Sup. Semicubierta: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->semicubierta;?>
 m2</span></p>
			        		<?php }?>
		        
		        			<p>SUP. TOTAL: <span class="form-compra-derecha"><?php echo $_smarty_tpl->tpl_vars['casa']->value->total;?>
 m2.</span></p>
						<?php }?>
					</div><!-- md 4 datos casa-->
					
        		</div><!-- row casa datos-->
        		<div class="row">
	        		<div class="col-md-12">
	        			<div class="galeria">
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
					    </div><!-- galeria foto-->
					    <div id="galeria">
					    	<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
					    		<video controls>
								  	<source src="<?php echo $_smarty_tpl->tpl_vars['video']->value;?>
" type="video/mp4" />
								</video>
								
					    	<?php } ?>
					    </div><!-- galeria videos-->
					</div><!-- md 12 galeria-->	   
        		</div><!-- row galeria-->
        		
        		<div class="row">
        			<div class="col-md-12 descripcion">
        				<p class="lead"><?php echo $_smarty_tpl->tpl_vars['casa']->value->descripcion;?>
</p>
        			</div>
        		</div><!-- descripcion-->
        		
        		<div class="row">
        			<div class="col-md-12 etapas">
        				<hr>
	        			<p>Si desea consultar el costo de la vivienda, seleccione los &iacute;tems de su inter&eacute;s, presione la opci&oacute;n "simulaci&oacute;n de compra" y a la brevedad nos pondremos en contacto</p>
						<p>* Los precios pueden estar desactualizados y por ende sufrir modificaciones.</p>
						<?php echo $_smarty_tpl->tpl_vars['etapas']->value;?>

						<br><br>
        			</div><!-- md12 precios desactualizados-->
        		</div><!-- row -->
        		
        		<div class="row">
        			<div class="row">
	        			<div class="col-md-12  precios">
	        				<table style="width:100%">
							  	<tr>
							    	<th>PROYECTO DE ARQUITECTURA</th>
							    	<th>PLANOS COMPLEMENTARIOS</th> 
							    	<th>PLANOS OPCIONALES</th>
							  	</tr>
							  	<tr>
							    	<td><p>Legajo Municipal:			<span>$<?php echo $_smarty_tpl->tpl_vars['casa']->value->legajo_municipal;?>
		<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->legajo_municipal;?>
"/></span></p></td>
							    	<td><p>Proyecto de  Mobiliario:		<span>$<?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_mobiliario;?>
		<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_mobiliario;?>
" /></span></p></td> 
							    	<td><p>Modificacion de  Superficie:	<span>$<?php echo $_smarty_tpl->tpl_vars['casa']->value->modificacion_superficie;?>
 <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->modificacion_superficie;?>
" /></span></p></td>
							  	</tr>
							  	<tr>
							    	<td><p>Proyecto Ejecutivo:				<span>$<?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_ejecutivo;?>
			<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_ejecutivo;?>
"/></span></p></td>
							    	<td><p>Proyecto  Paisaj&iacute;stico: 	<span>$<?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_paisajistico;?>
 		<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_paisajistico;?>
" /></span></p></td> 
							    	<td><p>Modificacion de  Materialidad: 	<span>$<?php echo $_smarty_tpl->tpl_vars['casa']->value->modificacion_materialidad;?>
 	<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->modificacion_materialidad;?>
" /></span></p></td>
							  	</tr>
							  	<tr>
							    	<td><p>C&aacute;lculo:					<span>$<?php echo $_smarty_tpl->tpl_vars['casa']->value->computo;?>
						<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->computo;?>
"/></span></p></td>
							    	<td><p>Proyecto de  Sustentabilidad: 	<span> $<?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_sustentabilidad;?>
 	<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->proyecto_sustentabilidad;?>
" /></span></p></td> 
							    	<td><p>Modificacion de  Color: 			<span> $<?php echo $_smarty_tpl->tpl_vars['casa']->value->modificacion_color;?>
 		<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['casa']->value->modificacion_color;?>
" /></span></p></td>
							  	</tr>
							</table>
	        			</div><!-- md12 table-->
        			</div>
        			<div class="row">
		    			<div class="col-md-12 total">
		        			<h4><a class="comprar" onclick="comprar()">simulaci&oacute;n de compra</a></h4>
		    				<h4>TOTAL: $ <span id="total">0</span></h4>
		    			</div>
        			</div><!-- row botoon comprar-->
        		</div><!-- row precios seleccionables-->
        		
        		<div class="row">
        			<div class="col-md-12 total">
	        			<hr>
					    <?php  $_smarty_tpl->tpl_vars['plano'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plano']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plano']->key => $_smarty_tpl->tpl_vars['plano']->value) {
$_smarty_tpl->tpl_vars['plano']->_loop = true;
?>
							<div class="planos">
								<a class="fancybox" data-fancybox-group="planos" href="<?php echo $_smarty_tpl->tpl_vars['planos_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['plano']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['casa']->value->nombre;?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['planos_dir']->value;?>
thumb/<?php echo $_smarty_tpl->tpl_vars['plano']->value;?>
" alt="" />
								</a>
							</div>
						<?php } ?>
					</div>
        		</div>
        	</div><!--md9 gral-->
        	<div class="col-md-1">
        	</div>
		</div><!--row gral-->
	</body>
</html><?php }} ?>
