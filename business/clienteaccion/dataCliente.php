<?php
include_once '../../data/datacliente/DataCliente.php';
$datos=new DataCliente();
echo $datos->mostrarCliente();
?>