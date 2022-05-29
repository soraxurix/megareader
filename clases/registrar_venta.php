<?php 
include 'conexion.php';
date_default_timezone_set("America/Mexico_City");
$id = $_GET['id'];

$hoy = date('Y-m-d G:i:s');

$consulta = "INSERT into ventas(id_usuario, id_libro, fecha_registro) VALUE (2,$id, '$hoy')";

$result = mysqli_query($conexion, $consulta);

if ($result) {
	echo json_encode("OK");
}else{
	echo json_encode("Error en la consulta");
}
?>