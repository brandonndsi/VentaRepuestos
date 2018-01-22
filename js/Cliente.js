function registrarCliente() {

    if (document.getElementById("personanombre").value !== "" && document.getElementById("personaapellido1").value !== "" &&
            document.getElementById("personaapellido2").value !== "" && document.getElementById("personatelefono").value !== ""
            && document.getElementById("personacorreo").value !== "" && document.getElementById("clienteclave").value !== ""
            && document.getElementById("clientedireccionexacta").value !== "") {

        var nombre = document.getElementById("personanombre").value;
        var apellido1 = document.getElementById("personaapellido1").value;
        var apellido2 = document.getElementById("personaapellido2").value;
        var telefono = document.getElementById("personatelefono").value;
        var correo = document.getElementById("personacorreo").value;
        var clave = document.getElementById("clienteclave").value;
        var direccion = document.getElementById("clientedireccionexacta").value;

        if (telefono.length === 8) {
            if (validarClave() === true) {

                $(document).ready(function () {
                    $.post('../../business/clienteaccion/clienteAccion.php', {
                        accion: 'insertar',
                        nombre: nombre,
                        apellido1: apellido1,
                        apellido2: apellido2,
                        correo: correo,
                        telefono: telefono,
                        clave: clave,
                        direccion: direccion
                    }, function () {
                        mostrarModalvalido();
                    });
                });
            } else {
                mostrarModalinvalido();
            }
        } else {
            mostrarModalinvalidotel();
        }
    } else {
        mostrarModalDatos();
    }

}

// funcion validar pass
function validarClave() {

    var clave = document.getElementById("clienteclave").value;
    var minusculas = /[a-z]/;
    var mayusculas = /[A-Z]/;
    var numeros = /[0-9]/;

    if (clave.length < 6) {
        return false;
    }
    if (clave.length > 16) {
        return false;
    }
    if (!clave.match(minusculas)) {
        return false;
    }
    if (!clave.match(mayusculas)) {
        return false;
    }
    if (!clave.match(numeros)) {
        return false;
    }
    return true;
}

/*modal mostrar campos de datos*/
function mostrarModalDatos() {
document.getElementById("modaldatos").style.display = "block";
}
function cerrarModalDatos() {
document.getElementById("modaldatos").style.display = "none";
}
/*modal pass valida*/
function mostrarModalvalido() {
document.getElementById("modalvalido").style.display = "block";
}
function cerrarModalvalido() {
document.getElementById("modalvalido").style.display = "none";
}
/*modal pass invalida*/
function mostrarModalinvalido() {
document.getElementById("modalinvalido").style.display = "block";
}
function cerrarModalinvalido() {
document.getElementById("modalinvalido").style.display = "none";
}
/*modal tel invalida*/
function mostrarModalinvalidotel() {
document.getElementById("modalinvalidotel").style.display = "block";
}
function cerrarModalinvalidotel() {
document.getElementById("modalinvalidotel").style.display = "none";
}