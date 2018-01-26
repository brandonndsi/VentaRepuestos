<?php

include_once '../../domain/personas/Personas.php';

class Clientes extends Personas {
    private $clienteId;
    private $clientePersonaId;/*personaid*/
    private $clienteEstado;

    function Clientes($clienteid,$clientepersonaid,$clienteestado){
        $this->clienteId=$clienteid;
        $this->clientePersonaId=$clientepersonaid;
        $this->clienteEstado=$clienteestado;
    }
    /*Elaboracion de los set de las variables*/
    public function setClienteId($clienteid){
        $this->clienteId=$clienteid;
    }
    public function setClientePersonaId($clientepersonaid){
        $this->clientePersonaId=$clientepersonaid;
    }
    public function setClienteEstado($clienteestado){
        $this->clienteEstado=$clienteestado;
    }
    /*elaboracion de los get de las variables*/
    public function getClienteId(){
        return $this->clienteId;
    }
    public function getClientePersonaId(){
        return $this->clientePersonaId;
    }
    public function getClienteEstado(){
        return $this->clienteEstado;
    }
}

?>

