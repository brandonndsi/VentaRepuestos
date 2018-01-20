<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" charset=iso-8859-1" />
        <meta charset="utf-8">
        <title>Iniciar Sesi&oacute;n</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/login.css">
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/principal.css">   
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/fonts/style.css"> 
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        <link rel="stylesheet" type="text/css" href="../../css/estiloLogueo.css">

        <!-- JS -->
        <script type="text/javascript" src="../../js/jsManejoSesion.js"></script>

    </head>
    <body onload="nobackbutton()">
        <?php
        include '../menu/menu.php';
        ?>
        <div class="main">
            <div class="login-form">
                <h2>Iniciar Sesi&oacute;n</h2>
                <div class="head">
                    <img src="../../images/administrador/user.png" alt=""/>
                </div>
                <form action="../../business/sesionaccion/SesionIniciarAccion.php" method="POST">
                    <input type="text" name="correo" id="correo" size="30" placeholder="Correo Electr&oacute;nico" required/> 
                    <input type="password" name="contrasenia" id="contrasenia" size="30" placeholder="Contrase&ntilde;a" required/>
                    <div>
                        <input type="submit" class="btn btn-success" name="Entrar" id="entrar"value=" Iniciar Sesi&oacute;n"/>
                    </div>	
                    <p><a href="#">¿Olvido su contraseña?</a></p>
                </form>
            </div>
        </div>
        <video id="video1" loop autoplay preload >
            <source src="../../videos/LightStreaksDeepBlue.mp4" type="video/mp4" />  
        </video>
    </body>
</html>
