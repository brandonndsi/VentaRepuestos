<?php

include '../../data/datacliente/DataCliente.php';
include '../../domain/clientes/Clientes.php';

/* @var $action type */
$action = $_POST['accion'];

if ($action == "insertar") {

    echo "entra a insertar ";

    $error_encontrado = "";
    
    if (validarClave($_POST["Clienteclave"], $error_encontrado)) {
        echo "PASSWORD VÁLIDO";
        $conexion = new DataEmpleado();
        $result = $conexion->insertarCliente();
    } else {
        echo "PASSWORD NO VÁLIDO: " . $error_encontrado;
    }

    function validarClave($clave, &$error_clave) {
        if (strlen($clave) < 6) {
            $error_clave = "La clave debe tener al menos 6 caracteres";
            return false;
        }
        if (strlen($clave) > 16) {
            $error_clave = "La clave no puede tener más de 16 caracteres";
            return false;
        }
        if (!preg_match('`[a-z]`', $clave)) {
            $error_clave = "La clave debe tener al menos una letra minúscula";
            return false;
        }
        if (!preg_match('`[A-Z]`', $clave)) {
            $error_clave = "La clave debe tener al menos una letra mayúscula";
            return false;
        }
        if (!preg_match('`[0-9]`', $clave)) {
            $error_clave = "La clave debe tener al menos un caracter numérico";
            return false;
        }
        $error_clave = "";
        return true;
    }

} else if ($action == "modificar") {
    
} else if ($action == "eliminar") {
    
} else if ($action == "mostrar") {
    
} else {
    
}
?>
