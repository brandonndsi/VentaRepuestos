<?php 
class imagen{
	private $personaid;
	private $productoid;
	private $imagenruta;
	private $imagenestado;
	function imagen($personaid,$productoid,$imagenruta,$imagenestado){
		$this->personaid=$personaid;
		$this->productoid=$productoid;
		$this->imagenruta=$imagenruta;
		$this->imagenestado=$imagenestado;
	}
	/*generando los get*/
	function getPersonaId(){
		return $this->personaid;
	}
	function getProductoId(){
		return $this->productoid;
	}
	function getImagenRuta(){
		return $this->imagenruta;
	}
	function getImagenEstado(){
		return $this->imagenestado;
	}
	/*generanodo los set*/
	function setPersonaId($personaid){
		$this->personaid=$personaid;
	}
	function setProductoId($productoid){
		$this->productoid=$productoid;
	}
	function setImagenRuta($imagenruta){
		$this->imagenruta=$imagenruta;
	}
	function setImagenEstado($imagenestado){
		$this->imagenestado=$imagenestado;
	}
}

 ?>