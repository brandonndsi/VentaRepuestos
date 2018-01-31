

window.onload=function(){
	$("#menu").mCustomScrollbar({
            theme: "dark-thin"//,
            //scrollButtons:{ enable: true}
            });
    $("#tabla_principal").mCustomScrollbar({
        theme: "dark-thin"//,
        //scrollButtons:{ enable: true}
    });
    $("#nuevofactura").mCustomScrollbar({
        theme: "dark-thin"//,
        //scrollButtons:{ enable: true}
    });
};
/*comensando con las validaciones de los modales.*/
/*modal de nuevo factura.*/
function abrirNuevoFactura(){
    cerrarTodo();
    //.style.transform="translateY(-150%)";
document.getElementById("nuevofactura").style.display="block";
}
function cerrarNuevoFactura(){
document.getElementById("nuevofactura").style.display="none";
}
/*terminacion de modal de nueva factura*/
/*nuevas btn abrir nuevo factura*/
function abrirBTNNuevoFactura(){
document.getElementById("body_principal").style.display="block";
}
function cerrarBTNNuevoFactura(){
document.getElementById("body_principal").style.display="none";
}
/*nuevas btn abrir nuevo terminar*/
/*pricipal de factura  tabla cerrar*/
function abrirTablaFactura(){
    cerrarTodo();
    abrirBTNNuevoFactura();
document.getElementById("tabla_principal").style.display="block";
}
function cerrarTablaFactura(){
document.getElementById("tabla_principal").style.display="none";
}
/*principal de fatura tabla de cerrar terminar*/
/*funcion de guardar de factura en el btnGuardar*/
function BTNGuardarNuevoFactura(){
   abrirTablaFactura(); 
}
/*funtion de guardar de factura terminar*/
function cerrarTodo(){
cerrarBTNNuevoFactura();
cerrarNuevoFactura();
cerrarTablaFactura();
}

/*funcion de js para mostrar el data table con paginacion*/
function mostrarFactura() {
    $(document).ready(function () {

       var table = $('#lista_factura').DataTable({
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
                 "url": "../../business/facturaaccion/datafactura.php",
                "type": "POST"
            },
            "columns": [
                {"data": "fecha"},
                {"data": "cliente"},
                {"data": "vendedor"},
                {"data": "estado"},
                {"data": "total"},
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