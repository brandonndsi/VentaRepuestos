<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Catalogo De Repuestos</title>
    </head>
    <body>
        <div class="container">
            <h3>Catalogo de <span style="color:brown; text-transform:uppercase;font-size:24px;">Repuestos</span>
                <a href="../../business/sesionaccion/SesionDesconectarAccion.php" class="btn btn-danger" >Cerrar Sesion</a>
            </h3> 
            <?php
            session_start();
            $nombrePersona = $_SESSION['nombrePersona'];
            ?>
            <h3>Bienvenid@</h3>
            <?php
            echo " " . $nombrePersona;
            ?>
        </div>

        <P>
            <a href="../categoriaproductoview/CategoriaProductoView.php" class="btn btn-info">Categorias </a></li


</body>
</html>
