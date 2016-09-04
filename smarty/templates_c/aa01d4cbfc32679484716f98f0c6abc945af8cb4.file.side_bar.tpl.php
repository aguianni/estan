<?php /* Smarty version Smarty-3.1.16, created on 2016-08-22 19:32:47
         compiled from "smarty\templates\side_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312705658ca6a64eab4-83929990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa01d4cbfc32679484716f98f0c6abc945af8cb4' => 
    array (
      0 => 'smarty\\templates\\side_bar.tpl',
      1 => 1471905159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312705658ca6a64eab4-83929990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5658ca6a6567b0_26957911',
  'variables' => 
  array (
    'menuTipo' => 0,
    'casas1p' => 0,
    'casa1p' => 0,
    'casas2p' => 0,
    'casa2p' => 0,
    'duplex' => 0,
    'duplexvar' => 0,
    'edificios' => 0,
    'edificio' => 0,
    'ampliaciones' => 0,
    'ampliacion' => 0,
    'cabanas' => 0,
    'cabana' => 0,
    'obras' => 0,
    'obra' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5658ca6a6567b0_26957911')) {function content_5658ca6a6567b0_26957911($_smarty_tpl) {?><div id="main-side-bar">
	<div class="list-group panel">
		<a href="#catalogo" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#main-side-bar">
			ESTANDARQ CATALOGO
		</a>
		<div class="collapse <?php if ($_smarty_tpl->tpl_vars['menuTipo']->value==1||$_smarty_tpl->tpl_vars['menuTipo']->value==2||$_smarty_tpl->tpl_vars['menuTipo']->value==3||$_smarty_tpl->tpl_vars['menuTipo']->value==4||$_smarty_tpl->tpl_vars['menuTipo']->value==6) {?>in<?php }?>" id="catalogo">
			<a href="#casas" class="list-group-item" data-toggle="collapse" data-parent="#casas">
				CASAS <i class="fa fa-caret-down"></i>
			</a>
	        <div class="collapse list-group-submenu <?php if ($_smarty_tpl->tpl_vars['menuTipo']->value==1||$_smarty_tpl->tpl_vars['menuTipo']->value==2) {?>in<?php }?>" id="casas">
				
				<a href="#casas1p" class="list-group-item" data-toggle="collapse" data-parent="#casas1p">
					1 PLANTA <i class="fa fa-caret-down"></i>
				</a>
		        <div class="collapse list-group-submenu <?php if ($_smarty_tpl->tpl_vars['menuTipo']->value==1) {?>in<?php }?>" id="casas1p">
					<a class="list-group-item" data-parent="#casas1p" href="catalogo.php?tipo=1">
	     				<b>VER TODAS</b>
		     		</a>
	      			<?php  $_smarty_tpl->tpl_vars['casa1p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['casa1p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['casas1p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['casa1p']->key => $_smarty_tpl->tpl_vars['casa1p']->value) {
$_smarty_tpl->tpl_vars['casa1p']->_loop = true;
?>
			     		<a class="list-group-item" data-parent="#casas1p" href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['casa1p']->value->id;?>
">
			     			<img alt="casa" src="<?php echo $_smarty_tpl->tpl_vars['casa1p']->value->carpeta_imagenes;?>
home/1.jpg" /><?php echo $_smarty_tpl->tpl_vars['casa1p']->value->nombre;?>

			     		</a>		     		
			     	<?php } ?>
		        </div>
		        
				<a href="#casas2p" class="list-group-item" data-toggle="collapse" data-parent="#casas2p">
					2 PLANTAS <i class="fa fa-caret-down"></i>
				</a>
		        <div class="collapse list-group-submenu <?php if ($_smarty_tpl->tpl_vars['menuTipo']->value==2) {?>in<?php }?>" id="casas2p">
					<a class="list-group-item" data-parent="#casas2p" href="catalogo.php?tipo=2">
	     				<b>VER TODAS</b>
		     		</a>
	      			<?php  $_smarty_tpl->tpl_vars['casa2p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['casa2p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['casas2p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['casa2p']->key => $_smarty_tpl->tpl_vars['casa2p']->value) {
$_smarty_tpl->tpl_vars['casa2p']->_loop = true;
?>
			     		<a class="list-group-item" data-parent="#casas2p" href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['casa2p']->value->id;?>
">
			     			<img alt="casa" src="<?php echo $_smarty_tpl->tpl_vars['casa2p']->value->carpeta_imagenes;?>
home/1.jpg" /><?php echo $_smarty_tpl->tpl_vars['casa2p']->value->nombre;?>

			     		</a>		     		
			     	<?php } ?>
		        </div>	          
		        
	        </div><!-- casas -->
	        
	        <a href="#inverciones" class="list-group-item" data-toggle="collapse" data-parent="#inverciones">
				INVERCIONES <i class="fa fa-caret-down"></i>
			</a>
	        <div class="collapse list-group-submenu <?php if ($_smarty_tpl->tpl_vars['menuTipo']->value==3||$_smarty_tpl->tpl_vars['menuTipo']->value==4) {?>in<?php }?>" id="inverciones">
				
				<a href="#duplex" class="list-group-item" data-toggle="collapse" data-parent="#duplex">
					DUPLEX <i class="fa fa-caret-down"></i>
				</a>
		        <div class="collapse list-group-submenu <?php if ($_smarty_tpl->tpl_vars['menuTipo']->value==3) {?>in<?php }?>" id="duplex">
					<a class="list-group-item" data-parent="#duplex" href="catalogo.php?tipo=3">
	     				<b>VER TODOS</b>
		     		</a>
	      			<?php  $_smarty_tpl->tpl_vars['duplexvar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['duplexvar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['duplex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['duplexvar']->key => $_smarty_tpl->tpl_vars['duplexvar']->value) {
$_smarty_tpl->tpl_vars['duplexvar']->_loop = true;
?>
			     		<a class="list-group-item" data-parent="#duplex" href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['duplexvar']->value->id;?>
">
			     			<img alt="duplex" src="<?php echo $_smarty_tpl->tpl_vars['duplexvar']->value->carpeta_imagenes;?>
home/1.jpg" /><?php echo $_smarty_tpl->tpl_vars['duplexvar']->value->nombre;?>

			     		</a>
			     	<?php } ?>
		        </div>
		        
				<a href="#edificios" class="list-group-item" data-toggle="collapse" data-parent="#edificios">
					EDIFICIOS <i class="fa fa-caret-down"></i>
				</a>
		        <div class="collapse list-group-submenu <?php if ($_smarty_tpl->tpl_vars['menuTipo']->value==4) {?>in<?php }?>" id="edificios">
					<a class="list-group-item" data-parent="#edificios" href="catalogo.php?tipo=4">
	     				<b>VER TODAS</b>
		     		</a>
	      			<?php  $_smarty_tpl->tpl_vars['edificio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['edificio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['edificios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['edificio']->key => $_smarty_tpl->tpl_vars['edificio']->value) {
$_smarty_tpl->tpl_vars['edificio']->_loop = true;
?>
			     		<a class="list-group-item" data-parent="#edificios" href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['edificio']->value->id;?>
">
			     			<img alt="edificios" src="<?php echo $_smarty_tpl->tpl_vars['edificio']->value->carpeta_imagenes;?>
home/1.jpg" /><?php echo $_smarty_tpl->tpl_vars['edificio']->value->nombre;?>

			     		</a>
			     	<?php } ?>
		        </div>
		        
	        </div><!-- inverciones -->

	        <a href="#ampliaciones" class="list-group-item" data-toggle="collapse" data-parent="#ampliaciones">
				AMPLIACIONES <i class="fa fa-caret-down"></i>
			</a>
	        <div class="collapse list-group-submenu <?php if ($_smarty_tpl->tpl_vars['menuTipo']->value==6) {?>in<?php }?>" id="ampliaciones">

				<a class="list-group-item" data-parent="#turismo" href="catalogo.php?tipo=6">
     				<b>VER TODAS</b>
	     		</a>
				<?php  $_smarty_tpl->tpl_vars['ampliacion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ampliacion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ampliaciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ampliacion']->key => $_smarty_tpl->tpl_vars['ampliacion']->value) {
$_smarty_tpl->tpl_vars['ampliacion']->_loop = true;
?>
		     		<a class="list-group-item" data-parent="#ampliaciones" href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['ampliacion']->value->id;?>
">
		     			<img alt="ampliaciones" src="<?php echo $_smarty_tpl->tpl_vars['ampliacion']->value->carpeta_imagenes;?>
home/1.jpg" /><?php echo $_smarty_tpl->tpl_vars['ampliacion']->value->nombre;?>

		     		</a>
		     	<?php } ?>
		        
	        </div><!-- ampliaciones -->
	        
		</div><!-- catalogo -->
		<a href="#productos" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#main-side-bar">
			ESTANDARQ  PRODUCTOS
		</a>
		<div class="collapse <?php if ($_smarty_tpl->tpl_vars['menuTipo']->value==5) {?>in<?php }?>" id="productos">
			<a href="#turismo" class="list-group-item" data-toggle="collapse" data-parent="#turismo">
				CABA&Ntilde;AS <i class="fa fa-caret-down"></i>
			</a>
	        <div class="collapse list-group-submenu <?php if ($_smarty_tpl->tpl_vars['menuTipo']->value==5) {?>in<?php }?>" id="turismo">
				<a class="list-group-item" data-parent="#turismo" href="catalogo.php?tipo=5">
     				<b>VER TODAS</b>
	     		</a>
      			<?php  $_smarty_tpl->tpl_vars['cabana'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cabana']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabanas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cabana']->key => $_smarty_tpl->tpl_vars['cabana']->value) {
$_smarty_tpl->tpl_vars['cabana']->_loop = true;
?>
		     		<a class="list-group-item" data-parent="#turismo" href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['cabana']->value->id;?>
">
		     			<img alt="turismo" src="<?php echo $_smarty_tpl->tpl_vars['cabana']->value->carpeta_imagenes;?>
home/1.jpg" /><?php echo $_smarty_tpl->tpl_vars['cabana']->value->nombre;?>

		     		</a>
		     	<?php } ?>
	        </div>
		</div>	
		<a href="#oyp" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#main-side-bar">
			OBRAS y PROYECTOS
		</a>
		<div class="collapse <?php if ($_smarty_tpl->tpl_vars['menuTipo']->value==7||$_smarty_tpl->tpl_vars['menuTipo']->value==8) {?>in<?php }?>" id="oyp">
			<a href="#obras" class="list-group-item" data-toggle="collapse" data-parent="#obras">
      			OBRAS <i class="fa fa-caret-down"></i>
      		</a>
      		<div class="collapse list-group-submenu <?php if ($_smarty_tpl->tpl_vars['menuTipo']->value==7) {?>in<?php }?>" id="obras">
      			<a class="list-group-item" data-parent="#1planta" href="catalogo-obras.php?tipo=7">
	     			<b>VER TODAS</b>
	     		</a>
      			<?php  $_smarty_tpl->tpl_vars['obra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['obra']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['obras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['obra']->key => $_smarty_tpl->tpl_vars['obra']->value) {
$_smarty_tpl->tpl_vars['obra']->_loop = true;
?>
		     		<a class="list-group-item" data-parent="#obras" href="obra.php?casa=<?php echo $_smarty_tpl->tpl_vars['obra']->value->id;?>
">
		     			<img alt="casa" src="<?php echo $_smarty_tpl->tpl_vars['obra']->value->carpeta_imagenes;?>
home/1.jpg" /><?php echo $_smarty_tpl->tpl_vars['obra']->value->nombre;?>

		     		</a>		     		
		     	<?php } ?>
      		</div>
		</div>	
	</div>
</div><?php }} ?>
