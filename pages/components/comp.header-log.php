	<header id="header-log">
		<div> 
			<figure>
				<a href="<?php echo RUTA_COMUNIDAD."nuevo" ?>">
					<img src="<?php echo RUTA_IMG."logoVB.png" ?>">
				</a>
			</figure>
			<form id="formBuscador">
				<input type="text" name="txtQueBuscar" required placeholder="¿Qué deseas buscar?">
				<button class="icon-search"></button>
			</form>
		</div>
		<div id="herramientas">
			<ul id="lista-herramientas">
				<li>
					<a data-action="escribir" href="<?php echo RUTA_NUEVA_PUBLICACION ?>" class="icon-escribir"></a>				
				</li>
				<li class="despliega">
					<a data-action="notificaciones" href="" >
						<span class="icon-notificacion"></span>
						<p>5</p>
					</a>
				</li>
				<li class="despliega">
					<a data-action="cuenta" href="" >
						<figure>
							<img src="<?php echo RUTA_IMG."user-min.png" ?>">
						</figure>
					</a>
				</li>
			</ul>	
			<div id="herramientas-contenido">				
				<div id="notificaciones">
					<ul>
						<li>
							<a href="">
								<div class="pub-contenido">
									<figure>
										<img src="<?php echo RUTA_IMG."user-min.png" ?>">
									</figure>
									<p>
										<i class="text-azul">Antonella</i> ha comentado esto: <i class="text-azul">"Buen post"</i>.
									</p>
								</div>
								<div class="con-pub-detalles">
									<div class="pub-detalles">
										<span class="icon-comentario accion"></span>
										<div class="tiempo">
											<span class="icon-tiempo"></span>
											<p>1 min</p>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="pub-contenido">
									<figure>
										<img src="<?php echo RUTA_IMG."user-min.png" ?>">
									</figure>
									<p>
										<i class="text-azul">Carmen</i> ha realizado un nueva publicacion.
									</p>
								</div>
								<div class="con-pub-detalles">
									<div class="pub-detalles">
										<span class="icon-publicacion accion"></span>
										<div class="tiempo">
											<span class="icon-tiempo"></span>
											<p>2 min</p>
										</div>
									</div>
								</div>
							</a>							
						</li>
						<li>
							<a href="">
								<div class="pub-contenido">
									<figure>
										<img src="<?php echo RUTA_IMG."user-min.png" ?>">
									</figure>
									<p>
										<i class="text-azul">Milagros</i> ha respondido tu comentario.
									</p>
								</div>
								<div class="con-pub-detalles">
									<div class="pub-detalles">
										<span class="icon-comentario accion"></span>
										<div class="tiempo">
											<span class="icon-tiempo"></span>
											<p>3 min</p>
										</div>
									</div>
								</div>
							</a>							
						</li>
						<li>
							<a href="">
								<div class="pub-contenido">
									<figure>
										<img src="<?php echo RUTA_IMG."user-min.png" ?>">
									</figure>
									<p>
										<i class="text-azul">Antonella</i> le ha dado <i class="text-azul">+3 tronquitos</i> a tu comentario.
									</p>
								</div>
								<div class="con-pub-detalles">
									<div class="pub-detalles">
										<span class="icon-tronquito accion"></span>
										<div class="tiempo">
											<span class="icon-tiempo"></span>
											<p>4 min</p>
										</div>
									</div>
								</div>
							</a>							
						</li>														
						<li>
							<a href="">
								<div class="pub-contenido">
									<figure>
										<img src="<?php echo RUTA_IMG."user-min.png" ?>">
									</figure>
									<p>
										<i class="text-azul">Ana</i> se ha suscrito a tu espacio.
									</p>
								</div>
								<div class="con-pub-detalles">
									<div class="pub-detalles">
										<span class="icon-user accion"></span>
										<div class="tiempo">
											<span class="icon-tiempo"></span>
											<p>15 de agosto - 6:35</p>
										</div>
									</div>
								</div>
							</a>							
						</li>											
					</ul>
				</div>
				<div id="cuenta">
					<ul>
						<li id="detalles-espacio">
							<figure>
								<img src="<?php echo RUTA_IMG."user-min.png" ?>">
							</figure>
							<p>Pincel Key</p>
						</li>
						<li>
							<a href="">
								<span class="icon-espacio"></span>
								<p>Mi espacio</p>	
							</a>
						</li>
						<li>								
							<a href="">
								<span class="icon-logout"></span>
								<p>Cerrar sesión</p>
							</a>
						</li>
						<li>							
							<a href="">
								<span class="icon-ayuda"></span>
								<p>Ayuda</p>
							</a>
						</li>
						<li>											
							<a href="">
								<span class="icon-sugerencia"></span>
								<p>Enviar sugerencia</p>
							</a>										
						</li>						
					</ul>
				</div>										
			</div>		
		</div>
	</header>