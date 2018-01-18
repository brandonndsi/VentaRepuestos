<?php 

	include_once '../../data/dataimagen/DataImagenAdministrador.php';
	//include_once '../../domain/imagen/imagen.php';

		$action=$_POST['accion'];/*Se optiene del metodo pos la variable*/

		if($ation == "cargar"){
			if(isset($_POST['personaid'])){
				
				if(strlen($_POST['personaid'])){
					echo "hola imagen";
					//$imagen = new imagen($_POST['personaid'],null,null,null);

					$DataImagen = new DataImagenAdministrador();
					$result = $DataImagen->mostrarAdministrador($_POST['personaid']);
					echo $result;
				}
			}
			
		}
 ?>