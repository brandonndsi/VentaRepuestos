<!DOCTYPE html>

<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Administrador</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSS -->    
        <link rel="stylesheet" href="../../css/Administrador.css">
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/fonts/style.css">
        <!-- js -->
        <script type="text/javascript" src="../../js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../../js/imagen.js"></script>

    </head>
    <script>
        $(document).ready(function () {
            mostrarAdministrador();
        });
    </script>
    <body>
        <?php
        session_start();
        if (!isset($_SESSION['usuario'])) {
            header("location: ../loginview/LoginView.php");
        } else {
            $persona = $_SESSION['usuario'];
            $id = $persona[0];
        }
        ?>
        <div id="contenedor">
            <header>
            <div id="navegador">
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <a><label class="icon-help-with-circle"></label></a>
            <a><label class ="icon-search"></label></a>
            <a><label class="icon-bell"></label></a>

            <div id="menu">
                <h4><?php echo " " .$persona[1]; ?></h4>
                <ul>
                <li>
                <div id="imagenAdmin">
                       <img src="../../images/administrador/david.jpeg">
                </div>
                </li>
                </ul>
                <a href="../../business/sesionaccion/SesionDesconectarAccion.php">Cerrar</a>
                <a href="../compraview/CompraView.php">Registrar Compra</a>
                <a href="../ordencompraview/OrdenCompraView.php">orden de Compra</a>
                <a href="../facturaview/FacturaView.php">Factura</a>
                <a href="../empleadoview/EmpleadoView.php">Empleado</a>
                <a href="../tipoempleadoview/TipoEmpleadoView.php">Tipo Empleado</a>
                <a href="../clienteview/ClienteView.php">Cliente</a>
                <a href="../proveedorview/ProveedorView.php">Proveedor</a>
                <a href="../ventanaprincipalview/CatalogoAdmiView.php">Catalogo</a>
            </div>
            </div>
            </header>
            <div id="datos">
                <div id="nombre_informacion">
                <h1 class="text-titles"><i class="icon-user-tie"><?php echo " " . $persona[1]."  "; ?></i><small>Admin</small></h1>
                    <!--<img src="../../images/administrador/administrador.png" id="nuevo">-->
                <!--<p id="nombre"><b><?php //echo " " . $persona[1]; ?></b></p>-->
                <p>La principal persona responsable que le da soporte a la paguina de repuestos de la virgen de sarapiqui,
                    ademas eres el encargado de crear los respuestos, editar los precios,agregar nuevas categorias que se
                    adacten al cliente, entre otras cosas, evitar que los hackers roben informacion de la misma base de datos
                    de la aplicacion , el responsable de todo.</p> 
            </div> 
        </div>
        <input type="hidden" id="personaid" value="<?php echo $id; ?>">
    </body>
</html>