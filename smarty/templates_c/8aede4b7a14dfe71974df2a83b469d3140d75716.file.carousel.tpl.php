<?php /* Smarty version Smarty-3.1.16, created on 2015-11-27 18:24:22
         compiled from "smarty\templates\carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143885658ca0646f445-96337013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aede4b7a14dfe71974df2a83b469d3140d75716' => 
    array (
      0 => 'smarty\\templates\\carousel.tpl',
      1 => 1448659440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143885658ca0646f445-96337013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5658ca064732c3_36321908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5658ca064732c3_36321908')) {function content_5658ca064732c3_36321908($_smarty_tpl) {?><div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
  	<ol class="carousel-indicators">
    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    	<li data-target="#myCarousel" data-slide-to="1"></li>
    	<li data-target="#myCarousel" data-slide-to="2"></li>
  	</ol>
  	<div class="carousel-inner" role="listbox">
    	<div class="item active">
    		<img src="images/1.jpg" alt="Arquitectos Posadas Misiones">
    	</div>
    	<div class="item">
    		<img src="images/2.jpg" alt="Arquitectos Posadas Misiones">
    	</div>
    	<div class="item">
    		<img src="images/3.jpg" alt="Arquitectos Posadas Misiones">
    	</div>
  	</div>
  	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  	</a>
  	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
 	 </a>
</div><?php }} ?>
