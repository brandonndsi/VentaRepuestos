<?php

class Personas {
    private $personaId;
    private $personaCedula;
    private $personaNombre;
    private $personaApellido1;
    private $personaApellido2;
    private $personaTelefono;
    private $personaCorreo;
    private $personaEstado;

    function Personas($personaid,$personacedula,$personanombre,$personaapellido1,$personaapellido2,
    					$personatelefono,$personacorreo,$personaestado){
    	$this->personaid=$personaid;
    	$this->personaCedula=$personacedula;
    	$this->personaNombre=$personanombre;
    	$this->personaApellido1=$personaapellido1;
    	$this->personaApellido2=$personaapellido2;
    	$this->personaTelefono=$personatelefono;
    	$this->personaCorreo=$personacorreo;
    	$this->personaEstado=$personaestado;

    }
    /*Generacion de los set para insertar los datos de la personas*/
    public function setPersonaId($personaid){
    	$this->personaId=$personaid;
    }
    public function setPersonaCedula($personacedula){
    	$this->personaCedula=$personacedula;
    }
    public function setPersonaNombre($personanombre){
    	$this->personaNombre=$personanombre;
    }
    public function setPersonaApellido1($personaapellido1){
    	$this->personaApellido1=$personaapellido1;
    }
    public function setPersonaApellido2($personaapellido2){
    	$this->personaApellido2=$personaapellido2;
    }
    public function setPersonaTelefono($personatelefono){
    	$this->personaTelefono=$personatelefono;
    }
    public function setCorreo($correo){
    	$this->personaCorreo=$correo;
    }
    public function setPersonaEstado($estado){
    	$this->personaEstado=$estado;
    }
    /*Generacion de los get de optencion de los datos*/
    public function getPersonaId(){
    	return $this->personaId;
    }
    public function getPersonaCedula(){
    	return $this->personaCedula;
    }
    public function getPersonaNombre(){
    	return $this->personaNombre;
    }
    public function getPersonaApellido1(){
    	return $this->personaApellido1;
    }
    public function getPersonaApellido2(){
    	return $this->personaApellido2;
    }
    public function getPersonaTelefono(){
    	return$this->personaTelefono;
    }
    public function getCorreo(){
    	return $this->personaCorreo;
    }
    public function getPersonaEstado(){
    	return $this->personaEstado;
    }
    
}

?>