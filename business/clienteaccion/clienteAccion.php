<?php

include '../../data/datacliente/DataCliente.php';
include '../../domain/clientes/Clientes.php';

/* @var $action type */
$action = $_POST['accion'];

if ($action == "insertar") {

    $conexion = new DataEmpleado();
    
    $clienteNombre = $_POST['Clientenombre'];
    $clienteApellido1 = $_POST['Clienteapellido1'];
    $clienteApellido2 = $_POST['Clienteapellido2'];
    $clienteTelefono = $_POST['Clientetelefono'];
    $clienteCorreo = $_POST['Clientecorreo'];
    $clienteClave = $_POST['Clienteclave'];
    $clientedireccionexacta = $_POST['Clientedireccion'];

    if (!empty($clienteNombre) && !empty($clienteApellido1) && !empty($clienteApellido2) 
            && !empty($personaCedula) && !empty($personaTelefono) && !empty($personaDireccion) 
            && !empty($personaCorreo)) {

        $cliente = new Clientes("", $clienteNombre,$clienteApellido1, $clienteApellido2,
                $clienteTelefono, $clienteCorreo, $clienteClave, $clientedireccionexacta);
        $result = $conexion->insertarCliente();
        
    } else {
        $error = "Error de Registro";
        echo $error;
    }
} else if ($action == "modificar") {
    
} else if ($action == "eliminar") {
    
} else if ($action == "mostrar") {
    
} else {
    
}
?>
