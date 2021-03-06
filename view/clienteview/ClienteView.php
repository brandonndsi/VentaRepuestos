
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8" content="text/html; charset=ISO-8859-1">
        <title>Cliente</title>
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="../../css/jquery.tabla.css">
        <link rel="stylesheet" type="text/css" href="../../css/estilocrudcliente.css">
        <link rel="stylesheet" type="text/css" href="../../css/notificaciones/todo.css">
        <!-- JS-->
        <script src="../../js/jquery-3.3.1.js"></script>
        <script src="../../js/jquery-ui.js"></script>
        <script src="../../js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="../../js/Cliente.js"></script>
        
        
        <script>
            $(document).ready(function () {
                mostrarCliente();
                
            });
        </script>

    </head>
    <body>
      <?php 
        include_once '../menu/menuAdministrador.php';
        ?>
        <center>
        <h2>
            Administración de Clientes
            <button class="btn btn-primary" onclick="nuevoMostrar()">Nuevo</button>
        </h2> 
    </center>
    <div class="col-md-12 col-md-offset-2">
        <table id="listaCliente" class="table table-striped table-bordered" cellspacing="0" width="100%" >
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Cedula</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Cedula</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!--Modal de cliente nuevo -->
    <div id="modalNuevo">
        <div id="form">
        <h2 id="nu">Nuevo Cliente</h2>
        <div id="contenedorNuevo">
        <input type="text" placeholder="Cedula" name="cedula" id="cedula" class="input-50" required>
        <input type="text" placeholder="Nombre" name="nombre" id="nombre" class="input-50" required>
        <input type="text" placeholder="Apellido1" name="apellido1" id="apellido1" class="input-50" required>
        <input type="text" placeholder="Apellido2" name="apellido2" id="apellido2" class="input-50" required>
        <input type="email" placeholder="Correo" name="correo" id="correo" class="input-100" required>
        <input type="text" placeholder="Telefono" name="telefono" id="telefono" class="input-100" required>
        <input type="text" placeholder="persona" onkeyup="autoCompletado(this)" name="persona" id="persona" class="input-100" >
        <input type="submit"  value="Enviar" onclick="nuevoCliente()" id="enviar" class="input-50">
        <input type="submit" value="Cancelar" onclick="nuevoCerra()" id="cancelar" class="input-50"> 
        </div>
        </div>    
    </div>
    <!-- Modal de cliente eliminar -->
        <div id="modalEliminar">
        <div id="formEliminar">
            <h2 id="lblEliminar">Eliminar.</h2>
            <input type="hidden" name="clienteid" id="clienteid">
            <h3>Confirmar la Eliminaci&oacute;n.</h3>
        <input type="submit"  value="Enviar" onclick="eliminarCliente()" id="eliEm">
        <input type="submit" value="Cancelar" onclick="eliminarCerrar()" id="eliCe">
        </div>      
        </div> 
    <!--Modal ver cliente -->
    <div id="verModal">
        <div id="formVer">
        <h2 id="nuVer">Detalles de Cliente.</h2>
        <div id="contenerdorVer">
        <label id="lbl-50">Cedula:<input type="text" id="cedulaVer" readonly></label>
        <label id="lbl-50">Nombre:<input type="text" id="nombreVer" readonly></label>
        <label id="lbl-50">Apellido 1:<input type="text" id="apellido1Ver" readonly></label>
        <label id="lbl-50">Apellido 2:<input type="text" id="apellido2Ver" readonly></label>
        <label id="lbl-50">Correo:<input type="email" id="correoVer" readonly></label>
        <label id="lbl-50">Telefono:<input type="text" id="telefonoVer" readonly></label>
        <label id="lbl-50">Producto id:<input type="text" id="personaVer" readonly></label>
        <input type="submit"  value="Cerrar" onclick="cerrarVer()" id="cerrar"> 
        </div>
        </div>    
        </div>
    <!-- modal de modificar cliente -->
    <div id="modalModificar">
        <div id="form">
        <h2 id="nu">Modificar Cliente</h2>
        <div id="contenedorNuevo">
        <input type="hidden" name="id" id="idActualizar" class="input-50">
        <input type="text"  name="cedula" id="cedulaM" class="input-50">
        <input type="text"  name="nombre" id="nombreM" class="input-50">
        <input type="text"  name="apellido1" id="apellido1M" class="input-50">
        <input type="text"  name="apellido2" id="apellido2M" class="input-50">
        <input type="email"  name="correo" id="correoM" class="input-100">
        <input type="text"  name="telefono" id="telefonoM" class="input-100">
        <input type="text"  name="persona" id="personaM" class="input-100">
        <input type="submit"  value="Enviar" onclick="actualizarCliente()" id="enviar" class="input-50">
        <input type="submit" value="Cancelar" onclick="actualizarCerra()" id="cancelar" class="input-50"> 
        </div>  
        </div>
        </div>    
         <!-- notificacion de eliminar modal de confirmacion -->   
    <div id="notificacionEliminar">
        <?php 
            include_once '../modalnotificaciones/eliminar.php';
         ?>
    </div>
        <!--  notificacion de actualizar modal de confirmacion-->
    <div id="notificacionActualizar">
        <?php
        include_once '../modalnotificaciones/actualizar.php';
        ?>
    </div>
    <!--  notificacion de nuevo modal de confirmacion-->
    <div id="notificacionNuevo">
        <?php
        include_once '../modalnotificaciones/nuevo.php';
        ?>
    </div>
    </body>
</html>

