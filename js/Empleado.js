//________________Brandon___________________________________________________
function mostrarEmpleados() {
    $(document).ready(function () {

        $('#listaEmpleados').DataTable({

            "bDeferRender": true,
            "sPaginationType": "full_numbers",
            "ajax": {
                "url": "../../business/empleadoaccion/empleadoAccion.php",
                "type": "POST",
                data: {accion: "mostrar"}// se recive la accion
            },
            "columns": [
                {"data": "nombre"},
                {"data": "apellido1"},
                {"data": "apellido2"},
                {"data": "cedula"},
                {"data": "telefono"},
                {"data": "tipoEmpleado"},
                {"data": "correo"},
                {"data": "cuenta"},
                {"data": "fecha"},
                {"data": "acciones"}
            ],
            "oLanguage": {
                "sProcessing": "Procesando...",
                "sLengthMenu": 'Mostrar <select>' +
                        '<option value="10">10</option>' +
                        '<option value="20">20</option>' +
                        '<option value="30">30</option>' +
                        '<option value="40">40</option>' +
                        '<option value="50">50</option>' +
                        '<option value="60">60</option>' +
                        '<option value="70">70</option>' +
                        '<option value="80">80</option>' +
                        '<option value="-1">All</option>' +
                        '</select> registros',
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Filtrar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Por favor espere - cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });

        /// refresca la tabla cada cierto tiempo
        //setInterval(function () {
          //  table.ajax.reload(null, false);
        //}, 5000);
    });

}

function registrarEmpleado() {

    alert("registro");

    var nombre = $('#empleadonombres').val();
    var apellido1 = document.getElementById("empleadoapellidos1").value;
    var apellido2 = document.getElementById("empleadoapellidos2").value;
    var cedula = document.getElementById("empleadocedulas").value;
    var telefono = document.getElementById("empleadotelefonos").value;
    var direccion = document.getElementById("empleadodirecciones").value;
    var correo = document.getElementById("empleadocorreos").value;
    var cuenta = document.getElementById("empleadonumerocuentas").value;

    alert(nombre);
    alert(apellido1);
    alert(apellido2);
    alert(cedula);
    alert(telefono);
    alert(direccion);
    alert(correo);
    alert(cuenta);


    $(document).ready(function () {
        $.post("../../business/empleadoaccion/empleadoAccion.php", {

            personaNombre: nombre,
            personaApellido1: apellido1,
            personaApellido2: apellido2,
            personaTelefono: telefono,
            personaCedula: cedula,
            personaDireccion: direccion,
            personaCorreo: correo,
            numeroCuenta: cuenta,
            accion: "insertar"

        }, function (responseText) {
            alert(responseText);
        });
        alert("se envian los datos");
    });

}

function modificarEmpleado() {

    var id = document.getElementById("empleadoid").value;
    var nombre = document.getElementById("empleadonombre").value;
    var apellido1 = document.getElementById("empleadoapellido1").value;
    var apellido2 = document.getElementById("empleadoapellido2").value;
    var cedula = document.getElementById("empleadocedula").value;
    var telefono = document.getElementById("empleadotelefono").value;
    var direccion = document.getElementById("empleadodireccion").value;
    var correo = document.getElementById("empleadocorreo").value;
    var cuenta = document.getElementById("empleadonumerocuenta").value;

    alert(id);
    alert(nombre);
    alert(apellido1);
    alert(apellido2);
    alert(cedula);
    alert(telefono);
    alert(direccion);
    alert(correo);
    alert(cuenta);

    $(document).ready(function () {

        $.post("../../business/empleadoaccion/empleadoAccion.php", {
            personaId: id,
            personaNombre: nombre,
            personaApellido1: apellido1,
            personaApellido2: apellido2,
            personaTelefono: telefono,
            personaCedula: cedula,
            personaDireccion: direccion,
            personaCorreo: correo,
            numeroCuenta: cuenta,
            accion: "modificar"
        }, function (responseText) {
            alert(responseText);
        });
        alert("se envian los datos");
    });
}

function eliminarEmpleado() {

    alert("Se elimino correctamente");
    var empleado = document.getElementById("empleadoid2").value;
    $(document).ready(function () {

        $.post("../../business/empleadoaccion/empleadoAccion.php", {
            empleadoid: empleado,
            accion: "eliminar"
        });

    });
}

function verModalEditar($id, $nombre, $apellido1, $apellido2, $cedula, $telefono, $direccion, $correo, $cuenta) {

    //se colocan los valores en el formulario
    $("#empleadoid").val($id);
    $("#empleadonombre").val($nombre);
    $("#empleadoapellido1").val($apellido1);
    $("#empleadoapellido2").val($apellido2);
    $("#empleadocedula").val($cedula);
    $("#empleadotelefono").val($telefono);
    $("#empleadodireccion").val($direccion);
    $("#empleadocorreo").val($correo);
    $("#empleadonumerocuenta").val($cuenta);

    //Se realiza llamado a la función del JS modalComun para mostar el modal correspondiente
    mostrarModalModificar();
}

function verModalEliminar($parm1, $parm2, $parm3, $parm4) {

    //se colocan los valores en el formulario
    $("#empleadoid2").val($parm1);
    $("#empleadonombre2").val($parm2 + " " + $parm3 + " " + $parm4);

    //Se realiza llamado a la función del JS modalComun para mostar el modal correspondiente
    mostrarModalEliminar();
}

function verModalBuscar($edad, $sexo, $estadocivil, $banco) {

    //se colocan los valores en el formulario
    $("#empleadoedad").val($edad);
    $("#empleadosexo").val($sexo);
    $("#empleadoestadocivil").val($estadocivil);
    $("#empleadobanco").val($banco);

    //Se realiza llamado a la función del JS modalComun para mostar el modal correspondiente
    mostrarModalBuscar();
}

//________________Brandon___________________________________________________
