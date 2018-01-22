<?php

class dataSesion {

    private $conexion;

    function dataSesion() {
        include_once '../../data/dbconexion/Conexion.php';
        $this->conexion = new Conexion();
    }

    //buscar un empleado
    Public function logueo($email, $password) {

        if ($this->conexion->crearConexion()->set_charset('utf8') == true) {

            $array = array();

            $buscarsesionempleado = $this->conexion->crearConexion()->query("SELECT *
                FROM tbempleados e
                INNER JOIN tbpersonas p ON e.personaid= p.personaid
                INNER JOIN tbtipoempleados te ON e.tipoempleado= te.tipoempleadoid
                WHERE p.personacorreo='$email' AND e.empleadocontrasenia='$password' AND e.empleadoestado=1");

            $this->conexion->cerrarConexion();
            while ($fila = $buscarsesionempleado->fetch_assoc()) {
                array_push($array, $fila);
            }
            return $array;
        }
    }
    
    //buscar un empleado
    Public function logueoCliente($email, $password) {

        if ($this->conexion->crearConexion()->set_charset('utf8') == true) {

            $array = array();

            $buscarsesioncliente = $this->conexion->crearConexion()->query("SELECT *
                FROM tbclientes c
                INNER JOIN tbpersonas p ON c.personaid= p.personaid
                WHERE p.personacorreo='$email' AND c.clienteclave='$password' AND c.clienteestado=1");

            $this->conexion->cerrarConexion();
            while ($fila = $buscarsesioncliente->fetch_assoc()) {
                array_push($array, $fila);
            }
            return $array;
        }
    }

}
