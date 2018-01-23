$(document).ready(function(){
mostrarAdministrador();
});
               
	function mostrarAdministrador(){
      valor = document.getElementById("personaid").value;
	//$(document).ready(function(){
            $.post('../../business/imagenaccion/administrador.php', {
                accion: 'nuevo',
                id: valor
            }, function(response) {
                alert(response);
               
            });
        //});
	
}