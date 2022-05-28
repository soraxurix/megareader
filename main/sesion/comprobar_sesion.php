<?php 
session_start();
$usuario = $_SESSION['id_user'];

if(!isset($usuario)){
	header("location: https://megareader.azurewebsites.net/");
}


 ?>