function validarFormulario(){

    var dui   = document.getElementById('dui').value;
    var nombre   = document.getElementById('nombres').value;
    var apellido = document.getElementById('apellidos').value;
    var correo = document.getElementById('correo').value;
    var telefono   = document.getElementById('telefono').value;
    var direccion = document.getElementById('direccion').value;
    var area = document.getElementById('area').selectedIndex;
    var sexo = document.getElementById('sexo').selectedIndex;




     //Validar campo obligatorio
     if(dui.length == 0){
        document.getElementById("dui").style.boxShadow = '0 0 15px red'; 
        document.getElementById("dui").placeholder = "Este campo es obligatorio"; 
        return false;
    }else{
        document.getElementById("dui").style.boxShadow = '0 0 15px green';
    }

    //Validar campo obligatorio
    if(nombre.length == 0){
        //document.getElementById("nombre").style.borderColor = "red"; 
        document.getElementById("nombres").style.boxShadow = '0 0 15px red'; 
        document.getElementById("nombres").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
        document.getElementById("nombres").style.boxShadow = '0 0 15px green';
    }

    //Validar campo obligatorio
    if(apellido.length == 0){
        document.getElementById("apellidos").style.boxShadow = '0 0 15px red'; 
        document.getElementById("apellidos").placeholder = "Este campo es obligatorio";
        return false;
    }else{
        document.getElementById("apellidos").style.boxShadow = '0 0 15px green';
    }


    //Validar correo
    if(!(/\S+@\S+\.\S+/.test(correo))){
        document.getElementById("correo").style.boxShadow = '0 0 15px red'; 
        document.getElementById("correo").placeholder = "Debe escribir un correo valido";
        return false;
    }else{
        document.getElementById("correo").style.boxShadow = '0 0 15px green';
    }


    if(telefono.length == 0){
        document.getElementById("telefono").style.boxShadow = '0 0 15px red'; 
        document.getElementById("telefono").placeholder = "Este campo es obligatorio"; 
        return false;
    }else{
        document.getElementById("telefono").style.boxShadow = '0 0 15px green';
    }



        //Validar comboBox
        if(direccion.length == 0){
            document.getElementById("direccion").style.boxShadow = '0 0 15px red';
            document.getElementById("direccion").placeholder = "Este campo es obligatorio"; 
            return false;
        }else{
            document.getElementById("direccion").style.boxShadow = '0 0 15px green';
        }

        //Validar comboBox
        if(sexo == 0){
            document.getElementById("sexo").style.boxShadow = '0 0 15px red'; 
            document.getElementById("sexo").placeholder = "Este campo es obligatorio"; 
            return false;
        }else{
            document.getElementById("sexo").style.boxShadow = '0 0 15px green';
        }

    //Validar comboBox
    if(area == 0){
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


function validarFormularioA(){

    var nombre   = document.getElementById('nombres').value;
    var apellido = document.getElementById('apellidos').value;
    var correo = document.getElementById('correo').value;
    var telefono   = document.getElementById('telefono').value;
    var direccion = document.getElementById('direccion').value;
    var area = document.getElementById('area').selectedIndex;
    var sexo = document.getElementById('sexo').selectedIndex;




    //Validar campo obligatorio
    if(nombre.length == 0){
        //document.getElementById("nombre").style.borderColor = "red"; 
        document.getElementById("nombres").style.boxShadow = '0 0 15px red'; 
        document.getElementById("nombres").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
        document.getElementById("nombres").style.boxShadow = '0 0 15px green';
    }

    //Validar campo obligatorio
    if(apellido.length == 0){
        document.getElementById("apellidos").style.boxShadow = '0 0 15px red'; 
        document.getElementById("apellidos").placeholder = "Este campo es obligatorio";
        return false;
    }else{
        document.getElementById("apellidos").style.boxShadow = '0 0 15px green';
    }


    //Validar correo
    if(!(/\S+@\S+\.\S+/.test(correo))){
        document.getElementById("correo").style.boxShadow = '0 0 15px red'; 
        document.getElementById("correo").placeholder = "Debe escribir un correo valido";
        return false;
    }else{
        document.getElementById("correo").style.boxShadow = '0 0 15px green';
    }

    if(telefono.length == 0){
        document.getElementById("telefono").style.boxShadow = '0 0 15px red'; 
        document.getElementById("telefono").placeholder = "Este campo es obligatorio"; 
        return false;
    }else{
        document.getElementById("telefono").style.boxShadow = '0 0 15px green';
    }


        //Validar comboBox
        if(direccion.length == 0){
            document.getElementById("direccion").style.boxShadow = '0 0 15px red';
            document.getElementById("direccion").placeholder = "Este campo es obligatorio"; 
            return false;
        }else{
            document.getElementById("direccion").style.boxShadow = '0 0 15px green';
        }

        //Validar comboBox
        if(sexo == 0){
            document.getElementById("sexo").style.boxShadow = '0 0 15px red'; 
            return false;
        }else{
            document.getElementById("sexo").style.boxShadow = '0 0 15px green';
        }

    //Validar comboBox
    if(area == 0){
        document.getElementById("area").style.boxShadow = '0 0 15px red'; 
        return false;
    }else{
        document.getElementById("area").style.boxShadow = '0 0 15px green';
    }




    return true;

// PARA COLOCAR COLOR A UN INPUT QUE ESTA VACIO
// document.getElementById("nombre").style.backgroundColor = "red";
}

