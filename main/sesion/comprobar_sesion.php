<?php 
session_start();
$usuario = $_SESSION['id_user'];
$nombre = $_SESSION['name_user'];
echo "<h1>".$nombre."</h1>";
if(!isset($usuario)){
	header("location: https://megareader.azurewebsites.net/");
}


 ?>