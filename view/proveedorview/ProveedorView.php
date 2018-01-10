<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Proveedor</title>
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        <!-- JS-->
        <script src="../../js/jquery.js"></script>

    </head>
    <body>
    	<header>
    		<input type="checkbox" id="btn-menu">
    		<label for="btn-menu">MENU</label>
    	<nav>
    		<ul class="menu">
    			<li><a href="#">Regresar</a></li>
    			<li><a href="#">Nuevo</a></li>
    			<li><a href="#">Ver</a></li>
    			<li><a href="#">Actualizar</a></li>
    		</ul>
    	</nav>
    </header>
    	<div id="nuevoProveedor">
    		
            <p>Cedula:<input type="text" name="cedula" placeholder="x-xxxx-xxx"></p>
            <p>Nombre:<input type="text" name="nombre" placeholder="pedro"></p>
            <p>Apellido1:<input type="text" name="apellido1" placeholder="castro"></p>
            <p>Apellido2:<input type="text" name="apellido2" placeholder="salazar"></p>
            <p>Telefono:<input type="text" name="telefono" placeholder="xxxx-xxxx"></p>
            <p>Correo:<input type="text" name="correo" placeholder="pedro@gmail.com"></p>
            <p>Producto:<input type="text" name="producto" placeholder="id producto"></p>
            <p><input type="submit" name="nuevo" onclick="nuevoProveedor()"></p>
            
    	</div>
    	<div id="actualizarProveedor">
    		<p>Cedula:<input type="text" name="cedula" placeholder="x-xxxx-xxx"></p>
            <p>Nombre:<input type="text" name="nombre" placeholder="pedro"></p>
            <p>Apellido1:<input type="text" name="apellido1" placeholder="castro"></p>
            <p>Apellido2:<input type="text" name="apellido2" placeholder="salazar"></p>
            <p>Telefono:<input type="text" name="telefono" placeholder="xxxx-xxxx"></p>
            <p>Correo:<input type="text" name="correo" placeholder="pedro@gmail.com"></p>
            <p>Producto:<input type="text" name="producto" placeholder="id producto"></p>
            <p><input type="submit" name="nuevo" onclick="actualizarProveedor()"></p>
    	</div>
    	<div id="detallesProveedor"></div>

    </body>
</html>
