<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8" content="text/html; charset=ISO-8859-1">
        <title>Empleados</title>
        <!--CSS-->
        <link rel="stylesheet" href="../../css/jquery.dataTables.css">
        <!--Javascript-->
        <script src="../../js/jquery-1.10.2.js"></script>
        <script src="../../js/jquery.dataTables.js"></script>
        <script src="../../js/jsEmpleado.js"></script>

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
            <button class="btn btn-primary">Nuevo Empleado</button>
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
</body>
</html>
