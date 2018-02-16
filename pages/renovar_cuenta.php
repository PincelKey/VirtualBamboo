<!DOCTYPE html>
<html>
<head>
	<?php include_once "pages/components/comp.meta.php" ?>
	<title>Virtual Bamboo - ¡Bienvenido!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>renovar_cuenta.css">
				
</head>
<body>
	<section id="con-principal">
		<?php include_once "pages/components/comp.header.php" ?>
		<section>
			<section id="con-recuperacion">
				<form id="formRecuperacion">
					<h3>Renovar acceso</h3>
					<input  type="password" name="txtNewPassUser" placeholder="Nueva contraseña" required >
					<input type="password" name="txtNewPassUser_Re" placeholder="Confirmar la nueva contraseña" required >
					<button>RENOVAR CUENTA</button>
				</form>
			</section>
			<!--<section id="con-recuperacion-error">
				<form id="formRecuperacion">
					<h2>Renovar acceso</h2>
					<input class="txtInputError" type="password" name="txtNewPassUser" placeholder="Nueva contraseña" required >
					<span class="spanError">*No coinciden las contraseñas</span>
					<input type="password" name="txtNewPassUser_Re" placeholder="Confirmar la nueva contraseña." required >
					<button>RENOVAR CUENTA</button>
				</form>
			</section>-->	
		</section>
		<?php include_once "pages/components/comp.footer.php" ?>
	</section>
	
	<script type="text/javascript">
	</script>
</body>
</html>