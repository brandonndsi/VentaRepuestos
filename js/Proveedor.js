function nuevoProveedor(){
	alert("hola");
	if($('#productocodigo').val()!="" && $('#productonombre').val()!="" &&
	$('#productoprecio').val()!=""){
		productocodigo=document.getElementById("productocodigo").value;
		productonombre=document.getElementById("productonombre").value;
		productoprecio=document.getElementById("productoprecio").value;

		$(document).ready(function(){
			$.post('../business/proveedoraccion/ProveedorAccion.php', {
				action: 'nuevo',
				productocodigo: productocodigo,
				productonombre: productonombre,
				productoprecio: productoprecio,
			}, function(response) {
				alert(response);
			});
		});
	}
}

function actualizarProveedor(){

}

function eliminarProveedor(){

}
function buscarProveedor(){

}