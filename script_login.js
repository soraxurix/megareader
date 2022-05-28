const button_login = document.getElementById("button-login");
const button_signin = document.getElementById("button-signin");
const icono_button = document.getElementById("icono-button");
const notificacion = document.getElementById("notificacion");

button_login.addEventListener('click', async function (e) {
	// Agregamos el icono de cargando
	icono_button.innerHTML = '<div class="loader is-loading"></div>';

	var form = document.getElementById("form_login");
	var dataForm = new FormData(form);
	
	const res = await fetch('inicar_sesion.php', {
		method: 'POST',
		body: dataForm
	});

	const data = await res.json();

	switch (data) {
		case 200:
			notificacion.innerHTML ='El usuario es correcto'; 
			notificacion.classList.remove('is-danger');
			notificacion.classList.add('is-success');
			notificacion.classList.remove('is-hidden');

			window.location.replace("main/");
			break;
		case 201:
			notificacion.innerHTML ='No se pasaron los valores del formulario'; 
			notificacion.classList.remove('is-success');
			notificacion.classList.add('is-danger');
			notificacion.classList.remove('is-hidden');
			break;
		case 202:
			notificacion.innerHTML ='El correo electrónico ingresado no es correcto'; 
			notificacion.classList.remove('is-success');
			notificacion.classList.add('is-danger');
			notificacion.classList.remove('is-hidden');			
			break;
		case 203:
			notificacion.innerHTML ='La contrraseña ingresada no es correcta'; 
			notificacion.classList.remove('is-success');
			notificacion.classList.add('is-danger');
			notificacion.classList.remove('is-hidden');
			break;
	}

	// Agregando icono normal
	icono_button.innerHTML = '<i class="fas fa-user"></i>';
});