window.onload=function(){
	$("#menu").mCustomScrollbar({
            theme: "dark-thin"//,
            //scrollButtons:{ enable: true}
            });
	$("datos").mCustomScrollbar({
            theme: "dark-thin"//,
            //scrollButtons:{ enable: true}
            });
}
function cerrarHelp(){
	document.getElementById("help").style.transform="translateY(-150%)";
}
function abrirModal(){
	document.getElementById("help").style.transform="translateY(0%)";
}

function cerrarBuscar(){
	document.getElementById("buscar").style.transform="translateY(-150%)";
}
function abrirBuscar(){
	document.getElementById("buscar").style.transform="translateY(0%)";
}
function cerrarCampana(){
	document.getElementById("campana").style.transform="translateX(+150%)";
}
function abrirCampana(){
	document.getElementById("campana").style.transform="translateX(0%)";

}