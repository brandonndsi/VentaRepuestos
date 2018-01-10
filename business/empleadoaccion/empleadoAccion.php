<?php

include '../../data/dataempleado/DataEmpleado.php';
include '../../domain/empleados/Empleados.php';

$action = $_POST['accion'];

if ($action == "insertar") {


} else if ($action == "modificar") {

} else if ($action == 'eliminar') {

} else if ($action == 'buscar') {

} else if ($action == 'mostrar') {
    //$conexion = new DataEmpleado();
    //echo $conexion->mostrarEmpleados();

    echo 'hola';
}else{
    header("location: ../../../index.php");
}
?>
