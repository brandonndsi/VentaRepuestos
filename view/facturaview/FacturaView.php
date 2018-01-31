<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Facturaciones</title>
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/fonts/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/facturacion.css">
        <link rel="stylesheet" type="text/css" href="../../css/scroll/jquery.mCustomScrollbar.css">
       
        <!-- JS -->
        <script src="../../js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../../js/administradormodal.js"></script>
        <script src="../../js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="../../js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
         <script type="text/javascript" src="../../js/facturacion.js"></script>
			
			<script>
            $(document).ready(function () {
                mostrarFactura();
                
            });
        </script>

    </head>
    <body>
    	<?php 
		include_once '../menu/menuAdministrador.php';
		?>
	<div id="contenedor">
			<div id="titulo_principal">
				<h3>facturaci&oacute;n.</h3>
			</div>
			<div id="body_principal">
				<label>Factura</label>
            <input type="submit" class="btn-nuevo" onclick="abrirNuevoFactura()" value="Nuevo">
			</div>
			<div class="col-md-12 col-md-offset-2" id="tabla_principal">
				<table id="lista_factura" class="table table-striped table-bordered" >
					<thead>
					<tr>
						<th>Fecha</th>
						<th>Cliente</th>
						<th>Vendedor</th>
						<th>Estado</th>
						<th>Total</th>
						<th id="accion-btn">Acci&oacute;n</th>
					</tr>
					</thead>
					<tbody>
            		</tbody>
            		<tfoot>
					<tr>
						<th>Fecha</th>
						<th>Cliente</th>
						<th>Vendedor</th>
						<th>Estado</th>
						<th>Total</th>
						<th>Acci&oacute;n</th>
					</tr>
					</tfoot>
				</table>
			</div>
			<div id="nuevofactura">
				<div id="nuevofactura_titulo">
				  <label><span class="icon-clipboard"></span>Nueva Factura</label>
				</div>
				  <div id="nuevofactura_body">
				  		<div id="nombrecliente_body">
				  			<label>Cliente</label>
					  		<input type="text" id="nombreCliente" placeholder="Selecciona un cliente" required>
					  		<input id="idcliente" type='hidden'>
						</div>
						<div id="telefono_body">
				  			<label>Teléfono</label>
							<input type="text" id="telefono" placeholder="Teléfono" readonly>
						</div>
						<div id="email_body">
							<label>Email</label>
							<input type="text" class="form-control input-sm" id="mail" placeholder="Email" readonly>
						</div>
						<div id="vendedor_body">
							<label>Vendedor</label>
								<select id="idvendedor">
									<option value="1">david</option>
									<option value="2">angui</option>
									<option value="3">pablo</option>
									<option value="4">Carlos</option>
								</select>
						</div>
						<div id="fecha_body">
							<label>Fecha</label>
							<input type="text" class="form-control input-sm" id="fecha" value="<?php echo date("d/m/Y");?>" readonly>
						</div>
						<div id="pago_body">
							<label>Pago</label>
								<select  id="condiciones">
									<option value="1">Efectivo</option>
									<option value="2">Cheque</option>
									<option value="3">Transferencia bancaria</option>
									<option value="4">Crédito</option>
								</select>
						</div>
				</div>
				<div id="nuevafactura_footer">
				<a href="#" id="nuevo_producto"><span class="icon-plus"></span>Nuevo producto</a>
				<a href="#"><span class="icon-user-plus"></span>Nuevo cliente</a>
				<a href="#" id="agregar_producto"><span class="icon-search"></span>producto</a>
				<a href="javascript:BTNGuardarNuevoFactura();"><span class="icon-floppy-disk"></span>Guardar</a>
				</div>
		</div>
		<div id="nuevoProducto">
			
		</div>	 
		
<?php 
	include_once '../modalnotificaciones/modalnotificacionadministrador/administradorayuda.php';
    include_once '../modalnotificaciones/modalnotificacionadministrador/administradorbuscar.php';
    include_once '../modalnotificaciones/modalnotificacionadministrador/administradornotificacion.php';
?>
	</div>
    </body>
</html>
