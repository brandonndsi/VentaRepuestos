<?php

include '../../data/dataempleado/DataEmpleado.php';
include '../../domain/empleados/Empleados.php';

$action = $_POST['accion'];

if ($action == "insertar") {
    
} else if ($action == "modificar") {
    
} else if ($action == 'eliminar') {
    
    $pro = $_POST['empleadoid'];
    if (is_numeric($pro)) {
        $conexion = new DataEmpleado();
        $result = $conexion->eliminarEmpleado($pro);
    } else {
        echo "error";
    }
    
} else if ($action == 'mostrar') {
    $conexion = new DataEmpleado();
    echo $conexion->mostrarEmpleados();
} else {
    header("location: ../../../index.php");
}
?>
