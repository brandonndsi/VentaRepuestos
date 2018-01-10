<?php
/**
 * AUTOR: David Salas Lorente.
 */
class DataProveedor {

    private $conexion;

    function DataProveedor() {
        include_once '../../data/dbconexion/Conexion.php';
        $this->conexion = new Conexion();
    }

    //insertar
    public function insertarProveedor($proveedor) {
        if ($this->conexion->crearConexion()->set_charset('utf8')) {
            $nuevoPersona=$this->conexion->crearConexion()->query("INSERT INTO `tbpersonas`
            ( `cedula`, `personanombre`, `personaapellido1`, `personaapellido2`,
             `personatelefono`, `personacorreo`, `personaestado`) VALUES 
             ('".$proveedor->getPersonaCedula()."',
             '".$proveedor->getPersonaNombre()."',
             '".$proveedor->getPersonaApellido1()."',
             '".$proveedor->getPersonaApellido2()."',
             '".$proveedor->getPersonaTelefono()."',
             '".$proveedor->getCorreo()."',
             '1');");
            /*opteniendo el id de la persona*/
            $personaid=$this->conexion->crearConexion()->query("SELECT `personaid` 
            FROM `tbpersonas` WHERE cedula='".$proveedor->getPersonaCedula()."';");

            while ($resultado = $RePersonaid->fetch_assoc()) {
                $con = $resultado['personaid'];
            }
            /* verificamos si es un string ya formulado */
             if(is_string($con)){
            $proveedor->setPersonaId($con);
             }

            $this->conexion->cerrarConexion();
            $nuevoProveedor=$this->conexion->crearConexion()->query("INSERT INTO `tbproveedores`
            ( `personaid`, `productoid`, `proveedorestado`) VALUES 
            ('".$proveedor->getPersonaId()."',
            '".$proveedor->getProveedorProductoId()."',
            '1');");
            $this->conexion->cerrarConexion();

            $resultado=$nuevoProveedor;
            return $resultado;
        }
    }

    //modificar
    public function modificarProveedor($proveedor) {
        if ($this->conexion->crearConexion()->set_charset('utf8')) {
            $actualizandoProveedor = $this->conexion->crearConexion()->query("UPDATE `tbproveedores`
             SET `productoid`='".$proveedor->getProveedorProductoId()."'
             WHERE proveedorid='".$proveedor->getProveedorId()."';");
                $this->conexion->cerrarConexion();
            //recuperando lo que es el id de la persona en proveedor.
            $recuperandoIdPersona = $this->conexion->crearConexion()->query("SELECT `personaid`
                FROM `tbproveedores` WHERE proveedorid='" . $proveedor->getProveedorId() . "';");
                $this->conexion->cerrarConexion();
            /* transformando los datos del id objeto a un string */
            while ($resultado = $recuperandoIdPersona->fetch_assoc()) {
                $con = $resultado['personaid'];
            }
            /* verificamos si es un string ya formulado */
            if (is_string($con)) {
                $proveedor->setPersonaId($con);
            }

            //modificando el tb persona
            $personanuevo = $this->conexion->crearConexion()->query("UPDATE `tbpersonas` SET 
            `cedula`='".$proveedor->getPersonaCedula()."',
            `personanombre`='" . $proveedor->getPersonaNombre() . "',
            `personaapellido1`='" . $proveedor->getPersonaApellido1() . "',
            `personaapellido2`='" . $proveedor->getPersonaApellido2() . "',
            `personatelefono`='" . $proveedor->getPersonaTelefono() . "',
            `personacorreo`='" . $proveedor->getCorreo() . "'
            WHERE personaid='" . $proveedor->getPersonaId() . "';");

            $this->conexion->cerrarConexion();
            
        }
        return $personanuevo ;
        
    }

    //eliminar
    public function eliminarProveedor($proveedorid) {
      if ($this->conexion->crearConexion()->set_charset('utf8')) {
        $eliminado=$this->conexion->crearConexion()->query("UPDATE `tbproveedores` SET `proveedorestado`=0 WHERE proveedorid='".$proveedorid."';");
        $this->conexion->cerrarConexion();

        return $eliminar;
      }  
    }

    //buscar
    public function buscarProveedor($proveedorid) {
        if ($this->conexion->crearConexion()->set_charset('utf8')) {

            $array = array();

            $buscarProveedor = $this->conexion->crearConexion()->query("SELECT *
                FROM tbproveedores e
                INNER JOIN tbpersonas p ON e.personaid= p.personaid
                INNER JOIN tbproductos z ON z.productoid= e.productoid
                WHERE e.proveedorid='" . $proveedorid . "' AND e.proveedorestado = '1';");

            $this->conexion->cerrarConexion();
            
            while ($resultado = $buscarProveedor->fetch_assoc()) {
                array_push($array, $resultado);
            }
            return $array;
        }
    }

    //mostrar clientes
    public function mostrarProveedor() {
       if ($this->conexion->crearConexion()->set_charset('utf8')) {

            $array = array();

            $buscarProveedor = $this->conexion->crearConexion()->query("SELECT *
                FROM tbproveedores e
                INNER JOIN tbpersonas p ON e.personaid= p.personaid
                INNER JOIN tbproductos z ON z.productoid= e.productoid
                WHERE  e.proveedorestado = '1';");

            $this->conexion->cerrarConexion();
            
            while ($resultado = $buscarProveedor->fetch_assoc()) {
                array_push($array, $resultado);
            }
            return $array;
        } 
    }

}

?>