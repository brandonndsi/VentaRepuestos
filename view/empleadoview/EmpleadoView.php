<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8" content="text/html; charset=ISO-8859-1">
        <title>Empleados</title>
        <!--CSS-->
        <link rel="stylesheet" href="../../css/jquery.dataTables.css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <!--Javascript-->
        <script src="../../js/jquery-1.10.2.js"></script>
        <script src="../../js/jquery.dataTables.js"></script>
        <script src="../../js/bootstrap.js"></script> 
        <script src="../../js/Empleado.js"></script>
        <script src="../../js/modalComunEmpleado.js"></script> 

        <script>
            $(document).ready(function () {
                mostrarEmpleados();
            });
        </script>

    </head>

    <body background="">

    <center>
        <h1>
            Empleados
            <button data-toggle="modal" data-target="#modalRegistrarEmpleado" class="btn btn-primary">Nuevo Empleado</button>
        </h1> 
    </center>
    <div class="col-md-12 col-md-offset-2">
        <table id="listaEmpleados" class="table table-striped table-bordered" cellspacing="0" width="100%" >
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Cedula</th>
                    <th>Telefono</th>
                    <th>Tipo de Empleado</th>
                    <th>Correo</th>
                    <th>Cuenta</th>
                    <th>Fecha de Ingreso</th>
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
                    <th>Telefono</th>
                    <th>Tipo de Empleado</th>
                    <th>Correo</th>
                    <th>Cuenta</th>
                    <th>Fecha de Ingreso</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <!--sección de modal que sirve para registrar el empleado elegido-->
    <!-- Modal -->
    <div class="modal fade" id="modalRegistrarEmpleado" role="dialog" >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRegistrarEmpleado">Registrar</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div style="width:50%; float:left;">
                        <input type="hidden" name="empleadoid" ><!--este es el campo que está como llave primaria en la base de datos-->    
                        <p class="col-sm-8">Nombre: <input type="text" name="personanomb" class="form-control" id="personanomb" required pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})" /></p>                
                        <p class="col-sm-8">Apellido 1: <input type="text" name="personaapelli1" class="form-control" id="personaapelli1" required pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/></p> 
                        <p class="col-sm-8">Apellido 2:<input type="text" name="personaapelli2" class="form-control" id="personaapelli2" required pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/></p> 
                        <p class="col-sm-8">Cedula:<input type="text" name="empleadocedu" class="form-control" id="empleadocedu" required pattern="[0-9]{9}"/></p> 
                        <p class="col-sm-8">Telefono:<input type="text" name="personatel" class="form-control" id="personatel" required pattern="[0-9]{8}" /></p> 
                        <p class="col-sm-8">Correo:<input type="email" name="personaemail" class="form-control" id="personaemail" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required /></p> 
                        <p class="col-sm-8">Tipo de Empleado: <select name = "combotipoemple" id ="combotipoemple" class="form-control"> </p>
                        <option></option>
                        <option value = "Administrador">Administrador/a</option>
                        <option value = "Bodega">Bodega/a</option>
                        <option value = "Repartidor">Repartidor/a</option>
                        <option value = "Cajero">Cajero/a</option>
                        </select>
                        </div>
                        
                        <div style="width:50%; float:left;">
                        <p class="col-sm-8">Contraseña: <input type="password" name="empleadocontrasena" class="form-control" id="empleadocontrasena" required pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/></p>
                        <p class="col-sm-8">Edad: <input type="number" name="empleadoage" class="form-control" id="empleadoage" min="18" max="80" pattern="[1-9]{2,3}" required/></p>
                        <p class="col-sm-8">Sexo: <select name = "combosexo" id="combosexo" class="form-control"> required</p>
                        <option value = "Masculino">M</option>
                        <option value = "Femenino">F</option>
                        <option value = "Otro">Otro</option>
                        </select>
                        <p class="col-sm-8">Estado Civil: <select name = "comboestadocivil" id="comboestadocivil" class="form-control" required></p>
                        <option value = "Soltero">Soltero/a</option>
                        <option value = "Casado">Casado/a</option>
                        <option value = "Viudo">Viudo/a</option>
                        <option value = "Divorciado">Divorciado/a</option>
                        <option value = "UnionLibre">Union Libre</option>
                        </select>
                        <p class="col-sm-8">Banco: <select name = "combobanco" id="combobanco" class="form-control"> required</p>
                        <option ></option>
                        <option value = "Nacional">Nacional</option>
                        <option value = "CostaRica">Costa Rica</option>
                        <option value = "Popular">Popular</option>
                        <option value = "Citibank">Citibank</option>
                        <option value = "Bac">Bac San José</option>
                        <option value = "Bancrédito">Bancrédito</option>
                        <option value = "Scotia">Scotia Bank</option>
                        <option value = "BCT">BCT</option>
                        <option value = "Davivienda">Davivienda</option>
                        <option value = "Proamerica">Banca Proamerica</option>
                        <option value = "LAFISE">LAFISE</option>
                        <option value = "Cathay">Cathay</option>
                        <option value = "Desyfin">Desyfin</option>
                        </select>
                        <p class="col-sm-8">Numero de Cuenta:<input type="text" name="empleadocuentabanco" class="form-control" id="empleadocuentabanco" required pattern="[0-9]{17,24}" /></p> 
                        <p class="col-sm-8">Fecha de Ingreso:<input type="date" name="empleadofechadeingreso" class="form-control" id="empleadofechadeingreso" step="1" min="2017-01-01" max="2050-12-31" value="000-00-00"required/></p>
                        </div> 
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button data-remodal-action="confirm" onclick="registrarEmpleado();" class="btn btn-success" data-dismiss="modal" >Registrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--final de sección de modal que sirve para registrar el empleado elegido-->
    
    <!--sección de modal que sirve para modificar el empleado elegido-->

    <!-- Modal -->
    <div class="modal fade" id="modalModEmpleado" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalModEmpleado">Modificar</h5></center>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div style="width:50%; float:left;">
                        <input type="hidden" name="empleadoid3" id="empleadoid3"></td><!--este es el campo que está como llave primaria en la base de datos-->    
                        <p class="col-sm-8">Nombre: <input type="text" name="personanombre3" class="form-control" id="personanombre3" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})" /></p>                
                        <p class="col-sm-8">Apellido 1: <input type="text" name="personaape1" class="form-control" id="personaape1" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/></p> 
                        <p class="col-sm-8">Apellido 2:<input type="text" name="personaape2" class="form-control" id="personaape2" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]{2,25})"/></p> 
                        <p class="col-sm-8">Cedula:<input type="text" name="empleadocedula3" class="form-control" id="empleadocedula3" pattern="[0-9]{9}"/></p> 
                        <p class="col-sm-8">Telefono:<input type="text" name="personatelefono3" class="form-control" id="personatelefono3" pattern="[0-9]{8}" /></p> 
                        <p class="col-sm-8">Correo:<input type="email" name="personacorreo3" class="form-control" id="personacorreo3" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"/></p> 
                        </div>
                        
                        <div style="width:50%; float:left;">
                        <p class="col-sm-8">Contraseña:<input type="text" name="empleadocontrasenia3" class="form-control" id="empleadocontrasenia3"/></p> 
                        <p class="col-sm-8">Edad:<input type="text" name="empleadoedad3" class="form-control" id="empleadoedad3"/></p> 
                        <p class="col-sm-8">Sexo:<input type="text" name="empleadosexo3" class="form-control" id="empleadosexo3"/></p> 
                        <p class="col-sm-8">Estado Civil:<input type="text" name="empleadoestadocivil3" class="form-control" id="empleadoestadocivil3"/></p> 
                        <p class="col-sm-8">Banco:<input type="text" name="empleadobanco3" class="form-control" id="empleadobanco3"/></p> 
                        <p class="col-sm-8">Numero de Cuenta:<input type="text" name="empleadocuentabancaria3" class="form-control" id="empleadocuentabancaria3" pattern="[0-9]{17,24}" /></p> 
                        </div> 
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button data-remodal-action="confirm" onclick="modificarEmpleado();" class="btn btn-success" data-dismiss="modal">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
    <!--final de sección de modal que sirve para modificar el empleado elegido-->

    <!--sección de modal que sirve para eliminar el empleado elegido-->

    <!-- Modal -->
    <div class="modal fade" id="modalElimEmpleado" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalElimEmpleado">Eliminar</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-control">
                        <div>
                            <h4>¿Desea eliminar este empleado?</h4>
                        </div>
                        <div>
                            <p>ID: <input type="text" name="empleadoid2" class="form-control" id="empleadoid2" readonly/></p>
                            <p>Nombre: <input type="text" name="empleadonombre2" class="form-control" id="empleadonombre2" readonly/></p>
                        </div>    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button data-remodal-action="confirm" onclick="eliminarEmpleado();" class="btn btn-success" data-dismiss="modal">Eliminar</button>

                </div>
            </div>
        </div>
    </div>
    <!--final de sección de modal que sirve para eliminar el empleado elegido-->

    <!--sección de modal que sirve para ver mas datos del empleado elegido-->
    <!-- Modal -->
    <div class="modal fade" id="modalVerMasEmpleado" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalVerMasEmpleado">Ver mas Informacion</h5>
                    <button type="button" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-control">
                        <input type="hidden" name="empleadoid" ></td><!--este es el campo que está como llave primaria en la base de datos-->                           
                        <p>Edad: <input type="text" name="empleadoedad" class="form-control" id="empleadoedad" readonly/></p>
                        <p>Sexo: <input type="text" name="empleadosexo" class="form-control" id="empleadosexo" readonly/></p>
                        <p>Estado Civil: <input type="text" name="empleadoestadocivil" class="form-control" id="empleadoestadocivil" readonly/></p>
                        <p>Banco: <input type="text" name="empleadobanco" class="form-control" id="empleadobanco" readonly/></p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Salir</button>
                </div>
            </div>
        </div>
    </div>
    <!--final de sección de modal que sirve para ver mas datos del empleado elegido-->
    
    
</body>
</html>
