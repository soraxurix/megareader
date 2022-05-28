<?php 
session_start();

session_destroy();

header("location: https://megareader.azurewebsites.net/main/");
exit();

?>