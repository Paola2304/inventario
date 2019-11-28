function validarFormulario(){

   var area   = document.getElementById('area').value;

    //Validar campo obligatorio
    if(area.length == 0){
        //document.getElementById("nombre").style.borderColor = "red"; 
        document.getElementById("area").style.boxShadow = '0 0 15px red'; 
        document.getElementById("area").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
        document.getElementById("area").style.boxShadow = '0 0 15px green';
    }
    return true;

// PARA COLOCAR COLOR A UN INPUT QUE ESTA VACIO
// document.getElementById("nombre").style.backgroundColor = "red";
}