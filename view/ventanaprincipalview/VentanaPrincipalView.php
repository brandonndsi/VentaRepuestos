<!DOCTYPE html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Repuestos Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--CSS-->    
    <link rel="stylesheet" href="">

<body>
    <h3>
        <div class="section section-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="calltoaction-wrapper">
                            <h3>Pagina oficial <span style="color:#0066ff; text-transform:uppercase;font-size:24px;">Repuestos</span>
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
                    </div>
                </div>
            </div>
        </div>
        
    </h3>
    <ul>    
        <li><a href="../compraview/CompraView.php" target="_parent" class="btn btn-info">Registrar Compra</a></li>
        <li><a href="../ordencompraview/OrdenCompraView.php" target="_parent" class="btn btn-info">Orden de Compra</a></li>
        <li><a href="../facturaview/FacturaView.php" target="_parent" class="btn btn-info">Mostrar Facturas</a></li>
        <li><a href="../empleadoview/EmpleadoView.php" target="_parent" class="btn btn-info">Empleados</a></li>
        <li><a href="../tipoempleadoview/TipoEmpleadoView.php" target="_parent" class="btn btn-info">Tipos de Empleados</a></li>
        <li><a href="../clienteview/ClienteView.php" target="_parent" class="btn btn-info">Clientes</a></li>
        <li><a href="../proveedorview/ProveedorView.php" target="_parent" class="btn btn-info">Proveedores</a></li>
        <li><a href="../productoview/ProductoView.php" target="_parent" class="btn btn-info">Catalogo de Productos</a></li>
    </ul>
</body>
</html>
