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
				<script type="text/javascript">
					if($("body").width()>=1024){
						$("#editor").html("<?php 
							$editor_desktop = mberegi_replace("[\n|\r|\n\r]","",file_get_contents("pages/components/comp.editor-desktop.php"));
							$editor_desktop = str_replace("RUTA_IMG",RUTA_IMG,$editor_desktop);

							echo $editor_desktop;
						?>")	
					}else{
						$("#editor").html("<?php 
							$editor_mobile = mberegi_replace("[\n|\r|\n\r]","",file_get_contents("pages/components/comp.editor-mobile.php"));
							$editor_mobile = str_replace("RUTA_IMG",RUTA_IMG,$editor_mobile);

							echo $editor_mobile;
						?>")						
					}					

					$(window).resize(
						function(){
							if($("body").width()>=1024){
								$("#editor").html("<?php 
									$editor_desktop = mberegi_replace("[\n|\r|\n\r]","",file_get_contents("pages/components/comp.editor-desktop.php"));
									$editor_desktop = str_replace("RUTA_IMG",RUTA_IMG,$editor_desktop);

									echo $editor_desktop;
									?>")
							}else{
								$("#editor").html("<?php 
									$editor_desktop = mberegi_replace("[\n|\r|\n\r]","",file_get_contents("pages/components/comp.editor-mobile.php"));
									$editor_desktop = str_replace("RUTA_IMG",RUTA_IMG,$editor_desktop);

									echo $editor_desktop;
									?>")
							}	
						}					
					)
				</script>	
			</div>
			<nav id="con-lista-paginas">
				<ul>
					<li><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li><a href="">5</a></li>
					<li><a href="">6</a></li>
					<li><a href="">6</a></li>
					<li><a href="">6</a></li>
					<li><a href="">6</a></li>
					<li><a href="">6</a></li>
					<li><a href="">6</a></li>
					<li><a href="">6</a></li>
					<li><a href="">6</a></li>
					<li><a href="">6</a></li>
					<li><a href="">6</a></li>
					<li><a href="">6</a></li>
				</ul>
			</nav>		
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

		menuEspacio($("#menu-espacio a[data-site='<?php echo $seccion ?>']"));

		$("#editor").on("click",'#selector-total > input',function(){
			if($("body").width()>=1024){
				herramientasEditor({
					'selectorTotal':$("#selector-total > input"),
					'selectorPub':$("table input"),
					'publicaciones': $("table tr:first-child() ~ tr"),
					'device': "desktop"
				});	
			}else{	
				herramientasEditor({
					'selectorTotal':$("#selector-total > input"),
					'selectorPub':$(".con-pub-principal input"),
					'publicaciones': $(".con-pub-principal"),
					'device': "mobile"
				});					
			}
		});			

		//Publicaciones
		$("#editor").on("click",'input[name*="chkPublicacion"]',function(){
			if($("body").width()>=1024){
				if($(this).prop("checked"))
					$(this).parent().parent().addClass("pub-seleccionado");
				else
					$(this).parent().parent().removeClass("pub-seleccionado");
			}else{	
				if($(this).prop("checked"))
					$(this).parent().addClass("pub-seleccionado");
				else
					$(this).parent().removeClass("pub-seleccionado");			
			}			
		});

		publicaciones($("#con-lista-paginas li:nth-child(<?php echo $pagina ?>) a"));

		select($('select'));
		
	    $(window).resize(
	    	function(){
				select($('select'));
			}
		)
	</script>
 
</body>
</html>