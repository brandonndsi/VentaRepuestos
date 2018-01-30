<!DOCTYPE html>

<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Administrador</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSS -->
        <!--http://manos.malihu.gr/jquery-custom-content-scroller/ -->   
        <link rel="stylesheet" href="../../css/Administrador.css">
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/fonts/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/scroll/jquery.mCustomScrollbar.css">
        <!-- js -->
        <script type="text/javascript" src="../../js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../../js/imagen.js"></script>
        <script type="text/javascript" src="../../js/administrador.js"></script>
        <script type="text/javascript" src="../../js/administradormodal.js"></script>
        <script type="text/javascript" src="../../js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>

    </head>
    <script>
        $(document).ready(function () {
            mostrarAdministrador();
        });
    </script>
    <body>
        <div id="contenedor">
            <?php 
                include_once '../menu/menuAdministrador.php';
             ?>
            <div id="datos">
                <div id="nombre_informacion">
                <h1 class="text-titles"><i class="icon-user-tie"><?php echo " " . $persona[1]."  "; ?></i><small>Admin</small></h1>
                <p>La principal persona responsable que le da soporte a la paguina de repuestos de la virgen de sarapiqui,
                    ademas eres el encargado de crear los respuestos, editar los precios,agregar nuevas categorias que se
                    adacten al cliente, entre otras cosas, evitar que los hackers roben informacion de la misma base de datos
                    de la aplicacion , el responsable de todo.</p> 
            </div> 
        </div>
        <input type="hidden" id="personaid" value="<?php echo $id; ?>">
               
    </div>
    </body>
</html>