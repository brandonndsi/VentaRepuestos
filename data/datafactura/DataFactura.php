<?php

class DataFactura {

    private $conexion;

    function DataFactura() {
        include_once '../../data/dbconexion/Conexion.php';
        $this->conexion = new Conexion();
    }

    function mostrarFactura() {
        
    }

    function buscarFactura() {
        
    }

}
