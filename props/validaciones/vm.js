function vm(){
	var marca = document.getElementById("marca").value;

	

	if (marca.length==0) {
		document.getElementById("marca").style.boxShadow="0 0 15px red";
		document.getElementById("marca").placeholder="este campo es obligatorio";
		return false;
	}else{
		document.getElementById("marca").style.boxShadow="0 0 15px green";
	}

	
	return true;
}

function vim(){
	var marca = document.getElementById("marca").selectedIndex;
	var modelo = document.getElementById("modelo").value;


if (marca ==0) {
		document.getElementById("marca").style.boxShadow="0 0 15px red";
		
		return false;
	}else{
		document.getElementById("marca").style.boxShadow="0 0 15px green";
	}
	if (modelo.length==0) {
		document.getElementById("modelo").style.boxShadow="0 0 15px red";
		document.getElementById("modelo").placeholder="este campo es obligatorio";
		return false;
	}else{
		document.getElementById("modelo").style.boxShadow="0 0 15px green";
	}
	return true;
}