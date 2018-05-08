/*
** Añadir evento para mostrar y ocultar modal de inicio de sesión
** a botones
*/
var btnLogin = document.getElementById("btn-login");
var btnExit = document.getElementsByClassName("icon-clear")[0];

btnLogin.addEventListener("click", function() {
    showHideModal("modal-login");
});
btnExit.addEventListener("click", function() {
    showHideModal("modal-login");
});


/**
 * Función para mostrar/ocultar el modal de inicio de sesión
 * @param id
 */
function showHideModal(id) {
    var modal = document.getElementById(id);
    modal.style.transition = "opacity 1s"
    if (modal.style.opacity == 0) {
        modal.style.opacity = "1";
        modal.style.zIndex = "2";
    } else {
        modal.style.opacity = "0";
        setTimeout(function(){
            modal.style.zIndex = "-1";
        }, 1000);
    }
}

/**
 * Función que comprueba los campos de un formulario
 * @param id
 */
function checkForm(id) {
    var msj = "";
    var form = document.forms.namedItem(id);
    var length = form.elements.length;

    for(var i = 0; i < length; i++) {
        var element = form.elements[i];
        var name = element.name;
        var valor = element.value.trim();

        if (name) {
            switch (name) {
                case 'name':
                    if (valor < 6) { // Nombre mas de 6 caracteres
                        msj = 'Debe rellenar correctamente su nombre';
                        showError(id, msj);
                        return false;
                    }
                    break;
                case 'email':
                    var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; // Regexp para email
                    if (!valor.match(pattern)) {
                        msj = 'Debe introducir un correlo electrónico valido';
                        showError(id, msj);
                        return false;
                    }
                    break;
                case 'password':
                    var pattern = /.{7,}/; // Contraseña mas de 7 caracteres
                    if (!valor.match(pattern)) {
                        msj = 'La contraseña debe contener mínimo 7 caracteres';
                        showError(id, msj);
                        return false;
                    }
                    break;
                default:
                    continue;
            }
        } else {
            continue;
        }
    }

    return true;
}

/**
 * Método para mostrar mensaje de error en formularios
 * @param id
 * @param msj
 */
function showError(id, msj) {
    var div = document.getElementById(id+'-error');
    div.innerText = msj;
    div.style.display = 'block';
}