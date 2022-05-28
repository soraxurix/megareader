<?php 
session_start();
$usuario = $_SESSION['id_user'];

if(!isset($usuario)){
	header("location: https://blue-field-039bdca10.1.azurestaticapps.net/");
}


 ?>