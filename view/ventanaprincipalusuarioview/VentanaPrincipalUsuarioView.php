<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cliente</title>

        <!--CSS-->    
        <link rel="stylesheet" href="../../css/Administrador.css">
        <!-- js -->

    </head>
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
            <div id="navegador">
                <a href="../../business/sesionaccion/SesionDesconectarAccion.php">Cerrar</a>
                <a href="">Buzon de entrada </a>
                <a href="../ventanaprincipalusuarioview/CatalogoUsuarioView.php">Catalogo </a>
            </div>
            <div id="datos">
                <h3>Bienvenido</h3>
                <div id="imagen">
                    <img src="../../images/administrador/clients.jpg" id="nuevo">
                </div>
                <p id="nombre"><b><?php echo " " . $persona[1]; ?></b></p>
                <p>Puedes comenzar a comprar en la tienda de categorias cualquier repuesto que nesesites.</p>
            </div>  
        </div>

    </body>
</html>
