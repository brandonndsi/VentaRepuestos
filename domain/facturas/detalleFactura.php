<?php 
class detalleFactura{
	private $idDetalle;
	private $numeroFactura;
	private $idProducto;
	private $cantidad;
	private $precioVenta;
	function detalleFactura($idDetalle,$numeroFactura,$idProducto,$cantidad,$precioVenta){
		$this->idDetalle=$idDetalle;
		$this->numeroFactura=$numeroFactura;
		$this->idProducto=$idProducto;
		$this->cantidad=$cantidad;
		$this->precioVenta=$precioVenta;
	}
	/*los get de las variables*/
	function getIdDetalle(){
	return $this->idDetalle;
	}
	function getNumeroFactura(){
	return $this->numeroFactura;
	}
	function getIdProducto(){
	return $this->idProducto;
	}
	function getCantidad(){
	return $this->cantidad;
	}
	function getPrecioVenta(){
	return $this->precioVenta;	
	}
	/*con los set de las variables*/
	function setIdDetalle($idDetalle){
	$this->idDetalle=$idDetalle;
	}
	function setNumeroFactura($numeroFactura){
	$this->numeroFactura=$numeroFactura;
	}
	function setIdProducto($idProducto){
	$this->idProducto=$idProducto;
	}
	function setCantidad($cantidad){
	$this->cantidad=$cantidad;
	}
	function setPrecioVenta($precioVenta){
	$this->precioVenta=$precioVenta;	
	}
}

 ?>
