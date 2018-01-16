function registrarCliente() {
    
    var nombre = document.getElementById("personanombre").value;
    var apellido1 = document.getElementById("personaapellido1").value;
    var apellido2 = document.getElementById("personaapellido1").value;
    var telefono = document.getElementById("personatelefono").value;
    var correo = document.getElementById("personacorreo").value;
    var clave = document.getElementById("clienteclave").value;
    var direccion = document.getElementById("clientedireccionexacta").value;

    alert(nombre);
    alert(apellido1);
    alert(apellido2);
    alert(telefono);
    alert(correo);
    alert(clave);
    alert(direccion);

    $(document).ready(function () {

        $.post("../../business/clienteaccion/clienteAccion.php", {
            
            clientenombre: nombre,
            clienteapellido1: apellido1,
            clienteapellido2: apellido2,
            clientetelefono: telefono,
            clientecorreo: correo,
            clienteclave: clave,
            clientedireccion: direccion,
            accion: "insertar"
        });
    });
}
