<?php /* Smarty version Smarty-3.1.16, created on 2016-08-20 19:18:12
         compiled from "smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1461152d721c2b80373-66501943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b389985f94f94bc42e54c5354e6f94774adfbf04' => 
    array (
      0 => 'smarty\\templates\\index.tpl',
      1 => 1471731489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1461152d721c2b80373-66501943',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d721c2c532a1_91342189',
  'variables' => 
  array (
    'obra1' => 0,
    'obra2' => 0,
    'obra3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d721c2c532a1_91342189')) {function content_52d721c2c532a1_91342189($_smarty_tpl) {?><!DOCTYPE html>
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
	  		  			
		<script src="js/jquery-2.1.4.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script>
		
			function changeImg(obj, src){
				obj.src = src;			
			}
		
		</script>
	</head>
  	<body>
  		<?php echo $_smarty_tpl->getSubTemplate ("nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	
		<?php echo $_smarty_tpl->getSubTemplate ("carousel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	

		<div class="container marketing home">
		
	      	<!-- Three columns of text below the carousel -->
	      	<div class="row icon-buttons">
	        	<div class="col-md-9 col-md-offset-3">
					<a href="catalogo.php?tipo=1">
						ESTANDARQ CATALOGO
					</a>
	        		<a href="catalogo.php?tipo=5">
						ESTANDARQ PRODUCTOS
					</a>
		        	<a href="catalogo-obras.php?tipo=7">
						OBRAS Y PROYECTOS
					</a>
				</div>
      		</div>


      		<!-- START THE FEATURETTES -->
			<div class="separador row"></div>
			
			<div class="row featurette">
				<div class="col-md-10 col-md-offset-2">
	      			<h4>Obra destacada</h4>
				</div>
			</div>
      		<div class="row featurette">
				<div class="col-md-3 col-md-offset-2">
    				<div class="thumbnail">
      					<a href="obra.php?casa=<?php echo $_smarty_tpl->tpl_vars['obra1']->value->id;?>
">
      						<img src="<?php echo $_smarty_tpl->tpl_vars['obra1']->value->carpeta_imagenes;?>
home/1.jpg"  onmouseover="changeImg(this, '<?php echo $_smarty_tpl->tpl_vars['obra1']->value->carpeta_imagenes;?>
home/f1.jpg')" onmouseout="changeImg(this, '<?php echo $_smarty_tpl->tpl_vars['obra1']->value->carpeta_imagenes;?>
home/1.jpg')" alt="catalogo">
      					</a>
      					<a href="obra.php?casa=<?php echo $_smarty_tpl->tpl_vars['obra1']->value->id;?>
"><h4><?php echo $_smarty_tpl->tpl_vars['obra1']->value->nombre;?>
</h4></a>      					
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="thumbnail">
      					<a href="obra.php?casa=<?php echo $_smarty_tpl->tpl_vars['obra2']->value->id;?>
">
      						<img src="<?php echo $_smarty_tpl->tpl_vars['obra2']->value->carpeta_imagenes;?>
home/1.jpg"  onmouseover="changeImg(this, '<?php echo $_smarty_tpl->tpl_vars['obra2']->value->carpeta_imagenes;?>
home/f1.jpg')" onmouseout="changeImg(this, '<?php echo $_smarty_tpl->tpl_vars['obra2']->value->carpeta_imagenes;?>
home/1.jpg')" alt="catalogo">
      					</a>
	       	 			<a href="obra.php?casa=<?php echo $_smarty_tpl->tpl_vars['obra2']->value->id;?>
"><h4><?php echo $_smarty_tpl->tpl_vars['obra2']->value->nombre;?>
</h4></a>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="thumbnail">
      					<a href="obra.php?casa=<?php echo $_smarty_tpl->tpl_vars['obra3']->value->id;?>
">
      						<img src="<?php echo $_smarty_tpl->tpl_vars['obra3']->value->carpeta_imagenes;?>
home/1.jpg"  onmouseover="changeImg(this, '<?php echo $_smarty_tpl->tpl_vars['obra3']->value->carpeta_imagenes;?>
home/f1.jpg')" onmouseout="changeImg(this, '<?php echo $_smarty_tpl->tpl_vars['obra3']->value->carpeta_imagenes;?>
home/1.jpg')" alt="catalogo">
      					</a>
      					<a href="obra.php?casa=<?php echo $_smarty_tpl->tpl_vars['obra3']->value->id;?>
"><h4><?php echo $_smarty_tpl->tpl_vars['obra3']->value->nombre;?>
</h4></a>
    				</div>
  				</div>
      		</div>

      		<div class="separador row"></div>
			<hr/>
      		<!-- /END THE FEATURETTES -->

      		<!-- FOOTER -->
			<footer>
				<a href="http://qr.afip.gob.ar/?qr=DKNU8suqoVNRyyNQkQp8EQ,,"target="_blank">
          			<img src="http://www.afip.gob.ar/images/f960/DATAWEB.jpg" width="62" height="85" class="datafiscal" alt="afip">
          		</a>
	      	</footer>

		</div><!-- /.container -->
	</body>
</html><?php }} ?>
