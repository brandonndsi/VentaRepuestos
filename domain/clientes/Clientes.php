<?php

include '../../domain/personas/Personas.php';

class Clientes extends Personas {
    
    private $clienteid;
    private $clientedireccionexacta;
    
    public function Clientes($clienteid, $clientedireccionexacta) {
        $this->clienteid = $clienteid;
        $this->clientedireccionexacta = $clientedireccionexacta;
    }
    public function getClienteid() {
        return $this->clienteid;
    }

    public function getClientedireccionexacta() {
        return $this->clientedireccionexacta;
    }

    public function setClienteid($clienteid) {
        $this->clienteid = $clienteid;
    }

    public function setClientedireccionexacta($clientedireccionexacta) {
        $this->clientedireccionexacta = $clientedireccionexacta;
    }
}

?>