<?php 

$servidor = "sql10.freemysqlhosting.net";
$usuario = "sql10494751";
$password = "6ju1W72rrT";
$db = "sql10494751";

$conexion = mysqli_connect($servidor,$usuario,$password,$db);

if($conexion){
	echo "Se conecto a la base de datos";
}
// Server: sql10.freemysqlhosting.net
// Name: sql10494751
// Username: sql10494751
// Password: 6ju1W72rrT
// Port number: 3306
 ?>