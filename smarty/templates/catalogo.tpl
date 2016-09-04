<!DOCTYPE html>
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
	
	</head>
  	<body>
  		{include file="nav_bar.tpl"}
    	
		{include file="carousel.tpl"}

		<div class="container-fluid">			
			<div class="row catalogo">
			
				<div class="col-md-2 col-md-offset-1">
	        		{include file="side_bar.tpl"}
	        	</div>
				<div class="col-md-6">
				{foreach name=casas from=$casas item=casa}
				
					{if ($smarty.foreach.casas.iteration - 1) % 2 == 0}
						<div class="row">
					{/if}
				  			<div class="col-md-6">
			    				<div class="thumbnail">
			      					<a href="obra.php?casa={$casa->id}">
			      						<img src="{$casa->carpeta_imagenes}home/1.jpg"  onmouseover="changeImg(this, '{$casa->carpeta_imagenes}home/f1.jpg')" onmouseout="changeImg(this, '{$casa->carpeta_imagenes}home/1.jpg')" alt="catalogo">
			      					</a>
			      					<a href="obra.php?casa={$casa->id}"><h4>{$casa->nombre}</h4></a>
			    				</div>	  				
			  				</div>
			  		{if ($smarty.foreach.casas.iteration - 1) % 2 != 0}
						</div>
					{/if}
	  			{/foreach}
	  			</div>
	  			<div class="col-md-2"></div>	  			
			</div>
      		

      		<!-- FOOTER -->
			<footer>
	      		<p class="pull-right"><a href="#">Back to top</a></p>
	        	<p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
	      	</footer>

		</div><!-- /.container -->
	</body>
</html>