<?php

include '../../data/dataempleado/DataEmpleado.php';
include '../../domain/empleados/Empleados.php';

$action = $_POST['accion'];

if ($action == "insertar") {
    if (isset($_POST['nombre']) && isset($_POST['apellido1']) &&
            isset($_POST['apellido2']) && isset($_POST['cedula']) &&
            isset($_POST['telefono']) && isset($_POST['correo']) &&
            isset($_POST['tipoEmpleado']) && isset($_POST['clave']) && isset($_POST['edad']) && isset($_POST['sexo']) && isset($_POST['estadoCivil']) && isset($_POST['banco']) && isset($_POST['cuenta']) && isset($_POST['fechaIngreso'])) {

        $nombre = htmlentities($_POST['nombre']);
        $apellido1 = htmlentities($_POST['apellido1']);
        $apellido2 = htmlentities($_POST['apellido2']);
        $cedula = htmlentities($_POST['cedula']);
        $telefono = htmlentities($_POST['telefono']);
        $correo = htmlentities($_POST['correo']);
        $tipoEmpleado = htmlentities($_POST['tipoEmpleado']);
        $clave = htmlentities($_POST['clave']);
        $edad = htmlentities($_POST['edad']);
        $sexo = htmlentities($_POST['sexo']);
        $estadoCivil = htmlentities($_POST['estadoCivil']);
        $banco = htmlentities($_POST['banco']);
        $cuenta = htmlentities($_POST['cuenta']);
        $fechaIngreso = htmlentities($_POST['fechaIngreso']);


        if (strlen($nombre) > 0 && strlen($apellido1) > 0 &&
                strlen($apellido2) > 0 && strlen($cedula) > 0 &&
                strlen($telefono) > 0 && strlen($correo) > 0 && strlen($tipoEmpleado) > 0 &&
                strlen($clave) > 0 && strlen($edad) > 0 && strlen($sexo) > 0 &&
                strlen($estadoCivil) > 0 && strlen($banco) > 0 &&
                strlen($cuenta) > 0 && strlen($fechaIngreso) > 0) {

            if (!is_numeric($nombre)) {

                $empleado = new Empleados(null, $cedula, $tipoEmpleado, $clave, $edad, $sexo, $estadoCivil, $banco, $cuenta, $fechaIngreso, 1);

                $empleado->setPersonaNombre($nombre);
                $empleado->setPersonaApellido1($apellido1);
                $empleado->setPersonaApellido2($apellido2);
                $empleado->setPersonaCedula($cedula);
                $empleado->setPersonaTelefono($telefono);
                $empleado->setCorreo($correo);
                $empleado->setTipoempleado($tipoEmpleado);
                $empleado->setEmpleadocontrasenia($clave);
                $empleado->setEmpleadoedad($edad);
                $empleado->setEmpleadosexo($sexo);
                $empleado->setEmpleadoestadocivil($estadoCivil);
                $empleado->setEmpleadobanco($banco);
                $empleado->setEmpleadocuentabancaria($cuenta);
                $empleado->setFechaingreso($fechaIngreso);

                $conexion = new DataEmpleado();
                $result = $conexion->insertarEmpleado($empleado);

                return $result;
            }
        }
    }
} else if ($action == "modificar") {

    if (isset($_POST['nombre']) && isset($_POST['apellido1']) &&
            isset($_POST['apellido2']) && isset($_POST['cedula']) &&
            isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['clave']) 
            && isset($_POST['edad']) && isset($_POST['sexo']) && isset($_POST['estadoCivil'])
            && isset($_POST['banco']) && isset($_POST['cuenta'])) {

        $nombre = htmlentities($_POST['nombre']);
        $apellido1 = htmlentities($_POST['apellido1']);
        $apellido2 = htmlentities($_POST['apellido2']);
        $cedula = htmlentities($_POST['cedula']);
        $telefono = htmlentities($_POST['telefono']);
        $correo = htmlentities($_POST['correo']);
        $clave = htmlentities($_POST['clave']);
        $edad = htmlentities($_POST['edad']);
        $sexo = htmlentities($_POST['sexo']);
        $estadoCivil = htmlentities($_POST['estadoCivil']);
        $banco = htmlentities($_POST['banco']);
        $cuenta = htmlentities($_POST['cuenta']);


        if (strlen($nombre) > 0 && strlen($apellido1) > 0 &&
                strlen($apellido2) > 0 && strlen($cedula) > 0 &&
                strlen($telefono) > 0 && strlen($correo) > 0 &&
                strlen($clave) > 0 && strlen($edad) > 0 && strlen($sexo) > 0 &&
                strlen($estadoCivil) > 0 && strlen($banco) > 0 &&
                strlen($cuenta) > 0) {

            if (!is_numeric($nombre)) {

                $empleado = new Empleados(null, $cedula, $clave, $edad, $sexo, $estadoCivil, $banco, $cuenta, 1);

                $empleado->setPersonaNombre($nombre);
                $empleado->setPersonaApellido1($apellido1);
                $empleado->setPersonaApellido2($apellido2);
                $empleado->setPersonaCedula($cedula);
                $empleado->setPersonaTelefono($telefono);
                $empleado->setCorreo($correo);
                $empleado->setEmpleadocontrasenia($clave);
                $empleado->setEmpleadoedad($edad);
                $empleado->setEmpleadosexo($sexo);
                $empleado->setEmpleadoestadocivil($estadoCivil);
                $empleado->setEmpleadobanco($banco);
                $empleado->setEmpleadocuentabancaria($cuenta);

                $conexion = new DataEmpleado();
                return $conexion->modificarEmpleado($empleado);
            }
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
