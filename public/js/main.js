document.addEventListener('DOMContentLoaded', () => {
	const imgLightBox = document.querySelectorAll('.materialboxed');
	M.Materialbox.init(imgLightBox, {
		inDuration: 500,
		outDuration: 500
	});
});

function Mostrar(){
	document.getElementById("caja").style.display = "block";
}
function Ocultar(){
	document.getElementById("caja").style.display = "none";
}
function Mostrar_Ocultar(){
	var caja = document.getElementById("caja");
	
	
	if(caja.style.display == "none"){
		Mostrar();
		document.getElementById("boton").value = "Ver menos";
	}
	else{
		Ocultar();
		document.getElementById("boton").value = "Ver más";
	}
}