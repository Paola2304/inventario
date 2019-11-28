function validarFormulario(){

   var usuario   = document.getElementById('usuario').selectedIndex;
   var categoria = document.getElementById('categoria').selectedIndex;
   var f_recibido   = document.getElementById('f_recibido').value;
   var f_salida = document.getElementById('f_salida').value;
   var estado = document.getElementById('estado').selectedIndex;

    //Validar comboBox
    if(usuario == 0){
        document.getElementById("usuario").style.boxShadow = '0 0 15px red'; 
        return false;
    }else{
        document.getElementById("usuario").style.boxShadow = '0 0 15px green';
    }

    //Validar comboBox
    if(categoria == 0){
        document.getElementById("categoria").style.boxShadow = '0 0 15px red'; 
        return false;
    }else{
        document.getElementById("categoria").style.boxShadow = '0 0 15px green';
    }

   ///Validar fecha
   if(f_recibido == ""){
    document.getElementById("f_recibido").style.boxShadow = '0 0 15px red'; 
    return false;
}else{
    document.getElementById("f_recibido").style.boxShadow = '0 0 15px green';
}

    //Validar fecha
    if(f_salida == ""){
        document.getElementById("f_salida").style.boxShadow = '0 0 15px red'; 
        return false;
    }else{
        document.getElementById("f_salida").style.boxShadow = '0 0 15px green';
    }

    //Validar comboBox
    if(estado == 0){
        document.getElementById("estado").style.boxShadow = '0 0 15px red'; 
        return false;
    }else{
        document.getElementById("estado").style.boxShadow = '0 0 15px green';
    }

    return true;

// PARA COLOCAR COLOR A UN INPUT QUE ESTA VACIO
// document.getElementById("nombre").style.backgroundColor = "red";
}