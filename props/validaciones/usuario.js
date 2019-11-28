function validarFormulario(){

	var dui       = document.getElementById("dui").value;
	var nombre    = document.getElementById("nombre").value;
	var apellido  = document.getElementById("apellido").value;
	var sexo      = document.getElementById("sexo").selectedIndex;
	var direccion = document.getElementById("direccion").value;
	var telefono  = document.getElementById("telefono").value;
	var correo    = document.getElementById("correo").value;
	var usuario   = document.getElementById("usuario").value;
	var clave1    = document.getElementById("clave1").value;
	var clave2    = document.getElementById("clave2").value;
	var rol       = document.getElementById("rol").selectedIndex;


	if (dui.length == 0) {

		document.getElementById("dui").style.boxShadow = "0 0 15px red";
		document.getElementById("dui").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("dui").style.boxShadow = "0 0 15px green";
	}


	if (nombre.length == 0) {

		document.getElementById("nombre").style.boxShadow = "0 0 15px red";
		document.getElementById("nombre").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("nombre").style.boxShadow = "0 0 15px green";
	}


	if (apellido.length == 0) {

		document.getElementById("apellido").style.boxShadow = "0 0 15px red";
		document.getElementById("apellido").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("apellido").style.boxShadow = "0 0 15px green";
	}


	if (sexo == 0) {

		document.getElementById("sexo").style.boxShadow = "0 0 15px red";
		document.getElementById("sexo").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("sexo").style.boxShadow = "0 0 15px green";
	}


	if (direccion.length == 0) {

		document.getElementById("direccion").style.boxShadow = "0 0 15px red";
		document.getElementById("direccion").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("direccion").style.boxShadow = "0 0 15px green";
	}


	if (telefono.length == 0) {

		document.getElementById("telefono").style.boxShadow = "0 0 15px red";
		document.getElementById("telefono").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("telefono").style.boxShadow = "0 0 15px green";
	}


	if (!(/\S+@\S+\.\S+/.test(correo))) {

		document.getElementById("correo").style.boxShadow = "0 0 15px red";
		document.getElementById("correo").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("correo").style.boxShadow = "0 0 15px green";
	}


	if (usuario.length == 0) {

		document.getElementById("usuario").style.boxShadow = "0 0 15px red";
		document.getElementById("usuario").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("usuario").style.boxShadow = "0 0 15px green";
	}


	if (clave1.length == 0) {

		document.getElementById("clave1").style.boxShadow = "0 0 15px red";
		document.getElementById("clave1").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("clave1").style.boxShadow = "0 0 15px green";
	}


	if (clave2.length == 0) {

		document.getElementById("clave2").style.boxShadow = "0 0 15px red";
		document.getElementById("clave2").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("clave2").style.boxShadow = "0 0 15px green";
	}


	if (rol == 0) {

		document.getElementById("rol").style.boxShadow = "0 0 15px red";
		document.getElementById("rol").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("rol").style.boxShadow = "0 0 15px green";
	}

	return true;
}


function validarFormulario2(){

	var nombre    = document.getElementById("nombre").value;
	var apellido  = document.getElementById("apellido").value;
	var sexo      = document.getElementById("sexo").selectedIndex;
	var direccion = document.getElementById("direccion").value;
	var telefono  = document.getElementById("telefono").value;
	var correo    = document.getElementById("correo").value;
	var usuario   = document.getElementById("usuario").value;
	var rol       = document.getElementById("rol").selectedIndex;



	if (nombre.length == 0) {

		document.getElementById("nombre").style.boxShadow = "0 0 15px red";
		document.getElementById("nombre").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("nombre").style.boxShadow = "0 0 15px green";
	}


	if (apellido.length == 0) {

		document.getElementById("apellido").style.boxShadow = "0 0 15px red";
		document.getElementById("apellido").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("apellido").style.boxShadow = "0 0 15px green";
	}


	if (sexo == 0) {

		document.getElementById("sexo").style.boxShadow = "0 0 15px red";
		document.getElementById("sexo").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("sexo").style.boxShadow = "0 0 15px green";
	}


	if (direccion.length == 0) {

		document.getElementById("direccion").style.boxShadow = "0 0 15px red";
		document.getElementById("direccion").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("direccion").style.boxShadow = "0 0 15px green";
	}


	if (telefono.length == 0) {

		document.getElementById("telefono").style.boxShadow = "0 0 15px red";
		document.getElementById("telefono").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("telefono").style.boxShadow = "0 0 15px green";
	}


	if (!(/\S+@\S+\.\S+/.test(correo))) {

		document.getElementById("correo").style.boxShadow = "0 0 15px red";
		document.getElementById("correo").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("correo").style.boxShadow = "0 0 15px green";
	}


	if (usuario.length == 0) {

		document.getElementById("usuario").style.boxShadow = "0 0 15px red";
		document.getElementById("usuario").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("usuario").style.boxShadow = "0 0 15px green";
	}


	if (rol == 0) {

		document.getElementById("rol").style.boxShadow = "0 0 15px red";
		document.getElementById("rol").placeholder = "Este campo es obligatorio";

		return false;
	}else{

		document.getElementById("rol").style.boxShadow = "0 0 15px green";
	}

	return true;
}