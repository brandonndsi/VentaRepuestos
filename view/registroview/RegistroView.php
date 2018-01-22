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
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        <link rel="stylesheet" type="text/css" href="../../css/estiloLogueo.css">
        <!-- JS -->
        <script src="../../js/jquery-1.10.2.js"></script>
        <script src="../../js/jquery.dataTables.js"></script>
        <script src="../../js/Cliente.js"></script>

    </head>
    <body background="../../images/fondos/log3.jpg">
        <?php
        include '../menu/menu.php';
        ?>
        <div class="main">
            <div class="login-form">
                <h2>Completa tus datos</h2>
                <div class="head">
                    <img src="../../images/administrador/clients.jpg" alt=""/>
                </div>
                <form method="POST" onSubmit="registrarCliente(); return false">
                    <input type="hidden" name="clienteid" id="clienteid" >
                    <input type="text" name="personanombre" id="personanombre" placeholder="Nombre" required pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/> 
                    <input type="text" name="personaapellido1" id="personaapellido1" placeholder="Primer Apellido" required pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/>
                    <input type="text" name="personaapellido2" id="personaapellido2" placeholder="Segundo Apellido" required pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/> 
                    <input type="text" name="personatelefono" id="personatelefono" placeholder="Teléfono (fijo o móvil)" required pattern="[0-9]{8}"/>
                    <input type="text" name="personacorreo" id="personacorreo" placeholder="Correo Electr&oacute;nico (E-mail)" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/> 
                    <input type="password" name="clienteclave" id="clienteclave" placeholder="Clave" required />
                    <input type="text" name="clientedireccionexacta" id="clientedireccionexacta" placeholder="Direcci&oacute;n" required pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/> 
                    <div>
                        <input type="submit" class="btn btn-success" name="insertar" id="insertar"value="Reg&iacute;strarme" onclick="registrarCliente();"/>
                    </div>
                    <p><a href="../loginview/LoginView.php">Inicia Sesi&oacute;n</a></p>
                </form>
            </div>
        </div>

        <div class="modal" id="modaldatos" role="dialog">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalElimEmpleado">Formulario Incompleto.</h5>
                        <button type="button" class="close" onclick="cerrarModalDatos()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Rellene todos los campos del formulario para poder Registrarse.</h4> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" onclick="cerrarModalDatos()">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="modalvalido" role="dialog">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalElimEmpleado">Clave Correcta.</h5>
                        <button type="button" class="close" onclick="cerrarModalvalido()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Se ha registrado correctamente.</h4> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" onclick="cerrarModalvalido()">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="modalinvalido" role="dialog">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalElimEmpleado">Clave Incorrecta.</h5>
                        <button type="button" class="close" onclick="cerrarModalinvalido()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>La clave debe tener al menos 6 caracteres.</h4> 
                        <h4>La clave no puede tener más de 16 caracteres.</h4> 
                        <h4>La clave debe tener al menos una letra minúscula.</h4> 
                        <h4>La clave debe tener al menos una letra mayúscula.</h4> 
                        <h4>La clave debe tener al menos un caracter numérico.</h4> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" onclick="cerrarModalinvalido()">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="modalinvalidotel" role="dialog">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalElimEmpleado">Formato de Telefono Incorrecto.</h5>
                        <button type="button" class="close" onclick="cerrarModalinvalidotel()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>El numero telefonico debe contener 8 caracteres.</h4> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" onclick="cerrarModalinvalidotel()">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
        
        
    </body>
</html>
