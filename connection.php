<?php

$server = "localhost";
$user = "id19270473_ecotech";
$pass = "Integrador1.";
$bd = "id19270473_proyectoprueba";

//Creamos la conexión
$connection = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos 1");

mysqli_set_charset($connection, "utf8"); //formato de datos utf8