function cerrarContenido(){
	document.getElementById("informacionLP").style.display="none";
}
function cerrarTodo(){
	cerrarContenido();
	cerrarMarca();
	cerrarUbicacion();
	cerrarMision();
	cerrarVision();

}
/*funcion de marcas.*/
function marca(){
	cerrarTodo();
	abrirMarca();
	}

function cerrarMarca(){
	document.getElementById("marcaLPScroll").style.display="none";
}
function abrirMarca(){
	document.getElementById("marcaLPScroll").style.display="block";
}
/*termanado con lo de las marcas de repuestos*/

/*funcion de ubicación*/
function ubicacion(){
	cerrarTodo();
	abrirUbicacion();
	}
function cerrarUbicacion(){
	document.getElementById("ubicacionLP").style.display="none";
}
function abrirUbicacion(){
	document.getElementById("ubicacionLP").style.display="block";
}
/*finalizando lo de la ubicacion del local.*/

/*funcion de mision*/
function mision(){
	cerrarTodo();
	abrirMision();
	}
function cerrarMision(){
	document.getElementById("misionLP").style.display="none";
}
function abrirMision(){
	document.getElementById("misionLP").style.display="block";
}
/*finalizando de la mision datos*/

/*funcion de vision*/
function vision(){
	cerrarTodo();
	abrirVision();
	}
function cerrarVision(){
	document.getElementById("visionLP").style.display="none";
}
function abrirVision(){
	document.getElementById("visionLP").style.display="block";
}
/*finalizando de la vision datos*/