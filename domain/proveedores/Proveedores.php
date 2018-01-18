<?php

include_once '../../domain/personas/Personas.php';

class Proveedores extends Personas {
    private $proveedorId;
    private $proveedorProductoId;/*personaid*/
    private $proveedorEstado;

    function Proveedores($proveedorid,$proveedorproductoid,$proveedorestado){
        $this->proveedorId=$proveedorid;
        $this->proveedorProductoId=$proveedorproductoid;
        $this->proveedorEstado=$proveedorestado;
    }
    /*Elaboracion de los set de las variables*/
    public function setProveedorId($proveedorid){
        $this->proveedorId=$proveedorid;
    }
    public function setProveedorProductoId($proveedorproductoid){
        $this->proveedorProductoId=$proveedorproductoid;
    }
    public function setProveedorEstado($proveedorestado){
        $this->proveedorEstado=$proveedorestado;
    }
    /*elaboracion de los get de las variables*/
    public function getProveedorId(){
        return $this->proveedorId;
    }
    public function getProveedorProductoId(){
        return $this->proveedorProductoId;
    }
    public function getProveedorEstado(){
        return $this->proveedorEstado;
    }
}

?>

