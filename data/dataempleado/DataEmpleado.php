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
    public function eliminarEmpleado($empleado) {
        $this->conexion->crearConexion()->set_charset('utf8');
        $pro = $this->conexion->crearConexion()->query("CALL eliminarempleado('$empleado')");
        return $pro;
    }

    //mostrar empleados
    public function mostrarEmpleados() {

        if ($this->conexion->crearConexion()->set_charset('utf8')) {

            $mostrarempleados = $this->conexion->crearConexion()->query("CALL mostrarempleados('')");

            $this->conexion->cerrarConexion();

            $tabla = "";
            while ($row = $mostrarempleados->fetch_assoc()) {

                $editar = '<button onclick=\"verModalEditar('.$row['empleadoid'].','
                        . '\''.$row['personanombre'].'\','. '\''.$row['personaapellido1'].'\','
                        . '\''.$row['personaapellido2'].'\','.$row['empleadocedula'].','
                        . $row['personatelefono'].','. '\''.$row['personacorreo'].'\','
                        . '\''.$row['empleadocontrasenia'].'\','.$row['empleadoedad'].','
                        . '\''.$row['empleadosexo'].'\','.'\''.$row['empleadoestadocivil'].'\','
                        . '\''.$row['empleadobanco'].'\','.$row['empleadocuentabancaria'].');\"'
                        . 'class=\"btn btn-primary\">Modificar</button>';

                $ver = '<button onclick=\"verModalBuscar(' . $row['empleadoedad'] . ','
                        . '\'' . $row['empleadosexo'] . '\' ,'
                        . '\'' . $row['empleadoestadocivil'] . '\' ,'
                        . '\'' . $row['empleadobanco'] . '\');\"'
                        . 'class=\"btn btn-info\">Ver +</button>';

                $eliminar = '<button onclick=\"verModalEliminar(' . $row['empleadoid'] . ','
                        . '\'' . $row['personanombre'] . '\',\'' . $row['personaapellido1'] . '\','
                        . '\'' . $row['personaapellido2'] . '\');\"'
                        . 'class=\"btn btn-danger\" >Eliminar</button>';

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