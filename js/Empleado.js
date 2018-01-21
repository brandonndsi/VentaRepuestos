//________________Brandon___________________________________________________
// comienzo de mostrar los empleados/////////////////////////////////////////////////////////
function mostrarEmpleados() {
    $(document).ready(function () {

        var table = $('#listaEmpleados').DataTable({

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

        //refresca la tabla cada cierto tiempo
        setInterval(function () {
        table.ajax.reload(null, false);
        }, 1000);
    });

}

// fin de mostrar los empleados/////////////////////////////////////////////////////////

// comienzo de registro del empleado//////////////////////////////////////////////////////////
// levanta modal de registrar
function RegistrarEmpleado(){
    nombre = $("#empleadonombres").val();
    apellido1 = $("#empleadoapellidos1").val();
    apellido2 = $("#empleadoapellidos2").val();
    cedula = $("#empleadocedulas").val();
    telefono = $("#empleadotelefonos").val();
    direccion = $("#empleadodirecciones").val();
    correo = $("#empleadocorreos").val();
    cuenta = $("#empleadonumerocuentas").val();

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
        });
    });
    
    cerrarModalRegistrar();
}
function verRegistrarEmpleado() {

    if ($('#empleadonombres').val() !== "" &&
        $('#empleadoapellidos1').val() !== "" && $('#empleadoapellidos2').val() !== ""
        && $('#empleadocedulas').val() !== "" && $('#empleadotelefonos').val() !== ""
        && $('#empleadodirecciones').val() !== "" && $('#empleadocorreos').val() !== ""
        && $('#empleadonumerocuentas').val() !== "") {
        
         mostrarModalRegistrar();
    }  
}
function mostrarModalRegistrar() {
document.getElementById("modalRegistrarEmpleado").style.display = "block";
}
function cerrarModalRegistrar() {
document.getElementById("modalRegistrarEmpleado").style.display = "none";
}
// fin de registro de empleado/////////////////////////////////////////////////////////


// comienzo de actualizar de empleado/////////////////////////////////////////////////////////
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
    
    cerrarModalModificar();
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

/*función encargada de levantrar el modal conl a información del empleado elegido*/
function mostrarModalModificar() {
document.getElementById("modalModEmpleado").style.display = "block";
}
function cerrarModalModificar() {
document.getElementById("modalModEmpleado").style.display = "none";
}
// fin de actualizar de empleado/////////////////////////////////////////////////////////


// comienzo de eliminar de empleado/////////////////////////////////////////////////////////
function eliminarEmpleado() {

    alert("Se elimino correctamente");
        
    var empleado = document.getElementById("empleadoid2").value;
    $(document).ready(function () {

        $.post("../../business/empleadoaccion/empleadoAccion.php", {
        
            empleadoid: empleado,
            accion: "eliminar"
        });
    });
    
    cerrarModalEliminar();
}

function verModalEliminar($parm1, $parm2, $parm3, $parm4) {

//se colocan los valores en el formulario
$("#empleadoid2").val($parm1);
$("#empleadonombre2").val($parm2 + " " + $parm3 + " " + $parm4);
//Se realiza llamado a la función del JS modalComun para mostar el modal correspondiente
mostrarModalEliminar();
}

/*función encargada de levantrar el modal eliminar empleado elegido*/
function mostrarModalEliminar() {
document.getElementById("modalElimEmpleado").style.display = "block";
}
function cerrarModalEliminar() {
document.getElementById("modalElimEmpleado").style.display = "none";
}

// fin de eliminar de empleado/////////////////////////////////////////////////////////

// comienzo de ver mas de empleado/////////////////////////////////////////////////////////
function verModalBuscar($edad, $sexo, $estadocivil, $banco) {

//se colocan los valores en el formulario
$("#empleadoedad").val($edad);
$("#empleadosexo").val($sexo);
$("#empleadoestadocivil").val($estadocivil);
$("#empleadobanco").val($banco);
//Se realiza llamado a la función del JS modalComun para mostar el modal correspondiente
mostrarModalBuscar();
}

/*función encargada de levantrar el modal ver + del empleado elegido*/
function mostrarModalBuscar() {
document.getElementById("modalVerMasEmpleado").style.display = "block";
}
function cerrarModalBuscar() {
document.getElementById("modalVerMasEmpleado").style.display = "none";
}
// fin de ver mas de empleado/////////////////////////////////////////////////////////
//________________Brandon___________________________________________________
