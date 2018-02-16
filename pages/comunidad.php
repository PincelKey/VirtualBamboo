<!DOCTYPE html>
<html>
<head>
	<?php include_once "pages/components/comp.meta.php" ?>
	<title>Virtual Bamboo - ¡Bienvenido!</title> 	
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>comunidad.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>iconos.css">		

</head>
<body>
	<section id="con-principal">
		<?php include_once "pages/components/comp.header-log.php" ?>
		<section id="con-comunidad">
			<section id="muro">
				<div id="con-categorias">
					<nav id="categorias">
						<ul>
							<li><a href="<?php echo RUTA_COMUNIDAD."nuevo" ?>" data-site="nuevo">Lo nuevo</a></li>
							<li><a href="<?php echo RUTA_COMUNIDAD."tendencias" ?>" data-site="tendencias">Tendencias</a></li>
							<li><a href="<?php echo RUTA_COMUNIDAD."guias" ?>" data-site="guias">Guías</a></li>
							<li><a href="<?php echo RUTA_COMUNIDAD."opiniones" ?>" data-site="opiniones">Opiniones</a></li>
							<li><a href="<?php echo RUTA_COMUNIDAD."noticias" ?>" data-site="noticias">Noticias</a></li>
							<li><a href="<?php echo RUTA_COMUNIDAD."programas" ?>" data-site="programas">Programas</a></li>
						</ul>
					</nav>
				</div>		
				<section id="suscripciones" class="seccion-publicaciones">
					<h3><p>Tus suscripciones</p><span class="icon-suscripcion"></span></h3>
					<div id="publicaciones">
						<div href="" class="publicacion">
							<a href="">
								<figure>
									<img src="<?php echo RUTA_IMG."publicacion-min.png" ?>">
									<figcaption>Tutorial: Aprende a usar los atajos del teclado de Windows 10</figcaption>
								</figure>
							</a>
							<div class="detalles-actividad">
								<div>
									<span class="icon-cuenta"></span>
									<a href="">Camaleon</a>
								</div>
								<div>
									<span class="icon-comentario"></span>
									<p>45</p>
								</div>
								<div>
									<span class="icon-tiempo"></span>
									<p>1 min</p>
								</div>												
							</div>						
						</div>
						<div href="" class="publicacion">
							<a href="">
								<figure>
									<img src="<?php echo RUTA_IMG."publicacion-min.png" ?>">
									<figcaption>Tutorial: Aprende a usar los atajos del teclado de Windows 10</figcaption>
								</figure>
							</a>
							<div class="detalles-actividad">
								<div>
									<span class="icon-cuenta"></span>
									<a href="">Camaleon</a>
								</div>
								<div>
									<span class="icon-comentario"></span>
									<p>45</p>
								</div>
								<div>
									<span class="icon-tiempo"></span>
									<p>1 min</p>
								</div>												
							</div>						
						</div>						
						<div href="" class="publicacion">
							<a href="">
								<figure>
									<img src="<?php echo RUTA_IMG."publicacion-min.png" ?>">
									<figcaption>Tutorial: Aprende a usar los atajos del teclado de Windows 10</figcaption>
								</figure>
							</a>
							<div class="detalles-actividad">
								<div>
									<span class="icon-cuenta"></span>
									<a href="">Camaleon</a>
								</div>
								<div>
									<span class="icon-comentario"></span>
									<p>45</p>
								</div>
								<div>
									<span class="icon-tiempo"></span>
									<p>1 min</p>
								</div>												
							</div>						
						</div>			
						<div class="pub-mas">
							<a href="">
								<span class="icon-mas-v"></span>
								<p>Leer más</p>
							</a>						
						</div>					
					</div>
				</section>
				<section id="general" class="seccion-publicaciones">
					<h3><p>Resto del mundo</p><span class="icon-mundo"></span></h3>
					<div id="publicaciones">
						<div href="" class="publicacion">
							<a href="">
								<figure>
									<img src="<?php echo RUTA_IMG."publicacion-min.png" ?>">
									<figcaption>Tutorial: Aprende a usar los atajos del teclado de Windows 10</figcaption>
								</figure>
							</a>
							<div class="detalles-actividad">
								<div>
									<span class="icon-cuenta"></span>
									<a href="">Camaleon</a>
								</div>
								<div>
									<span class="icon-comentario"></span>
									<p>45</p>
								</div>
								<div>
									<span class="icon-tiempo"></span>
									<p>1 min</p>
								</div>												
							</div>						
						</div>
						<div href="" class="publicacion">
							<a href="">
								<figure>
									<img src="<?php echo RUTA_IMG."publicacion-min.png" ?>">
									<figcaption>Tutorial: Aprende a usar los atajos del teclado de Windows 10</figcaption>
								</figure>
							</a>
							<div class="detalles-actividad">
								<div>
									<span class="icon-cuenta"></span>
									<a href="">Camaleon</a>
								</div>
								<div>
									<span class="icon-comentario"></span>
									<p>45</p>
								</div>
								<div>
									<span class="icon-tiempo"></span>
									<p>1 min</p>
								</div>												
							</div>						
						</div>			
						<div class="pub-mas">
							<a href="">
								<span class="icon-mas-v"></span>
								<p>Leer más</p>
							</a>						
						</div>					
					</div>			
				</section>
			</section>
			<aside id="panel-muro">
				<div id="espacio-mes" class="categoria-panel">
					<h3>Espacio del mes</h3>
					<div id="esp-popular-icon">
						<a href="">
							<figure>
								<img src="<?php echo RUTA_IMG."user-min.png" ?>">
								<figcaption>Yaritza Aquino</figcaption>
							</figure>
						</a>
					</div>
					<div id="estadisticas">
						<div>
							<span class="icon-publicacion"></span>
							<p>+20</p>
						</div>
						<div>
							<span class="icon-suscriptores"></span>
							<p>+1K</p>
						</div>
						<div>
							<span class="icon-vista"></span>
							<p>+150K</p>
						</div>												
					</div>
				</div>
				<div id="etiquetas" class="categoria-panel">
					<h3>Etiquetas</h3>
					<div id="list-etiquetas">				
						<a href="" class="etiqueta">
							#tutorial
						</a>
						<a href="" class="etiqueta">
							#canciones_pk
						</a>
						<a href="" class="etiqueta">
							#after_efects
						</a>
						<a href="" class="etiqueta">
							#dato_pk
						</a>									
						<a href="" id="tags-mas" class="icon-mas-h"></a>
					</div>	
				</div>	
				<div id="pub-mes" class="categoria-panel">
					<h3>Publicación del mes</h3>
					<div href="" class="publicacion">
						<a href="">
							<figure>
								<img src="<?php echo RUTA_IMG."publicacion-min.png" ?>">
								<figcaption>Tutorial: Aprende a usar los atajos del teclado de Windows 10</figcaption>
							</figure>
						</a>					
					</div>
					<div class="detalles-actividad">
						<div id="esp-icono">
							<figure>
								<img src="<?php echo RUTA_IMG."user-min.png" ?>">
							</figure>
							<p><a href="">Camaleon</a></p>
						</div>
						<div>
							<span class="icon-comentario"></span>
							<p>45</p>
						</div>
						<div>
							<span class="icon-vista"></span>
							<p>400K</p>
						</div>												
					</div>						
				</div>
				<div id="espacios-populares" class="categoria-panel">
					<h3>Espacios populares</h3>
					<div class="esp-popular">
						<div class="esp-icono">
							<figure>
								<img src="<?php echo RUTA_IMG."user-min.png" ?>">
							</figure>
							<a href="">Yaritza Aquino</a>
						</div>
						<div class="esp-suscriptores">
							<span class="icon-suscriptores"></span>
							<p>50K</p>
						</div>
					</div>								
				</div>													
			</aside>
		</section>
		<?php include_once "pages/components/comp.footer.php" ?>
	</section>
	<script type="text/javascript">
		//Hermientas-Notificaciones.Cuenta
		let nHerramienta="";
		
		$('.despliega > a').click(function(e){
			e.preventDefault();
			nHerramienta=herramientas({
				'herramienta': $('.despliega > a'),
				'herramientaDesplegada': $(this),
				'herramientaContenido': $("#herramientas-contenido"),
				'herramientaConElemento': $("#herramientas-contenido > div")
			},nHerramienta);
		})	

		menuCategorias($("#categorias a[data-site='<?php echo $categoria ?>']"));
	</script>	 
</body>
</html>