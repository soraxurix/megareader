<?php 
session_start();

// Agregamos las funciones y la conexion a la base de datos
include 'clases/conexion.php';
include 'clases/encriptacion.php';

// Valdiamos si los daots vienen con informacion
if (isset($_POST['email']) || isset($_POST['pass'])){
 	$email = $_POST['email'];
 	$pass = $_POST['pass'];

 	$pass_ecrypted = getEncryptedPassword($pass); 

 	$consulta = "SELECT id_usuario FROM usuarios WHERE BINARY email = '$email'";
 	$result = mysqli_query($conexion, $consulta);

 	// Verificamos que el correo exista
 	if (mysqli_num_rows($result)===1) {
		
		$consulta = "SELECT id_usuario, username, email FROM usuarios WHERE BINARY pass = '$pass_ecrypted' AND BINARY email = '$email'";
 		$result = mysqli_query($conexion, $consulta);

 		if (mysqli_num_rows($result)===1) {
		 	$array = mysqli_fetch_array($result);

 			$_SESSION['id_user'] = $array['id_usuario'];
 			$_SESSION['name_user'] = $array['username'];
 			$_SESSION['email_user'] = $array['email'];
 			echo json_encode(200);
 		}else{
 			echo json_encode(203);	
 		}

 	}else{
 		echo json_encode(202);
 	}
}else{
	echo json_encode(201);
}

?>