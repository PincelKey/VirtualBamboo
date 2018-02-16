<!DOCTYPE html>
<html>
<head>
	<?php include_once "pages/components/comp.meta.php" ?>
	<title>Virtual Bamboo - ¡Bienvenido!</title> 	
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>publicacion.css">
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
				<section id="con-publicacion">
					<div id="publicacion">
						<div id="titulo">
							<h3>Como cambiar el Disco Duro de tu PC</h3>
							<a href="" class="icon-guardar"></a>
						</div>
						<div id="contenido">
							Photoshop es el estándar mundial de diseño y retoque fotográfico. Los principales profesionales del mundo lo usan en sus trabajos y existe muchísimo material en internet como plugins, freebies, templates, etc.

							Con este curso te acercarás al diseño de mano del programa lider del mercado, aprenderás sobre color, manejo de herramientas, filtros, ediciones no destructivas, capas, fusiones, estilos, etc. Y terminaremos el curso con tres proyectos (no uno, ¡sino tres!): el diseño de una tarjeta de presentación, un montaje fotográfico y el diseño de un website.
						</div>
						<div id="valorar-compartir">
							<div id="con-tronquito">
								<div id="tronquito" class="a-tronquiteado">
									<span class="icon-tronquito"></span>
									<p>+Tronquito</p>
								</div>
								<div class="tool-tip">
									<a href="" class="tr-azul">1</a>
									<a href="" class="tr-azul">2</a>
									<a href="" class="tr-azul">3</a>
									<a href="" class="tr-morado">4</a>
									<a href="" class="tr-morado">5</a>
								</div>
							</div>
							<div id="con-share">
								<div id="share">
									<span class="icon-compartir"></span>
									<p>+Tronquito</p>
								</div>
								<div class="tool-tip">
									<a href="" class="icon-facebook"></a>
									<a href="" class="icon-twitter"></a>
									<a href="" class="icon-whatsapp"></a>
								</div>
							</div>							
						</div>
						<div id="detalles">
							<div class="detalle">
								<figure>
									<img src="<?php echo RUTA_IMG."user-min.png" ?>">
								</figure>
								<div>
									<a href="" id="name_espacio">karina_gs</a>
									<span class="icon-right-open"></span>
									<a href="" id="seccion">programas</a>
								</div>
							</div>
							<div class="detalle">
								<span class="icon-tiempo"></span>
								<p>1min</p>
							</div>
							<div class="detalle">
								<span class="icon-categoria"></span>
								<p>Guías</p>								
							</div>
							<div class="detalle">
								<span class="icon-tronquito"></span>
								<p>
									<span id="n-tronquitos">50</span>tronquitos
								</p>								
							</div>							
						</div>
						<div id="etiquetas">
							<h4>
								<span class="icon-etiqueta"></span>
								<p>Etiquetas</p>
							</h4>
							<div>
								<a href="" class="etiqueta">edu</a>
								<a href="" class="etiqueta">tutorial</a>
							</div>
						</div>
						<div id="comentarios">
							<h4>
								<span class="icon-comentario"></span>
								<p>
									<span id="n-comentarios">45</span> comentarios
								</p>
								<a href="" class="icon-down"></a>
							</h4>
							<div id="list-comentarios">
								<div class="comentario" data-idcomentario="1">
									<figure class="esp-icono">
										<img src="<?php echo RUTA_IMG."user-min.png" ?>">
									</figure>
									<div id="list-respuestas">
										<div class="com-detalles">
											<a href="" class="espacio">CYaritza</a>
											<div class="tiempo">
												<span class="icon-tiempo"></span>
												<p>1min</p>
											</div>
										</div>
										<p class="contenido-comentario">
											me gusta mucho esta cancion, la baile el año pasado en la fiesta de fin de mi colegio.
										</p>
										<div class="con-btnResponder">
											<a class="btnResponder" href="">
												<p>Responder</p>
												<span class="icon-respuesta"></span>
											</a>
										</div>
										<form class="formResponder">
											<figure class="esp-icono">
												<img src="<?php echo RUTA_IMG."user-min.png" ?>">
											</figure>
											<div>
												<textarea class="txtRespuesta" placeholder="Escribe lo que piensas..."></textarea>
												<div class="con-btnResponder">
													<button>
														<p>Responder</p>
														<span class="icon-enviar"></span>
													</button>
												</div>
											</div>
										</form>											
										<h4>
											<span class="icon-comentario"></span>
											<p>
												<span id="n-respuestas">20</span> respuestas
											</p>
											<a href="" class="icon-down"></a>
										</h4>										
										<div class="respuestas">
											<div class="comentario">
												<figure class="esp-icono">
													<img src="<?php echo RUTA_IMG."user-min.png" ?>">
												</figure>
												<div>										
													<div class="com-detalles">
														<a href="" class="espacio">CYaritza</a>
														<div class="tiempo">
															<span class="icon-tiempo"></span>
															<p>1min</p>
														</div>
													</div>
													<p class="contenido-comentario">
														me gusta mucho esta cancion, la baile el año pasado en la fiesta de fin de mi colegio.
													</p>
												</div>	
											</div>	
											<div class="comentario nuevo-comentario">
												<figure class="esp-icono">
													<img src="<?php echo RUTA_IMG."user-min.png" ?>">
												</figure>
												<div>										
													<div class="com-detalles">
														<a href="" class="espacio">CYaritza</a>
														<div class="tiempo">
															<span class="icon-tiempo"></span>
															<p>1min</p>
														</div>
													</div>
													<p class="contenido-comentario">
														me gusta mucho esta cancion, la baile el año pasado en la fiesta de fin de mi colegio.
													</p>
												</div>	
											</div>																				
										</div>									
									</div>
								</div>
								<div class="comentario" data-idcomentario="2">
									<figure class="esp-icono">
										<img src="<?php echo RUTA_IMG."user-min.png" ?>">
									</figure>
									<div id="list-respuestas">
										<div class="com-detalles">
											<a href="" class="espacio">CYaritza</a>
											<div class="tiempo">
												<span class="icon-tiempo"></span>
												<p>1min</p>
											</div>
										</div>
										<p class="contenido-comentario">
											me gusta mucho esta cancion, la baile el año pasado en la fiesta de fin de mi colegio.
										</p>
										<div class="con-btnResponder">
											<a class="btnResponder" href="">
												<p>Responder</p>
												<span class="icon-respuesta"></span>
											</a>
										</div>
										<form class="formResponder">
											<figure class="esp-icono">
												<img src="<?php echo RUTA_IMG."user-min.png" ?>">
											</figure>
											<div>
												<textarea class="txtRespuesta" placeholder="Escribe lo que piensas..."></textarea>
												<div class="con-btnResponder">
													<button>
														<p>Responder</p>
														<span class="icon-enviar"></span>
													</button>
												</div>
											</div>
										</form>											
										<h4>
											<span class="icon-comentario"></span>
											<p>
												<span id="n-respuestas">20</span> respuestas
											</p>
											<a href="" class="icon-down"></a>
										</h4>										
										<div class="respuestas">
											<div class="comentario">
												<figure class="esp-icono">
													<img src="<?php echo RUTA_IMG."user-min.png" ?>">
												</figure>
												<div>										
													<div class="com-detalles">
														<a href="" class="espacio">CYaritza</a>
														<div class="tiempo">
															<span class="icon-tiempo"></span>
															<p>1min</p>
														</div>
													</div>
													<p class="contenido-comentario">
														me gusta mucho esta cancion, la baile el año pasado en la fiesta de fin de mi colegio.
													</p>
												</div>	
											</div>									
										</div>									
									</div>
								</div>																
							</div>							
						</div>
					</div>
					<form id="formComentar">
						<h4>Anímate a dar tu opinión</h4>
						<div>
							<figure class="esp-icono">
								<img src="<?php echo RUTA_IMG."user-min.png" ?>">
							</figure>
							<div>						
								<textarea id="txtComentario" placeholder="Escribe lo que piensas..."></textarea>
								<button>
									<p>Comentar</p>
									<span class="icon-enviar"></span>
								</button>
							</div>	
						</div>
					</form>
				</section>
			</section>
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

		//Comentarios
		let activeComentarios=true;
		$('#comentarios > h4 > a').addClass("activeLista");
		
		$('#comentarios > h4 > a').click(function(e){
			e.preventDefault();
			if(!activeComentarios){
				$("#list-comentarios").fadeIn();
				$('#comentarios > h4 > a').addClass("activeLista");

				activeComentarios=true;
			}else{
				$("#list-comentarios").hide();
				$('#comentarios > h4 > a').removeClass("activeLista");
				activeComentarios=false;
			}
		})	

		//Respuestas
		let idComentario="";
		$('.respuestas .comentario').hide();
		$('.nuevo-comentario').fadeIn();
		
		$('#list-respuestas > h4 > a').click(function(e){
			e.preventDefault();

			idComentarioNow=$(this).parent().parent().parent().attr("data-idcomentario");
			respuestas=$("#list-comentarios div[data-idcomentario="+idComentarioNow+"] .respuestas .comentario");

			if(idComentario!=idComentarioNow){
				//Se puede abrir la lista
				$('.respuestas .comentario').hide();//Cerramos todos
				respuestas.fadeIn();///en especiico
				$('#list-respuestas > h4 > a').addClass("activeLista");

				idComentario=idComentarioNow;
			}else{
				respuestas.hide();
				$('#list-respuestas > h4 > a').removeClass("activeLista");

				idComentario="";
			}
		})	

		//Responder
		$('.formResponder').hide();
		
		$('.btnResponder').click(function(e){
			e.preventDefault();

			$('.formResponder').hide();//Ocultar todos las cajas de respuestas

			idComentarioNow=$(this).parent().parent().parent().attr("data-idcomentario");
			console.log(idComentarioNow)
			formResponder=$("#list-comentarios div[data-idcomentario="+idComentarioNow+"] .formResponder").fadeIn();
		})			

		//Formulario comentar
		
	</script>	 
</body>
</html>