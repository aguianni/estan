<?php /* Smarty version Smarty-3.1.16, created on 2016-08-22 19:59:35
         compiled from "smarty\templates\catalogo-obras.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17076575d7263e50397-26302098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '789374c148f69e42a38e9f94a6a34386655b2b11' => 
    array (
      0 => 'smarty\\templates\\catalogo-obras.tpl',
      1 => 1471906767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17076575d7263e50397-26302098',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_575d7264129103_72183195',
  'variables' => 
  array (
    'casas' => 0,
    'casa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575d7264129103_72183195')) {function content_575d7264129103_72183195($_smarty_tpl) {?><!DOCTYPE html>
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


		<div class="container-fluid">			
			<div class="row catalogo">
				<div class="col-md-2 col-md-offset-1">
	        		<?php echo $_smarty_tpl->getSubTemplate ("side_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	        	</div>
				<div class="col-md-6">
					<?php  $_smarty_tpl->tpl_vars['casa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['casa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['casas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['casas']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['casa']->key => $_smarty_tpl->tpl_vars['casa']->value) {
$_smarty_tpl->tpl_vars['casa']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['casas']['iteration']++;
?>
				
						<?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['casas']['iteration']-1)%2==0) {?>
							<div class="row">
						<?php }?>
					  			<div class="col-md-6">
				    				<div class="thumbnail">
				      					<a href="obra.php?casa=<?php echo $_smarty_tpl->tpl_vars['casa']->value->id;?>
">
				      						<img src="<?php echo $_smarty_tpl->tpl_vars['casa']->value->carpeta_imagenes;?>
home/1.jpg"  onmouseover="changeImg(this, '<?php echo $_smarty_tpl->tpl_vars['casa']->value->carpeta_imagenes;?>
home/f1.jpg')" onmouseout="changeImg(this, '<?php echo $_smarty_tpl->tpl_vars['casa']->value->carpeta_imagenes;?>
home/1.jpg')" alt="catalogo">
				      					</a>
				      					<a href="obra.php?casa=<?php echo $_smarty_tpl->tpl_vars['casa']->value->id;?>
"><h4><?php echo $_smarty_tpl->tpl_vars['casa']->value->nombre;?>
</h4></a>
				    				</div>	  				
				  				</div>
				  		<?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['casas']['iteration']-1)%2!=0) {?>
							</div>
						<?php }?>
		  			<?php } ?>
	  			</div>
	  			<div class="col-md-2"></div>	  			
			</div>
		</div><!-- /.container -->
	</body>
</html><?php }} ?>
