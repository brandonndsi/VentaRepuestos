$(document).ready(function(){
mostrarAdministrador();
});
               
	function mostrarAdministrador(){
      valor = document.getElementById("personaid").value;
	$.ajax({
        url: '../../business/imagenaccion/admistrador.php',
        type: 'POST',
        dataType: 'html',
        data: {accion: 'nuevo',id:valor},
        success: function(data){
            var ruta=JSON.parse(data);
            rut=ruta[0];
        document.getElementById("nuevo").src=ruta[0];
        }
    });
    	
}