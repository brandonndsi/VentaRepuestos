window.onload=function(){
	$("#menu").mCustomScrollbar({
            theme: "dark-thin"//,
            //scrollButtons:{ enable: true}
            });
	$("#datos").mCustomScrollbar({
            theme: "dark-thin"//,
            //scrollButtons:{ enable: true}
            });
}
function cerrarHelp(){
	document.getElementById("help").style.transform="translateY(-150%)";
}
function abrirModal(){
	document.getElementById("help").style.transform="translateY(0%)";
	//document.getElementById("contenedor_help").style.transform="translateY(0%)";
}

function cerrarBuscar(){
	document.getElementById("buscar").style.transform="translateY(-150%)";
}
function abrirBuscar(){
	document.getElementById("buscar").style.transform="translateY(0%)";
	//document.getElementById("contenedor_help").style.transform="translateY(0%)";
}