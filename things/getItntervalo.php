<?php
$server = "localhost";
$user = "id19270473_ecotech";
$pass = "Integrador1.";
$bd = "id19270473_proyectoprueba";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos 1");

//generamos la consulta
$sql = "SELECT * FROM principal where id=8";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$arreglo = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
 
    $id=$row['id'];
    $dispositivo=$row['dispositivo'];
    $valor=$row['valor'];


    $arreglo[] = array('id'=> $id, 'dispositivo'=> $dispositivo,'valor'=> $valor);

}

$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos 2");
  

//Creamos el JSON
$json_string = json_encode($arreglo);
echo $json_string;