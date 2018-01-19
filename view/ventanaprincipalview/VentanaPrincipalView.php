<!DOCTYPE html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--CSS-->    
    <link rel="stylesheet" href="../../css/Administrador.css">
    <!-- js -->
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
    $persona = $_SESSION['usuario'];
    $id=$persona[0];   
    ?>
    <div id="contenedor">
    <div id="navegador">
       <a href="../../business/sesionaccion/SesionDesconectarAccion.php">Cerrar</a>
        <a href="../compraview/CompraView.php">Registrar Compra</a>
        <a href="../ordencompraview/OrdenCompraView.php">orden de Compra</a>
        <a href="../facturaview/FacturaView.php">Factura</a>
        <a href="../empleadoview/EmpleadoView.php">Empleado</a>
        <a href="../tipoempleadoview/TipoEmpleadoView.php">Tipo Empleado</a>
        <a href="../clienteview/ClienteView.php">Cliente</a>
        <a href="../proveedorview/ProveedorView.php">Proveedor</a>
        <a href="../productoview/ProductoView.php">Catalogo</a> 
    </div>
   <div id="datos">
        <h3>Bienvenido</h3>
        <div id="imagen">
        <img src="../../images/administrador/administrador.png" id="nuevo">
        </div>
        <p id="nombre"><b><?php $persona[1];?></b></p>
      <p>La principal persona responsable que le da soporte a la paguina de repuestos de la virgen de sarapiqui, ademas eres el encargado de crear los respuestos, editar los precios,agregar nuevas categorias que se adacten al cliente, entre otras cosas, evitar que los hackers roben informacion de la misma base de datos de la aplicacion , el responsable de todo.</p>
   </div>  
 </div>
 <input type="hidden" id="personaid" value="<?php echo $id;?>">
</body>
</html>