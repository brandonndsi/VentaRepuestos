<?php

class DataImagenAdministrador {

    private $conexion;

    function DataImagenAdministrador() {
        include_once '../../data/dbconexion/Conexion.php';
        $this->conexion = new Conexion();
    }

    function mostrarAdministrador($personaid) {

        if ($this->conexion->crearConexion()->set_charset('utf8')) {
            $administrador = $this->conexion->crearConexion()->query(
                    "CALL obtenerrutaimagen('" . $personaid . "')");
            
            while ($result = $administrador->fetch_assoc()) {/// no esta obteniendo nada de la consulta
                $resultado = $result['imagenruta'];
            }

            $this->conexion->cerrarConexion();

            return $resultado;
        }
    }
}

?>