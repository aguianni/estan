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
			
			{literal}
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
				
			{/literal}	
		</script>
	</head>
  	<body>
  		{include file="nav_bar.tpl"}
    	
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
		  	<ol class="carousel-indicators">
		    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    	<li data-target="#myCarousel" data-slide-to="1"></li>
		    	<li data-target="#myCarousel" data-slide-to="2"></li>
		  	</ol>
		  	<div class="carousel-inner" role="listbox">
		  		{foreach from=$sliders item=slider name=slider}
		    		<div class="item {if $smarty.foreach.slider.first}active{/if}">
			    		<img src="{$slider}" alt="Arquitectos Posadas Misiones">
			    	</div>
		    	{/foreach}
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
	        	{include file="side_bar.tpl"}
        	</div><!-- side bar md 2-->
        	<div class="col-md-7">
        		<div class="row">
        			
        			<div class="col-md-8">
						<h3 class="azul">{$casa->nombre}</h3>
						<img src="{$imagenes_dir}{$imagenes[0]}" class="fotogrande">
					</div><!-- md 8 foto grande casa-->
					
					<div class="col-md-4 prototipo">
						<h3 class="azul">Datos del prototipo</h3>
						{assign var="datosJPG" value="{$casa->carpeta_imagenes}datos.jpg"}
						{if file_exists($datosJPG)}
							<img src="{$casa->carpeta_imagenes}datos.jpg" alt="{$casa->nombre}">
						{else}
							<p>Plantas: <span class="form-compra-derecha">{$casa->plantas}</span></p>
			        		{if $casa->tipo->nombre == "edificio"}
			        			<p>N&ordm; de departamentos: <span class="form-compra-derecha">{$casa->dormitorios}</span></p>
			        			<p>N&ordm; de locales comerciales: <span class="form-compra-derecha">{$casa->banos}</span></p>
			        		{else}
				        		<p>N&ordm; de dormitorios: <span class="form-compra-derecha">{$casa->dormitorios}</span></p>
				        		<p>N&ordm; de ba&ntilde;os: <span class="form-compra-derecha">{$casa->banos}</span></p>
			        		{/if}
			                
			        		<p>Veh&iacute;culos: <span class="form-compra-derecha">{$casa->vehiculos}</span></p>
			        		<p>Frente del terreno: <span class="form-compra-derecha">{$casa->frente} m.</span></p>
			        
			        		{if $casa->tipo->nombre != "edificio"}
		        			<p>Sup. Cubierta: <span class="form-compra-derecha">{$casa->cubierta} m2.</span></p>
		        			<p>Sup. Semicubierta: <span class="form-compra-derecha">{$casa->semicubierta} m2</span></p>
			        		{/if}
		        
		        			<p>SUP. TOTAL: <span class="form-compra-derecha">{$casa->total} m2.</span></p>
						{/if}
					</div><!-- md 4 datos casa-->
					
        		</div><!-- row casa datos-->
        		<div class="row">
	        		<div class="col-md-12">
	        			<div class="galeria">
					    	{foreach from=$imagenes item=imagen name=imagen}
					    		<a class="fancybox" data-fancybox-group="imagenes" href="{$imagenes_dir}{$imagen}" title="{$casa->nombre}">
									<img src="{$imagenes_dir}thumb/{$imagen}" alt="" />
								</a>
					    	{/foreach}
					    </div><!-- galeria foto-->
					    <div id="galeria">
					    	{foreach from=$videos item=video name=video}
					    		<video controls>
								  	<source src="{$video}" type="video/mp4" />
								</video>
								
					    	{/foreach}
					    </div><!-- galeria videos-->
					</div><!-- md 12 galeria-->	   
        		</div><!-- row galeria-->
        		
        		<div class="row">
        			<div class="col-md-12 descripcion">
        				<p class="lead">{$casa->descripcion}</p>
        			</div>
        		</div><!-- descripcion-->
        		
        		<div class="row">
        			<div class="col-md-12 etapas">
        				<hr>
	        			<p>Si desea consultar el costo de la vivienda, seleccione los &iacute;tems de su inter&eacute;s, presione la opci&oacute;n "simulaci&oacute;n de compra" y a la brevedad nos pondremos en contacto</p>
						<p>* Los precios pueden estar desactualizados y por ende sufrir modificaciones.</p>
						{$etapas}
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
							    	<td><p>Legajo Municipal:			<span>${$casa->legajo_municipal}		<input type="checkbox" value="{$casa->legajo_municipal}"/></span></p></td>
							    	<td><p>Proyecto de  Mobiliario:		<span>${$casa->proyecto_mobiliario}		<input type="checkbox" value="{$casa->proyecto_mobiliario}" /></span></p></td> 
							    	<td><p>Modificacion de  Superficie:	<span>${$casa->modificacion_superficie} <input type="checkbox" value="{$casa->modificacion_superficie}" /></span></p></td>
							  	</tr>
							  	<tr>
							    	<td><p>Proyecto Ejecutivo:				<span>${$casa->proyecto_ejecutivo}			<input type="checkbox" value="{$casa->proyecto_ejecutivo}"/></span></p></td>
							    	<td><p>Proyecto  Paisaj&iacute;stico: 	<span>${$casa->proyecto_paisajistico} 		<input type="checkbox" value="{$casa->proyecto_paisajistico}" /></span></p></td> 
							    	<td><p>Modificacion de  Materialidad: 	<span>${$casa->modificacion_materialidad} 	<input type="checkbox" value="{$casa->modificacion_materialidad}" /></span></p></td>
							  	</tr>
							  	<tr>
							    	<td><p>C&aacute;lculo:					<span>${$casa->computo}						<input type="checkbox" value="{$casa->computo}"/></span></p></td>
							    	<td><p>Proyecto de  Sustentabilidad: 	<span> ${$casa->proyecto_sustentabilidad} 	<input type="checkbox" value="{$casa->proyecto_sustentabilidad}" /></span></p></td> 
							    	<td><p>Modificacion de  Color: 			<span> ${$casa->modificacion_color} 		<input type="checkbox" value="{$casa->modificacion_color}" /></span></p></td>
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
					    {foreach from=$planos item=plano}
							<div class="planos">
								<a class="fancybox" data-fancybox-group="planos" href="{$planos_dir}{$plano}" title="{$casa->nombre}">
									<img src="{$planos_dir}thumb/{$plano}" alt="" />
								</a>
							</div>
						{/foreach}
					</div>
        		</div>
        	</div><!--md9 gral-->
        	<div class="col-md-1">
        	</div>
		</div><!--row gral-->
	</body>
</html>