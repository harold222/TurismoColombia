function validarFormulario(){
    var expresionnombre, expresionCorreo;

    let nombre = document.querySelector('#nombre').value;
    let correo = document.querySelector('#correo').value;
    let mensaje = document.querySelector('#mensaje').value;

    expresionnombre = /^([A-Za-z\s])*$/; //que solo sean letras
    expresionCorreo = /^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})/;

    if(nombre == 0 || correo == 0 || mensaje == 0){
        alert("De rellenar los campos");
        return false;
    }else if(nombre.length < 3){
        alert("El nombre es muy corto");
        return false;
    }else if(nombre.length > 45){
        alert("El nombre es mu largo");
        return false;
    }else if(!expresionnombre.test(nombre)){
        alert("El nombre no es valido");
        return false;
    }else if(correo.length > 70){
        alert("El correo supera el limite");
        return false;
    }else if(!expresionCorreo.test(correo)){
        alert("El correo no es valido");
        return false;
    }

}
