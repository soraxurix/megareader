<?php 
	session_start();
	$usuario = $_SESSION['id_user'];
	$nombre = $_SESSION['name_user'];
	
	if(!isset($usuario)){
		header("location: https://megareader.azurewebsites.net/");
		die();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perfil - MegarReader</title>
	<link rel="icon" type="image/x-icon" href="https://raw.githubusercontent.com/soraxurix/GDLREADER/main/GDLREADER/app/src/main/res/drawable/logo.png">	
	
	<!-- BULMA FRAMEWORK -->
	<link rel="stylesheet" href="../../librerias/bulma/css/bulma.min.css">
	<!-- FRAMEWORK ANIMACIONES -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />		
	<!-- FONT AWESOME -->
	<script src="https://kit.fontawesome.com/cb918a26fb.js" crossorigin="anonymous"></script>
	
	<style>
		.nav_container{
			border-bottom: solid 0.5px #48A6F4;
			padding: 10px 100px;
		}

		.main-content{
			min-height: 300px; 
			border-radius: 8px; 
			margin-top: 30px;
			padding: 30px;
			border: solid 5px #48A6F4;
			box-shadow: 2px 2px 17px -4px rgba(0,0,0,0.58);
		}
		@media screen and (max-width: 1026px) {
  			.nav_container {
		    	padding: 10px 0;
		  	}
		  	.main-content{
		  		width: 95%;
		  	}
		}

	</style>	
</head>
<body>
	<?php include '../header/index.php';?>


	<script>
		document.addEventListener('DOMContentLoaded', () => {

		  // Get all "navbar-burger" elements
		  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

		  // Add a click event on each of them
		  $navbarBurgers.forEach( el => {
		    el.addEventListener('click', () => {

		      // Get the target from the "data-target" attribute
		      const target = el.dataset.target;
		      const $target = document.getElementById(target);

		      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
		      el.classList.toggle('is-active');
		      $target.classList.toggle('is-active');

		    });
		  });

		});
	</script>


	<!-- Main contnet -->
	<div class="container main-content" >
		<p class="is-size-4 has-text-centered has-text-weight-bold has-text-primary">¿Quienes somos?</p>
		<div class="box has-text-justified is-size-5">
			En la actualidad se pueden encontrar en la red una gran cantidad de bibliotecas virtuales y entre ellas algunas especializadas en el tema de responsabilidad social pero restringidas a sus propios materiales o a una cantidad limitada de los mismos o circunscritas al país de origen. Otras bibliotecas son una colección interminable de PDFs sin referencia alguna o de respeto a las fuentes originales.
			<br><br>
			Se plantea entonces la necesidad de contar con una biblioteca virtual especializada en responsabilidad social y otras temáticas relacionadas, que sea de fácil consulta y accesible a todo público, con buscadores adecuados y categorías bien definidas. Como en una biblioteca real, que no se tenga que llevar el libro para saber lo que contiene.
			<br><br>
			Esperamos que sea de su agrado y que le sea útil en las tareas y trabajos que desempeñe, los cuáles son en últimas los deseos de la responsabilidad social: aprender de los otros (de sus éxitos y sus fracasos), llevar a la práctica los conocimientos adquiridos y realizarla de la mejor forma posible; más allá de la autocomplacencia, del marketing o de la buena imagen ante un público cada vez más exigente.
			<br><br>
			<span class="has-text-weight-bold">Contactanos</span>
			<br>
			<span class="has-text-info">+52 449 154 3047</span>
			<br>
			<span class="has-text-info">megareader@gmail.com</span>
		</div>
	</div>

	<script src="script_perfil.js"></script>
</body>
</html>