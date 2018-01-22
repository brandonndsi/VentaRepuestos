<?php

include '../../domain/personas/Personas.php';

class Clientes extends Personas {
    
    private $clienteid;
    private $clientedireccionexacta;
    private $clienteclave;
    private $clienteestado;
    
    public function Clientes($clienteid, $clientedireccionexacta, $clienteclave, $clienteestado) {
        $this->clienteid = $clienteid;
        $this->clientedireccionexacta = $clientedireccionexacta;
        $this->clienteclave = $clienteclave;
        $this->clienteestado = $clienteestado;
    }
    public function getClienteid() {
        return $this->clienteid;
    }

    public function getClientedireccionexacta() {
        return $this->clientedireccionexacta;
    }

    public function getClienteclave() {
        return $this->clienteclave;
    }

    public function getClienteestado() {
        return $this->clienteestado;
    }

    public function setClienteid($clienteid) {
        $this->clienteid = $clienteid;
    }

    public function setClientedireccionexacta($clientedireccionexacta) {
        $this->clientedireccionexacta = $clientedireccionexacta;
    }

    public function setClienteclave($clienteclave) {
        $this->clienteclave = $clienteclave;
    }

    public function setClienteestado($clienteestado) {
        $this->clienteestado = $clienteestado;
    }
}

?>