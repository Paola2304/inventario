function validarFormulario(){

	var marca = document.getElementById("marca").value;

	if (marca.length == 0) {

		document.getElementById("marca").style.boxShadow = "0 0 15px red";
		document.getElementById("marca").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("marca").style.boxShadow = "0 0 15px green";
	}

	return true;
}