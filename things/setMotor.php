<?php
$server = "localhost";
$user = "id19270473_ecotech";
$pass = "Integrador1.";
$bd = "id19270473_proyectoprueba";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos.");


$motor_Encendido = $_GET['motor_Encendido'];

echo "Actualizando si el motor esta encendido con $motor_Encendido";

$sql1 = "UPDATE principal SET valor='$motor_Encendido' WHERE id=9";


if ($conexion->query($sql1) === TRUE) {
    echo "<br>Dato del motor actualizado correctamente.";
  } else {
    echo "<br>Error updating record: " . $conexion->error;
  }


  $conexion->close();