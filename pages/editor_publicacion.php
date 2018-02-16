<!DOCTYPE html>
<html>
<head>
	<?php include_once "pages/components/comp.meta.php" ?>
	<title>Virtual Bamboo - ¡Bienvenido!</title> 	
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>editor_publicacion.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>iconos.css">		

    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/css/froala_style.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<section id="con-principal">
		<?php include_once "pages/components/comp.header-log.php" ?>
		<section id="con-formEscritor">
			<form id="formEscritor">
				<section id="panel-detalles">
					<div class="detalle">
						<h4>Categoria</h4>
						<div>
							<select>
								<option>Guias</option>
								<option>Noticias</option>
								<option>Creaciones</option>
								<option>Recursos</option>
								<option>Programas</option>
								<option>Opiniones</option>
								<option>Otro</option>
							</select>
							<textarea placeholder="Describe la categoria..."></textarea>
						</div>
					</div>
					<div class="detalle">
						<h4>Sección</h4>
						<div>
							<select>
								<option>Diseño</option>
								<option>Programas</option>
							</select>	
						</div>			
					</div>
					<div class="detalle">
						<h4>Etiquetas</h4>
						<div>
							<div id="etiquetas">
								<div class="tag">
									<p>edu</p>
									<a href="">X</a>
								</div>
								<div class="tag">
									<p>edu</p>
									<a href="">X</a>
								</div>	
							</div>				
						</div>				
					</div>
				</section>
				<section id="panel-escritor">
					<div>
						<input type="text" name="txtTituloPublicacion" required placeholder="Titulo de la publicación">
						<button>
							<p>
								<?php 
									if($seccion=="editar_publicacion") echo "Actualizar"; else echo "Publicar" 
								?>	
							</p>
							<i class="icon-publicar"></i>
						</button>
					</div>
					<div>
						<div id="editor"></div>
					</div>
				</section>
			</form>
		</section>
		<?php include_once "pages/components/comp.footer.php" ?>
	</section>	

    <!-- Include external JS libs. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/js/froala_editor.pkgd.min.js"></script>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/js/languages/es.js'></script>

	<script>
	  $(function() {
	    $('#editor').froalaEditor({
	      // Set the language code.
	      language: 'es',
	      pluginsEnabled: ['align','charCounter','codeBeautifier','codeView','colors','draggable','embedly','emoticons','entities','file','fontFamily','fontSize','fullscreen','image','lineBreaker','link','lists','paragraphFormat','paragraphStyle','quickInsert','quote','save','table','url','video','wordPaste'],
	      fontFamily: {
	        "Roboto,sans-serif": 'Roboto',
	        "Oswald,sans-serif": 'Oswald',
	        "Montserrat,sans-serif": 'Montserrat',
	        "Verdana,sans-serif": 'Verdana',
	        "Times New Roman,sans-serif": 'Times New Roman',
	        "Arial,sans-serif": 'Arial',
	        "Impact,sans-serif": 'Impact'
	      },
	      videoUpload: false, //No permite subir videos	   
	      placeholderText: '¿Qué quieres decirle al mundo? ...'	         
	    })
	  });

	</script>		
	<script type="text/javascript">
		//VANILA
		
	 	let nHerramienta="";

	    $('.despliega > a').click(function(e) {
	        e.preventDefault();
	        if(nHerramienta!=$(this).attr('data-action')){
	        	nHerramienta=$(this).attr('data-action');
		        $("#herramientas-contenido").css("display","block");

		        $("#herramientas-contenido > div").hide();
		        $(".despliega > a").attr("id","");
		        $(this).attr("id","herramienta-active");
		        $('#' + $(this).attr('data-action')).fadeIn();
		    }else{
		    	nHerramienta="";
		    	$("#herramientas-contenido").css("display","none");
		    	$("#herramientas-contenido > div").hide();
		    }
	    });		

		$('select').each(function () {

		  // Cache the number of options
		  var $this = $(this),
		      numberOfOptions = $(this).children('option').length;

		  // Hides the select element
		  $this.addClass('s-hidden');

		  // Wrap the select element in a div
		  $this.wrap('<div class="select"></div>');

		  // Insert a styled div to sit over the top of the hidden select element
		  $this.after('<div class="styledSelect"></div>');

		  // Cache the styled div
		  var $styledSelect = $this.next('div.styledSelect');

		  // Show the first select option in the styled div
		  $styledSelect.text($this.children('option').eq(0).text());

		  // Insert an unordered list after the styled div and also cache the list
		  var $list = $('<ul />', {
		      'class': 'options'
		  }).insertAfter($styledSelect);

		  // Insert a list item into the unordered list for each select option
		  for (var i = 0; i < numberOfOptions; i++) {
		      $('<li />', {
		          text: $this.children('option').eq(i).text(),
		          rel: $this.children('option').eq(i).val()
		      }).appendTo($list);
		  }

		  // Cache the list items
		  var $listItems = $list.children('li');

		  // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
		  $styledSelect.click(function (e) {
		      e.stopPropagation();
		      $('div.styledSelect.active').each(function () {
		          $(this).removeClass('active').next('ul.options').hide();
		      });
		      $(this).toggleClass('active').next('ul.options').toggle();
		  });

		  // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
		  // Updates the select element to have the value of the equivalent option
		  $listItems.click(function (e) {
		      e.stopPropagation();
		      $styledSelect.text($(this).text()).removeClass('active');
		      $this.val($(this).attr('rel'));
		      $list.hide();
		      /* alert($this.val()); Uncomment this for demonstration! */
		  });

		  // Hides the unordered list when clicking outside of it
		  $(document).click(function () {
		      $styledSelect.removeClass('active');
		      $list.hide();
		  });
		}); 
	</script>	 
</body>
</html>