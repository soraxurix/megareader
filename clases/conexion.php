<?php 

$servidor = "sql10.freemysqlhosting.net";
$usuario = "sql10496801";
$password = "Fnj8GYZpdZ";
$db = "sql10496801";

// $servidor = "sql10.freemysqlhosting.net";
// $usuario = "sql10494751";
// $password = "6ju1W72rrT";
// $db = "sql10494751";

$conexion = mysqli_connect($servidor,$usuario,$password,$db);
mysqli_set_charset($conexion, 'utf8');
// if($conexion){
// 	echo "Se conecto a la base de datos";
// }
 ?>