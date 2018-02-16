<!DOCTYPE html>
<html>
<head>
	<?php include_once "pages/components/comp.meta.php" ?>
	<title>Virtual Bamboo - ¡Bienvenido!</title> 	
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>editor.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>iconos.css">		

	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>slick.css"/>
	<script type="text/javascript" src="<?php echo RUTA_JS ?>slick.min.js"></script>

</head>
<body>
	<section id="con-principal">
		<?php include_once "pages/components/comp.header-log.php" ?>
		<section id="con-editor">
			<?php include_once "pages/components/comp.menu-espacio.php" ?>
			<div id='editor'>	
			</div>
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

		//Menu espacio-Active
		menuEspacio($("#menu-espacio a[data-site='<?php echo $seccion ?>']"));
	</script> 
</body>
</html>