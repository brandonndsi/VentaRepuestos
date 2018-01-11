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

//________________Brandon___________________________________________________
