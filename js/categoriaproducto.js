/*modal de todos modificarlo.*/
$(document).ready(function(){
cargarCategorias();
});
function cerrarModal(){
document.getElementById("modal_informacion").style.display="none";
}
function abrirModal(){
document.getElementById("modal_informacion").style.display="block";
}

function cargarCategorias(){
	
    $.ajax({
        url: '../../business/imagenaccion/admistrador.php',
        type: 'POST',
        dataType: 'html',
        data: {accion: 'categoria',id: '1'},
        success:function(data){
            var code=JSON.parse(data);
            alert(code[0]);
        }
    });
    /*notas de datos recogidos por ajax
    codigo,nombre,descripcion,precio,ruta
    */
	
}
/*
 $.ajax({
                    type: "POST",
                    url: "buscar.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultado").html("<p align='center'><img src='ajax-loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resultado").empty();
                          $("#resultado").append(data);
                                                             
                    }
              });

 */