<?php

class DataEmpleado {

    private $conexion;

    function DataEmpleado() {
        include_once '../../data/dbconexion/Conexion.php';
        $this->conexion = new Conexion();
    }

    //insertar
    public function insertarEmpleado() {
        
    }

    //modificar
    public function modificarEmpleado() {
        
    }

    //eliminar
    public function eliminarEmpleado() {
        
    }

    //buscar
    public function buscarEmpleado() {
        
    }

    //mostrar empleados
    public function mostrarEmpleados() {

        if ($this->conexion->crearConexion()->set_charset('utf8')) {

            $mostrarempleados = $this->conexion->crearConexion()->query("CALL mostrarempleados('')");

            $this->conexion->cerrarConexion();

            $tabla = "";
            while ($row = $mostrarempleados->fetch_assoc()) {

                $editar = '<button class=\"btn btn-primary\">Modificar</button>';

                $ver = '<button class=\"btn btn-info\">Ver +</button>';

                $eliminar = '<button class=\"btn btn-danger\" >Eliminar</button>';

                $tabla .= '{
				  "nombre":"' . $row['personanombre'] . '",
				  "apellido1":"' . $row['personaapellido1'] . '",
				  "apellido2":"' . $row['personaapellido2'] . '",
				  "cedula":"' . $row['empleadocedula'] . '",
				  "telefono":"' . $row['personatelefono'] . '",
                                  "tipoEmpleado":"' . $row['tipoempleado'] . '",    
                                  "correo":"' . $row['personacorreo'] . '",
                                  "cuenta":"' . $row['empleadocuentabancaria'] . '",
                                  "fecha":"' . $row['empleadofechaingreso'] . '",    
				  "acciones":"' . $editar . $ver . $eliminar . '"
				},';
            }
            //eliminamos la coma que sobra
            $tabla = substr($tabla, 0, strlen($tabla) - 1);
            echo '{"data":[' . $tabla . ']}';
        }
    }

}

?>