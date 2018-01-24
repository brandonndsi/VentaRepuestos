 var table;
 var datoAuto;
 $(document).ready(function(){
    $("#producto").autocomplete({
        source: function(request, response){
            $.ajax({
                url: '../../business/proveedoraccion/ProveedorAccion.php',
                datatype:'json',
                type: 'POST',
                data: {accion: 'auto', c: request.term},
                      success: function(data){
                        response(data);
                      }
            });
        },
        minLength:1,
        select: function(event, ui){
            alert("selecciono :"+ui.item.label);
        }

     });
   
 });

/*Modal de ver mas los detalles del proveedor para poder verlo*/
function verAbrir($cedula,$nombre,$apellido1,$apellido2,$telefono,$correo,$productoid){
$("#cedulaVer").val($cedula);
$("#nombreVer").val($nombre);
$("#apellido1Ver").val($apellido1);
$("#apellido2Ver").val($apellido2);
$("#telefonoVer").val($telefono);
$("#correoVer").val($correo);
$("#productoVer").val($productoid);
abrirVer();

}
function cerrarVer(){
    document.getElementById("verModal").style.display="none";
}
function abrirVer(){
   document.getElementById("verModal").style.display="block"; 
}
/*funciones del modal de nuevo proveedor de java script*/
function nuevoMostrar(){
    document.getElementById("modalNuevo").style.display = "block";
}
function nuevoCerra(){
    
   document.getElementById("modalNuevo").style.display = "none";
   nuevoLimpiar();
    
}
function nuevoLimpiar(){
    $('#cedula').val("");
    $('#nombre').val("");
    $('#apellido1').val("");
    $('#apellido2').val("");
    $('#correo').val("");
    $('#producto').val("");
    $('#telefono').val("");
}
function nuevoProveedor(){
    if($('#cedula').val()!="" && $('#nombre').val()!="" &&
    $('#apellido1').val()!="" && $('#apellido2').val()!=""
    && $('#correo').val()!="" && $('#producto').val()!=""
    && $('#telefono').val()!=""){

        cedula = $("#cedula").val();
        nombre = $("#nombre").val();
        apellido1 = $("#apellido1").val();
        apellido2 = $("#apellido2").val();
        correo = $("#correo").val();
        telefono = $("#telefono").val();
        producto = $("#producto").val();

        $(document).ready(function(){
            $.post('../../business/proveedoraccion/ProveedorAccion.php', {
                accion: 'nuevo',
                cedula: cedula,
                nombre: nombre,
                apellido1: apellido1,
                apellido2: apellido2,
                correo: correo,
                telefono: telefono,
                producto: producto
            }, function(response) {
                //alert(response);
                nuevoCerra();
                notificacionNuevoAbrir();
            });
        });
    }else{
        /*variable a utilizar*/
        var txtCedula=$("#cedula").val();
        var txtnombre=$("#nombre").val();

        var txtapellido1 = $("#apellido1").val();
        var txtapellido2 = $("#apellido2").val();

        var txtCorreo=$("#correo").val();
        var txtTelefono=$("#telefono").val();
        
        

        if(txtnombre == null || txtnombre.length == 0 || /^\s+$/.test(txtnombre)){
            //txtnombre.style.borderColor="#ff0000";
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
        }if(txtTelefono == null || txtTelefono.length ==0 || isNaN(txtTelefono) || txtTelefono.length <8){
            //txtTelefono.style.color="red";
            alert('ERROR:El telefono es incorrecto.');
        } if(!(/\S+@\S+\.\S+/.test(txtCorreo))){
            alert("ERROR: Ingrese un correo valido.");
        } if(txtCedula == null || txtCedula.length ==0 || isNaN(txtCedula) || txtCedula.length < 10){
            alert("ERROR: La cedula es incorrecta");
        }
        if(txtapellido1 == null || txtapellido1.length == 0 || /^\s+$/.test(txtapellido1)){
            //txtnombre.style.borderColor="#ff0000";
            alert('ERROR: El campo Apellido 1 no debe ir vacío o lleno de solamente espacios en blanco');
        }
        if(txtapellido2 == null || txtapellido2.length == 0 || /^\s+$/.test(txtapellido2)){
            //txtnombre.style.borderColor="#ff0000";
            alert('ERROR: El campo Apellido 2 no debe ir vacío o lleno de solamente espacios en blanco');
        }
        alert("ERROR: El producto es incorrecto");
    }
    
}
/*fin del modal del nuevo proveedor*/

