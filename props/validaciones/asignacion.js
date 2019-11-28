function asignacion(){

    var categoria = document.getElementById('categoria').selectedIndex;
    var dui_enc = document.getElementById('dui_enc').selectedIndex;
    var estado = document.getElementById('estado').selectedIndex;
    var fecha_asig = document.getElementById('fecha_asig').value;
    

    document.getElementByTagName("categoria").addEventListener("change", function() {

  // crea un campo oculto con el mismo nombre que la lista desplegable
  var oculto = document.createElement("input");
  oculto.type  = "hidden";
  oculto.value = this.value;
  oculto.name  = this.name;
  document.getElementById("miForm").appendChild(oculto);
  
  // deshabilita la lista desplegable
  this.disabled = "disabled";
});


    //Validar comboBox
    if(categoria == 0){
        document.getElementById("categoria").style.boxShadow = '0 0 15px red'; 
        return false;
    }else{
        document.getElementById("categoria").style.boxShadow = '0 0 15px green';
    }

  //Validar comboBox
  if(dui_enc == 0){
    document.getElementById("dui_enc").style.boxShadow = '0 0 15px red'; 
    return false;
}else{
    document.getElementById("dui_enc").style.boxShadow = '0 0 15px green';
}


//Validar comboBox
if(estado == 0){
    document.getElementById("estado").style.boxShadow = '0 0 15px red'; 
    return false;
}else{
    document.getElementById("estado").style.boxShadow = '0 0 15px green';
}

    //Validar fecha
    if(fecha_asig == ""){
        document.getElementById("fecha_asig").style.boxShadow = '0 0 15px red'; 
        return false;
    }else{
        document.getElementById("fecha_asig").style.boxShadow = '0 0 15px green';
    }

    return true;

// PARA COLOCAR COLOR A UN INPUT QUE ESTA VACIO
// document.getElementById("nombre").style.backgroundColor = "red";
}