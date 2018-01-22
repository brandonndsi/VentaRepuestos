<?php

if (isset($_POST["Entrar"])) {

    include '../sesionbusiness/sesionBusiness.php';

    $sesionBusiness = new sesionBusiness();
    $result = $sesionBusiness->logueoEmpleado($email = $_POST['correo'], $password = $_POST['contrasenia']);

    if ($result != NULL) {// si devuelve valores de empleado en la consulta entra
        $usuario = array();
        foreach ($result as $current):
            session_start();
            array_push($usuario, $current['personaid']);
            array_push($usuario, $current['personanombre']);
            array_push($usuario, $current['empleadocedula']);
            array_push($usuario, $current['personacorreo']);
            array_push($usuario, $current['empleadocontrasenia']);
            $_SESSION['usuario'] = $usuario;

            if ($current['tipoempleado'] == "Administrador") {
                header("Location: ../../view/ventanaprincipalview/VentanaPrincipalView.php");
            } else {
                header("Location: ../../view/ventanaprincipalusuarioview/ventanaprincipalUsuarioview.php");
            }
        endforeach;
    } else {// verifica que sea un cliente
        $resultcliente = $sesionBusiness->logueoCliente($email = $_POST['correo'], $password = $_POST['contrasenia']);

        if ($resultcliente != NULL) {// si devuelve valores en la consulta entra
            $usuario = array();
            foreach ($resultcliente as $current):
                session_start();
                array_push($usuario, $current['personaid']);
                array_push($usuario, $current['personanombre']);
                array_push($usuario, $current['personacorreo']);
                array_push($usuario, $current['clienteclave']);
                array_push($usuario, $current['clientedireccionexacta']);
                $_SESSION['usuario'] = $usuario;

                header("Location: ../../view/ventanaprincipalusuarioview/ventanaprincipalUsuarioview.php");

            endforeach;
        }else {
            header("location:../../business/sesionaccion/SesionDesconectarAccion.php");
        }
    }
}
?>
