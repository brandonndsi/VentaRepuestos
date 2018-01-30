<?php

class Facturas {
    private $idfactura;
    private $numerofactura;
    private $fechafactura;
    private $idcliente;
    private $idvendedor;
    private $condicion;
    private $totalventa;
    private $estadofactura;
   function Facturas($idfactura,$numerofactura,$fechafactura,$idcliente,
   					$idvendedor,$condicion,$totalventa,$estadofactura){
   	$this->idfactura=$idfactura;
   	$this->numerofactura=$numerofactura;
   	$this->fechafactura=$fechafactura;
   	$this->idcliente=$idcliente;
   	$this->idvendedor=$idvendedor;
   	$this->condicion=$condicion;
   	$this->totalventa=$totalventa;
   	$this->estadofactura=$estadofactura;
   }

   /*Los get*/
   function getIdFactura(){
   	return $this->idfactura;
   }
   function getNumeroFactura(){
	return $this->numerofactura;
   }
   function getFechaFactura(){
	return $this->fechafactura;
   }
   function getIdCliente(){
	return $this->idcliente;
   }
   function getIdVendedor(){
	return $this->idvendedor;
   }
   function getCondicion(){
	return $this->condicion;
   }
   function getTotalVenta(){
	return $this->totalventa;
   }
   function getEstadoFactura(){
	return $this->estadofactura;
   }
   /*los set*/
   function setIdFactura($idfactura){
   	$this->idfactura=$idfactura;
   }
   function setNumeroFactura($numerofactura){
	$this->numerofactura=$numerofactura;
   }
   function setFechaFactura($fechafactura){
	$this->fechafactura=$fechafactura;
   }
   function setIdCliente($idcliente){
	$this->idcliente=$idcliente;
   }
   function setIdVendedor($idvendedor){
	$this->idvendedor=$idvendedor;
   }
   function setCondicion($condicion){
	$this->condicion=$condicion;
   }
   function setTotalVenta($totalventa){
	$this->totalventa=$totalventa;
   }
   function setEstadoFactura($estadofactura){
  	$this->estadofactura=$estadofactura; 	
   }

}

?>
