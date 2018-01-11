<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" charset=iso-8859-1" />
<meta charset="utf-8">
<title>Iniciar Sesi&oacute;n</title>

<!-- CSS -->
<link rel="stylesheet" href="../../css/login.css">

</head>
<body>
    <div class="page-container">
        
        <form action="../../business/sesionaccion/SesionIniciarAccion.php" method="post" name="frm_ingreso">
            <h2>Iniciar Sesi&oacute;n</h2>
        
            <input name="correo" type="emal" id="correo" class="username" size="30" placeholder="Correo Electr&oacute;nico" required/> 
                  
            <input name="contrasenia" type="password" id="contrasenia" class="password" size="30" placeholder="Contrase&ntilde;a" required/>
            
            <input type="submit" class="btn btn-success" name="Entrar" value="Iniciar Sesi&oacute;n" id="entrar"/>
                
        </form>
    </div>

</body>
</html>
