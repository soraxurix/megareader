<?php 
session_start();

// Agregamos las funciones y la conexion a la base de datos
include '../clases/conexion.php';
include '../clases/encriptacion.php';

$name = $_POST['nombre'];	
$email = $_POST['email'];
$pass = $_POST['pass'];	


$consulta = "SELECT id_usuario FROM usuarios WHERE BINARY email = '$email'";
$result = mysqli_query($conexion, $consulta);	

if (mysqli_num_rows($result)==0) {
	$pass_ecrypted = getEncryptedPassword($pass); 

	$consulta = "INSERT into usuarios (username, email, pass, fecha_registro) values ('$name', '$email', '$pass_ecrypted', now());";
	$result = mysqli_query($conexion, $consulta);	
	// echo $consulta;

	$id_user = mysqli_insert_id($conexion) ;

	if ($result) {
		$_SESSION['id_user'] = $id_user;
		$_SESSION['name_user'] = $name;
		$_SESSION['email_user'] = $email;
		echo json_encode(200);
	}else{
		echo json_encode(202);
	}	
}else{
	echo json_encode(201);
}



 ?>