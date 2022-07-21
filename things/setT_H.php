<?php
$server = "localhost";
$user = "id19270473_ecotech";
$pass = "Integrador1.";
$bd = "id19270473_proyectoprueba";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos 1");


$temperatura = $_GET['temperatura'];
$humedad = $_GET['humedad'];

echo "Actualizando Temperatura con $temperatura, y humedad con $humedad.";

$sql1 = "UPDATE principal SET valor='$temperatura' WHERE id=3";

$sql2 = "UPDATE principal SET valor='$humedad' WHERE id=4";

if ($conexion->query($sql1) === TRUE) {
    echo "<br>Temperatura actualizada correctamente.";
  } else {
    echo "<br>Error updating record: " . $conexion->error;
  }

if ($conexion->query($sql2) === TRUE) {
    echo "<br>Humedad actualizada correctamente.";
  } else {
    echo "<br>Error updating record: " . $conexion->error;
  }

  $conexion->close();