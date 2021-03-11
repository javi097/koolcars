
  AOS.init();

  $( document ).ready( function() {
    window.responsiveTables.init();
    // or
    window.responsiveTables.init("{some-jquery-selector}");
  });

// Validacón del formulario de Login
function validarLogin()
{
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let error = document.getElementById('msgError');

    if (email.trim() == "" || password.trim() == "") {
        error.innerHTML = "";
        error.innerHTML += "Debes introducir ambos campos";
        $('#msgError').show();
        error.onmouseover = () => {
            $('#msgError').fadeOut(1000);
        }
    } else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
        error.innerHTML = "";
        error.innerHTML += "Debes introducir un correo válido";
        $('#msgError').show();
        error.onmouseover = () => {
            $('#msgError').fadeOut(1000);
        }
    }else{
        document.getElementById('formLogin').submit();
    }
}

// Validación para el formulario de Registro 

function iniciarTodo(){
    validar();
}


function validarNombre(){
    let nombre=document.getElementById("nombre").value;
    let msgName = document.getElementById('msgNombre');
    if (nombre.trim()=="") {
        msgName.innerHTML = "";
        msgName.innerHTML += "Debes introducir un nombre";
        $('#msgNombre').show();
        msgName.onmouseover = () => {
            $('#msgNombre').hide();
        }
        return false;
    }else{
        msgName.innerHTML = "";
        $('#msgNombre').hide();
    }
    return true;
}


function validarNombreUsuario()
{
    let nombreUsuario = document.getElementById('nombreUsuario').value;
    let msgNickname = document.getElementById('msgNickname');
    if (nombreUsuario.trim()=="") {
      msgNickname.innerHTML = "";
      msgNickname.innerHTML += "Debes introducir un nombre de usuario";
        $('#msgNickname').show();
        msgNickname.onmouseover = () => {
            $('#msgNickname').hide();
        }
        return false;
    }else if(nombreUsuario.length <6){
      msgNickname.innerHTML = "";
      msgNickname.innerHTML += "Mínimo de caracteres permitidos: 6";
        $('#msgNickname').show();
        msgNickname.onmouseover = () => {
            $('#msgNickname').hide();
        }
        return false;
    }else{
      msgNickname.innerHTML = "";
        $('#msgNickname').hide();
    }
    return true;
}


function validarCorreo()
{
    let email = document.getElementById('email').value;
    let msgEmail = document.getElementById('msgEmail');

    if (email.trim()=="") {
        msgEmail.innerHTML = "";
        msgEmail.innerHTML += "Debes introducir un correo";
        $('#msgEmail').show();
        msgEmail.onmouseover = () => {
            $('#msgEmail').hide();
        }
        return false;
    }else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))){
        msgEmail.innerHTML = "";
        msgEmail.innerHTML += "Correo introducido no válido";
        $('#msgEmail').show();
        msgEmail.onmouseover = () => {
            $('#msgEmail').hide();
        }
        return false;
    }else{
        msgEmail.innerHTML = "";
        $('#msgEmail').hide();
    }
    return true;
}

function validarContraseña()
{
    let password = document.getElementById('password').value;
    let passwordConfirm = document.getElementById('password-confirm').value;
    let msgPassword = document.getElementById('msgPassword');

    if (password.trim()=="" || passwordConfirm.trim()=="") {
        msgPassword.innerHTML = "";
        msgPassword.innerHTML += "Debes introducir ambas contraseñas";
        $('#msgPassword').show();
        msgPassword.onmouseover = () => {
            $('#msgPassword').hide();
        }
        return false;
    }else if(password.length<8 || passwordConfirm.length<8){
        msgPassword.innerHTML = "";
        msgPassword.innerHTML += "Mínimo de caracteres permitidos: 8";
        $('#msgPassword').show();
        msgPassword.onmouseover = () => {
            $('#msgPassword').hide();
        }
        return false;
    }else if(!(password == passwordConfirm))
    {
        msgPassword.innerHTML = "";
        msgPassword.innerHTML += "Las contraseñas no coinciden";
        $('#msgPassword').show();
        msgPassword.onmouseover = () => {
            $('#msgPassword').hide();
        }
        return false;
    }else{
        msgPassword.innerHTML = "";
        $('#msgPassword').hide();
    }
    return true;

}

function validarTodos()
{
    validarNombre();
    validarNombreUsuario();
    validarCorreo();
    validarContraseña();

    if (validarNombre() && validarNombreUsuario() && validarCorreo() && validarContraseña())
    {
        return true;  
    }else{
        return false;
    }

}

function validar(e){

    if (validarTodos()) {
        document.getElementById('formRegister').submit();
    }else{
        e.preventDefault();
    }

}
