<?php
$server = "localhost";
$user = "id19270473_ecotech";
$pass = "Integrador1.";
$bd = "id19270473_proyectoprueba";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos 1");


$nivel_Agua = $_GET['nivel_Agua'];

echo "Actualizando el nivel del agua con $nivel_Agua";

$sql1 = "UPDATE principal SET valor='$nivel_Agua' WHERE id=7";


if ($conexion->query($sql1) === TRUE) {
    echo "<br>Nivel del agua actualizada correctamente.";
  } else {
    echo "<br>Error updating record: " . $conexion->error;
  }


  $conexion->close();