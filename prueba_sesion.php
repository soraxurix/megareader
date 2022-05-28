<?php 
session_start();
$usuario = $_SESSION['id_user'];
$nombre = $_SESSION['name_user'];
echo "<h1>Nombre: ".$nombre."</h1>";

 ?>