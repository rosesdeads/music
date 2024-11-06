function validarFormulario(){
    let nombre=document.getElementById("nombre").value;
    let apellidos=document.getElementById("apellidos").value;
    let email=document.getElementById("email").value;
    const emailCaracteres = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let telString=document.getElementById("telefono").value;
    let tel=parseInt(telString);
    let mensaje=document.getElementById("mensaje").value;

    if(nombre == " " || nombre<3){
        alert("Rellene el campo nombre correctamente");
        return false;
    }

    if(apellidos == "" || apellidos<4){
        alert("Rellene el campo de apellidos correctamente");
        return false;
    }

    if(!emailCaracteres.test(email) || email == " "){
        alert("Rellena el campo de correo correctamente");
        return false;
    }

    if(isNaN(tel) || tel == " " || tel<9){
        alert("Rellena el campo de teléfono correctamente");
        return false;
    }

    if(mensaje== " " || mensaje < 10){
        alert("Rellena el campo mensaje correctamente con más de 10 carácteres");
        return false;
    }

    alert("Datos rellenados correctamente");

}