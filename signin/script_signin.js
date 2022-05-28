const form = document.getElementById("form_sigin");
const button_signin = document.getElementById("button-signin");
const icono_button = document.getElementById("icono-button");
const notificacion = document.getElementById("notificacion");

button_signin.addEventListener("click", async function (e) {
	icono_button.innerHTML = '<div class="loader is-loading"></div>';

	const formData = new FormData(form);

	var mensaje = validarCampos(formData);
	
	if (mensaje != 'ok') {
		notificacion.innerHTML = mensaje;
		notificacion.classList.remove('is-success');
		notificacion.classList.add('is-danger');
		notificacion.classList.remove('is-hidden');
		icono_button.innerHTML = '<i class="fas fa-pen"></i>';
		return;
	}
	console.log('todo bien');

	// Agregando icono normal
	icono_button.innerHTML = '<i class="fas fa-pen"></i>';
});
	
function validarCampos (formData) {
	var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

	if (!formData.get('nombre') || !formData.get('email') || !formData.get('pass') || !formData.get('passC')) {
		return  "Los campos estan vacios.";
	} 

	if(!formData.get('email').match(validRegex)){
		return  "El email no tiene el formato correcto.";
	}

	if (formData.get('pass') != formData.get('passC')) {
		return  "Las contraseñas no son iguales.";
	} 

	if(!document.querySelector('#check_aviso').checked){
		return  "No has aceptado los terminos y condiciones.";	
	}
	
	return 'ok'	;
}