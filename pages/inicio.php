<!DOCTYPE html>
<html>
<head>
	<?php include_once "pages/components/comp.meta.php" ?>
	<title>Virtual Bamboo - ¡Bienvenido!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>inicio.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>slick.css"/>
	<script type="text/javascript" src="<?php echo RUTA_JS ?>slick.min.js"></script>
				
</head>
<body>
	<section id="con-principal">
		<?php include_once "pages/components/comp.header.php" ?>
		<section>
			<section id="con-registro">
				<form id="formRegistro">
					<p>¿Aún no te unes a Virtual Bamboo?</p>
					<h3>REGISTRATE</h3>
					<input type="email" name="txtEmailUser" placeholder="Correo electrónico" required >
					<input type="password" name="txtPassUser" placeholder="Contraseña" required >
					<input type="password" name="txtPassUser_Re" placeholder="Confirmar contraseña" required >
					<button>Registrarse</button>
				</form>
			</section>
			<section id="con-tendencias">
				<div id="tendencias">
					<div>
						<div href="" class="tendencia">
							<a href="">#tutorial</a>
							<figure>
								<img src="img/user-min.png">
							</figure>
						</div>
					</div>
					<div>
						<div href="" class="tendencia">
							<a href="">#tutorial</a>
							<figure>
								<img src="img/user-min.png">
							</figure>
						</div>
					</div>
					<div>
						<div href="" class="tendencia">
							<a href="">#tutorial</a>
							<figure>
								<img src="img/user-min.png">
							</figure>
						</div>
					</div>	
					<div>
						<div href="" class="tendencia">
							<a href="">#tutorial</a>
							<figure>
								<img src="img/user-min.png">
							</figure>
						</div>
					</div>															
				</div>
			</section>
		</section>
		<?php include_once "pages/components/comp.footer.php" ?>
	</section>
	<script type="text/javascript">

		if($("body").width()>=600){
			if(screen.width>=600){
				$("#tendencias").slick({
					appendArrows: false,
					slidesToShow: 3,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 2000,
				});	
			}
		}else{
			$("#tendencias").slick({
				appendArrows: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
			});
		}
	</script>
</body>
</html>