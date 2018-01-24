<?php 

	include_once '../../data/dataimagen/DataImagenAdministrador.php';
	//include_once '../../domain/imagen/imagen.php';

		$action=$_POST['accion'];/*Se optiene del metodo pos la variable*/

		if($action == "nuevo"){
			if(isset($_POST['id'])){
				
				if(strlen($_POST['id'])){
					//$imagen = new imagen($_POST['personaid'],null,null,null);

					$DataImagen = new DataImagenAdministrador();
					$result = $DataImagen->mostrarAdministrador($_POST['id']);
					echo json_encode($result);
				}
			}
			
		}else if($action=="categoria"){
			$id=$_POST['id'];
			if(isset($id)){

				$datos=new DataImagenAdministrador();
				$resultado = $datos->cargarCategoria($id);
				echo json_encode($resultado);
				
			}
		}
 ?>