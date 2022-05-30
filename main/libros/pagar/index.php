<?php 
	$idLibro = $_GET['id'];
	
	session_start();
	$usuario = $_SESSION['id_user'];
	$nombre = $_SESSION['name_user'];
	
	if(!isset($usuario) || !isset($idLibro)){
		header("location: https://megareader.azurewebsites.net/");
		die();
	}

	include '../../../clases/conexion.php';
	$consulta = "select * from libros where id_libro = $idLibro";
	$result = mysqli_query($conexion, $consulta);

	$libro = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pagar Libro - MegarReader</title>
	<link rel="icon" type="image/x-icon" href="https://raw.githubusercontent.com/soraxurix/GDLREADER/main/GDLREADER/app/src/main/res/drawable/logo.png">	
	
	<!-- BULMA FRAMEWORK -->
	<link rel="stylesheet" href="../../../librerias/bulma/css/bulma.min.css">
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
			width: 550px;
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

	<!-- Librerias para OpenPay -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
	<script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>
</head>
<body>
	<?php include '../../header/index.php';?>


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
		<p class="is-size-4 has-text-centered has-text-weight-bold">Pagar libro.</p>
		<hr>
		<div class="card-image has-text-centered ">
			<p class="is-size-5 has-text-danger has-text-weight-semibold">Pagar: </p>
			<br>
		    <figure class="image is-64x64 is-inline-block">
		        <img src="https://megareader.azurewebsites.net/main/libros/portadas/<?php echo $libro['portada']?>"/>
		    </figure>
		    <div class='card-content'>
				<br>
				<p class="has-text-centered has-text-link has-text-weight-semibold"><?php echo $libro['titulo']?></p>
				<p class="has-text-centered has-text-weight-bold has-text-success is-size-4">$<?php echo $libro['precio']?>.00</p>
			</div>
		</div>
		<hr>
		<form action="#" method="POST" id="payment-form">
            <label>Tarjeta de crédito o débito: </label>
            <img src='https://test.progymcloud.com/main/suscripciones/cards2.png' width='90%'><br>
            <br>
			<input type="hidden" name="token_id" id="token_id">
            <div class="control has-icons-left">
            	<input type="text" placeholder="Nombre del propietario" data-openpay-card="holder_name" class="input is-rounded is-primary has-text-centered has-text-primary">
	            <span class="icon is-small is-left has-text-primary">
			      <i class="fas fa-user"></i>
			    </span> 
            </div>
            <br>
            <div class="control has-icons-left">
            	<input type="text" autocomplete="off" data-openpay-card="card_number" class="input is-rounded is-link has-text-centered has-text-link" placeholder="4000 1234 5678 9010 ">
	            <span class="icon is-small is-left has-text-link">
			      <i class="fas fa-credit-card"></i>
			    </span> 
            </div>

            <br>
			
			<input type="text" placeholder="Mes" data-openpay-card="expiration_month" class="input is-rounded is-danger has-text-danger has-text-centered" placeholder="Mes" style="width: 120px; display: inline-block;">
	            
            <input type="text" placeholder="Año" data-openpay-card="expiration_year" class="input is-rounded is-danger has-text-danger has-text-centered" placeholder="Año" style="width: 120px; display: inline-block;">    
            <br><br>

            <input type="text" autocomplete="off" data-openpay-card="cvv2" class="input is-rounded is-info has-text-info has-text-centered" placeholder="CVV" style="width: 120px; display: inline-block;">
            <br><br>

            Transacción realizada vía: <br>
            <img src='https://solicitudesdepago.openpay.mx/wp-content/uploads/2022/03/openpay-color.png' width='22%'>            
        </form>
		<hr>
        <div class="notification is-danger has-text-centered is-hidden" id="notificacion"></div>
        <button class="button is-success is-outlined is-rounded is-fullwidth" id="pay-button">
			<span class="icon is-small" id="icono-button"><i class="fas fa-money-check-alt"></i></span> 
			<span>Realizar cargo</span>
		</button>
	<div>

	<script src="script_pagar.js"></script>
</body>
</html>

