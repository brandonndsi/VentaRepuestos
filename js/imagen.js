window.onload=function(event){
	
mostrarAdministrador();
}
               
	function mostrarAdministrador(){
	personaid = document.getElementById("personaid").value;
	$(document).ready(function(){
	$.post('../../business/imagenaccion/admistrador.php',{
		accion: 'nuevo',
		personaid:personaid
	},function(response){
		alert(response);
		dato=response;
		document.getElementById("nuevo").src=dato;
		//var capa=document.getElementById("imagen");
		/*var imagen =document.createElement("img");
		img.innerHTML="<img src="+dato+">";*/
		//capa.appendChild(cargarImagen(dato));
		//$("#imagen").html("<img src="+dato+">");
	});
	
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