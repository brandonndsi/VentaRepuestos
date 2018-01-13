<?php

include '../../data/dataempleado/DataEmpleado.php';
include '../../domain/empleados/Empleados.php';

$action = $_POST['accion'];

if ($action == "insertar") {
    
} else if ($action == "modificar") {

    $id = $_POST['personaId'];
    $nombre = $_POST['personaNombre'];
    $apellido1 = $_POST['personaApellido1'];
    $apellido2= $_POST['personaApellido2'];
    $cedula = $_POST['personaCedula'];
    $telefono = $_POST['personaTelefono'];
    $correo = $_POST['personaCorreo'];
    $contrasenia = $_POST['personaContra'];
    $edad = $_POST['personaEdad'];
    $sexo = $_POST['personaSexo'];
    $estadocivil = $_POST['personaEstado'];
    $banco = $_POST['personaBanco'];
    $cuenta = $_POST['personaCuenta'];

    if (strlen($id) > 0 && strlen($nombre) > 0 &&
            strlen($apellido1) > 0 && strlen($apellido2) > 0 && strlen($cedula) > 0 && strlen($telefono) > 0 
            && strlen($correo) > 0 && strlen($contrasenia) > 0 && strlen($edad) > 0 &&
            strlen($sexo) > 0 && strlen($estadocivil) > 0 && strlen($banco) > 0 && strlen($cuenta) > 0) {
        if (!is_numeric($telefono)) {
            echo "El numero de telefono no es valido";
        } else {
            
            $empleado = new Empleados($id, $nombre, $apellido1, $apellido2, $cedula,
                $telefono, $correo, $contrasenia, $edad, $sexo, $estadocivil,
                $banco, $cuenta);
            
            $empleado->setEmpleadoid($id);
            $empleado->setPersonaNombre($nombre);
            $empleado->setPersonaApellido1($apellido1);
            $empleado->setPersonaApellido2($apellido2);
            $empleado->setEmpleadocedula($cedula);
            $empleado->setPersonaTelefono($telefono);
            $empleado->setCorreo($correo);
            $empleado->setEmpleadocontrasenia($contrasenia);
            $empleado->setEmpleadoedad($edad);
            $empleado->setEmpleadosexo($sexo);
            $empleado->setEmpleadoestadocivil($estadocivil);
            $empleado->setEmpleadobanco($banco);
            $empleado->setEmpleadocuentabancaria($cuenta);

            $conexion = new DataEmpleado();
            $conexion->modificarEmpleado($empleado);
        }
    }
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
