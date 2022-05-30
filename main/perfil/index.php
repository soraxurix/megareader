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
		<p class="is-size-4 has-text-centered has-text-weight-bold has-text-primary">Datos del usuario.</p>
		<hr>
		<p class="is-size-5">Nombre: <span class="has-text-info has-text-weight-bold"><?php echo $nombre?></span></p>
		<br>
		<p class="is-size-5">Correo electronico: <span class="has-text-info has-text-weight-bold"><?php echo $_SESSION['email_user']?></span></p>
		<br>
		<hr>		
		<div class="box is-hidden" id="container-libros_usuario" style="min-height: 200px; overflow: auto;">
			<table class="table is-fullwidth">
				<thead>
				    <tr>
				      <th><abbr title="Position">Pos</abbr></th>
				      <th>Team</th>
				      <th><abbr title="Played">Pld</abbr></th>
				      <th><abbr title="Won">W</abbr></th>
				      <th><abbr title="Drawn">D</abbr></th>
				      <th><abbr title="Lost">L</abbr></th>
				      <th><abbr title="Goals for">GF</abbr></th>
				      <th><abbr title="Goals against">GA</abbr></th>
				      <th><abbr title="Goal difference">GD</abbr></th>
				      <th><abbr title="Points">Pts</abbr></th>
				      <th>Qualification or relegation</th>
				    </tr>
			  	</thead>
			  	<tbody>
			  		<tr>
				      <th>1</th>
				      <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Leicester City</a> <strong>(C)</strong>
				      </td>
				      <td>38</td>
				      <td>23</td>
				      <td>12</td>
				      <td>3</td>
				      <td>68</td>
				      <td>36</td>
				      <td>+32</td>
				      <td>81</td>
				      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
				    </tr>
				    <tr>
				      <th>1</th>
				      <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Leicester City</a> <strong>(C)</strong>
				      </td>
				      <td>38</td>
				      <td>23</td>
				      <td>12</td>
				      <td>3</td>
				      <td>68</td>
				      <td>36</td>
				      <td>+32</td>
				      <td>81</td>
				      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
				    </tr>
		  		</tbody>	
			</table>
		</div>
	</div>

	<script src="script_perfil.js"></script>
</body>
</html>