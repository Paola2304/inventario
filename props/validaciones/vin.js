function vin(){
	var categoria = document.getElementById("categoria").selectedIndex;
	var modelo = document.getElementById("modelo").selectedIndex;
	var codigo =document.getElementById("codigo").value;
	var fecha =document.getElementById("fecha").value;
	var estado = document.getElementById("estado").selectedIndex;
	var descripcion =document.getElementById("descripcion").value;

	if (categoria == 0) {
		document.getElementById("categoria").style.boxShadow="0 0 15px red";
		return	false;
	}else{
		document.getElementById("categoria").style.boxShadow="0 0 15px green";
	}
	if (modelo == 0) {
		document.getElementById("modelo").style.boxShadow="0 0 15px red";
		return	false;
	}else{
		document.getElementById("modelo").style.boxShadow="0 0 15px green";
	}
	if (codigo.length == 0) {
		document.getElementById("codigo").style.boxShadow="0 0 15px red";
		document.getElementById("codigo").placeholder=" este campo es obligatorio";
		return	false;
	}else{
		document.getElementById("codigo").style.boxShadow="0 0 15px green";
	}
	if (fecha == "") {
		document.getElementById("fecha").style.boxShadow="0 0 15px red";
		return	false;
	}else{
		document.getElementById("fecha").style.boxShadow="0 0 15px green";
	}
	if (estado == 0) {
		document.getElementById("estado").style.boxShadow="0 0 15px red";
		return	false;
	}else{
		document.getElementById("estado").style.boxShadow="0 0 15px green";
	}
	if (descripcion.length == 0) {
		document.getElementById("descripcion").style.boxShadow="0 0 15px red";
		document.getElementById("descripcion").placeholder=" este campo es obligatorio";
		return	false;
	}else{
		document.getElementById("descripcion").style.boxShadow="0 0 15px green";
	}
	return true;
}

function vequi(){
	var codigo = document.getElementById("codigo").selectedIndex;
	var fecha =document.getElementById("fecha").value;
	var estado = document.getElementById("estado").selectedIndex;
	var descripcion =document.getElementById("descripcion").value;

	if (codigo == 0) {
		document.getElementById("codigo").style.boxShadow="0 0 15px red";
		return	false;
	}else{
		document.getElementById("codigo").style.boxShadow="0 0 15px green";
	}

	if (fecha == "") {
		document.getElementById("fecha").style.boxShadow="0 0 15px red";
		return	false;
	}else{
		document.getElementById("fecha").style.boxShadow="0 0 15px green";
	}
	if (estado == 0) {
		document.getElementById("estado").style.boxShadow="0 0 15px red";
		return	false;
	}else{
		document.getElementById("estado").style.boxShadow="0 0 15px green";
	}
	if (descripcion.length == 0) {
		document.getElementById("descripcion").style.boxShadow="0 0 15px red";
		document.getElementById("descripcion").placeholder=" este campo es obligatorio";
		return	false;
	}else{
		document.getElementById("descripcion").style.boxShadow="0 0 15px green";
	}
	return true;
}

