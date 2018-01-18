<?php 
	class DataImagenAdministrador{

		private $conexion;

		function DataImagenAdministrador(){
			include_once '../dbconexion/Conexion.php';
			$this->conexion = new Conexion();
		}

		function mostrarAdministrador($personaid){
			$administrador=$this->conexion->crearConexion()->query(
			"CALL obtenerrutaimagen('".$personaid."')");
			$resultado;
			while ($result = $administrador->fetch_assoc()) {
                        $resultado = $result['imagenruta'];
                    }

             $this->conexion->cerrarConexion();

			return $resultado;
			
		}

		
	}
 ?>