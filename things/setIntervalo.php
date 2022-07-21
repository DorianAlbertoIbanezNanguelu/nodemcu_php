<?php
$server = "localhost";
$user = "id19270473_ecotech";
$pass = "Integrador1.";
$bd = "id19270473_proyectoprueba";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos 1");


$intervalo_Motor = $_GET['intervalo_Motor'];

echo "Actualizando el intervalo de horas del motor con $intervalo_Motor horas";

$sql1 = "UPDATE principal SET valor='$intervalo_Motor' WHERE id=8";


if ($conexion->query($sql1) === TRUE) {
    echo "<br>Intervalo del motor actualizada correctamente.";
  } else {
    echo "<br>Error updating record: " . $conexion->error;
  }


  $conexion->close();