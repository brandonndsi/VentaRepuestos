window.onload=function(event){
	
mostrarAdministrador();
}
               
	function mostrarAdministrador(){
	//perso = document.getElementById("personaid").value;
	var valor =document.getElementById("personaid").value;
	//alert(valor);
	//val=valor+"";
	
	$.ajax({
		url:'../../business/imagenaccion/admistrador.php',
		type: "POST",
		data:{
			accion: 'nuevo',
			id:valor },
		success: function(response){
		alert(response);
		
			}
		});
}

function cargarImagen(url)
      {
        var imagen = new Image();
        imagen.onload = imagenCargada;
        imagen.src = url;
        return imagen;
      }

      function imagenCargada()
      {
        alert("La imagen se ha cargado correctamente");
      }