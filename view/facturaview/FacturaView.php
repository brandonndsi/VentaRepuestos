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
        <script type="text/javascript" src="../../js/administradormodal.js"></script>
        <script type="text/javascript" src="../../js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
         <script type="text/javascript" src="../../js/facturacion.js"></script>
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
            <input type="submit" class="btn-nuevo" onclick="nuevoMostrar()" value="Nuevo">
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
		
<?php 
	include_once '../modalnotificaciones/modalnotificacionadministrador/administradorayuda.php';
    include_once '../modalnotificaciones/modalnotificacionadministrador/administradorbuscar.php';
    include_once '../modalnotificaciones/modalnotificacionadministrador/administradornotificacion.php';
?>
	</div>
    </body>
</html>
