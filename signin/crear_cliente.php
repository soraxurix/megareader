<?php 
session_start();

// Agregamos las funciones y la conexion a la base de datos
include '../clases/conexion.php';
include '../clases/encriptacion.php';

echo $_POST['nombre'];

 ?>