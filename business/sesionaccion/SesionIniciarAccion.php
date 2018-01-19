<?php

if (isset($_POST["Entrar"])) {

    include '../sesionbusiness/sesionBusiness.php';

    $sesionBusiness = new sesionBusiness();
    $result = $sesionBusiness->logueoEmpleado($email = $_POST['correo'], $password = $_POST['contrasenia']);
    
    if ($result != NULL) {// si devuelve valores en la consulta entra
        $usuario = array();
        foreach ($result as $current):
            session_start();
            array_push($usuario,$current['personaid']);
            array_push($usuario,$current['personanombre']);
            array_push($usuario,$current['empleadocedula']);
            array_push($usuario,$current['personacorreo']);
            array_push($usuario,$current['empleadocontrasenia']);
            $_SESSION['usuario'] = $usuario;
            /*
            $_SESSION['idPersona'] = $current['personaid'];
            $_SESSION['nombrePersona'] = $current['personanombre'];
            $_SESSION['cedulaPersona'] = $current['empleadocedula'];
            $_SESSION['correoPersona'] = $current['personacorreo'];
            $_SESSION['contraseniaPersona'] = $current['empleadocontrasenia'];*/

            if ($current['tipoempleado'] == "Administrador") {
                header("Location: ../../view/ventanaprincipalview/VentanaPrincipalView.php");
            } else {
                header("Location: ../../view/ventanaprincipalusuarioview/ventanaprincipalUsuarioview.php");
            }
        endforeach;
    } else {// si no no entra
        header("location:../../business/sesionaccion/SesionDesconectarAccion.php");
    }
}
?>
