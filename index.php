<?php 
	include_once 'php/variables.php';

	//Variables
	$add=0; //Cambio de local a remoto
	//*************************************************//

	$componentes_url=parse_url($_SERVER['REQUEST_URI']);

	$ruta=$componentes_url['path'];


	$partes_ruta=explode('/',$ruta);


	$partes_ruta=array_filter($partes_ruta);


	$partes_ruta=array_slice($partes_ruta,0);

	$ruta_elegida='pages/404.php';

	/*Analisis*/
	/********************/
	if(count($partes_ruta)==0+$add){
		//No pedimos nada
		$ruta_elegida='pages/inicio.php';
	}else if(count($partes_ruta)==1+$add){
		//Estamos pidiendo secciones
		switch ($partes_ruta[0+$add]) {
			case 'inicio':
				$ruta_elegida='pages/inicio.php';
				$seccion="inicio";
				break;	
			case 'recuperar_cuenta':
				$ruta_elegida='pages/recuperar_cuenta.php';
				$seccion="recuperar_cuenta";
				break;	
			case 'renovar_cuenta':
				$ruta_elegida='pages/renovar_cuenta.php';
				$seccion="renovar_cuenta";
				break;														
			case 'nueva_publicacion':
				$ruta_elegida='pages/editor_publicacion.php';
				$seccion="nueva_publicacion";
				break;						
			case 'espacio':
				$ruta_elegida='pages/espacio.php';
				$seccion="espacio";
				break;															
		}
	}else if(count($partes_ruta)==2+$add){
		//Estamos pidiendo secciones
		switch ($partes_ruta[0+$add]) {
			case 'editar_publicacion':
				$ruta_elegida='pages/editor_publicacion.php';
				$seccion="editar_publicacion";
				//Parametros
				$id_publicacion=$partes_ruta[1+$add];
				break;
			case 'editor':
				$ruta_elegida='pages/editor.php';
				$seccion="editor";
				//Parametros
				$pagina=$partes_ruta[1+$add];				
				break;											
			case 'comunidad':
				$ruta_elegida='pages/comunidad.php';
				$seccion="comunidad";
				//Parametros
				$categoria=$partes_ruta[1+$add];
				break;					
		}

	}else if(count($partes_ruta)==4+$add){
		//Estamos pidiendo secciones
		switch ($partes_ruta[1+$add]) {
			case 'publicaciones':
				$ruta_elegida='pages/publicacion.php';
				$seccion="publicacion";
				//Parametros
				$espacio=$partes_ruta[0+$add];
				$id_publicacion=$partes_ruta[2+$add];
				$titulo_publicacion=$partes_ruta[3+$add];
				break;			
		}
		
	}		

	/***/

	include $ruta_elegida;
?>