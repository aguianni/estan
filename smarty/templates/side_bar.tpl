<div id="main-side-bar">
	<div class="list-group panel">
		<a href="#catalogo" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#main-side-bar">
			ESTANDARQ CATALOGO
		</a>
		<div class="collapse {if $menuTipo == 1 || $menuTipo == 2 || $menuTipo == 3 || $menuTipo == 4 || $menuTipo == 6}in{/if}" id="catalogo">
			<a href="#casas" class="list-group-item" data-toggle="collapse" data-parent="#casas">
				CASAS <i class="fa fa-caret-down"></i>
			</a>
	        <div class="collapse list-group-submenu {if $menuTipo == 1 || $menuTipo == 2}in{/if}" id="casas">
				
				<a href="#casas1p" class="list-group-item" data-toggle="collapse" data-parent="#casas1p">
					1 PLANTA <i class="fa fa-caret-down"></i>
				</a>
		        <div class="collapse list-group-submenu {if $menuTipo == 1}in{/if}" id="casas1p">
					<a class="list-group-item" data-parent="#casas1p" href="catalogo.php?tipo=1">
	     				<b>VER TODAS</b>
		     		</a>
	      			{foreach from=$casas1p item=casa1p}
			     		<a class="list-group-item" data-parent="#casas1p" href="casa.php?casa={$casa1p->id}">
			     			<img alt="casa" src="{$casa1p->carpeta_imagenes}home/1.jpg" />{$casa1p->nombre}
			     		</a>		     		
			     	{/foreach}
		        </div>
		        
				<a href="#casas2p" class="list-group-item" data-toggle="collapse" data-parent="#casas2p">
					2 PLANTAS <i class="fa fa-caret-down"></i>
				</a>
		        <div class="collapse list-group-submenu {if $menuTipo == 2}in{/if}" id="casas2p">
					<a class="list-group-item" data-parent="#casas2p" href="catalogo.php?tipo=2">
	     				<b>VER TODAS</b>
		     		</a>
	      			{foreach from=$casas2p item=casa2p}
			     		<a class="list-group-item" data-parent="#casas2p" href="casa.php?casa={$casa2p->id}">
			     			<img alt="casa" src="{$casa2p->carpeta_imagenes}home/1.jpg" />{$casa2p->nombre}
			     		</a>		     		
			     	{/foreach}
		        </div>	          
		        
	        </div><!-- casas -->
	        
	        <a href="#inverciones" class="list-group-item" data-toggle="collapse" data-parent="#inverciones">
				INVERCIONES <i class="fa fa-caret-down"></i>
			</a>
	        <div class="collapse list-group-submenu {if $menuTipo == 3 || $menuTipo == 4}in{/if}" id="inverciones">
				
				<a href="#duplex" class="list-group-item" data-toggle="collapse" data-parent="#duplex">
					DUPLEX <i class="fa fa-caret-down"></i>
				</a>
		        <div class="collapse list-group-submenu {if $menuTipo == 3}in{/if}" id="duplex">
					<a class="list-group-item" data-parent="#duplex" href="catalogo.php?tipo=3">
	     				<b>VER TODOS</b>
		     		</a>
	      			{foreach from=$duplex item=duplexvar}
			     		<a class="list-group-item" data-parent="#duplex" href="casa.php?casa={$duplexvar->id}">
			     			<img alt="duplex" src="{$duplexvar->carpeta_imagenes}home/1.jpg" />{$duplexvar->nombre}
			     		</a>
			     	{/foreach}
		        </div>
		        
				<a href="#edificios" class="list-group-item" data-toggle="collapse" data-parent="#edificios">
					EDIFICIOS <i class="fa fa-caret-down"></i>
				</a>
		        <div class="collapse list-group-submenu {if $menuTipo == 4}in{/if}" id="edificios">
					<a class="list-group-item" data-parent="#edificios" href="catalogo.php?tipo=4">
	     				<b>VER TODAS</b>
		     		</a>
	      			{foreach from=$edificios item=edificio}
			     		<a class="list-group-item" data-parent="#edificios" href="casa.php?casa={$edificio->id}">
			     			<img alt="edificios" src="{$edificio->carpeta_imagenes}home/1.jpg" />{$edificio->nombre}
			     		</a>
			     	{/foreach}
		        </div>
		        
	        </div><!-- inverciones -->

	        <a href="#ampliaciones" class="list-group-item" data-toggle="collapse" data-parent="#ampliaciones">
				AMPLIACIONES <i class="fa fa-caret-down"></i>
			</a>
	        <div class="collapse list-group-submenu {if $menuTipo == 6}in{/if}" id="ampliaciones">

				<a class="list-group-item" data-parent="#turismo" href="catalogo.php?tipo=6">
     				<b>VER TODAS</b>
	     		</a>
				{foreach from=$ampliaciones item=ampliacion}
		     		<a class="list-group-item" data-parent="#ampliaciones" href="casa.php?casa={$ampliacion->id}">
		     			<img alt="ampliaciones" src="{$ampliacion->carpeta_imagenes}home/1.jpg" />{$ampliacion->nombre}
		     		</a>
		     	{/foreach}
		        
	        </div><!-- ampliaciones -->
	        
		</div><!-- catalogo -->
		<a href="#productos" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#main-side-bar">
			ESTANDARQ  PRODUCTOS
		</a>
		<div class="collapse {if $menuTipo == 5}in{/if}" id="productos">
			<a href="#turismo" class="list-group-item" data-toggle="collapse" data-parent="#turismo">
				CABA&Ntilde;AS <i class="fa fa-caret-down"></i>
			</a>
	        <div class="collapse list-group-submenu {if $menuTipo == 5}in{/if}" id="turismo">
				<a class="list-group-item" data-parent="#turismo" href="catalogo.php?tipo=5">
     				<b>VER TODAS</b>
	     		</a>
      			{foreach from=$cabanas item=cabana}
		     		<a class="list-group-item" data-parent="#turismo" href="casa.php?casa={$cabana->id}">
		     			<img alt="turismo" src="{$cabana->carpeta_imagenes}home/1.jpg" />{$cabana->nombre}
		     		</a>
		     	{/foreach}
	        </div>
		</div>	
		<a href="#oyp" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#main-side-bar">
			OBRAS y PROYECTOS
		</a>
		<div class="collapse {if $menuTipo == 7 || $menuTipo == 8}in{/if}" id="oyp">
			<a href="#obras" class="list-group-item" data-toggle="collapse" data-parent="#obras">
      			OBRAS <i class="fa fa-caret-down"></i>
      		</a>
      		<div class="collapse list-group-submenu {if $menuTipo == 7}in{/if}" id="obras">
      			<a class="list-group-item" data-parent="#1planta" href="catalogo-obras.php?tipo=7">
	     			<b>VER TODAS</b>
	     		</a>
      			{foreach from=$obras item=obra}
		     		<a class="list-group-item" data-parent="#obras" href="obra.php?casa={$obra->id}">
		     			<img alt="casa" src="{$obra->carpeta_imagenes}home/1.jpg" />{$obra->nombre}
		     		</a>		     		
		     	{/foreach}
      		</div>
		</div>	
	</div>
</div>