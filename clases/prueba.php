<?php 
include 'conexion.php';

$id = $_GET['id'];

$consulta = "SELECT * FROM libros WHERE id_libro = $id";
$result = mysqli_query($conexion, $consulta);

$arreglo = mysqli_fetch_assoc($result);
echo json_encode($arreglo);
?>