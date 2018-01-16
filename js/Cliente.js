function registrarCliente() {
    
    var nombre = document.getElementById("personanombre").value;
    var apellido1 = document.getElementById("personaapellido1").value;
    var apellido2 = document.getElementById("personaapellido1").value;
    var telefono = document.getElementById("personatelefono").value;
    var correo = document.getElementById("personacorreo").value;
    var clave = document.getElementById("clienteclave").value;
    var direccion = document.getElementById("clientedireccionexacta").value;
    
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
}
