<?php

class DataCliente {

    private $conexion;

    function DataCliente() {
        include_once '../../data/dbconexion/Conexion.php';
        $this->conexion = new Conexion();
    }

    //insertar
    public function insertarCliente($cliente) {
        
        if ($this->conexion->crearConexion()->set_charset('utf8')) {
            $nuevoPersona = $this->conexion->crearConexion()->query(
                    "CALL nuevaPersona(
                     '" . $cliente->getPersonaCedula() . "',
                     '" . $cliente->getPersonaNombre() . "',
                     '" . $cliente->getPersonaApellido1() . "',
                     '" . $cliente->getPersonaApellido2() . "',
                     '" . $cliente->getPersonaTelefono() . "',
                     '" . $cliente->getCorreo() . "',
                     '1');");
            /* opteniendo el id de la persona */
            $personaid = $this->conexion->crearConexion()->query(
                    "CALL buscarPersonaCorreo(
                    '" . $cliente->getCorreo() . "');");

            while ($resultado = $personaid->fetch_assoc()) {
                $con = $resultado['personaid'];
            }
            /* verificamos si es un string ya formulado */
            if (is_string($con)) {
                $cliente->setPersonaId($con);
            }

            $this->conexion->cerrarConexion();
            $nuevoCliente = $this->conexion->crearConexion()->query(
                    "CALL nuevoCliente( 
                    '" . $cliente->getPersonaId() . "',
                    '" . $cliente->getClientedireccionexacta() . "',
                    '" . $cliente->getClienteclave() . "',    
                    '1');");
            $this->conexion->cerrarConexion();

            return $nuevoCliente;
        }
    }

    //Modificar los clientes
    public function modificarCliente() {
        
    }

    //eliminar los clientes
    public function eliminarCliente() {
        
    }

    //mostrar clientes
    public function mostrarClientes() {
        
    }

}

?>