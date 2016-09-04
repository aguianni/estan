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
		
		<script src="js/jquery-2.1.4.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	
	</head>
  	<body>
  		{include file="nav_bar.tpl"}
    	
		{include file="carousel.tpl"}
    	

		<div class="container marketing">
		
	      	<div class="row featurette">
        		<div class="col-md-9 col-md-push-3" id="sobre_nosotros">
	          		<h2>FORMULARIO DE COMPRA A ESTAND<span class="text-muted azul">ARQ.</span></h2>
	          		<form method="post" action="sendMailCompra.php">
				        <h4 class="azul"><strong>1. Datos personales:</strong></h4>
				        <div>
					        <span>Nombre y apellido (*): </span>
					        <br>				          	
				          	<input type="text" class="formulariocompra" name="nombre" required>
				        </div>
				        <div>
				        	<span>Email (*):</span><br>
				          	<input type="text" class="formulariocompra" name="email" required>
				        </div>
				        <div>
				        	<span>Teléfono:</span><br>
				          	<input type="text" class="formulariocompra" name="telefono" required>
				        </div>
				        <div>
				        	<span>Dirección: </span><br>
				          	<input type="text" class="formulariocompra" name="direccion">
				        </div>
				        <div>
				        	<span>Localidad,  Provincia: </span><br>
				          	<input type="text" class="formulariocompra" name="localidad" required>
				        </div>
				        <h2 class="azul"><strong>2. Interes</strong></h2>
				        <p>¿Qué es lo que me interesa de Estandarq?</p>
				        <div>
				        	<span>Consulta</span><br>
				          	<input type="checkbox" name="consulta">
				        </div>
				        <div>
				        	<span>Asesoramiento</span><br>
				          	<input type="checkbox" name="asesoramiento">
				        </div>
				        <div>
				        	<span>Entrevista<span><br>
				          	<input type="checkbox" name="entrevista">
				        </div>
				        <div>
				        	<span>Compra del Proyecto de interés</span><br>
				          	<input type="checkbox" name="compra">
				        </div>
				        <div>
				          	<span>Consultas y/o comentarios:</span><br>
				          	<textarea name="comentarios" class="formulariocompra2"></textarea>
				        </div>
				        <h2>3. Contacto:</h2>
				        <p>¿ Dónde nos podemos reunir?</p>
				        <div>
				        	<span>Reunión en las oficinas de Estandarq<span><br>
				          	<input type="checkbox" name="reunion-oficina">
				        </div>
				        <div>
				        	<span>Reunión en el terreno</span><br>
				          	<input type="checkbox" name="reunion-terreno">
				        </div>
				        <h2>4. Datos del terreno</h2>
				        <div>
				        	<span>Dirección: </span><br>
				          	<input name="direccion-terreno" type="text" class="formulariocompra">
				        </div>
				        <div>
				        	<span>Localidad,  Provincia:<span><br>
				          	<input name="localidad-terreno" type="text" class="formulariocompra">
				        </div>
				       	<div>
				        	<span>Dimensiones:</span><br>
				          	<input name="dimensiones" type="text" class="formulariocompra">
				        </div>
				        <div>
				          	<button type="submit" class="enviar">Enviar</button>
				        </div>
				        <p>*campos  obligatorios</p>
				        <p>O escribanos a  <span class="azul">info@estandarq.com.ar </span></p>
				      </form>
        		</div>
        		<div class="col-md-1 col-md-pull-9">
          			<img class="featurette-image center-block" src="images/publicidades.jpg" alt="sobre nosotros">
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
</html>