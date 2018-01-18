function registrarCliente() {
    
    var nombre = document.getElementById("personanombre").value;
    var apellido1 = document.getElementById("personaapellido1").value;
    var apellido2 = document.getElementById("personaapellido1").value;
    var telefono = document.getElementById("personatelefono").value;
    var correo = document.getElementById("personacorreo").value;
    var clave = document.getElementById("clienteclave").value;
    var direccion = document.getElementById("clientedireccionexacta").value;
    
    
    var errorEncontrado = "";
    
    if (validarClave(errorEncontrado)===true) {
        alert("PASSWORD VÁLIDO");
        
        $(document).ready(function () {
            $.post("../../business/clienteaccion/clienteAccion", {

                Clientenombre: nombre,
                Clienteapellido1: apellido1,
                Clienteapellido2: apellido2,
                Clientetelefono: telefono,
                Clientecorreo: correo,
                Clienteclave: clave,
                Clientedireccion: direccion,
                accion: "insertar"

            }, function (responseText) {
                alert(responseText);
            });
            alert("se envian los datos");
        });    
    } else {
        alert("PASSWORD NO VÁLIDO: " + errorEncontrado);
    }

    function validarClave(errorClave) {
        
        var clave = document.getElementById("clienteclave").value;
        var minusculas = /[a-z]/;
        var mayusculas = /[A-Z]/;
        var numeros = /[0-9]/;
        
        if (clave.length < 6) {
            errorClave = "La clave debe tener al menos 6 caracteres";
            alert(errorClave);
            return false;
        }
        if (clave.length > 16) {
            errorClave = "La clave no puede tener más de 16 caracteres";
            alert(errorClave);
            return false;
        }
        if (!clave.match(minusculas)) {
            errorClave = "La clave debe tener al menos una letra minúscula";
            alert(errorClave);
            return false;
        }
        if (!clave.match(mayusculas)) {
            errorClave = "La clave debe tener al menos una letra mayúscula";
            alert(errorClave);
            return false;
        }
        if (!clave.match(numeros)) {
            errorClave = "La clave debe tener al menos un caracter numérico";
            alert(errorClave);
            return false;
        }
        errorClave = "";
        return true;
    }
    
}
