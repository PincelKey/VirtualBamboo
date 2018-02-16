	<header id="header">
		<div> 
			<figure>
				<a href="<?php echo RUTA_INICIO ?>">
					<img src="<?php echo RUTA_IMG."logoVB.png" ?>">
				</a>
			</figure>
			<a href="<?php echo RUTA_COMUNIDAD."nuevo" ?>">Dar un vistaso</a>
		</div>
		<form id="formLogin" method="POST" action="">
			<div>
				<h3>Iniciar sesión</h3>
				<input type="email" name="txtEmailAccount" placeholder="Correo electrónico" required>
			</div>
			<div>
				<input type="password" name="txtPassAccount" placeholder="Contraseña" required>
				<a href="">¿Olvidó su cuenta?</a>
			</div>
			<button>Entrar</button>
		</form>
	</header>