<?php 
session_start();

// Agregamos las funciones y la conexion a la base de datos
include '../clases/conexion.php';
include '../clases/encriptacion.php';

$name = $_POST['nombre'];	
$email = $_POST['email'];
$pass = $_POST['pass'];	

$pass_ecrypted = getEncryptedPassword($pass); 

$consulta = "INSERT into usuarios (username, email, pass, fecha_registro) values ('$name', '$email', '$pass_ecrypted', now());";
// $result = mysqli_query($conexion, $consulta);	
echo $consulta;



 ?>