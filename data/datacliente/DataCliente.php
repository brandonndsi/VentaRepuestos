<?php

class DataCliente {

    private $conexion;

    function DataCliente() {
        include_once '../../data/dbconexion/Conexion.php';
        $this->conexion = new Conexion();
    }

    //insertar
    public function insertarCliente() {

    }

    //Modificar los clientes
    public function modificarCliente() {

    }

    //mostrar clientes
    public function mostrarClientes() {
    
        
    }

}

?>