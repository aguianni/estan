<?php /* Smarty version Smarty-3.1.16, created on 2015-11-27 21:38:21
         compiled from "smarty\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:313405658f77d71daf6-86944995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9652aca521fe5d2f352c6744a89492c955c5006' => 
    array (
      0 => 'smarty\\templates\\menu.tpl',
      1 => 1448117532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313405658f77d71daf6-86944995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'casas1p' => 0,
    'casa1p' => 0,
    'menuCasaId' => 0,
    'casas2p' => 0,
    'casa2p' => 0,
    'duplex' => 0,
    'duplexvar' => 0,
    'edificios' => 0,
    'edificio' => 0,
    'cabanas' => 0,
    'cabana' => 0,
    'ampliaciones' => 0,
    'ampliacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5658f77da27121_31343263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5658f77da27121_31343263')) {function content_5658f77da27121_31343263($_smarty_tpl) {?><div id="acordeon">
	<p>CASAS</p>
  	<h3>1 PLANTA</h3>
    <ul>
     	<?php  $_smarty_tpl->tpl_vars['casa1p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['casa1p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['casas1p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['casa1p']->key => $_smarty_tpl->tpl_vars['casa1p']->value) {
$_smarty_tpl->tpl_vars['casa1p']->_loop = true;
?>
     		<li <?php if ($_smarty_tpl->tpl_vars['casa1p']->value->id==$_smarty_tpl->tpl_vars['menuCasaId']->value) {?>class="selected"<?php }?>><a href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['casa1p']->value->id;?>
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
			<li <?php if ($_smarty_tpl->tpl_vars['casa2p']->value->id==$_smarty_tpl->tpl_vars['menuCasaId']->value) {?>class="selected"<?php }?>><a href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['casa2p']->value->id;?>
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
     		<li <?php if ($_smarty_tpl->tpl_vars['duplexvar']->value->id==$_smarty_tpl->tpl_vars['menuCasaId']->value) {?>class="selected"<?php }?>><a href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['duplexvar']->value->id;?>
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
     		<li <?php if ($_smarty_tpl->tpl_vars['edificio']->value->id==$_smarty_tpl->tpl_vars['menuCasaId']->value) {?>class="selected"<?php }?>><a href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['edificio']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['edificio']->value->nombre;?>
</a></li>
     	<?php } ?>
	</ul>
	<h3>TURISMO</h3>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['cabana'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cabana']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabanas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cabana']->key => $_smarty_tpl->tpl_vars['cabana']->value) {
$_smarty_tpl->tpl_vars['cabana']->_loop = true;
?>
     		<li <?php if ($_smarty_tpl->tpl_vars['cabana']->value->id==$_smarty_tpl->tpl_vars['menuCasaId']->value) {?>class="selected"<?php }?>><a href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['cabana']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['cabana']->value->nombre;?>
</a></li>
     	<?php } ?>
	</ul>
	<p>AMPLIACIONES</p>
	<h3>AMPLIACIONES</h3>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['ampliacion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ampliacion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ampliaciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ampliacion']->key => $_smarty_tpl->tpl_vars['ampliacion']->value) {
$_smarty_tpl->tpl_vars['ampliacion']->_loop = true;
?>
     		<li <?php if ($_smarty_tpl->tpl_vars['ampliacion']->value->id==$_smarty_tpl->tpl_vars['menuCasaId']->value) {?>class="selected"<?php }?>><a href="casa.php?casa=<?php echo $_smarty_tpl->tpl_vars['ampliacion']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['ampliacion']->value->nombre;?>
</a></li>
     	<?php } ?>
	</ul>
</div><?php }} ?>
