<!DOCTYPE html>
<html>
<head>
	<?php include_once "pages/components/comp.meta.php" ?>
	<title>Virtual Bamboo - ¡Bienvenido!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>recuperar_cuenta.css">
				
</head>
<body>
	<section id="con-principal">
		<?php include_once "pages/components/comp.header.php" ?>
		<section>
			<!--<section id="con-recuperacion">
				<form id="formRecuperacion">
					<h3>No todo esta perdido</h3>
					<input  type="email" name="txtEmailUser" placeholder="Correo electrónico" required >
					<button>ENVIAR CORREO</button>
				</form>
			</section>-->
			<section id="con-recuperacion-error">
				<form id="formRecuperacion">
					<h3>No todo esta perdido</h3>
					<input  type="email" name="txtEmailUser" placeholder="Correo electrónico" required >
					<span class="spanError">*No existe esta cuenta, Lo sentimos.</span>
					<button>ENVIAR CORREO</button>
				</form>			
			</section>
		</section>
		<?php include_once "pages/components/comp.footer.php" ?>
	</section>
	
	<script type="text/javascript">
	</script>
</body>
</html>