/*inicio del modal de eliminar proveedor*/
function eliminarAbrir($id){
   // alert($id);
$("#proveedorid").val($id);
document.getElementById("modalEliminar").style.display = "block";
}
function eliminarCerrar(){
document.getElementById("modalEliminar").style.display = "none";    
}

function eliminarProveedor(){

if($('#proveedorid').val()!=""){

        id = $("#proveedorid").val();

        $(document).ready(function(){
            $.post('../../business/proveedoraccion/ProveedorAccion.php', {
                accion: 'eliminar',
                id: id
            }, function(response) {
                eliminarCerrar();
                notificacionEliminarAbrir();/*final mensaje de confirmacion*/ 
                //alert(response);
            });
        });
    }
       
}
/*fin de eliminar proveedor*/

/*modal para mostrar el actualizar*/
function actualizarMostrar($id,$cedula,$nombre,$apellido1,$apellido2,$telefono,$correo,$productoid){
$("#idActualizar").val($id);
$("#cedulaM").val($cedula);
$("#nombreM").val($nombre);
$("#apellido1M").val($apellido1);
$("#apellido2M").val($apellido2);
$("#telefonoM").val($telefono);
$("#correoM").val($correo);
$("#productoM").val($productoid);

    document.getElementById("modalModificar").style.display = "block";
}
function actualizarCerra(){
   document.getElementById("modalModificar").style.display = "none"; 
}

function actualizarProveedor(){
    if($('#cedulaM').val()!="" && $('#nombreM').val()!="" &&
    $('#apellido1M').val()!="" && $('#apellido2M').val()!=""
    && $('#correoM').val()!="" && $('#productoM').val()!=""
    && $('#telefonoM').val()!="" && $('#idActualizar').val()!=""){
 //alert("hola actualizar");
        id = $("#idActualizar").val();
        cedula = $("#cedulaM").val();
        nombre = $("#nombreM").val();
        apellido1 = $("#apellido1M").val();
        apellido2 = $("#apellido2M").val();
        correo = $("#correoM").val();
        telefono = $("#telefonoM").val();
        producto = $("#productoM").val();

        $(document).ready(function(){
            $.post('../../business/proveedoraccion/ProveedorAccion.php', {
                accion: 'actualizar',
                id: id,
                cedula: cedula,
                nombre: nombre,
                apellido1: apellido1,
                apellido2: apellido2,
                correo: correo,
                telefono: telefono,
                producto: producto
            }, function(response) {
                actualizarCerra();
               notificacionActualizarAbrir();
            });
        });
    }   
}
/*fin de actualizar proveedor*/

/*comenzando con las notificaciones finales*/

/*notificaion de proceso eliminado exitozamente.*/
function notificacionEliminarAbrir(){
    document.getElementById("notificacionEliminar").style.display = "block";
}

function notificacionEliminarCerrar(){
    document.getElementById("notificacionEliminar").style.display = "none"; 
}
/*finalizando con las notificaciones de eliminar exitoza.*/

/*comenzando con las notificacione de actualizar proveedor exitozamente.*/
function notificacionActualizarAbrir(){
    document.getElementById("notificacionActualizar").style.display = "block";
}

function notificacionActualizarCerrar(){
    document.getElementById("notificacionActualizar").style.display = "none"; 
}
/*finalizando con las notificaciones de actualizar proveedor exitozamente*/

/*comenzando con las notificacione de nuevo proveedor exitozamente.*/
function notificacionNuevoAbrir(){
    document.getElementById("notificacionNuevo").style.display = "block";
}

function notificacionNuevoCerrar(){
    document.getElementById("notificacionNuevo").style.display = "none"; 
}
/*finalizando con las notificaciones de nuevo proveedor exitozamente*/

/*funcion de js para mostrar el data table con paginacion*/
function mostrarProveedor() {
    $(document).ready(function () {

       var table = $('#listaProveedor').DataTable({
            "destroy": true,
            "bDeferRender": true,
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": false,
        "responsive": true,
        "autoWidth": false,
        "pageLength": 10,
            "sPaginationType": "full_numbers",
            "ajax": {
                 "url": "../../business/proveedoraccion/dataProveedor.php",
                "type": "POST"
            },
            "columns": [
                {"data": "nombre"},
                {"data": "apellido1"},
                {"data": "apellido2"},
                {"data": "cedula"},
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

        setInterval(function () {
        table.ajax.reload(null, false);
        }, 1000);
    });
   


}
/*fin de la funcion de terminacion de la paginacion de data table*/