<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" charset=iso-8859-1" />
        <meta charset="utf-8">
        <title>Registro</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/login.css">
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/principal.css">
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/fonts/style.css">
        <!-- JS -->
        <script src="../../js/Cliente.js"></script>

    </head>
    <body background="../../images/log.jpg">
        <?php
        include '../menu/menu.php';
        ?>
        <div class="page-container">

            <form name="frmRegistro" >
                <h2>Completa tus datos</h2>

                <input type="hidden" name="clienteid" id="clienteid" >
                <input type="text" name="personanombre" id="personanombre" placeholder="Nombre" required pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/> 
                <input type="text" name="personaapellido1" id="personaapellido1" placeholder="Primer Apellido" required pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/>
                <input type="text" name="personaapellido2" id="personaapellido2" placeholder="Segundo Apellido" required pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/> 
                <input type="text" name="personatelefono" id="personatelefono" placeholder="Teléfono (fijo o móvil)" required pattern="[0-9]{8}"/>
                <input type="emal" name="personacorreo" id="personacorreo" placeholder="Correo Electr&oacute;nico (E-mail)" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/> 
                <input type="password" name="clienteclave" id="clienteclave" placeholder="Clave" required />
                <input type="text" name="clientedireccionexacta" id="clientedireccionexacta" placeholder="Direcci&oacute;n" required pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/> 

                <input type="submit" class="btn btn-success" name="insertar" id="insertar"value="Reg&iacute;strarme" onclick="registrarCliente()"/>

            </form>
        </div>

    </body>
</html>
