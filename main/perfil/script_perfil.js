const container = document.getElementById("container-libros_usuario");
var encabezado = "";


(async()=>{
	const res = await fetch("get_libros_usuario.php");
	const data = await res.json();
	encabezado = '<p class="has-text-centered is-size-4 has-text-weight-bold has-text-primary">Libros del usuario.</p>';
	if (data == 201) {
		
		container.innerHTML = encabezado+'<p class="has-text-centered is-size-5 text has-text-danger has-text-weight-semibold">No tienes ningún libro registrado</p>';
		container.classList.remove("is-hidden");
	} else {
		await imprimir_tabla(data);
		container.classList.remove("is-hidden");
	}

})();

async function imprimir_tabla(data){
	// Esta vairable es para converitr el numero del dinero en formato de dinero
	var formatter = new Intl.NumberFormat('en-US', {
	  style: 'currency',
	  currency: 'USD',
	});

	var tabla = "";

	tabla += '<table class="table is-fullwidth">';
	tabla += '<thead>';
	tabla += '<tr>';
	tabla += '<th class="has-text-info">Título</th> <th class="has-text-info">Fecha de publicación</th> <th class="has-text-info">Editorial</th> <th class="has-text-info">Fecha Compra</th> <th class="has-text-info">Total</th>';
	tabla += '</tr>';
	tabla += '</thead>';
	tabla += '<tbody>';

	var cantidad_libros = data.length;
	for (var i = 0; i < cantidad_libros; i++) {
		tabla += '<tr>';
		
		// Converitomso el objeto que recibimos a un arreglo 
		var libro = Object.keys(data[i]).map((key) => data[i][key]);

		for(var e = 0; e < libro.length; e++){
			if (e != 4) {
				tabla += '<th class="has-text-grey has-text-weight-normal">';
				tabla += libro[e];
			} else {
				tabla += '<th class="has-text-success">';
				tabla += formatter.format(libro[e]);
			}
			tabla += '</th>';			
		}

		tabla += '</tr>';
	}

	tabla += '</tbody>';
	tabla += '</table>';

	container.innerHTML = tabla;
}