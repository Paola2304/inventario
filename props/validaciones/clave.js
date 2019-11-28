function validarClave(){

	var oldClave = document.getElementById('oldClave').value;
	var clave = document.getElementById('clave').value;
	var newClave = document.getElementById('newClave').value;

	if(oldClave.length.length = 0){
		document.getElementById('oldClave').style.boxShadow="0 0 15px red";
		document.getElementById('oldClave').placeholder="Este campo es obligatorio";
		return false;

	}else{
		document.getElementById('oldClave').style.boxShadow="0 0 15px green";

	}

	if(clave.length = 0){
		document.getElementById('clave').style.boxShadow="0 0 15px red";
		document.getElementById('clave').placeholder="Este campo es obligatorio";
		return false;

	}else{
		document.getElementById('clave').style.boxShadow="0 0 15px green";

	}

	if(newClave.length = 0){
		document.getElementById('newClave').style.boxShadow="0 0 15px red";
		document.getElementById('newClave').placeholder="Este campo es obligatorio";
		return false;

	}else{
		document.getElementById('newClave').style.boxShadow="0 0 15px green";

	}

	if(oldClave = newClave){
		document.getElementById('oldClave').style.boxShadow="0 0 15px red";
		document.getElementById('oldClave').placeholder="Las claves no pueden ser iguales";
		return false;

	}else{
		document.getElementById('oldClave').style.boxShadow="0 0 15px green";

	}

	return true;

}