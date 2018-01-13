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

    var id = document.getElementById("empleadoid3").value;
    var nombre = document.getElementById("personanombre3").value;
    var apellido1 = document.getElementById("personaape1").value;
    var apellido2 = document.getElementById("personaape2").value;
    var cedula = document.getElementById("empleadocedula3").value;
    var telefono = document.getElementById("personatelefono3").value;
    var correo = document.getElementById("personacorreo3").value;
    var contra = document.getElementById("empleadocontrasenia3").value;
    var age = document.getElementById("empleadoedad3").value;
    var sex = document.getElementById("empleadosexo3").value;
    var estcivil = document.getElementById("empleadoestadocivil3").value;
    var banck = document.getElementById("empleadobanco3").value;
    var cuenta = document.getElementById("empleadocuentabancaria3").value;

    $(document).ready(function () {
        $.post("../../business/empleadoaccion/empleadoAccion.php", {
            personaId: id,
            personaNombre: nombre,
            personaApellido1: apellido1,
            personaApellido2: apellido2,
            personaCedula: cedula,
            personaTelefono: telefono,
            personaCorreo: correo,
            personaContra: contra,
            personaEdad: age,
            personaSexo: sex,
            personaEstado: estcivil,
            personaBanco: banck,
            personaCuenta: cuenta,
            accion: "modificar"
        });
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

function verModalEditar($id, $nombre, $apellido1, $apellido2, $cedula, $telefono, $correo, $contra, $age, $sex,
        $estcivil, $banck, $cuenta) {

    //se colocan los valores en el formulario
    $("#empleadoid3").val($id);
    $("#personanombre3").val($nombre);
    $("#personaape1").val($apellido1);
    $("#personaape2").val($apellido2);
    $("#empleadocedula3").val($cedula);
    $("#personatelefono3").val($telefono);
    $("#personacorreo3").val($correo);
    $("#empleadocontrasenia3").val($contra);
    $("#empleadoedad3").val($age);
    $("#empleadosexo3").val($sex);
    $("#empleadoestadocivil3").val($estcivil);
    $("#empleadobanco3").val($banck);
    $("#empleadocuentabancaria3").val($cuenta);

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
