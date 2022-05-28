<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Principal - MegarReader</title>
	<link rel="icon" type="image/x-icon" href="https://raw.githubusercontent.com/soraxurix/GDLREADER/main/GDLREADER/app/src/main/res/drawable/logo.png">	
	
	<!-- BULMA FRAMEWORK -->
	<link rel="stylesheet" href="../librerias/bulma/css/bulma.min.css">
	<!-- FRAMEWORK ANIMACIONES -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />		
	<!-- FONT AWESOME -->
	<script src="https://kit.fontawesome.com/cb918a26fb.js" crossorigin="anonymous"></script>
	
	<style>
		.nav_container{
			border-bottom: solid 0.5px;
			padding: 10px 100px;
		}
		@media screen and (max-width: 1026px) {
  			.nav_container {
		    	padding: 10px 0;
		  	}
		}

	</style>	
</head>
<body>
	<div class="nav_container">
		<nav class="navbar">
		  <div class="navbar-brand">
		    <a class="navbar-item" href="#">
		      <!-- <img src="https://raw.githubusercontent.com/soraxurix/megareader_cloud/main/logo%20horizontal.png"> -->
			  <img src="https://raw.githubusercontent.com/soraxurix/megareader_cloud/main/public/logo%20horizontal.png" width="112" height="28">
		      <!-- <img src="https://raw.githubusercontent.com/soraxurix/GDLREADER/main/GDLREADER/app/src/main/res/drawable/logo.png">
		      <span class="is-size-4">Megareader</span> -->
		    </a>
		    <div class="navbar-burger" data-target="navBar">
		      <span></span>
		      <span></span>
		      <span></span>
		    </div>
		  </div>

		  <div id="navBar" class="navbar-menu">
		    		    	  
		    <div class="navbar-end">
				<div class="navbar-item has-dropdown is-hoverable">
					<a class="navbar-link is-size-5 has-text-info" href="#"> adsasdasdad </a>
					<div class="navbar-dropdown is-boxed">
						<a class="navbar-item is-size-5 icon-text">
							<span class="icon has-text-success"><i class="fas fa-book"></i></span> 
							<span class="has-text-black">Libros</span>
						</a>
						<a class="navbar-item is-size-5 icon-text" href="#"> 
							<span class="icon has-text-primary"><i class="fas fa-user"></i></span>
							<span class="has-text-black">Perfil</span>
						</a>
						<a class="navbar-item is-size-5 icon-text" href="#"> 
							<span class="icon has-text-info"><i class="fas fa-book-reader"></i></span>
							<span class="has-text-black">Mis libros</span>
						</a>
						<hr class="navbar-divider">
						<a class="navbar-item is-size-5 icon-text" href="#"> 
							<span class="icon has-text-warning"><i class="fas fa-question-circle"></i></span>
							<span class="has-text-black">Sobre nosotros</span>
						</a>
						<a class="navbar-item is-size-5 icon-text" href="sesion/cerrar_sesion.php"> 
							<span class="icon has-text-danger"><i class="fas fa-sign-out-alt"></i></span>
							<span class="has-text-black">Cerrar Sesion</span>
						</a>
					</div>
				</div>			
		    </div>
		  </div>
		</nav>
	</div>	

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

	<style>
		@media screen and (max-width: 1025) {
		  .navbar {
		    padding: 0;
		  }
		}		
	</style>	
</body>
</html>