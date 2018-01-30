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
        <script type="text/javascript" src="../../js/facturacion.js"></script>
        <script type="text/javascript" src="../../js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    </head>
    <body>
	<div id="contenedor">
		<?php 
		include_once '../menu/menuAdministrador.php';
		?>
		<div id="principal">
			<div id="titulo_principal">
				<h3>facturaci&oacute;n.</h3>
			</div>
			<div id="body_principal">
				<input type="text" class="input_principal" placeholder="#factura,nombre cliente">
				<a class="btn_principal"><span class="icon-search"></span>Buscar</a>
			</div>
			<div id="tabla_principal">
				<table id="tabla">
					<thead>
					<tr>
						<th>Fecha</th>
						<th>Cliente</th>
						<th>Vendedor</th>
						<th>Estado</th>
						<th>Total</th>
						<th>Acci&oacute;n</th>
					</tr>
					</thead>
					<tr>
					<td>22/10/2017</td>
					<td>David</td>
					<td>Juan</td>
					<td>efectivo</td>
					<td id="btn-cantidad">$12000</td>
					<td id="btn-accion">
					<a href="#"><span class="icon-clipboard"></span></a>	
					<a href="#"><span class="icon-download2"></span></a>
					<a href="#"><span class="icon-bin"></span></a>
					</td>
					</tr>
				</table>
			</div>
		</div>
		
	</div>
    </body>
</html>
