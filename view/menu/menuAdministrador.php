            <?php
            session_start();
        if (!isset($_SESSION['usuario'])) {
            header("location: ../loginview/LoginView.php");
        } else {
            $persona = $_SESSION['usuario'];
            $id = $persona[0];
        }
            ?>
<header> 
            <div id="navegador">
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <a href="javascript:abrirModal();"><label class="icon-help-with-circle"></label></a>
            <a href="javascript:abrirBuscar();"><label class ="icon-search"></label></a>
            <a href="javascript:abrirCampana();"><label class="icon-bell"></label></a>

            <div id="menu">
                <h4><?php echo " " .$persona[1]; ?></h4>
                <ul>
                <li>
                <div id="imagenAdmin">
                       <img src="../../images/administrador/david.jpeg">
                </div>
                </li>
                </ul>
                <a href="../../business/sesionaccion/SesionDesconectarAccion.php">
                    <span class="icon-switch"></span>Cerrar</a>
                <a href="../ventanaprincipalview/VentanaPrincipalView.php"><span class="icon-home"></span>Principal</a>
                <a href="../compraview/CompraView.php">
                    <span class="icon-file-text2"></span>Registrar Compra</a>
                <a href="../ordencompraview/OrdenCompraView.php">
                    <span class="icon-cart"></span>orden de Compra</a>
                <a href="../facturaview/FacturaView.php">
                    <span class="icon-file-text"></span>Factura</a>
                <a href="../empleadoview/EmpleadoView.php">
                    <span class="icon-profile"></span>Empleado</a>
                <a href="../tipoempleadoview/TipoEmpleadoView.php">
                    <span class="icon-user-tie"></span>Tipo Empleado</a>
                <a href="../clienteview/ClienteView.php">
                    <span class="icon-user-plus"></span>Cliente</a>
                <a href="../proveedorview/ProveedorView.php">
                    <span class="icon-truck"></span>Proveedor</a>
                <a href="../ventanaprincipalview/CatalogoAdmiView.php">
                    <span class="icon-clipboard"></span>Catalogo</a>
            </div>
            </div>
            </header>
        <?php
            /*include_once '../modalnotificaciones/modalnotificacionadministrador/administradorayuda.php';
            include_once '../modalnotificaciones/modalnotificacionadministrador/administradorbuscar.php';
            include_once '../modalnotificaciones/modalnotificacionadministrador/administradornotificacion.php';*/
        ?>