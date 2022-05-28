<?php 
	session_start();
	$usuario = $_SESSION['id_user'];
	$nombre = $_SESSION['name_user'];
	
	if(!isset($usuario)){
		header("location: https://megareader.azurewebsites.net/");
		die();
	}else{
		echo "Se cargaron los datos del usuario<br>";
	}
	echo "<h1>Nombre: ".$nombre."</h1>";

 ?>