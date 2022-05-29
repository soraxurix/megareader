<?php 
session_start();
include '../../clases/conexion.php';
include '../../clases/encriptacion.php';

$usuario = $_SESSION['id_user'];
if (!isset($usuario)) die();

$consulta = "SELECT l.titulo, l.fecha_publicacion, l.editorial, v.fecha_registro,  l.precio from usuarios u inner join ventas v on v.id_usuario = u.id_usuario inner join libros l on l.id_libro = v.id_libro where u.id_usuario = $usuario;";
$result = mysqli_query($conexion, $consulta);

$libros = array();

while ($row = mysqli_fetch_assoc($result)) {
	$libros[] = $row;
}

if (count($libros) == 0) {
	echo 201;
}else{
	echo json_encode($libros);	
}


 ?>