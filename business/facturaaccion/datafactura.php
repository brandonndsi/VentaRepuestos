<?php 
include_once '../../data/datafactura/DataFactura.php';
$Data= new DataFactura();
$imprimir=$Data->mostrarFactura();
echo $imprimir;
 ?>