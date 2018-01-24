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
	valor=document.getElementById("pase").value;
    $.ajax({
        url: '../../business/imagenaccion/admistrador.php',
        type: 'POST',
        dataType: 'html',
        data: {accion: 'categoria',id: valor},
        success:function(data){
            var code=JSON.parse(data);
            alert(" nombre: "+code[1]);
            var r=code[4];
            var n=code[1];
            cargarDiv(r,n);
        }
    });
    /*notas de datos recogidos por ajax
    codigo,nombre,descripcion,precio,ruta
    */
}
function cargarDiv(ruta,nombre){
  var div="<div id="+"imagen"+"><img src="+ruta+"></div>"+
                  "<h4>"+nombre+"</h4>"+
                  "<div id='ver'>"+
                  "<a href='javascript:abrirModal();'><span class='icon-circle-with-plus'></span>Detalles</a>"+
                  "</d>"+
                  "<div id='carr'>"+
                  "<a href=''><span class='icon-shopping-cart'>Carrito</span></a>"+
                  "</div>"+
                  "</div>";
document.getElementById("contenedor_principal").innerHTML = document.getElementById("contenedor_principal").innerHTML + div;
//document.getElementById("contenedor_principal").append(div);
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