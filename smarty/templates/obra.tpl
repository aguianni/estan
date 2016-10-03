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
	  	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
		
		<script src="js/jquery-2.1.4.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.js"></script>


		<script type="text/javascript">
			var tipo = {$casa->tipo->id} - 1;
			var casa = "{$casa->nombre}";
			var casaId = "{$casa->id}";
		{literal}
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

		{/literal}
		</script>
		
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-qjblZjMfBX0pIZ83wEML6wDRFAHWoCw&callback=initMap"></script>
	</head>
  	<body>
  		{include file="nav_bar.tpl"}
    	
    	<div class="row">
			{foreach from=$sliders item=slider name=slider}
				{if $smarty.foreach.slider.first}
		    		<div class="header-photo" class="col-md-12">
			    		<img src="{$slider}" alt="Arquitectos Posadas Misiones">
			    	</div>
		    	{/if}
	    	{/foreach}
    	</div>

		<div class="row casa">
			<div class="col-md-2 col-md-offset-1">
	        	{include file="side_bar.tpl"}
	        	<div id="map" class="map"></div>
        	</div>
        	<div class="col-md-7">
        		<div class="row">
        			<div class="col-md-12">
        				<h3 class="azul">{$casa->nombre}</h3>
        			</div>
        		</div>
        		<div class="row galeria">
	        		{assign var="siz" value={$imagenes|@sizeof}}
        			<div class="col-md-12 scroll">
				    	<div style="width:{$siz * 230}px">
					    	{foreach from=$imagenes item=imagen name=imagen}
					    		<a class="fancybox" data-fancybox-group="imagenes" href="{$imagenes_dir}{$imagen}" title="{$casa->nombre}">
									<img src="{$imagenes_dir}thumb/{$imagen}" alt="" />
								</a>
					    	{/foreach}
				    	</div>
				    </div>
        		</div>
        		<div class="row descripcion">
        			<p class="lead">{$casa->descripcion}</p>
        		</div>
        	</div><!-- md9-->
        	<div class="col-md-1">
        	</div>
		</div><!-- row casa-->
	</body>
</html>