<!DOCTYPE html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Administrativos.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--CSS-->    
    <link rel="stylesheet" href="../../css/Administrador.css">

<body>
    <?php
    session_start();
    $nombrePersona = $_SESSION['nombrePersona'];
        
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
        <img src="../../images/administrador/administrador.png">
        </div>
        <p id="nombre"><b><?php echo $nombrePersona;?></b></p>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt deleniti necessitatibus quasi, cumque corrupti dolorum ad voluptatem ea corporis numquam, maiores nam. Placeat earum consequatur consequuntur itaque quas eveniet rem voluptas tempora, doloremque blanditiis autem, magni provident quos inventore. Quos, perferendis illo alias dolorem velit quam in dolor aperiam aliquam, ut, rem, provident nobis nostrum possimus veritatis reprehenderit praesentium nihil eos repellendus asperiores. Facilis nemo non accusamus excepturi, nulla autem sequi, ipsum at nostrum asperiores amet! Eius saepe, libero veritatis dolorum hic, at, beatae magnam architecto, quasi vel odio placeat.</p>
   </div>  
 </div>

</body>
</html>