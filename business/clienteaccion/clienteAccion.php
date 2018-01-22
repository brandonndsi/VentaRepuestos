<?php

include '../../data/datacliente/DataCliente.php';
include '../../domain/clientes/Clientes.php';

$action = $_POST['accion'];

if ($action == "insertar") {

    if (isset($_POST['nombre']) && isset($_POST['apellido1']) &&
            isset($_POST['apellido2']) && isset($_POST['telefono']) &&
            isset($_POST['correo']) && isset($_POST['clave']) &&
            isset($_POST['direccion'])) {

        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $direccion = $_POST['direccion'];

        if (strlen($nombre) > 0 && strlen($apellido1) > 0 &&
                strlen($apellido2) > 0 && strlen($telefono) > 0 &&
                strlen($correo) > 0 && strlen($clave) > 0 &&
                strlen($direccion) > 0) {

            if (!is_numeric($nombre)) {

                $cliente = new Clientes(null, $clave,$direccion, 1);

                $cliente->setPersonaCedula(null);
                $cliente->setPersonaNombre($nombre);
                $cliente->setPersonaApellido1($apellido1);
                $cliente->setPersonaApellido2($apellido2);
                $cliente->setPersonaTelefono($telefono);
                $cliente->setCorreo($correo);
                $cliente->setClienteclave($clave);
                $cliente->setClientedireccionexacta($direccion);

                $conexion = new DataCliente();
                $result = $conexion->insertarCliente($cliente);

                return $result;
            }
        }
    } else {
        // retorna un error al tratar de ingresar los datos del nuevo cliente
        $error = "ErrorNuevo";
        return $error;
    }
} else if ($action == "modificar") {
    
} else if ($action == "eliminar") {
    
} else if ($action == "mostrar") {
    
} else {
    
}
?>
