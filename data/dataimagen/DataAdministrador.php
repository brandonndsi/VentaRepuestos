<?php 
	class DataAdministrador{
		private $conexion;

		public function DataAdministrador(){
			include_once '../../data/dbconexion/Conexion.php';
			$this->conexion = new Conexion();
			}

		public function mostrarAdministrador($personaid){
			$administrador=$this->conexion->crearConexion()->query(
			"CALL obtenerrutaimagen('".$personaid."','1')");
			$resultado;
			while ($result = $administrador->fetch_assoc()) {
                        $resultado = $result['imagenruta'];
                    }

             $this->conexion->cerrarConexion();

			return $result;
			
		}

		
	}
 ?>