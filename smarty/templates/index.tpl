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
		<script>
		{literal}
			function changeImg(obj, src){
				obj.src = src;			
			}
		{/literal}
		</script>
	</head>
  	<body>
  		{include file="nav_bar.tpl"}
    	
		{include file="carousel.tpl"}
    	

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
				<div class="col-md-12">
	      			<h4>Obra destacada</h4>
				</div>
			</div>
      		<div class="row featurette">
				<div class="col-md-4">
    				<div class="thumbnail">
      					<a href="obra.php?casa={$obra1->id}">
      						<img src="{$obra1->carpeta_imagenes}home/1.jpg"  onmouseover="changeImg(this, '{$obra1->carpeta_imagenes}home/f1.jpg')" onmouseout="changeImg(this, '{$obra1->carpeta_imagenes}home/1.jpg')" alt="catalogo">
      					</a>
      					<a href="obra.php?casa={$obra1->id}"><h4>{$obra1->nombre}</h4></a>      					
    				</div>
  				</div>
  				<div class="col-md-4">
    				<div class="thumbnail">
      					<a href="obra.php?casa={$obra2->id}">
      						<img src="{$obra2->carpeta_imagenes}home/1.jpg"  onmouseover="changeImg(this, '{$obra2->carpeta_imagenes}home/f1.jpg')" onmouseout="changeImg(this, '{$obra2->carpeta_imagenes}home/1.jpg')" alt="catalogo">
      					</a>
	       	 			<a href="obra.php?casa={$obra2->id}"><h4>{$obra2->nombre}</h4></a>
    				</div>
  				</div>
  				<div class="col-md-4">
    				<div class="thumbnail">
      					<a href="obra.php?casa={$obra3->id}">
      						<img src="{$obra3->carpeta_imagenes}home/1.jpg"  onmouseover="changeImg(this, '{$obra3->carpeta_imagenes}home/f1.jpg')" onmouseout="changeImg(this, '{$obra3->carpeta_imagenes}home/1.jpg')" alt="catalogo">
      					</a>
      					<a href="obra.php?casa={$obra3->id}"><h4>{$obra3->nombre}</h4></a>
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
</html>