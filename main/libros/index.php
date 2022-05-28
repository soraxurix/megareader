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
	<title>Principal - MegarReader</title>
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

		.box{
			display: inline-block;
			width: 30%;
			margin: 0 10px;
			height: 250px;
			max-height: 250px;
		}
		@media screen and (max-width: 1026px) {
  			.nav_container {
		    	padding: 10px 0;
		  	}
		  	.main-content{
		  		width: 95%;
		  	}
		}

		@media screen and (max-width: 1026px) {
  			.box {
		    	width: 45%;
		  	}
		}/**/
		@media screen and (max-width: 755px) {
  			.box {
		    	width: 100%;
		    	margin: 0;
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
	<div class="container main-content">
		<p class="is-size-4 has-text-centered">Obten los mejores libros.</p>
		<hr>
		<div class="box" style>
			<p class="has-text-centered title is-5">Don quijote</p>	  

			<div class="card-image has-text-centered ">
			    <figure class="image is-64x64 is-inline-block">
			        <img src="https://imagenes.elpais.com/resizer/dcylXF7I3Oej-dyg6rTSbI3G0Ps=/414x0/arc-anglerfish-eu-central-1-prod-prisa.s3.amazonaws.com/public/7BN7MROFVTFLCFQ2FXZPUC3Y3E.jpg"/>
			    </figure>
			</div>
			<div class='card-content'>
				<br>
				<button class="button is-fullwidth is-success is-outlined" onclick="enviar_pagar(1)">Comprar ahora</button>
			</div>
		 	 
		</div>
		<div class="box" style>
			<p class="has-text-centered title is-5">Dracula</p>	  

			<div class="card-image has-text-centered ">
			    <figure class="image is-64x64 is-inline-block">
			        <img src="https://tumbaabierta.com/wp-content/uploads/2012/03/tumbaabierta_portada_dracula_ilustrado-mondadori.jpg"/>
			    </figure>
			</div>
			<div class='card-content'>
				<br>
				<button class="button is-fullwidth is-success is-outlined" onclick="enviar_pagar(2)">Comprar ahora</button>
			</div>
		  
		</div>
		<div class="box" style>
			<p class="has-text-centered title is-5">La teoría del todo</p>	  

			<div class="card-image has-text-centered ">
			    <figure class="image is-64x64 is-inline-block">
			        <img src="https://images-na.ssl-images-amazon.com/images/I/916d6cobjqL.jpg"/>
			    </figure>
			</div>
			<div class='card-content'>
				<br>
				<button class="button is-fullwidth is-success is-outlined" onclick="enviar_pagar(3)">Comprar ahora</button>
			</div>
		  
		</div>
		<div class="box" style>
			<p class="has-text-centered title is-5">El gato negro</p>	  

			<div class="card-image has-text-centered ">
			    <figure class="image is-64x64 is-inline-block">
			        <img src="https://m.media-amazon.com/images/I/41W3WKLzqeL.jpg"/>
			    </figure>
			</div>
			<div class='card-content'>
				<br>
				<button class="button is-fullwidth is-success is-outlined" onclick="enviar_pagar(4)">Comprar ahora</button>
			</div>
		  
		</div>
		<div class="box" style>
			<p class="has-text-centered title is-5">The Beginning After The End</p>	  

			<div class="card-image has-text-centered ">
			    <figure class="image is-64x64 is-inline-block">
			        <img src="https://m.media-amazon.com/images/I/51G93y3KZrL.jpg"/>
			    </figure>
			</div>
			<div class='card-content'>
				<br>
				<button class="button is-fullwidth is-success is-outlined" onclick="enviar_pagar(5)">Comprar ahora</button>
			</div>
		  
		</div>
		<div class="box" style>
			<p class="has-text-centered title is-5">Ready Player One</p>	  

			<div class="card-image has-text-centered ">
			    <figure class="image is-64x64 is-inline-block">
			        <img src="https://images-na.ssl-images-amazon.com/images/I/71R4I+eogrL.jpg"/>
			    </figure>
			</div>
			<div class='card-content'>
				<br>
				<!-- <button class="button ">Comprar ahora</button> -->
				<button class="button is-fullwidth is-success is-outlined" onclick="enviar_pagar(6)">Comprar ahora</button>
			</div>
		  
		</div>
	</div>

	<script src="script_libros.js"></script>
</body>
</html>